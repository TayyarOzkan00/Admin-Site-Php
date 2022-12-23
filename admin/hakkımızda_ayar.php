<?php include "header.php";



$hakkimizdasor=$db->prepare("SELECT * FROM  hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
  'id' => 0
  )); 

  $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


?>
     <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Hakkımızda Ayarlar  |
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
                      <label for="exampleInputUsername1">Hakkımızda Başlığı</label>
                      <input type="text" class="form-control" name="hakkimizda_baslik" id="exampleInputUsername1" required="required" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Hakkımızda İçerik</label>
                      <input type="text" class="form-control" name="hakkimizda_icerik" value="<?php echo $hakkimizdacek['hakkimizda_icerik']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Hakkımızda Video</label>
                      <input type="text" class="form-control" name ="hakkimizda_video" value="<?php echo $hakkimizdacek['hakkimizda_video'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Hakkımızda Vizyon</label>
                      <input type="text" class="form-control" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek ['hakkimizda_vizyon'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Hakkımızda Miyon</label>
                      <input type="text" class="form-control" name="hakkimizda_misyon" value="<?php echo $hakkimizdacek ['hakkimizda_misyon'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="hakkimizdakaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>
