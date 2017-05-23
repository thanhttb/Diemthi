@extends('selectHP')
@section('tableDiem')
@foreach($scoreboard as $value)
	<tr>
		<td style="TEXT-ALIGN: justify;">
		<LI>
		<a href="{!!$value['link']!!}" class="newslist" target="_blank"><b>{{$value['name']}}</b></a>
		</td>
	</tr>

@endforeach
@endsection

