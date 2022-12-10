<div class="container">
  <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
  </div>
    <div class="jumbotron mt-4">
    <h1>Detail Transaksi : </h1>
    <p>Kamu akan membeli paket "<?= $data['paket'] ?>" dengan harga Rp. <?= $data['harga'] ?></p>
    <form action="<?= BASEURL; ?>/transaksi/success" method="post">
      <div class="form-group">
        <label for="promocode">Masukkan kode promo jika ada</label>
        <input type="text" class="form-control" id="promocode" name="promocode" placeholder="Masukkan kode promo">
        <input type="hidden" id="idpaket" name="idpaket" value="<?= $data['id'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Terapkan</button>
    </form>
    <p class="mt-4">Klik tombol dibawah untuk membayar via QRIS</p>
    <button type="button" class="btn btn-success mt-1" id="pay-button">bayar!</button>

    <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="<?php echo $data['token'];?>"></script>
    <script type="text/javascript">
        function post(path, params, idpaket, method='post') {
          const form = document.createElement('form');
          form.method = method;
          form.action = path;

          for (const key in params) {
            if (params.hasOwnProperty(key)) {
              const hiddenField = document.createElement('input');
              hiddenField.type = 'hidden';
              hiddenField.name = key;
              hiddenField.value = params[key];

              form.appendChild(hiddenField);
            }
          }
          const hiddenField = document.createElement('input');
          hiddenField.type = 'hidden';
          hiddenField.name = 'idpaket';
          hiddenField.value = idpaket;
          form.appendChild(hiddenField);
          document.body.appendChild(form);
          form.submit();
        }
        document.getElementById('pay-button').onclick = function(){
        snap.pay('<?=$data['token']?>', {
          onSuccess: function(result){
            var ok = "<?= BASEURL ?>/transaksi/success";
            var idp = "<?= $data['id'] ?>";
            post(ok, result, idp);
          }
          /* Optional
          onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
          */
        });
      };
    </script>
 </div>
</div>