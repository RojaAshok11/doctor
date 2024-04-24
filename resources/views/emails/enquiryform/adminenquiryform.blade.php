<x-mail::message>
# New Contact Us form filled at Medical Professionals.

**Full Name:** {{ $data['fullname'] }}
**Email:** {{ $data['email'] }}
**Phone Number:** {{ $data['phonenumber'] }}  <br>

**Message:**
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
