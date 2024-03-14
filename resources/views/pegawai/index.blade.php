@extends('layouts.index')


@section('content')

</br>
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p></br>
@endif
    <a class="btn btn-info" href="{{ url('pegawai/create') }}"><span data-feather="plus-square"></span>Tambah</a>
</br></br>

    <form method="GET" action="{{ url('pegawai') }}">
        <input type="text" name="keyword" value="{{ $keyword }}">
        <button type="submit">Search</button>
    </form>
</br>
    <table class="table-striped table-bordered table">
        <tr class="text-center">
            <th>Foto Profile</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Gelar</th>
            <th>NIP</th>
            <th colspan="2">AKSI</th>
        </tr>
        @foreach($datas as $key=>$value)
        <tr>
            <td>
                @if(strlen($value->foto_profile)>0)
                <center>
                <img src=" {{ asset('foto/'.$value->foto_profile) }}" alt="" style="width: 90px; height= 10px; ">
                </center>
                @endif
            </td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->tgllhr }}</td>
            <td>{{ $value->gelar }}</td>
            <td>{{ $value->nip }}</td>
            <td>
                <a class="btn btn-warning" href="{{ url('pegawai/'.$value->id.'/edit') }}"><span data-feather="edit"></span>Edit</a></td>
            <td>
                <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit"><span data-feather="trash-2" style="font-size: 30px;"></span>Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
{{ $datas->links() }}
@endsection