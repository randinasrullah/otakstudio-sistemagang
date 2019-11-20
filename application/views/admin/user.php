<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inbox</h1>
<p class="mb-4">Sistem pengarsipan permintaan kerja praktek di Otakstudio</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Email</th>
            <th class="text-center">Nomor Handphone</th>
            <th class="text-center">Username</th>
            <th class="text-center">Aksi</th>
            <th class="text-center">Status</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Email</th>
            <th class="text-center">Nomor Handphone</th>
            <th class="text-center">Username</th>
            <th class="text-center">Aksi</th>
            <th class="text-center">Status</th>
          </tr>
        </tfoot>

        <tbody>

          <?php $i=1; foreach ($pengguna as $key) : ?>
            <tr>
              <td class="text-center"><?= $i; ?></td>
              <td class="text-center"><?= $key['nama'] ?></td>
              <td class="text-center"><?= $key['alamat'] ?></td>                        
              <td class="text-center"><?= $key['email'] ?></td>
              <td class="text-center"><?= $key['handphone'] ?></td>
              <td class="text-center"><?= $key['username'] ?></td>
              <td class="text-center"><a href="<?= base_url('Admin/hapuspengguna/') . $key['id'] ?>" onclick="return confirm('yakin hapus')" class="fas fa-trash fa-2x"></i></a></td>
              <td class="text-center">
                    <?php if($key['status'] == '0' ) { ?>
                         <p>Belum dikonfirmasi</p>
                      <?php } else if ($key['status'] == '1') { ?>
                            <p>Diterima</p>
                    <?php } else if ($key['status'] == '3') { ?>
                            <p>Belum Upload Berkas</p>
                    <?php } else if ($key['status'] == '4') { ?>
                      <p> Belum Revisi Berkas <P>
                    <?php } else { ?>
                            <p>Ditolak</p>
                    <?php  } ?>
              </td>
            </tr>
          <?php $i++; endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->