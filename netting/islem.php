<?php 
ob_start(); 
session_start();

include "baglan.php";
include "fonksiyon.php";

if (isset($_POST['admingiris'])) {

  
$kullanici_mail=$_POST['kullanici_mail'];
$kullanici_password=md5($_POST['kullanici_password']);

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
$kullanicisor->execute(array(
  'mail' => $kullanici_mail,
  'password' => $kullanici_password,
  'yetki' => 5
  ));

echo  $say = $kullanicisor->rowCount();


if ($say==1) {

$_SESSION['kullanici_mail=']=kullanici_mail;
header("Location:../admin/index.php?durum=ok");



} else {
    header("Location:../admin/login/index.php?durum=no");
}

}



if (isset($_POST['ayarkaydet'])) {
    
$ayarkaydet=$db->prepare("UPDATE ayar SET

    ayar_title=:ayar_title,
    ayar_description=:ayar_description,
    ayar_keywords=:ayar_keywords,
    ayar_author=:ayar_author

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(

  'ayar_title' => $_POST['ayar_title'],
  'ayar_description' => $_POST['ayar_description'],
  'ayar_keywords' => $_POST['ayar_keywords'],
  'ayar_author' => $_POST['ayar_author']

));

if ($update) {
    header("Location:../admin/basic_elements.php?durum=ok");
}  else {
    header("Location:../admin/basic_elements.php?durum=no");
}

}
 

if (isset($_POST['iletisimkaydet'])) {
    
$ayarkaydet=$db->prepare("UPDATE ayar SET

    ayar_tel=:ayar_tel,
    ayar_gsm=:ayar_gsm,
    ayar_faks=:ayar_faks,
    ayar_mail=:ayar_mail,
    ayar_ilce=:ayar_ilce,
    ayar_il=:ayar_il,
    ayar_adres=:ayar_adres,
    ayar_mesai=:ayar_mesai

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(

  'ayar_tel' => $_POST['ayar_tel'],
  'ayar_gsm' => $_POST['ayar_gsm'],
  'ayar_faks' => $_POST['ayar_faks'],
  'ayar_mail' => $_POST['ayar_mail'],
  'ayar_ilce' => $_POST['ayar_ilce'],
  'ayar_il' => $_POST['ayar_il'],
  'ayar_adres' => $_POST['ayar_adres'],
  'ayar_mesai' => $_POST['ayar_mesai']

));

if ($update) {
    header("Location:../admin/iletisim.php?durum=ok");
}  else {
    header("Location:../admin/iletisim.php?durum=no");
}

}

if (isset($_POST['sosyalkaydet'])) {
    
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    
        ayar_maps=:ayar_maps,
        ayar_analystic=:ayar_analystic,
        ayar_zopim=:ayar_zopim,
        ayar_facebook=:ayar_facebook,
        ayar_twitter=:ayar_twitter,
        ayar_google=:ayar_google,
        ayar_youtube=:ayar_youtube
    
    WHERE ayar_id=0");
    
    $update=$ayarkaydet->execute(array(
    
      'ayar_maps' => $_POST['ayar_maps'],
      'ayar_analystic' => $_POST['ayar_analystic'],
      'ayar_zopim' => $_POST['ayar_zopim'],
      'ayar_facebook' => $_POST['ayar_facebook'],
      'ayar_twitter' => $_POST['ayar_twitter'],
      'ayar_google' => $_POST['ayar_google'],
      'ayar_youtube' => $_POST['ayar_youtube']
    
    ));
    
    if ($update) {
        header("Location:../admin/sosyal.php?durum=ok");
    }  else {
        header("Location:../admin/sosyal.php?durum=no");
    }
    
    }

    if (isset($_POST['mailkaydet'])) {
    
        $ayarkaydet=$db->prepare("UPDATE ayar SET
        
            ayar_smtphost=:ayar_smtphost,
            ayar_smtpuser=:ayar_smtpuser,
            ayar_smtppassword=:ayar_smtppassword,
            ayar_smtpport=:ayar_smtpport,
            ayar_bakim=:ayar_bakim
        WHERE ayar_id=0");
        
        $update=$ayarkaydet->execute(array(
        
          'ayar_smtphost' => $_POST['ayar_smtphost'],
          'ayar_smtpuser' => $_POST['ayar_smtpuser'],
          'ayar_smtppassword' => $_POST['ayar_smtppassword'],
          'ayar_smtpport' => $_POST['ayar_smtpport'],
          'ayar_bakim' => $_POST['ayar_bakim']
        
        ));
        
        if ($update) {
            header("Location:../admin/Mail.php?durum=ok");
        }  else {
            header("Location:../admin/Mail.php?durum=no");
        }
        
        }




        if (isset($_POST['hakkimizdakaydet'])) {
    
            $ayarkaydet=$db->prepare("UPDATE hakkimizda SET
            
            hakkimizda_baslik=:hakkimizda_baslik,
            hakkimizda_icerik=:hakkimizda_icerik,
            hakkimizda_video=:hakkimizda_video,
            hakkimizda_vizyon=:hakkimizda_vizyon,
            hakkimizda_misyon=:hakkimizda_misyon
            WHERE hakkimizda_id=0");
            
            $update=$ayarkaydet->execute(array(
            
              'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
              'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
              'hakkimizda_video' => $_POST['hakkimizda_video'],
              'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
              'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
            
            ));
            
            if ($update) {
                header("Location:../admin/hakkımızda_ayar.php?durum=ok");
            }  else {
                header("Location:../admin/hakkımızda_ayar?durum=no");
            }
            
            }

            if (isset($_POST['kullanicikaydet'])) {

               $kullanici_id=$_POST['kullanici_id'];
    
                $ayarkaydet=$db->prepare("UPDATE kullanici SET
                
                kullanici_adsoyad=:kullanici_adsoyad,
                kullanici_zaman=:kullanici_zaman,
                kullanici_gsm=:kullanici_gsm,
                kullanici_mail=:kullanici_mail
                WHERE kullanici_id={$_POST['kullanici_id']}");
                
                $update=$ayarkaydet->execute(array(
                
                  'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
                  'kullanici_zaman' => $_POST['kullanici_zaman'],
                  'kullanici_gsm' => $_POST['kullanici_gsm'],
                  'kullanici_mail' => $_POST['kullanici_mail']
                
                ));
                
                if ($update) {
                    header("Location:../admin/restart.php?kullanici_id=$kullanici_id&durum=ok");
                }  else {
                    header("Location:../admin/restart.php?kullanici_id=$kullanici_id&durum=no");
                }
                
                }




                if ($_GET['kullanicisil']=="ok") {

                    $sil=$db->prepare("DELETE from kullanici where kullanici_id=:id");
                    $kontrol=$sil->execute(array(


                        'id'=> $_GET['kullanici_id']
                    ));

                    if ($kontrol) {
                        header("Location:../admin/basic-table.php?sil=ok");
                    }else{
                        header("Location:../admin/basic-table.php?sil=no");

                    }
                    





                }




                if (isset($_POST['menuduzenle'])) {

                    $kullanici_id=$_POST['menu_id'];
         
                     $ayarkaydet=$db->prepare("UPDATE menu SET
                     
                     menu_ad=:menu_ad,
                     menu_url=:menu_url,
                     menu_sira=:menu_sira,
                     menu_detay=:menu_detay
                     WHERE menu_id={$_POST['menu_id']}");
                     
                     $update=$ayarkaydet->execute(array(
                     
                       'menu_ad' => $_POST['menu_ad'],
                       'menu_url' => $_POST['menu_url'],
                       'menu_sira' => $_POST['menu_sira'],
                       'menu_detay' => $_POST['menu_detay']
                     
                     ));
                     
                     if ($update) {
                         header("Location:../admin/menu-ayar.php?menu_id=$menu_id&durum=ok");
                     }  else {
                         header("Location:../admin/menu-ayar.php?menu_id=$menu_id&durum=no");
                     }
                     
                     }


                     
                if ($_GET['menusil']=="ok") {

                    $sil=$db->prepare("DELETE from menu where menu_id=:id");
                    $kontrol=$sil->execute(array(


                        'id'=> $_GET['menu_id']
                    ));

                    if ($kontrol) {
                        header("Location:../admin/menu-ayar.php?durum=ok");
                    }else{
                        header("Location:../admin/menu-ayar.php?durum=no");

                    }
                
                }
                if (isset($_POST['menukaydet'])) {
                    error_reporting(E_ALL);
                    $menu_seourl=seo($_POST['menu_ad']);
                
             
                    $ayarekle=$db->prepare("INSERT INTO menu SET
                        menu_ad=:menu_ad,
                        menu_detay=:menu_detay,
                        menu_url=:menu_url,
                        menu_sira=:menu_sira,
                        menu_seourl=:menu_seourl,
                        menu_durum=:menu_durum
                        ");
                
                    $insert=$ayarekle->execute(array(
                        'menu_ad' => $_POST['menu_ad'],
                        'menu_detay' => $_POST['menu_detay'],
                        'menu_url' => $_POST['menu_url'],
                        'menu_sira' => $_POST['menu_sira'],
                        'menu_seourl' => $menu_seourl,
                        'menu_durum' => $_POST['menu_durum']
                        ));
                   
                
                    if ($insert) {
                
                        Header("Location:../admin/menu-ayar.php?durum=ok");
                
                    } else {
                   
                  
                        Header("Location:../admin/menu-ayar.php?durum=no");
                    }
                
                }
















?>
