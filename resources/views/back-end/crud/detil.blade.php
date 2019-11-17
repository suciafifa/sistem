<html>
<head>
 <title>detil</title>
</head>
<body>
	<table>
		<tr>
			<th>Id User</th>
			<td>:</td>
			<td>{{$data->id}}</td>
		</tr>
		<tr>
			<th>username</th>
			<td>:</td>
			<td>{{$data->username}}</td>
		</tr>
		<tr>
			<th>email</th>
			<td>:</td>
			<td>{{$data->email}}</td>
		</tr>
		<tr>
			<th>created at</th>
			<td>:</td>
			<td>{{$data->created_at}}</td>
		</tr>
		<tr>
			<th>updated at</th>
			<td>:</td>
			<td>{{$data->updated_at}}</td>
		</tr>
		<form><td><button><a href="{{url('user/'.$data->id.'/edit')}}">Edit</a></button></td></form>
 	</table>
</body>
</html>