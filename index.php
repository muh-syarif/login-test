<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Test</title>
    <meta charset="utf-8">
    <meta name="author" content="By Syarif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="desain.css" type="text/css">
    
</head>

<body>

<div class="container">
    <div class="row">

        <div class="col-sm-4">
        </div>

        <div class="col-sm-4">
            <div class="alert alert-info mg-top-30">
                Form login dibuat oleh <b>Syarif</b> - Back End Test
            </div>

            <?php
            if (isset($_GET['pesan_password_salah'])) {
                echo '
                <div class="alert alert-danger">
                    <b>Maaf</b>. Username & password yang anda masukan salah!
                </div>
                ';
            } elseif (isset($_GET['pesan_harus_login'])) {
                echo '
                <div class="alert alert-danger">
                    <b>Maaf</b>. Anda harus login terlebih dahulu!
                </div>
                ';
            } elseif (isset($_GET['nama_tidak_sesuai'])) {
                echo '
                <div class="alert alert-danger">
                    <b>Maaf</b>. Nama harus berupa huruf!
                </div>
                ';
            } elseif (isset($_GET['string_tidak_diperbolehkan'])) {
                echo '
                <div class="alert alert-danger">
                    <b>Maaf</b>. String tidak dipebolehkan!
                </div>
                ';
            }
            ?>
            
            <div class="my-latar-form">
                
                <h3 class="my-title-top text-center">Form Login</h3>
                <form action="proses.php" method="post">

                    <div class="input-group mg-top-10">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-pencil"></i>
                        
                        </span>
                        <input id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kamu"
                        minlength="4" maxlength="15" required="required">
                    </div>

                    <div class="input-group mg-top-10">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        
                        </span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Username" maxlength="15" required>
                    </div>

                    <div class="input-group mg-top-10">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Password" maxlength="15" required>
                    </div>

                    <input id="submit" type="submit" class="btn btn-info btn-block mg-top-10" name="submit" value="Masuk">
            
                </form>

            </div>

            <button type="button" class="btn btn-danger mg-top-10" data-toggle="modal" data-target="#peringatan">Password Disini</button>

                <div id="peringatan" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Password</h4>
                        </div>
                        <div class="modal-body">
                            <p>Username : <b>backendtest</b></p>
                            <p>Password : <b>backendtest</b></p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                        </div>

                    </div>
                </div>

                <button type="button" class="btn btn-danger mg-top-10" data-toggle="modal" data-target="#peringatan2">Mohon Baca!</button>

                <div id="peringatan2" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Mohon Baca!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Tidak ada bug di website ini!</p>
                            <p>Terakhir update : 12 Mei 2020 , 16:13</p>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>
                        </div>

                    </div>
                </div>
                
                <a href="/test-login/data.txt" type="button" class="btn btn-danger mg-top-10">Data User yang Login</a>
                <a href="https://github.com/muh-syarif/login-test/" type="button" class="btn btn-danger mg-top-10">Lihat File Login Disini!</a>

        </div>

        <div class="col-sm-4">
        </div>

    </div>
</div>

