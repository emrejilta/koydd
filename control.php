<?php
    session_start();


    $db = new PDO("sqlite:yoklama.db");

    $ir = "";
    $db->exec("SET NAMES UTF8");

    if(isset($_POST['kaydol'])){
        $ogrno = trim($_POST['ogrno']);
        $ad = ucfirst($_POST['adi']);
        $soyad = ucwords($_POST['soyadi']);
        $sinif = ucwords($_POST['sinif']);
        $bolum = ucwords($_POST['bolum']);
        $mail = trim($_POST['email']);

        $sql = "";
        $conn = $db->prepare($sql);

        $conn->bindParam(':ogrno', $ogrno, PDO::PARAM_INT);
        $conn->bindParam(':ad', $ad, PDO::PARAM_STRING);
        $conn->bindParam(':soyad', $soyad, PDO::PARAM_STRING);
        $conn->bindParam(':sinif', $sinif, PDO::PARAM_INT;
        $conn->bindParam(':bolum', $bolum, PDO::PARAM_STRING);
        $conn->bindParam(':mail', $mail, PDO::PARAM_STRING);

        $db->exec("INSERT INTO ogrenci(ogrno,ad,soyad,bolum,sinif,mail) VALUES(':ogrno',':ad',':soyad',':bolum',':sinif',':mail')") or die(print_r($db->errorInfo(), true));
        header("Location:kayit.php?basarili");
    }


    if(isset($_POST['giris'])){
        $ogrno = $_POST['ogrno'];
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM ogrenci WHERE ogrno=:ogrno";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':ogrno',$ogrno,PDO::PARAM_INT);
        $stmt->execute();

        $sql2 = "SELECT COUNT(*) FROM ogrenci";
        $r = $db->query($sql2);
        $num = $r->fetchColumn();


        if($num > 0){
            $_SESSION['kullanici'] = $ogrno;
            header("Location: profil.php");
        }else{
            header("Location: giris.php");
        }
    }else{
        return $yazi;
    }


    $db = null;
?>
