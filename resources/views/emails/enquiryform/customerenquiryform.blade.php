<!-- resources/views/emails/contact-form.blade.php -->

@component('mail::message')
# We noted your Patients Details submission.

{{-- <x-mail::button :url="URL('/')">
Button Text
</x-mail::button>@component('mail::message') --}}
# Thank you for choosing Medical Professionals.<br>
We look forward to the opportunity to serve you.

<x-mail::button :url="URL('/')">
Visit our Website
</x-mail::button>



# Thank you !<br>
{{ config('app.name') }}


@endcomponent


# Thank you !
Your message as be Successfully Submitted.



{{-- @endcomponent    --}}
