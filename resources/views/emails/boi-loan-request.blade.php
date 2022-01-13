@component('mail::message')
# Thank You For Applying!

Dear {{ $loanRequestData['full_name'] }},

Thank you very much for your interest in the {{ $loanRequestData['form_type'] }} loan.

Your documents have arrived safely with us and we will take a look at them as soon as we can.

Once we have assessed your request and wish to consider you for the next stage in our selection process, you will be contacted.

We will be happy to answer any questions you may have regarding the {{ $loanRequestData['form_type'] }} loan.

@include('emails._mail_footer')

@endcomponent
