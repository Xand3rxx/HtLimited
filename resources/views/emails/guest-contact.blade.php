@component('mail::message')
Hello {{ $data['full_name'] }},

Thanks for reaching out to us. We appreciate your interest in our business. This is to confirm that we’ve successfully received your request for {{ $data['subject'] }}.

## Here is the requested information:
## Subject:  {{ $data['subject'] }}<br>
{{-- ## Phone Number:  {{ $date['phone_number'] }}<br> --}}
## Your Message:  {{ $data['message'] }}<br>

If you need immediate assistance or have any further questions, feel free to call us with the number below.<br>

@include('emails._mail_footer')

@endcomponent
