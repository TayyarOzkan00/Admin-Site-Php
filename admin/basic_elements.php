<?php include "header.php" ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Genel Ayarlar  |
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
                      <label for="exampleInputUsername1">Site Başlığı</label>
                      <input type="text" class="form-control" name="ayar_title" id="exampleInputUsername1" required="required" value="<?php echo $ayarcek['ayar_title'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Site Konusu</label>
                      <input type="text" class="form-control" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Ana Kelime</label>
                      <input type="text" class="form-control" name ="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Site Adı</label>
                      <input type="text" class="form-control" name="ayar_author" value="<?php echo $ayarcek ['ayar_author'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="ayarkaydet" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>
