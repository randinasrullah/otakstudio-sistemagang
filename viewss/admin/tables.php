        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Inbox</h1>
          <p class="mb-4">Sistem pengarsipan permintaan kerja praktek di Otakstudio</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Selamat Datang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Tanggal</th>
                      <th>Peminatan</th>
                      <th>Keterangan</th>
                      <th>Curriculum Vitae</th>
                      <th>Surat Pengantar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Tanggal</th>
                      <th>Peminatan</th>
                      <th>Keterangan</th>
                      <th>Curriculum Vitae</th>
                      <th>Surat Pengantar</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>

                  <tbody>
                    <?php foreach ($form as $key) : ?>
                      <tr>
                        <td><?= $key['nama'] ?></td>
                        <td><?= $key['alamat'] ?></td>
                        <td><?= $key['email'] ?></td>
                        <td><?= tgl_indo($key['tanggal']) ?></td>
                        <td><?= $key['peminatan'] ?></td>
                        <td><?= $key['keterangan'] ?></td>
                        <td class="text-center"><a href=<?= base_url('Dashboard/download/') . $key['cv'] ?>><i class="fas fa-file-download fa-2x"></i></a></td>
                        <td class="text-center"><a href=<?= base_url('Dashboard/download/') . $key['surat'] ?>> <i class="fas fa-file-download fa-2x"></i> </a></td>
                        <td class="text-center"><a href="<?= base_url('Admin/hapusdata/') . $key['id'] ?>" onclick="return confirm('anda yakin menghapus file ini')" class="fas fa-trash fa-2x"></i></a></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->