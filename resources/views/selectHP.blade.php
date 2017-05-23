<html>
<head>
<title>Kết quả thi học kỳ</title>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
 <link rel="stylesheet" href="content1.css">
</head>
<form name = "frm" action ="{{url('/scoreboard')}}"  method="get">

		<table border="0" cellspacing="1" cellpadding="2" width="100%" class="tableBorder">
		<tr>
		   <th class="tableHeader">Kết quả thi học kỳ</th>
	   </tr>
	
 <tr>
 <td> 
<Select onchange=submit() name = "lstClass"  size="" ><option value="" > Chọn trong danh sách </option>
	@foreach($classes as $value)
	<option value="{{$value['id']}}">{{$value['name']}}</option>
	@endforeach
	</select>
	</td>
	  </tr>
	  </table>

 </table>
	<table border="0" cellspacing="2" cellpadding="0" width="100%">
	@yield('tableDiem')
</table>
</form>
