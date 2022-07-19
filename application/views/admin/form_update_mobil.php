<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Update Data Mobil</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <?php foreach($mobil as $mb): ?>

        <form action="<?= base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tipe Mobil</label>
                <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil; ?>">
                <select name="kode_tipe" id="" class="form-control">
                  <option value="">--Pilih Tipe Mobil--</option>
                  <option value="<?= $mb->kode_tipe ?>"><?= $mb->nama_tipe ?></option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Tujuan</label>
                <select name="Tujuan" id="" class="form-control">
                  <option value="">--Pilih Tujuan--</option>
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
                <input type="text" name="no_plat" class="form-control" value="<?= $mb->no_plat ?>">
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
                  <option <?php if($mb->ac == "1"){echo "selected='selected'";} echo $mb->ac; ?> value="1">Tersedia</option>
                  <option <?php if($mb->ac == "0"){echo "selected='selected'";} echo $mb->ac; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('ac', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Bagasi Luas</label>
                <select name="bagasi" id="" class="form-control">
                  <option <?php if($mb->bagasi == "1"){echo "selected='selected'";} echo $mb->bagasi; ?> value="1">Tersedia</option>
                  <option <?php if($mb->bagasi == "0"){echo "selected='selected'";} echo $mb->bagasi; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('bagasi', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Kebersihan</label>
                <select name="bersih" id="" class="form-control">
                  <option <?php if($mb->bersih == "1"){echo "selected='selected'";} echo $mb->bersih; ?> value="1">Tersedia</option>
                  <option <?php if($mb->bersih == "0"){echo "selected='selected'";} echo $mb->bersih; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('bersih', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for=""> Air Mineral</label>
                <select name="air" id="" class="form-control">
                  <option <?php if($mb->air == "1"){echo "selected='selected'";} echo $mb->air; ?> value="1">Tersedia</option>
                  <option <?php if($mb->air == "0"){echo "selected='selected'";} echo $mb->air; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('air', '<div class="text-small text-danger">', '</div>') ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" name="tahun" class="form-control" value="<?= $mb->tahun ?>">
                <?= form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $mb->harga ?>">
                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label for="">Persediaan Kursi</label>
                <input type="number" name="persediaan_kursi" class="form-control" value="<?= $mb->persediaan_kursi ?>">
                <?= form_error('persediaan_kursi', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status; ?> value="1">Ready</option>
                  <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status; ?> value="0">Tidak Ready</option>
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

        <?php endforeach; ?>
      </div>
    </div>

  </section>
</div>