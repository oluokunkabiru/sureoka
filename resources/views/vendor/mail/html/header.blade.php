<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<<<<<<< HEAD
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
=======
<img src="{{ Voyager::image( setting('site.logo')) }}" class="logo" alt="{{ setting('site.title') }}">
>>>>>>> master
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
