@component('mail::message')
# Thank You For Applying!

Dear {{ $data['full_name'] }},

Thank you for registering for this training.

# Your Details

## Business Name: {{ $data['business_name'] }}
## Location: {{ $data['location'] }}
## Email: {{ $data['email'] }}
## Phone Number: {{ $data['phone_number'] }}
## Expectation: {{ $data['expectation'] }}

Please, consider this as an acceptance email. If you have any questions contact us with this link
<a href="mailto:{{ config('site-settings.email') }}">{{ config('site-settings.email') }}</a>

We look forward to seeing you at the training.

Sincerely,<br>
{{ config('site-settings.site_title') }}
<br><br>
{{ config('site-settings.site_address') }}
{{ config('site-settings.site_phone_number') }} | {{ config('site-settings.email') }}
<br>
<img src="https://ht-limitedng.net/wp-content/uploads/2015/04/resized.png" width="90" alt="HT Limited Logo">
@endcomponent
