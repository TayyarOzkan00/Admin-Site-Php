<?php include "header.php";

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
  ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Kullanıcı Düzenle  |
                <?php  
                    if ($_GET['durum']=="ok") {?>
                      <b style ="color:green";>İşlem Başarılı</b>
                    <?php } elseif ($_GET['durum']=="no") {?>
                      <b style ="color:red";>İşlem Başarısız</b>
                    <?php }
                    
                    ?>
       
                  <p class="card-description">
                    Site Ayar
                  </p>
                  <form class="forms-sample" action="../netting/islem.php" method = "POST">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Ad Soyad</label>
                      <input type="text" class="form-control" name="kullanici_adsoyad" id="exampleInputUsername1" required="required" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Zaman</label>
                      <input type="text" class="form-control" name="kullanici_zaman" value="<?php echo $kullanicicek['kullanici_zaman']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Numara</label>
                      <input type="text" class="form-control" name ="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Mail</label>
                      <input type="text" class="form-control" name="kullanici_mail" value="<?php echo $kullanicicek ['kullanici_mail'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>

             <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>"> 
                    <button type="submit" name="kullanicikaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>