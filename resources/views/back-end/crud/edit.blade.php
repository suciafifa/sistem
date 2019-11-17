<html>
<head>
 <title>edit</title>
</head>
<body>
	<form method="post"  action="{{ route('user.update', $data->id)}}">
		{{method_field('PUT')}}
		{{csrf_field()}}
	<table>
		
		<tr>
			<th>username</th>
			<td>:</td>
			<td><input type="text" class="form-control" name="username" placeholder="Username" value="{{$data->username}}"></td>
		</tr>
		<tr>
			<th>email</th>
			<td>:</td>
			<td><input type="text" class="form-control" name="email"placeholder="email" value={{"$data->email"}}></td>
		</tr>
		<tr>
			<th>password</th>
			<td>:</td>
			<td><input type="text" class="form-control" name="password"  value="{{$data->password}}"></td>
		</tr>
		<td><input type="submit" value="simpan"></td>
 	</table>
 </form>
</body>
</html>