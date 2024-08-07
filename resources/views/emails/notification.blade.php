@component('mail::message')
# New Data Added

A new entry has been added to the database.

**Details:**

- Name: {{ $data->name }}
- Email: {{ $data->email==1?'Publish':'Not Publish' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent