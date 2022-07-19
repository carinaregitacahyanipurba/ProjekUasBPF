<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Transaksi</h1>
    </div>

    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Tujuan</th>
        <th>Tgl. Pesan</th>
        <th>Harga</th>
        <th>Jumlah Kursi</th>
        <th>Status Pembayaran</th> 
        <th>Cek Pembayaran</th>
        <th>Total Pembayaran</th>
        <th>Action</th>
      </tr>

      <?php 
      $no = 1;
      foreach($transaksi as $tr): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tr->nama; ?></td>
        <td><?= $tr->Tujuan; ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tgl_pesan)); ?></td>
        <td>Rp.<?= number_format($tr->harga, 0,',','.'); ?>,-</td>
        <td><?= $tr->jumlah_kursi; ?></td>
        <td>
          <?php if($tr->status_pembayaran == "0"){
            echo "Belum Selesai";
          }else{
            echo "Selesai";
          }?>
        </td>

        <td>
          <center>
            <?php if(empty($tr->bukti_pembayaran)){ ?>
              <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
            <?php }
            else{ ?>
              <a class="btn btn-sm btn-primary" href="<?= base_url('admin/transaksi/pembayaran/'.$tr->id_booking); ?>"><i class="fas fa-check-circle"></i></a>
            <?php } ?>
          </center>
        </td>

        <td>
          Rp.<?= number_format($tr->harga * $tr->jumlah_kursi, 0, ',', '.'); ?>,-
        </td>
        
        <td>
          <?php if($tr->status == "1"){
            echo "Selesai";
          }else{ ?>
            <div class="row">
              <a class="btn btn-sm btn-success mr-2" href="<?= base_url('admin/transaksi/transaksi_selesai/'.$tr->id_booking) ?>"><i class="fas fa-check"></i></a>
              <a onclick="return confirm('Yakin batal?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/transaksi/batal_transaksi/'.$tr->id_booking) ?>"><i class="fas fa-times"></i></a>
            </div>
          <?php } ?>
        </td>
      </tr>

      <?php endforeach; ?>
    </table>
  </section>
</div>