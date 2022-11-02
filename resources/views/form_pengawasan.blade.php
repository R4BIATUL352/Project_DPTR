<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Poppins', sans-serif;
            text-align: left;
            padding: 0px;
            color: white;
            background-color: #b3c1e6;
        }

        .teksjudul{
            margin-left: 0px;
            font-size: 50px;
        }

        .container .btn{
            padding-left: 0px;
            padding-top: 50px;
        }
    </style>
    
</head>
<body>    
    <form action="/action_page.php" method="post">
      <table border="0" align="center">
      <div class="container">
        <div class="teksjudul">Pengawasan</div>
        <div class="col-md-3 nsertifikat">
          <label class="form-label">Nomor Sertifikat :</label>
          <input type="text" class="form-control" id="nsertifikat" name="nsertifikat">
        </div>

        <div class="col-md-3 kab">
          <label class="form-label">Kabupaten :</label>
          <input type="text" class="form-control" id="kab" name="kab">
        </div>

        <div class="col-md-3 kapanewon">
          <label class="form-label">Kapanewon :</label>
          <input type="text" class="form-control" id="kapanewon" name="kapanewon">
        </div>

        <div class="col-md-3 npk">
          <label class="form-label">Nomor Keputusan Gub :</label>
          <input type="text" class="form-control" id="npk" name="npk">
        </div>

        <div class="col-md-3 tgl">
            <label class="form-label">Tanggal :</label>
            <input type="date" class="form-control" id="tgl" name="tgl">
          </div>

        <div class="col-md-3 bmanfaat">
          <label class="form-label">Bentuk Pemanfaatan :</label>
          <input type="text" class="form-control" id="bmanfaat" name="bmanfaat">
        </div>

        <div class="col-md-3 penglola">
          <label class="form-label">Pengelola :</label>
          <input type="text" class="form-control" id="pengelola" name="pengelola">
        </div>

        <div class="col-md-3 uraian">
          <label class="form-label">Uraian :</label>
          <input type="text" class="form-control" id="uraian" name="uraian">
        </div>

        <div class="col-md-3 lmanfaat">
            <label class="form-label">Luas Pemanfaatan (m2) :</label>
            <input type="text" class="form-control" id="lmanfaat" name="lmanfaat">
        </div>

        <div class="col-md-3 jmlbid">
            <label class="form-label">Jumlah Bidang yang Digunakan :</label>
            <input type="text" class="form-control" id="jmlbid" name="jmlbid">
        </div>

        <div class="col-md-3 pklas">
            <label class="form-label">Persil Klas :</label>
            <input type="text" class="form-control" id="pklas" name="pklas">
        </div>

        <div class="col-md-3 lkp">
            <label class="form-label">Luas Keseluruhan Persil/Sertifikat :</label>
            <input type="text" class="form-control" id="lkp" name="lkp">
        </div>

        <div class="col-md-3 lok">
            <label class="form-label">Lokasi :</label>
            <input type="text" class="form-control" id="lok" name="lok">
        </div>

        <div class="col-md-3 koor">
            <label class="form-label">Koordinat :</label>
            <input type="text" class="form-control" id="koor" name="koor">
        </div>

        <div class="col-md-3 jw">
            <label class="form-label">Jangka Waktu :</label>
            <input type="text" class="form-control" id="jw" name="jw">
        </div>

        <div class="col-md-3 js">
            <label class="form-label">Jenis SK :</label>
            <input type="text" class="form-control" id="js" name="js">
        </div>

        <div class="col-md-3 tlsk">
            <label class="form-label">Tindak Lanjut SK :</label>
            <input type="text" class="form-control" id="tlsk" name="tlsk">
        </div>

        <div class="col-md-3 sesuai">
            <label class="form-label">Kesesuaian :</label>
            <input type="text" class="form-control" id="sesuai" name="sesuai">
        </div>

      <div class="btn">
        <button type="submit" class="btn-submit" style="background-color: #514d81";>Submit</button>
        <button type="reset" class="btn-batal" style="background-color: #514d81";>Batal</button>
      </div>
      </div>
      </table>
      </form>
</body>
</html>