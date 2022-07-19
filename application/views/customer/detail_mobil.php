<!-- Banner Starts Here -->
<div class="container">
  <div style="height: 150px;"></div>

  <div class="card">
    <div class="card-body">
      <?php foreach($detail as $dt): ?>
      <div class="row">
        <div class="col-md-6">
          <img width="500px;" src="<?= base_url('assets/upload/').$dt->gambar; ?>" alt="">
        </div>
        <div class="col-md-6">
          <table class="table">
            <tr>
              <th>Tujuan</th>
              <td><?= $dt->Tujuan; ?></td>
            </tr>
            <tr>
              <th>No. Plat</th>
              <td><?= $dt->no_plat; ?></td>
            </tr>
            <tr>
              <th>Warna</th>
              <td><?= $dt->warna; ?></td>
            </tr>
            <tr>
              <th>Tahun Mobil</th>
              <td><?= $dt->tahun; ?></td>
            </tr>
            <tr>
              <th>Status</th>
              <td>
                <?php if($dt->status == '1'){
                  echo "Ready";
                }
                else{
                  echo "Tidak Ready / Sedang Diperjalanan";
                } ?>
              </td>
              
            </tr>
            <tr>
            <td></td>
              <td>
              <?php
                if($dt->status == "0"){ ?>
                  <span class="btn btn-danger">Sudah Penuh</span>
                <?php }
                else{
                  echo anchor('customer/booking/tambah_booking/'. $dt->id_mobil, '<button class="btn btn-success">Booking</button>');
                }
                ?>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<!-- Banner Ends Here -->

<div style="height: 180px;"></div>


    