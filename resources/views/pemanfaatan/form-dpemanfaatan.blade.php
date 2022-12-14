@extends('layout.main')
@section('content')
<div class="wrapper">

  <!-- Navbar -->
 {{-- @include('tamplate.navbar') --}}
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 {{-- @include('tamplate.sidebar') --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
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
                <h3>Input Data</h3>

            </div>

            <div class="card-body">
                <form action="{{ route('simpan-dpemanfaatan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="id" name="id" class="form-control @error('id') is-invalid @enderror" placeholder="id">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control" placeholder="kode perizinan">
                    </div>
                    <div class="form-group">
                        <input type="text" id="desa-kecamatan" name="desa_kecamatan" class="form-control" placeholder="Desa/Kemacatan">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kabupaten" name="kabupaten" class="form-control" placeholder="kabupaten">
                    </div>
                    <div class="form-group">
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="kelurahan">
                    </div>
                    <div class="form-group">
                      <input type="text" id="persil" name="persil" class="form-control" placeholder="sertifikat/persil">
                     </div>
                    <div class="form-group">
                        <input type="text" id="luas" name="luas" class="form-control" placeholder="luas">
                    </div>
                    <div class="form-group">
                        <input type="text" id="uraian" name="uraian" class="form-control" placeholder="uraian">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="tanggal-mulai">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" placeholder="tanggal-akhir">
                    </div>
                    <div class="form-group">
                      <label for="files" class="form-label mt-4">Upload SK Images :</label>
                      {{-- <input type="file" id="file_SK" name="file_SK" class="form-control"> --}}
                      {{-- <input type="file" id="file_SK" name="file_SK[]" class="form-control" accept="image/*" multiple> --}}
                      <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="file_SK[]" multiple>
                  </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    @include('tamplate.footer')
   </footer>
</div> --}}
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{-- @include('tamplate.script') --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
