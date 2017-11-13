<?
    session_start();

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yoklama (Beta)</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="assets/css/site.css" rel="stylesheet">
  </head>
  <body>

    <div class="container col-md-4 col-md-offset-4">
      <div class="row">
          <div>
              <h3>YOKLAMA</h3>
          </div>
      </div>

      <div id="yazi">
          <? if(isset($_GET['basarili'])){
              echo "<div class=\"alert alert-success\" role=\"alert\">Başarıyla kaydedildi.</div>";
             }
          ?>
      </div>
      <div class="row">
        <div>

          <div class="panel panel-default">
            <div class="panel-body">
              <form action="control.php" method="post" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Öğrenci No" name="ogrno" required/><br>
                  <input type="text" class="form-control" placeholder="Ad" name="adi" required/><br>
                  <input type="text" class="form-control" placeholder="Soyad" name="soyadi" required/><br>
                  <input type="text" class="form-control" placeholder="Bölüm" name="bolum" required/><br>
                  <input type="text" class="form-control" placeholder="Sınıf No" name="sinif" required/><br>
                  <input type="text" class="form-control" placeholder="E-Posta" name="email" required/><br>
                  <button name="kaydol" class="btn btn-primary">Kaydol</button>
                  <div align="right">
                    <a href="giris.php">Giriş Yap</a>
                  </div>
                </div>
              </form>
            </div>
          </div><!-- /.login-box-body -->
        </div>
      </div>
    </div><!-- /.login-box -->

    <?

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    </script>
  </body>
</html>
