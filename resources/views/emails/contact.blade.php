@component('mail::message')
Dear Team,

We write to inform you that {{ $data['full_name'] }} contacted {{ config('site-settings.site_title') }}. Please see more details of the request below.

## Contact Details
## Email:  {{ $data['email'] }}<br>
{{-- ## Phone Number:  {{ $date['phone_number'] }}<br> --}}
## Subject:  {{ $data['subject'] }}<br>
## Message:  {{ $data['message'] }}<br><br>


Thanks,<br>
{{ config('site-settings.site_title') }}
<br><br>
{{ config('site-settings.site_address') }}
{{ config('site-settings.site_phone_number') }} | {{ config('site-settings.email') }}
<br>
<img src="https://ht-limitedng.net/wp-content/uploads/2015/04/resized.png" width="90" alt="HT Limited Logo">
@endcomponent
