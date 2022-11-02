<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        <div class="teksjudul">Pemanfaatan</div>
        <div class="col-md-3 kperizinan">
          <label class="form-label">Kode Perizinan :</label>
          <input type="text" class="form-control" id="kperizinan" name="kperizinan">
        </div>

        <div class="col-md-3 dkecamatan">
          <label class="form-label">Desa dan Kecamatan :</label>
          <input type="text" class="form-control" id="dkecamatan" name="dkecamatan">
        </div>

        <div class="col-md-3 kab">
          <label class="form-label">Kabupaten :</label>
          <input type="text" class="form-control" id="kab" name="kab">
        </div>

        <div class="col-md-3 kel">
          <label class="form-label">Kelurahan :</label>
          <input type="text" class="form-control" id="kel" name="kel">
        </div>

        <div class="col-md-3 sertif">
          <label class="form-label">Sertifikat/Persil :</label>
          <input type="text" class="form-control" id="sertif" name="sertif">
        </div>

        <div class="col-md-3 luas">
          <label class="form-label">Luas :</label>
          <input type="text" class="form-control" id="luas" name="luas">
        </div>

        <div class="col-md-3 uraian">
          <label class="form-label">Uraian :</label>
          <input type="text" class="form-control" id="uraian" name="uraian">
        </div>

        <div class="col-md-3 tmulai">
          <label class="form-label">Tanggal Mulai :</label>
          <input type="date" class="form-control" id="tmulai" name="tmulai">
        </div>

        <div class="col-md-3 takhir">
          <label class="form-label">Tanggal Akhir :</label>
          <input type="date" class="form-control" id="takhir" name="takhir">
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