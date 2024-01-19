@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Graha Wijaya Land')
<img src="https://grahawijayaland.com/storage/img/logos.png" class="logo" alt="Logo Graha Wijaya Land">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
