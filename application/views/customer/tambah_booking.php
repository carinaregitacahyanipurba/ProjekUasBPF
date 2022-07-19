<div class="container">
  <div style="height: 150px;"></div>
  <div class="card">
    <card class="card-header">
      Form Pesan Tiket
    </card> 
    <div class="card-body">
      <?php foreach($detail as $dt): ?>
      <form action="<?= base_url('customer/booking/tambah_booking_aksi') ?>" method="post">
        <div class="form-group">
          <label for="">Harga </label>
          <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil; ?>">
          <input type="text" name="harga" class="form-control" value="<?= $dt->harga; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="">Tanggal Pesan</label>
          <input type="date" name="tgl_pesan" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Jumlah Kursi</label>
          <input type="int" name="jumlah_kursi" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Booking</button>
      </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<div style="height: 180px;"></div>