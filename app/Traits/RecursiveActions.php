<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

trait RecursiveActions
{
    /**
     * Deactive any type of user role.
     *
     * @param  string $uuid
     * @return bool true|false
     */
    public function deactivateUser(string $uuid)
    {
        //Verify if uuid of Administrator exist and deactivate using `softDeletes` injected to User model
        return (User::where('uuid', $uuid)->firstOrFail()->delete());
    }

    /**
     * Reinstate any type user role.
     *
     * @param  string $uuid
     * @return bool true|false
     */
    public function reinstateUser(string $uuid)
    {
        //Verify if uuid of Administrator exist and reinstate by setting `deleted_at` column to NULL
        return (User::where('uuid', $uuid)->withTrashed()->firstOrFail()->restore());
    }

    /**
     * Reinstate any type user role.
     *
     * @param  string $uuid
     * @return bool true|false
     */
    public function permanentlyDeleteUser(string $uuid)
    {
        //Verify if uuid of Administrator exist and forcefully deleting that user
        return (User::where('uuid', $uuid)->firstOrFail()->forceDelete());
    }

    /**
     * Update Administrator profile information.
     *
     * @param  object $user,
     * @param  object $request
     * @return bool  $updateAdministrator
     */
    public function updateAdministratorProfile(object $user, object $request)
    {
        //Validate user request fields
        (array) $validate = $request->validate([
            'name'      =>  'bail|required|string',
            'avatar'    =>  'bail|sometimes|mimes:jpg,png,jpeg,gif,svg|max:256',
        ]);

        //Check if image was uploaded on create
        if ($image = $request->file('avatar')) {
            //Generate unique string as name appended to the image extension
            $profileAvatar = Str::uuid().'-avatar.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/profile-avatars'), $profileAvatar);

            //Delete old image
            $oldAvatar = $request->user()->avatar;

            if(File::exists(public_path('img/profile-avatars/'.$oldAvatar)))
            {
                File::delete(public_path('img/profile-avatars/'.$oldAvatar));
            }

        }else{
            $profileAvatar = $request->user()->avatar;
        }

        //Set `updateAdministrator` to false before Db transaction
        (bool) $updateAdministrator  = false;

        DB::transaction(function () use ($user, $profileAvatar, $validate, &$updateAdministrator) {
            $user->update([
                'name'      => $validate['name'],
                'avatar'    => $profileAvatar
            ]);

            $updateAdministrator  = true;
        }, 3);

        return $updateAdministrator;
    }
}
