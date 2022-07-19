<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Customer</h1>
    </div>
    
    <a href="<?= base_url('admin/data_customer/tambah_customer'); ?>" class="btn btn-primary mb-3">Tambah Customer</a>
    <?= $this->session->flashdata('pesan'); ?>
    
    <table class="table table-hover table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>No. Telepon</th>
        <th>No. KTP</th>
        <th>Password</th>
        <th colspan="2">Action</th>
      </tr>
      
      <?php 
      $no = 1;
      foreach($customer as $cs): ?>
      <tr>
        <td><?= $no++; ?>.</td>
        <td><?= $cs->nama; ?></td>
        <td><?= $cs->username; ?></td>
        <td><?= $cs->alamat; ?></td>
        <td><?= $cs->gender; ?></td>
        <td><?= $cs->no_telepon; ?></td>
        <td><?= $cs->no_ktp; ?></td>
        <td><?= $cs->password; ?></td>
        <td><a href="<?= base_url('admin/data_customer/update_customer/').$cs->id_customer; ?>"><button class="btn btn-sm btn-primary mr-2">Edit</button></a></td>
        <td> <a href="<?= base_url('admin/data_customer/delete_customer/').$cs->id_customer; ?>" onclick="return confirm('Yakin hapus?')"><button class="btn btn-sm btn-danger">Hapus</button></a></td>
        
        
      </tr>

      <?php endforeach; ?>
    </table>
   
  </section>
</div>