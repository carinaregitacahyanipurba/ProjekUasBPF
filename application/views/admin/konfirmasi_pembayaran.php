<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Konfirmasi Pembayaran</h1>
    </div>
    <div class="card" style="width: 55%;">
      <div class="card-header">
        Konfirmasi Pembayaran
      </div>
      <center class="card-body">
        <form action="<?= base_url('admin/transaksi/cek_pembayaran'); ?>" method="post">
          <?php foreach($pembayaran as $pmb): ?>
            <a class="btn btn-sm btn-success" href="<?= base_url('admin/transaksi/download_pembayaran/'.$pmb->id_booking) ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>

            <div class="custom-control custom-switch ml-3">
              <input type="hidden" class="custom-control-input" value="<?= $pmb->id_booking ?>" name="id_booking">
              <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
              <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
            </div>
            <hr>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
          <?php endforeach; ?>
        </form>
      </center>
    </div>
  </section>
</div>