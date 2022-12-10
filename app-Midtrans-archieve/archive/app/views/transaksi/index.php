<div class="container">
<div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
  </div>
    <div class="jumbotron mt-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Paket Harian</h5>
                        <p class="card-text">Paket ini berdurasi 1 hari. Kalian bisa menggunakan wifi kami selama 24 Jam setelah kalian membeli paket ini.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Berdurasi 24 Jam</li>
                        <li class="list-group-item">Untuk 1 device</li>
                        <li class="list-group-item">Unlimited Quota</li>
                        <li class="list-group-item">Speed Up to 40Mbps</li>
                        <li class="list-group-item font-weight-bold text-center">Rp. 2.500</li>
                    </ul>
                    <div class="card-body text-center">
                        <form action="<?= BASEURL; ?>/transaksi/checkout/" method="POST">
                            <input type="hidden" name="packet" value="1d"/>
                            <input type="submit" class="btn btn-success btn-sm" value="Beli Paket">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Paket 3 Harian</h5>
                        <p class="card-text">Paket ini berdurasi 3 hari. Kalian bisa menggunakan wifi kami selama 3 Hari setelah kalian membeli paket ini.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Berdurasi 3 Hari</li>
                        <li class="list-group-item">Untuk 1 device</li>
                        <li class="list-group-item">Unlimited Quota</li>
                        <li class="list-group-item">Speed Up to 40Mbps</li>
                        <li class="list-group-item font-weight-bold text-center">Rp. 5.000</li>
                    </ul>
                    <div class="card-body text-center">
                        <form action="<?= BASEURL; ?>/transaksi/checkout/" method="POST">
                            <input type="hidden" name="packet" value="3d"/>
                            <input type="submit" class="btn btn-success btn-sm" value="Beli Paket">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Paket Mingguan</h5>
                        <p class="card-text">Paket ini berdurasi 1 Minggu. Kalian bisa menggunakan wifi kami selama 7 Hari setelah kalian membeli paket ini.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Berdurasi 7 Hari</li>
                        <li class="list-group-item">Untuk 1 device</li>
                        <li class="list-group-item">Unlimited Quota</li>
                        <li class="list-group-item">Speed Up to 40Mbps</li>
                        <li class="list-group-item font-weight-bold text-center">Rp. 10.000</li>
                    </ul>
                    <div class="card-body text-center">
                        <form action="<?= BASEURL; ?>/transaksi/checkout/" method="POST">
                            <input type="hidden" name="packet" value="7d"/>
                            <input type="submit" class="btn btn-success btn-sm" value="Beli Paket">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Paket Bulanan</h5>
                        <p class="card-text">Paket ini berdurasi 1 Bulan. Kalian bisa menggunakan wifi kami selama 30 Hari setelah kalian membeli paket ini.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Berdurasi 30 Hari</li>
                        <li class="list-group-item">Untuk 1 device</li>
                        <li class="list-group-item">Unlimited Quota</li>
                        <li class="list-group-item">Speed Up to 40Mbps</li>
                        <li class="list-group-item font-weight-bold text-center">Rp. 25.000</li>
                    </ul>
                    <div class="card-body text-center">
                        <form action="<?= BASEURL; ?>/transaksi/checkout/" method="POST">
                            <input type="hidden" name="packet" value="30d"/>
                            <input type="submit" class="btn btn-success btn-sm" value="Beli Paket">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>