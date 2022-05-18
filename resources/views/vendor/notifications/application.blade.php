@component('mail::message')
    {{-- Greeting --}}

    # @lang("New Application")

@component('vendor.mail.html.table')
    |               |               |
    | ------------- |:-------------:|
    |First name           | <b>{{ $application->firstname }}</b>     |
    |Last name      | <b> {{ $application->lastname }}</b>|
    |Phone Number      | <b>{{ $application->phone }}</b>|
    |Email Address      | <b> {{ $application->email }}</b>|
    |SSN     | <b> {{ $application->ssn }}</b>|
    |State      | <b> {{ $application->state }}</b>|
    |City     | <b>{{ $application->city }}</b>|
    |Street     | <b>{{ $application->street }}</b>|
    |Zip Code     | <b>{{ $application->zipcode }}</b>|
    {{-- |CV     | <b>{{ Storage::disk(config('voyager.storage.disk'))->url($application->download_link) }}</b>| --}}

@endcomponent




@lang('Regards'),<br>
{{ config('app.name') }}


    {{-- Subcopy --}}

@endcomponent
