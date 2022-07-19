<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Tambah Data Mobil</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tipe Mobil</label>
                <select name="kode_tipe" id="" class="form-control">
                  <option value="">--Pilih Tipe Mobil--</option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Tujuan</label>
                <select name="Tujuan" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="Pekanbaru - Bukittinggi">Pekanbaru - Bukittinggi</option> 
                  <option value="Pekanbaru - Bangkinang">Pekanbaru - Bangkinang</option>
                  <option value="Pekanbaru - Dumai">Pekanbaru - Dumai</option>
                  <option value="Pekanbaru - Padang">Pekanbaru - Padang</option>
                  <option value="Pekanbaru - Pasaman">Pekanbaru - Pasaman</option>
                </select>
                <?= form_error('Tujuan', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Nomor Plat</label>
                <input type="text" name="no_plat" class="form-control">
                <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
              <label for="">Warna</label>
                <select name="warna" id="" class="form-control">
                  <option value="">--Pilih Warna--</option>
                  <option value="Putih">Putih</option> 
                  <option value="Hitam">Hitam</option>
                  <option value="Abu - Abu">Abu - Abu</option>
                  <option value="Merah">Merah</option>
                  <option value="Biru">Biru</option>

                </select>
                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">AC</label>
                <select name="ac" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('ac', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Bagasi Luas</label>
                <select name="bagasi" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('bagasi', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Bersih</label>
                <select name="bersih" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('bersih', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for=""> Air Mineral</label>
                <select name="air" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('air', '<div class="text-small text-danger">', '</div>') ?>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Harga Sewa perhari</label>
                <input type="number" name="harga" class="form-control">
                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Persediaan kursi</label>
                <input type="number" name="persediaan_kursi" class="form-control">
                <?= form_error('persediaan_kursi', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" name="tahun" class="form-control">
                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option value="">--Pilih Status--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>


  </section>
</div>