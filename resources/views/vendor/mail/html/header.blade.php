@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Hummasoft')
<img src="{{asset('assets/hummas.png')}}" class="logo" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
