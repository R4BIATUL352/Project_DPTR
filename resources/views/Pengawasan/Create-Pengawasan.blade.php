@extends('layout.main')
@section('content')
        <div class="card-body">
          <form action="{{ route('simpan-Pengawasan') }}" method="POST">
            {{ csrf_field() }}
                    {{-- <div class="form-group">
                      <label>ID:</label>
                      <input type="text" id="id" name ="id" class="form-control">
                    </div> --}}
                    <div class="form-group">
                      <label>Kabupaten:</label>
                      <input type="text" id="kabupaten" name="kabupaten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kapanewon:</label>
                        <input type="text" id ="kapanewon" name="kapanewon" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Kalurahan:</label>
                        <input type="text" id ="kelurahan" name="kelurahan" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Tahun Pengawasan:</label>
                        <input type="text" id="tahun_pengawasan" name="tahun_pengawasan" class="form-control"  />
                    </div>
                    <div class="form-group">
                        <label>Nomor SK	:</label>
                        <input type="text" id="nomor_sk" name="nomor_sk" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal SK:</label>
                        <input type="date" id="tanggal_sk" name="tanggal_sk" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Bentuk Pemanfaatan	:</label>
                        <input type="text" id="bentuk_pemanfaatan" name="bentuk_pemanfaatan" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Pengelola:</label>
                        <input type="text" id="pengelola" name="pengelola" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Persil Klas:</label>
                        <input type="text" id="persil_klas" name="persil_klas" class="form-control" />
                    </div>
                  <div class="form-group">
                    <label>Nomor Sertifikat:</label>
                    <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Luas Pemanfaatan:</label>
                    <input type="text" id="luas_pemanfaatan" name="luas_pemanfaatan" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Luas Keseluruhan:</label>
                    <input type="text" id="luas_keseluruhan" name="luas_keseluruhan" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Jumlah Bidang	:</label>
                    <input type="text" id="jumlah_bidang" name="jumlah_bidang" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Lokasi:</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Koordinat:</label>
                    <input type="text" id="koordinat" name="koordinat" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Jangka Waktu:</label>
                    <input type="text" id="jktwaktu" name="jktwaktu" class="form-control" />
                  <div>
                  <div class="form-group">
                    <label>Jenis Sk:</label>
                    <input type="text" id="jenis_sk" name="jenis_sk" class="form-control" />
                  <div>
                  <div class="form-group">
                    <label>Tinda Lanjut:</label>
                    <input type="text" id="tdklanjut" name="tdklanjut" class="form-control" />
                  <div>
                  <div class="form-group">
                      <label>Kesesuaian:</label>
                      <input type="text" id="kesesuaian" name="kesesuaian" class="form-control" />
                  <div>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                  </div>
        
                </form>
            </div>
        </div>
@endsection