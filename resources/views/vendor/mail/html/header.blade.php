<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ Voyager::image( setting('site.logo')) }}" class="logo" alt="{{ setting('site.title') }}">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
