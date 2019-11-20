<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Otakstudio</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/style.css') ?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url('assets/js/') ?>bootstrap.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link href="<?= base_url('assets/fontawesome-free-5.9.0-web/css/') ?>all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/fontawesome-free-5.9.0-web/css/') ?>fontawesome.css" rel="stylesheet">
    <link href="<?= base_url('assets/fontawesome-free-5.9.0-web/css/') ?>brands.css" rel="stylesheet">
    <link href="<?= base_url('assets/fontawesome-free-5.9.0-web/css/') ?>solid.css" rel="stylesheet">
    <!-- Font awesome -->

    <!-- jquery -->

    <script language="JavaScript" type="text/javascript" src="<?= base_url('assets/style.js') ?>"></script>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container ada">
            <a class="navbar-brand text-white" href="#home">OTAKSTUDIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <?php if($this->session->userdata('nama')==TRUE) { 
                                    if($this->session->userdata('status')==3 || $this->session->userdata('status')==4 ) {?>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Daftar Magang
                                        </button>
                                        <?php } else { ?>
                                            <a href="<?=base_url('Dashboard/toUser')?>"><button type="button" class="btn btn-primary">
                                                Daftar Magang
                                            </button></a>
                                        <?php } ?>
                        <?php } else { ?>
                            <a href="<?=base_url('Dashboard/toLogin')?>"><button type="button" class="btn btn-primary">
                                Daftar Magang
                            </button></a>
                        <?php } ?>
                        <?php if($this->session->userdata('nama')==TRUE) { ?>
                            <a href="<?= base_url('user') ?>"><button type="button" class="btn btn-primary">
                                    Halo, <?= $this->session->userdata('username'); ?>
                            </button></a>
                        <?php } else { ?>
                            <a href="<?= base_url('/Login') ?>"><button type="button" class="btn btn-primary">
                                Login 
                            </button></a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Akhir -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-white">Sistem Pengajuan Kerja Praktik</h1><br>
            <p class="lead text-white">Sistem ini di buat dengan tujuan untuk memberikan akses kepada para Mahasiswa <br> untuk mengajukan Kerja Praktik di <span>Otakstudio.</span>Dan diharapkan juga dapat mempermudah <br> para Mahasiswa dalam melakukan pengajuan Kerja Praktik di tempat kami.
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid">
            <div class="footer-main text-center text-white">
                <p>
                    All Rights Reserved by Otakstudio | Design by OtakStudio
                </p>
            </div>
            <div class="row icons justify-content-center mt-lg-4 mt-3 ">
                <ul class="text-center">
                    <a href="https://www.facebook.com/OtakStudio"><span class="fab fa-facebook fa-2x"></span></a>
                </ul>
                <ul class="text-center"><a href="https://twitter.com/otakstudio?lang=id"><span class="fab fa-twitter fa-2x"></span></a>
                </ul>
                <ul class="text-center"><a href="https://www.instagram.com/otakstudio/?hl=id"><span class="fab fa-instagram fa-2x"></span></a>
                </ul>

                <ul class="text-center"><a href="http://otakstudio.id/"><span class="fas fa-globe fa-2x"></span></a>
                </ul>

            </div>

        </div>

</body>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg justify-content-center" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daftar Magang</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
            <div class="modal-body">
                <?php echo form_open_multipart('Dashboard/tambah'); ?>
                <p class="text-center form">Form Pendaftaran Magang Otak Studio </p>
                <input type="hidden" name="idpengguna" value="<?=$user[0]['id']; ?>"> 
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Peminatan</label>
                    <select class="form-control" name="minat">
                        <option value="Game">Game</option>
                        <option value="Programming">Programming</option>
                        <option value="Design">Design</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Internet Service">Internet Service</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Data Process">Data Process</option>
                        <option value="Security">Security</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"><?= set_value('keterangan'); ?></textarea>
                </div>
                <div class="ridge">
                    <div class="container">
                        <div class="form-group">
                            <label>*Masukan File CV </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filecv" value="<?= set_value('filecv'); ?>">
                            <small class="form-text text-danger"><?= form_error('filecv'); ?></small>
                        </div>

                        <div class="form-group">
                            <label>*Masukan File Surat Pengantar </label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filesuratpengantar" value="<?= set_value('filesuratpengantar'); ?>">
                            <small class="form-text text-danger"><?= form_error('filesuratpengantar'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</html>