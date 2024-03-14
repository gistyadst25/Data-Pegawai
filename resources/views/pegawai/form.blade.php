<center><h1>Data Pegawai</h1></center>
</br>
<div class="row clearfix">
        <div class="col-md-6">Nama</div>

        <div class="col-md-6">
            <input class="form-control" type="text" name="nama" value="{{ $model->nama}}">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">Alamat</div>

        <div class="col-md-6">
            <input class="form-control" type="text" name="alamat" value="{{ $model->alamat}}">
            @foreach($errors->get('alamat') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">Tanggal Lahir</div>

        <div class="col-md-6">
            <input class="form-control" type="text" name="tgllhr" value="{{ $model->tgllhr}}">
            @foreach($errors->get('tgllhr') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">Gelar</div>

        <div class="col-md-6">
           
                    <select class="form-control" type="text" name="gelar" value="{{ $model->gelar }}">
                        <option value="{{ $model->gelar }}">{{ $model->gelar }}</option>
                        <option value="S.Si">S.Si</option>
                        <option value="S.T">S.T</option>
                        <option value="S.E">S.E</option>
                        <option value="S.Kom">S.Kom</option>
                    </select>
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">NIP</div>

        <div class="col-md-6">
            <input class="form-control" type="text" name="nip" value="{{ $model->nip }}">
            @foreach($errors->get('nip') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

    </div>

    <div class="row clearfix">
        <div class="col-md-6">Foto Profile</div>

        <div class="col-md-6">
            <input class="form-control" type="file" name="foto_profile">
            @foreach($errors->get('foto_profile') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            @if(strlen($model->foto_profile) > 0)
</br>
                <img src="{{ asset('foto/'.$model->foto_profile) }}" alt="" style="width: 100px; height: 100px;">
            @endif
        </div>

    </div>

<!-- 
@if(isset($model))


<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#form-riwayat">
  Tambah Riwayat Pendidikan
</button>

    <br><br>
    <table class="table table-striped table-bordered">
        <tr class="text-center">
            <th>Nama Pendidikan</th>
            <th>Periode Pendidikan</th>
            <th colspan="2">Aksi</th>
        </tr>
    
        @foreach($riwayat_pendidikan as $riwayat)
            <tr>
                <td>{{ $riwayat->nama_pendidikan }}</td>
                <td>{{ $riwayat->periode_pendidikan }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('pegawai/'.$riwayat->id.'/edit') }}"><span data-feather="edit"></span>Edit</a>
                </td>
                <td>
                    <form action="{{ url('pegawai/'.$riwayat->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit"><span data-feather="trash-2" style="font-size: 20px;"></span>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


<!-- Modal -->
<!-- <div class="modal fade" id="form-riwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="{{ url('pegawai/'.$model->id) }}" enctype="multipart/form-data">
        @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Riwayat Pendidikan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div> -->
        <!-- <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-6">Nama Pendidikan</div>
                    <div class="col-md-6">
                        <input class="form-control" type="text" id="nama_pendidikan" name="nama_pendidikan">
                    </div>

                </div>

                <div class="row clearfix">
                    <div class="col-md-6">Periode Pendidikan</div>

                    <div class="col-md-6">
                        <input class="form-control" type="text" id="periode_pendidikan" name="periode_pendidikan">
                    </div>

                </div>
        <!-- </div> -->
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div> -->
    <!-- </div>
    </form>
</div>  -->
    
<!-- @endif -->

    <button type="submit" class="btn btn-success">Simpan</button>