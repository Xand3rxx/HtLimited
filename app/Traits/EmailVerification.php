<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsers;

trait EmailVerification
{
    // use RedirectsUsers, RedirectAuthenticatedUsers;

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('auth.verify', ['email' => $request->user()->email]);
    }
    
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function verify(Request $request)
    {
        $user = \App\Models\User::where('uuid', $request->route('id'))->first();

        if (!hash_equals((string) $request->route('hash'), sha1($user->email))) {
            return response()->json([
                'error' => 'Sorry! Your email does not exist on our database.',
            ], 404);
        }

        if(!empty($user->email_verified_at)){
            return response()->json([
                'error' => 'Your email address has already been verified.',
            ], 403);
        }

        return ($user->markEmailAsVerified())
        ? response()->json([
                'message' => 'Email address was successfully verified!',
        ], 200)
        : response()->json([
            'error' => 'Sorry! Your email address could not be verified',
        ], 422);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect($this->redirectPath());
        }

        $this->sendVerificationEmail($request->user()->account);
        // $request->user()->sendEmailVerificationNotification();

        return $request->wantsJson()
            ? new JsonResponse([], 202)
            : back()->with('status', 'Verification Email Sent');
    }
}
