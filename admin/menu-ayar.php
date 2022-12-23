<?php include "header.php";

$menusor=$db->prepare("SELECT * FROM menu");
$menusor->execute();




?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste //
                    <?php  
                    if ($_GET['durum']=="ok") {?>
                      <b style ="color:green";>İşlem Başarılı</b>
                    <?php } elseif ($_GET['durum']=="no") {?>
                      <b style ="color:red";>İşlem Başarısız</b>
                    <?php }
                    
                    ?></h4>
                  <p class="card-description">
                    Menü <code>.Listesi</code>
                  </p>
                  
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                        <th>Sıra No</th>
                          <th>Menü Ad</th>
                          <th>Menü Url</th>
                          <th>Menü Sıra</th>
                          <th>Menü Detay</th>
                          <th></th>
                          <th></th>
                          <th>                  <a href="menu-ekle.php"><button align = "rigth" class= "btn btn-success btn-xs" >Yeni Ekle</button></a></th>
                        </tr>
                      </thead>
                      <tbody>
                        
                         <?php 
                         $say = 0;
                         
                         while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {$say++?>
                        
                        <tr>
                        <td><?php echo $say ?></td>
                          <td><?php echo $menucek['menu_ad'] ?></td>
                          <td><?php echo $menucek['menu_url'] ?></td>
                          <td><?php echo $menucek['menu_sira'] ?></td>
                          <td><?php echo $menucek['menu_detay'] ?></td>
                          <td><center><a href="menu-res.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                          <td><center><a href="../netting/islem.php?menu_id=<?php echo $menucek[menu_id];?> &menusil=ok "><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                        </tr>

                         <?php }                        
                         ?>


                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        <!-- content-wrapper ends -->
     <?php include "footer.php" ?>