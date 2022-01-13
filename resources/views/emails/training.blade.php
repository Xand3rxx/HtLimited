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

@include('emails._mail_footer')

@endcomponent
