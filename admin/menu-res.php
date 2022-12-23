<?php include "header.php";

$menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
$menusor->execute(array(
  'id' => $_GET['menu_id']
  ));
$menucek=$menusor->fetch(PDO::FETCH_ASSOC);


?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">Menü Düzenle  |
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
                      <label for="exampleInputUsername1">Site Ad</label>
                      <input type="text" class="form-control" name="menu_ad" id="exampleInputUsername1" required="required" value="<?php echo $menucek['menu_url'] ?>" required="required"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menü Url</label>
                      <input type="text" class="form-control" name="menu_url" value="<?php echo $menucek['menu_url']; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Menü Sıra</label>
                      <input type="text" class="form-control" name ="menu_sira" value="<?php echo $menucek['menu_sira'] ?>" id="exampleInputPassword1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Menü Detay</label>
                      <input type="text" class="form-control" name="menu_detay" value="<?php echo $menucek ['menu_detay'] ?> " id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>

             <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'] ?>"> 
                    <button type="submit" name="menuduzenle" class="btn btn-primary me-2">Düzenle</button>
                  </form>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include "footer.php" ?>