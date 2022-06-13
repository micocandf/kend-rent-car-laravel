<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://www.kendrentcar.com/web/images/kendrentcar.png" class="logo" alt="Kend Rent Car Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
