<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:/test-login/?pesan_harus_login');
        } else {
            $nama = $_SESSION['nama'];
            $password = $_SESSION['password'];
        }
?>

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
    <link rel="stylesheet" href="desain.css">
    
</head>

<body>

<div class="container">
    <div class="row">

        <div class="col-sm-4">
        </div>

        <div class="col-sm-4">
            
            <div class="alert alert-success mg-top-30">
                Hai <b><?php echo $_SESSION['nama']; ?></b> Kamu berhasil login dengan menggunakan username dan password <b><?php echo $password ?></b>
            </div>

            <div class="my-latar-form">
                <h3 class="my-title-top text-center">Selamat Datang!!!</h3>

                    <?php
                        date_default_timezone_set("Asia/Jakarta");

                        function IP() {
                            $ipaddress = '';
                            if (getenv('HTTP_CLIENT_IP'))
                                $ipaddress = getenv('HTTP_CLIENT_IP');
                            else if(getenv('HTTP_X_FORWARDED_FOR'))
                                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
                            else if(getenv('HTTP_X_FORWARDED'))
                                $ipaddress = getenv('HTTP_X_FORWARDED');
                            else if(getenv('HTTP_FORWARDED_FOR'))
                                $ipaddress = getenv('HTTP_FORWARDED_FOR');
                            else if(getenv('HTTP_FORWARDED'))
                                $ipaddress = getenv('HTTP_FORWARDED');
                            else if(getenv('REMOTE_ADDR'))
                                $ipaddress = getenv('REMOTE_ADDR');
                            else
                                $ipaddress = 'IP Tidak Dikenali';
                        
                            return $ipaddress;
                        }
                            $ipaddress = $_SERVER['REMOTE_ADDR'];
                            $tgl = date('d-m-Y');
                            $jam = date('h-i-s');
                            echo "<hr class='hr'><b>Nama = </b>".$nama;
                            echo "<hr class='hr'><b>Tanggal Login = </b>".$tgl;
                            echo "<hr class='hr'><b>Jam Login = </b>".$jam;
                            echo "<hr class='hr'><b>Ip Address</b> = ";
                            echo IP();
                            echo "<hr class='hr'><b>Lokasi Sekarang</b> = <img src='https://wpamelia.com/wp-content/uploads/2018/11/ezgif-2-6d0b072c3d3f.gif' style='width:60px;height:30px;'>";
                            echo "<hr class='hr'><b>Browser</b> = ";
                            echo $_SERVER['HTTP_USER_AGENT'];
                            echo "<hr class='hr'><b>Sistem Operasi</b> = ";
                            echo php_uname();
                            echo "<hr class='hr'>";

                        if (isset($_SESSION['username'])) {
                            $file = fopen("data.txt","a");
                            $ip_address = IP();
                            fwrite($file, "Nama = ");
                            fwrite($file, $nama);
                            fwrite($file, PHP_EOL);
                            fwrite($file, "Tanggal Login = ");
                            fwrite($file, $tgl);
                            fwrite($file, PHP_EOL);
                            fwrite($file, "Jam Login = ");
                            fwrite($file, $jam);
                            fwrite($file, PHP_EOL);
                            fwrite($file, "Ip Address = ");  
                            fwrite($file, $ip_address);
                            fwrite($file, PHP_EOL);
                            fwrite($file, "Browser = ");  
                            fwrite($file, $_SERVER['HTTP_USER_AGENT']);
                            fwrite($file, PHP_EOL);
                            fwrite($file, "Sistem Operasi = ");
                            fwrite($file, php_uname());
                            fwrite($file, PHP_EOL);
                            fwrite($file, "-----------------------------------------");
                            fwrite($file, PHP_EOL);
                            fclose($file);
                        } else {
                            header('location:/test-login/?pesan_harus_login');
                        }
                    ?> 

                <a href="/test-login/logout.php" class="btn btn-danger btn-block mg-top-10">Keluar</a>

            </div>
        </div>

        <div class="col-sm-4">
        </div>

    </div>
</div>
