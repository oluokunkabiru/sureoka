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
    |SSN     | <b> {{ $application->ssn[0].$application->ssn[1].$application->ssn[2].'-'.$application->ssn[3].$application->ssn[4].'-'.$application->ssn[5].$application->ssn[6].$application->ssn[7].$application->ssn[8] }}</b>|
    |State      | <b> {{ $application->state }}</b>|
    |City     | <b>{{ $application->city }}</b>|
    |Street     | <b>{{ $application->street }}</b>|
    |Zip Code     | <b>{{ $application->zipcode }}</b>|
    |Application    | <b>{{ $job->title }}</b>|

@endcomponent




@lang('Regards'),<br>
{{ config('app.name') }}


    {{-- Subcopy --}}

@endcomponent
