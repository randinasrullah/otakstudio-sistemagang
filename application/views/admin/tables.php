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
                      <th class="text-center">Nama</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">Peminatan</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Tanggal Upload</th>
                      <th class="text-center">Username</th>
                      <th class="text-center">Curriculum Vitae</th>
                      <th class="text-center">Surat Pengantar</th>
                      <th class="text-center">Aksi</th>
                      <th class="text-center">Konfirmasi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">Peminatan</th>
                      <th class="text-center">Keterangan</th>
                      <th class="text-center">Tanggal Upload</th>
                      <th class="text-center">Username</th>
                      <th class="text-center">Curriculum Vitae</th>
                      <th class="text-center">Surat Pengantar</th>
                      <th class="text-center">Aksi</th>
                      <th class="text-center">Konfimasi</th>
                    </tr>
                  </tfoot>

                  <tbody>
                    <?php $i = 1;
                    foreach ($form as $key) : ?>
                      <tr>
                        <td class="text-center"><?= $i; ?></td>
                        <td class="text-center"><?= $key['nama'] ?></td>
                        <td class="text-center"><?= $key['alamat'] ?></td>
                        <td class="text-center"><?= $key['peminatan'] ?></td>
                        <td class="text-center"><?= $key['keterangan'] ?></td>
                        <td class="text-center"><?= tgl_indo($key['tanggal']) ?></td>
                        <td class="text-center"><?= $key['username'] ?></td>
                        <td class="text-center"><a href=<?= base_url('Dashboard/download/') . $key['cv'] ?>><i class="fas fa-file-download fa-2x"></i></a></td>
                        <td class="text-center"><a href=<?= base_url('Dashboard/download/') . $key['surat'] ?>> <i class="fas fa-file-download fa-2x"></i> </a></td>
                        <td class="text-center"><a href="<?= base_url('Admin/hapusdata/') . $key['id'] ?>" onclick="return confirm('Anda Yakin Menghapus File Ini ?')" class="fas fa-trash fa-2x"></i></a></td>
                        <td class="text-center">
                          <?php if ($key['status'] == '0') { ?>
                            <a href="<?= base_url('Admin/terima/') . $key['id'] ?>" onclick="return confirm('yakin mengirim konfirmasi diterima?')"><i class="fas fa-check fa-2x mr-3"></i></a>
                            <a href="<?= base_url('Admin/tolak/') . $key['id'] ?>" onclick="return confirm('yakin mengirim konfirmasi ditolak? ')"><i class="fas fa-times fa-2x"></i></a>
                            <a href="" data-toggle="modal" id="ubahh" data-target="#exampleModalCenter" data-id="<?=$key['id']?>"> <i class="far fa-sticky-note fa-2x"></i></a>
                          <?php } else if ($key['status'] == '4'){ ?>
                            <p>Pesan revisi sudah terkirim</p>
                            <?php } else { ?>
                              <p>Sudah melakukan konfirmasi status</p>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php $i++;
                    endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pesan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                  <form action="<?= base_url('Admin/tambahketerangan/') ?>" id="pesan" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="" id="id" name="id">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"> </textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          
          <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script type="text/Javascript">
            $(document).on("click", "#ubahh", function() {
              console.log("yes");
              var id = $(this).data('id');
  
              $("#pesan #id").val(id);
            });
          </script>

          <!-- End of Main Content -->
