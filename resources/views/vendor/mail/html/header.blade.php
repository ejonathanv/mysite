@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
Páginas web por Jonathan Velazquez
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
