<?php
    session_start();
    
    if (isset($_POST['username'])) {

        if (is_numeric($_POST['nama'])) {
            header('location:/test-login/?nama_tidak_sesuai');
        } else {
            
            $nama = filter_var($_POST['nama'], FILTER_SANITIZE_STRING);
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $rento = base64_decode('YmFja2VuZHRlc3Q=');
            $shinigami = base64_decode('c3lhcmlm');

                if ($username && $password == $rento OR $shinigami){
                    header('location:/test-login/halaman-admin.php');
                    $_SESSION['username'] = $username;
                    $_SESSION['nama'] = $nama;
                } else {
                header('location:/test-login/?pesan_password_salah');
                }
        }

    } else {
        header('location:/test-login/?no_bug');
    }
?>