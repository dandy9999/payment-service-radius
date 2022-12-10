<div class="container">
   <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="jumbotron mt-4 text-center">
      <h1 class="display-4">Selamat Pembelian kamu berhasil!</h1>
      <div class="card">
          <div class="card-body">
              <h5 class="card-title text-center">Paket <?php if($data['id']=='1d') echo "Harian"; if($data['id']=='3d') echo "3 Harian"; if($data['id']=='7d') echo "Mingguan"; if($data['id']=='30d') echo "Bulanan"; ?></h5>
          </div>
          <ul class="list-group list-group-flush">
              <li class="list-group-item font-weight-bold text-center">Username : <?= $data['username']; ?></li>
              <li class="list-group-item font-weight-bold text-center">Password : <?= $data['password']; ?></li>
          </ul>
      </div>
      <hr class="my-4">
      <p>Simpan Username dan Password kamu dengan baik, Untuk login ke akun kamu silahkan klik tombol dibawah ini.</p>
      <a class="btn btn-primary btn-sm" href="http://wifi.hotspot.local/" role="button">Login disini!</a>
    </div>


</div>