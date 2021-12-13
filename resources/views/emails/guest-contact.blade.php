@component('mail::message')
Hello {{ $data['full_name'] }},

Thanks for reaching out to us. We appreciate your interest in our business. This is to confirm that we’ve successfully received your request for {{ $data['subject'] }}.

## Here is the requested information:
## Subject:  {{ $data['subject'] }}<br>
{{-- ## Phone Number:  {{ $date['phone_number'] }}<br> --}}
## Your Message:  {{ $data['message'] }}<br>

If you need immediate assistance or have any further questions, feel free to call us with the number below.<br>

Sincerely,<br>
{{ config('site-settings.site_title') }}
<br><br>
{{ config('site-settings.site_address') }}
{{ config('site-settings.site_phone_number') }} | {{ config('site-settings.email') }}
<br>
<img src="https://ht-limitedng.net/wp-content/uploads/2015/04/resized.png" width="90" alt="HT Limited Logo">
@endcomponent
