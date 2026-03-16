@component('mail::message')
# New Contact Form Submission

You have received a new message from your portfolio website.

**Name:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
**Subject:** {{ $contact->subject ?? 'N/A' }}  

**Message:**  
{{ $contact->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
