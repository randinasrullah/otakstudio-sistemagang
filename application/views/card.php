<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Information</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <style>
        .middle {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 5px -6px 9px 3px #86898c;
        }

        li.list-group-item {
            background: black;
        }

        ul.list-group.list-group-flush {
            text-align-last: center;
        }

        .card-body.a {
            background: #d20000;
            text-align: center;
        }

        h5.card-title {
            text-align-last: center;
        }

        body {
            background-image: url(<?= base_url('vendor/') ?>gambar/pexels.jpeg);
            background-size: cover;
        }

        .mt-3,
        .my-3 {
            margin-right: 26px;
            margin-top: 1rem !important;
            float: right;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="button">
        <a href="<?= base_url('Login/Logout'); ?>">
            <button type="button" class="btn btn-primary logout mt-3">Logout</button>
        </a>
    </div>
    <div class="middle">
        <div class="card text-white bg-primary mx-auto align-self-center" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <img src="<?= base_url('vendor/') ?>gambar/user.png" class="card-img-top" alt="...">
                <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
                <?php $nama = $this->session->userdata('nama');  ?>
                <li class="list-group-item"><?= $nama; ?></li>
                <li class="list-group-item"><?= $this->session->userdata('alamat'); ?></li>
                <li class="list-group-item"><?= $this->session->userdata('email'); ?></li>
                <li class="list-group-item"><?= $this->session->userdata('handphone'); ?></li>
            </ul>
            <div class="card-body a">
                <a>Status Berkas : </a> <br>
                <?php if ($this->session->userdata('status') == '0') { ?>
                    <p>Berkas sudah terupload. <br> Harap tunggu perubahan status beberapa hari kedepan.</p>
                <?php } else if ($this->session->userdata('status') == '1') { ?>
                    <p>Selamat anda diterima <br> Harap menghubungi HR Otakstudio (082222910192).</p>
                <?php } else if ($this->session->userdata('status') == '2') { ?>
                    <p>Maaf anda belum memenuhi kriteria magang di Otakstudio.</p>
                <?php } else if ($this->session->userdata('status') == '4') { ?>
                    <p><?php echo $this->session->userdata('pesan'); ?></p><a href="<?= base_url('Dashboard'); ?>">
                        <p> Klik disini untuk mengupload ulang berkas</p>
                    <?php } else { ?>
                        <p>Belum mengisi form dan mengupload berkas. </p> <a href="<?= base_url('Dashboard'); ?>">
                            <p> Klik disini untuk mengisi form dan upload berkas</p>
                        </a>
                    <?php } ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>