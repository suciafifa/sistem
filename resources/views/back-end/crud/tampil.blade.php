<html>
<head>
 <title>Lihat Data</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Id User</td>
			<td>username</td>
			<td>Email</td>
			<td>Aksi</td>
		</tr>
		@php $no=1; @endphp
		@if($data->count()>0)
		@foreach($data as $d)
		<tr>
			<td>{{$d->id}}</td>
			<td>{{$d->username}}</td>
			<td>{{$d->email}}</td>
			<td><a href="{{url('user/'.$d->id)}}">Detil</a>| 
				<a href="{{url('user/'.$d->id.'/edit')}}">Edit</a>| 
				<a href="{{url('delete/'.$d->id)}}">Hapus</a>
				
		</tr>
	 @endforeach
	 @else
	 <tr colspan="4"><td>data tidak ada</td></tr>
	 @endif
	</table>
 
</body>
</html>