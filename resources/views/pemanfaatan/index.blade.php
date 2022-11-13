@extends('layout.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pemanfaatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline ">
            <div class="card-header">
                <div class="card-tools">
                    <a href="{{ route('form-dpemanfaatan') }}" class="btn btn-success">Tambah Data <i class="fa fa-plus-square"></i></a>
                </div>
            </div>

            <div class="card-body">
              <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Perizinan</th>
                            <th>Desa Kecamatan</th>
                            <th>Kabupaten</th>
                            <th>Kalurahan</th>
                            <th>Luas</th>
                            <th>Uraian</th>
                            <th>sertifikat</th>
                            <th>Tanggal Mlai</th>
                            <th>Tanggal Akhir</th>
                            <th>File SK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                      @foreach ($dtpemanfaatan as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kode_perizinan }}</td>
                            <td>{{ $item->desa_kecamatan }}</td>
                            <td>{{ $item->kabupaten }}</td>
                            <td>{{ $item->kelurahan }}</td>
                            <td>{{ $item->persil }}</td>
                            <td>{{ $item->luas }}</td>
                            <td>{{ $item->uraian }}</td>
                            <td>{{ $item->tanggal_mulai }}</td>
                            <td>{{ $item->tanggal_akhir }}</td>
                            {{-- <td><img width="150px" src="{{ url('') }}" alt=""></td> --}}
                            {{-- <td>{{ $item->file_SK }}</td> --}}
                            <td><img src="cover/{{ $item->file_SK }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                            <td>
                              <a href="{{ url('edit-pemanfaatan',$item->id) }}"><i class="fas fa-edit"></i></a> |
                              <a href="{{ url('hapus-pemanfaatan',$item->id) }}"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" ><i class="fas fa-trash-alt bg-dancer"></i></a>
                              @csrf
                            </td>
                          </tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    <!-- /.content -->
  </div>
@endsection