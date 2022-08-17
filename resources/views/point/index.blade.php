<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINTS</title>
</head>
<body>
    <a href="{{url('/admin/points/create')}}"> + tambah Data baru</a>
    <br/>
    <br/>

    <table border="1">
    <tr>
        <th>Admin yang menambah</th>
        <th>Mahasiswa</th>
        <th>FILE</th>
        <th>Tipe Point</th>
        <th>POINT</th>
    </tr>
    @foreach($points as $p)
    <tr>
        <td>{{$p->admin->name}}</td>
        <td>{{$p->user->name}}</td>
        {{--  TODO: tampilkan pdf --}}
        <td><a href="{{asset('storage/'.$p->file)}}">{{$p->user->name}}</a></td>
        <td>{{$p->type_point->name}}</td>
        <td>{{$p->point}}</td>
        <td>
        <a href="{{ route('points.edit',$p->id) }}">EDIT</a>
        <form action="{{route('points.destroy',$p->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" onclick="return confirm('yakin ingin menghapus point ini?')">
        </form>
        </td>
    </tr>
    @endforeach
    </table>
{{$points->links()}}
</body>
</html>