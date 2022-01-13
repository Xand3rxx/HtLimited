@component('mail::message')
Dear Team,

We write to inform you that {{ $data['full_name'] }} contacted {{ config('site-settings.site_title') }}. Please see more details of the request below.

## Contact Details
<strong>Email:</strong>  {{ $data['email'] }}<br>
<strong>Subject:</strong>  {{ $data['subject'] }}<br>
<strong>Message:</strong>  {{ $data['message'] }}<br><br>

@include('emails._mail_footer')

@endcomponent
