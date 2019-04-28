<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register KKN</title>
</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Register KKN</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <form action="<?php echo base_url('register') ?>" method="POST">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleFirstName">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama lengkap" name="name" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>


          <div class="form-group">
            <label for="examplePassword">Password</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="examplePassword">Password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="konfirmasi Password" required>
          </div>


          <div class="form-group">
            <label for="exampleNumber">Phone Number</label>
            <input type="text" class="form-control" id="exampleNumber" placeholder="Phone Number" name="phoneNumber">
          </div>

          <div class="form-group">
            <label for="exampleAddress">Address</label>
            <textarea class="form-control" id="exampleAddress" rows="5" placeholder="Address" name="address"></textarea>
          </div>

          <div class="form-group">
            <label>Jurusan Prodi</label>
            <select class="form-control">
              <option>Arsitektur Lanskap</option>
              <option>Biologi</option>
              <option>Desain Komunikasi Visual</option>
              <option>Farmasi</option>
              <option>Fisika</option>
              <option>Kimia</option>
              <option>Matematika</option>
              <option>Perencanaan Wilayan dan Kota</option>
              <option>Rekayasa Kehutanan</option>
              <option>Sains Aktuaria</option>
              <option>Sains Atmosfer dan Keplanetan</option>
              <option>Teknik Arsitektur</option>
              <option>Teknik Aktuaria</option>
              <option>Teknik Bio Sistem</option>
              <option>Teknik Elektro</option>
              <option>Teknik Fisika</option>
              <option>Teknik Geofisika</option>
              <option>Teknik Geologi</option>
              <option>Teknik Geomatika</option>
              <option>Teknik Industri</option>
              <option>Teknik Industri Pertanian</option>
              <option>Teknik Informatika</option>
              <option>Teknik Kelautan</option>
              <option>Teknik Lingkungan</option>
              <option>Teknik Material</option>
              <option>Teknik Mesin</option>
              <option>Teknik Pangan</option>
              <option>Teknik Pertambangan</option>
              <option>Teknik Sipil</option>
              <option>Teknik Sistem Energi</option>
              <option>Teknik Telekomunikasi</option>
            </select>
          </div>

          <div class="form-group">
            <label>Gender</label>
            <br />
            <div class="radio-inline">
              <label>
                <input type="radio" name="gender" id="genderRadios1" value="male" checked> Male
              </label>
            </div>
            <div class="radio-inline">
              <label>
                <input type="radio" name="gender" id="genderRadios2" value="female"> Female
              </label>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleBirthDate">Birth Date</label>
            <input type="date" class="form-control" id="exampleBirthDate" name="birthDate">
          </div>

          <div class="form-group">
            <label for="exampleEssay">Essay</label>
            <textarea class="form-control" id="exampleEssay" rows="5" placeholder="Essay" name="Essay"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleNumber">jaminan kesehatan</label>
            <input type="text" class="form-control" id="exampleNumber" placeholder="Phone Number" name="phoneNumber">
          </div>

          <div class="form-group">
            <label for="examplePhoto">Surat Keterangan Kesehatan</label>
            <input type="file" id="examplePhoto" name="picture">
            <p class="help-block">Example block-level help text here.</p>
          </div>

          <div class="form-group">
            <label for="examplePhoto">Surat Sertifikasi TPB</label>
            <input type="file" id="examplePhoto" name="picture">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="form-group">
            <label for="examplePhoto">Surat Persetujuan dan Kesiapan</label>
            <input type="file" id="examplePhoto" name="picture">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <br>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Kirim">

            <!-- alternative -->
            <!-- <button type="submit"class="btn btn-default">Kirim</button> -->
          </div>
        </form>

      </div>
    </div>
  </div>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>