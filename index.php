<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Balok Sederhana</title>
    <link rel="stylesheet" href="css/master.css"/>
  </head>
  <body>
      <div class="konten">
          <h2>MENGHITUNG BALOK</h2>
          <div class="hitung">
              <form action="index.php" method="post">
                  <div class="nama_inp">
                      PANJANG
                  </div>
                  <br>
                  <input class="kotak" type="number" name="panjang" min="1" placeholder="Panjang" required>
                  <br><br>
                  <div class="nama_inp">
                      LEBAR
                  </div>
                  <br>
                  <input class="kotak" type="number" name="lebar" min="1" placeholder="Lebar" required>
                  <br><br>
                  <div class="nama_inp">
                      TINGGI
                  </div>
                  <br>
                  <input class="kotak" type="number" name="tinggi" min="1" placeholder="Tinggi" required>
                  <br>
                  <button type="submit" name="hitung" >HITUNG</button>
              </form>
          </div>
          <div class="hasil">
              <div class="tampilan">
                  <?php
                      require ('filehitungnya.php');
                   ?>
              </div>
          </div>

      </div>
  </body>
</html>
