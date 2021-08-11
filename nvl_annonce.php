<?php

include "db_conn.php";

session_start();

$_SESSION["unique_id"] = 1;

if(isset($_SESSION["unique_id"])){
    $ID_LOCATAIRE = $_SESSION["unique_id"];


// function upload images //

// function uploadimage ($img_name){

//     $img_name = $_FILES[$img_name]['name'];
//     $img_size = $_FILES[$img_name]['size'];
//     $tmp_name = $_FILES[$img_name]['tmp_name'];
//     $error = $_FILES[$img_name]['error'];

//     if ($error === 0) {
//         if ($img_size > 1250000) {
//             $em = "Sorry, your file is too large.";
//             echo $em;
//             // header("Location: add_house.php");
//         }else {
//             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
//             $img_ex_lc = strtolower($img_ex);

//             $allowed_exs = array("jpg", "jpeg", "png"); 

//             if (in_array($img_ex_lc, $allowed_exs)) {
//                 $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
//                 $img_upload_path = 'image/'.$new_img_name;
//                 move_uploaded_file($tmp_name, $img_upload_path);
//                 return $new_img_name ; 
//             }else {
//                 $em = "You can't upload files of this type";
//                 echo $em;
//                 // header("Location: add_house.php");
//             }
//         }
//     }else {
//         $em = "unknown error occurred!";
//         echo $em;
//         // header("Location: add_house.php");
//     }
// };

$new_img_salle_bain_name = "hena";
$new_img_sallon_name  = "hena";


// type de l'annonce
if(isset($_POST["rtype"])){
    $typeannonce = $_POST["rtype"];
}
// type de location maison
if(isset($_POST["type_location"])){
    $typelocation = $_POST["type_location"];
}
// type de location appartement
if(isset($_POST["type_location_app"])){
    $typelocationapp = $_POST["type_location_app"];
}
// ville
if(isset($_POST["ville"])){
    $ville = $_POST["ville"];
}
//ville appartement
if(isset($_POST["ville_app"])){
    $villeapp = $_POST["ville_app"];
}
//ville chambre
if(isset($_POST["ville_cham"])){
    $villecham = $_POST["ville_cham"];
}
//secteur
if(isset($_POST["secteur"])){
    $secteur = $_POST["secteur"];
}
//secteur appartement
if(isset($_POST["secteur_app"])){
    $secteurapp = $_POST["secteur_app"];
}
//secteur chambre
if(isset($_POST["secteur_cham"])){
    $secteurcham = $_POST["secteur_cham"];
}
//adress
if(isset($_POST["adress"])){
    $adress = $_POST["adress"];
}
//adress appartement
if(isset($_POST["adress_app"])){
    $adressapp = $_POST["adress_app"];
}
//adress chambres
if(isset($_POST["adress_cham"])){
    $adresscham = $_POST["adress_cham"];
}

//////////////////////////////////////////// Etape 3 maison ///////////////////////////////////

if(isset($_POST["nbr_chambre"])){
    $nbr_chambre = $_POST["nbr_chambre"];
}

if(isset($_POST["nbr_toilet"])){
    $nbr_toilet = $_POST["nbr_toilet"];
}

if(isset($_POST["nbr_toilet"])){
    $nbr_toilet = $_POST["nbr_toilet"];
}

if(isset($_POST["nbr_sallon"])){
    $nbr_sallon = $_POST["nbr_sallon"];
}

if(isset($_POST["nbr_etage"])){
    $nbr_etage = $_POST["nbr_etage"];
}

if(isset($_POST["nbr_Surface"])){
    $nbr_Surface = $_POST["nbr_Surface"];
}

if(isset($_POST["frais_syndic"])){
    $frais_syndic = $_POST["frais_syndic"];
}

if(isset($_POST["details_sup"])){
    $details_sup = $_POST["details_sup"];
}

$Meuble_maison = false;
$Balcon_maison = false;
$Douche_maison = false;
$Cuisine_Equip_maison = false;

foreach ($_POST['details_sup'] as $service) {
    if($service == "Meuble"){
        $Meuble_maison = true;
    }elseif($service == "Balcon"){
        $Balcon_maison = true;
    }elseif($service == "Douche"){
        $Douche_maison = true;
    }elseif($service == "Cuisine_Equip"){
        $Cuisine_Equip_maison = true;
    }
}

// $img_cuisine_name = $_FILES['img_cuisine'];

if(isset($_FILES['img_cuisine'])){
    $img_cuisine_name = $_FILES['img_cuisine']['name'];
    $img_cuisine_size = $_FILES['img_cuisine']['size'];
    $img_cuisine_tmp_name = $_FILES['img_cuisine']['tmp_name'];
    $img_cuisine_error = $_FILES['img_cuisine']['error'];
}


if ($img_cuisine_error === 0) {
    if ($img_cuisine_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_cuisine_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_cuisine_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_cuisine_name;
            move_uploaded_file($img_cuisine_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}


// $img_salle_bain_name = $_FILES['img_salle_bain'];

if(isset($_FILES['img_salle_bain'])){
    $img_salle_bain_name = $_FILES['img_salle_bain']['name'];
    $img_salle_bain_size = $_FILES['img_salle_bain']['size'];
    $img_salle_bain_tmp_name = $_FILES['img_salle_bain']['tmp_name'];
    $img_salle_bain_error = $_FILES['img_salle_bain']['error'];
}


if ($img_salle_bain_error === 0) {
    if ($img_salle_bain_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_salle_bain_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_salle_bain_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_salle_bain_name;
            move_uploaded_file($img_salle_bain_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

// $img_sallon_name = $_FILES['img_sallon'];

if(isset($_FILES['img_sallon'])){
    $img_sallon_name = $_FILES['img_sallon']['name'];
    $img_sallon_size = $_FILES['img_sallon']['size'];
    $img_sallon_tmp_name = $_FILES['img_sallon']['tmp_name'];
    $img_sallon_error = $_FILES['img_sallon']['error'];
}


if ($img_sallon_error === 0) {
    if ($img_sallon_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_sallon_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_sallon_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_sallon_name;
            move_uploaded_file($img_sallon_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

if(isset($_POST['titre_annonce'])){
    $titre_annonce = $_POST['titre_annonce'];
}
if(isset($_POST['prix_maison'])){
    $prix_maison = $_POST['prix_maison'];
}
if(isset($_POST['description_annonce'])){
    $description_annonce = $_POST['description_annonce'];
}

for($i = 1; $i <= $nbr_chambre; $i++) {
    ${"nbr_max_chambre$i"} = $_POST["nbr_max_chambre$i"];
    ${"prix_cham$i"} = $_POST["prix_cham$i"];
    ${"desc_chambre$i"} = $_POST["desc_chambre$i"];
    // image chambre //
    // ${"img_chambre$i"+"_name"} = $_FILES["img_chambre$i"];
    // ${"img_chambre"+ $i +"_name"} = $_FILES["img_chambre$i"]["name"];
    if(isset($_FILES["img_chambre$i"])){
        $imgname = $_FILES["img_chambre$i"]["name"];
        // ${"img_chambre$i"+"size"} = $_FILES["img_chambre$i"]['size'];
        $imgsize = $_FILES["img_chambre$i"]['size'];
        // ${"img_chambre$i"+"_tmp_name"} = $_FILES["img_chambre$i"]['tmp_name'];
        $imgtmp = $_FILES["img_chambre$i"]['tmp_name'];
        // ${"img_chambre$i"+"error"} = $_FILES["img_chambre$i"]['error'];
        $imgerror = $_FILES["img_chambre$i"]['error'];
    }
    

    if ($imgerror === 0) {
        if ($imgsize > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: Registration_locataire.php?error=$em");
        }else {
            $img_ex = pathinfo($imgname, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
    
            $allowed_exs = array("jpg", "jpeg", "png"); 
    
            if (in_array($img_ex_lc, $allowed_exs)) {
                ${"new_img_chambre$i"+"_name"} = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'image/'.${"new_img_chambre$i"+"_name"};
                move_uploaded_file($imgtmp, $img_upload_path);
            }else {
                $em = "You can't upload files of this type";
                echo $em;
                // header("Location: add_house.php");
            }
        }
    }else {
        $em = "unknown error occurred!";
        echo $em;
        // header("Location: add_house.php");
    }

    ${"etage_selection$i"} = $_POST["etage_selection$i"];
}


//////////////////////////////////////////// Etape 3 appartement ///////////////////////////////////

if(isset($_POST["nbr_chambre_app"])){
    $nbr_chambre_app = $_POST["nbr_chambre_app"];
}

if(isset($_POST["nbr_toilet_app"])){
    $nbr_toilet_app = $_POST["nbr_toilet_app"];
}

if(isset($_POST["nbr_sallon_app"])){
    $nbr_sallon_app = $_POST["nbr_sallon_app"];
}

if(isset($_POST["nbr_etage_app"])){
    $nbr_etage_app = $_POST["nbr_etage_app"];
}

if(isset($_POST["nbr_Surface_app"])){
    $nbr_Surface_app = $_POST["nbr_Surface_app"];
}

if(isset($_POST["frais_syndic_app"])){
    $frais_syndic_app = $_POST["frais_syndic_app"];
}



$Meuble_app = false;
$Balcon_app = false;
$Douche_app = false;
$Cuisine_Equip_app = false;

if(isset($_POST["details_sup_app"])){
    $details_sup_app = $_POST["details_sup_app"];
    foreach ($details_sup_app as $service) {
        if($service == "Meuble"){
            $Meuble_app = true;
        }elseif($service == "Balcon"){
            $Balcon_app = true;
        }elseif($service == "Douche"){
            $Douche_app = true;
        }elseif($service == "Cuisine_Equip"){
            $Cuisine_Equip_app = true;
        }
    }
}



// $img_cuisine_app_name = $_FILES['img_cuisine_app'];

if(isset($_FILES['img_cuisine_app'])){
    $img_cuisine_app_name = $_FILES['img_cuisine_app']['name'];
    $img_cuisine_app_size = $_FILES['img_cuisine_app']['size'];
    $img_cuisine_app_tmp_name = $_FILES['img_cuisine_app']['tmp_name'];
    $img_cuisine_app_error = $_FILES['img_cuisine_app']['error'];
}


if ($img_cuisine_app_error === 0) {
    if ($img_cuisine_app_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_sallon_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_cuisine_app_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_cuisine_app_name;
            move_uploaded_file($img_cuisine_app_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

// $img_salle_bain_app_name = $_FILES['img_salle_bain_app'];

if(isset($_FILES['img_salle_bain_app'])){
    $img_salle_bain_app_name = $_FILES['img_salle_bain_app']['name'];
    $img_salle_bain_app_size = $_FILES['img_salle_bain_app']['size'];
    $img_salle_bain_app_tmp_name = $_FILES['img_salle_bain_app']['tmp_name'];
    $img_salle_bain_app_error = $_FILES['img_salle_bain_app']['error'];
}


if ($img_salle_bain_app_error === 0) {
    if ($img_salle_bain_app_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_salle_bain_app_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_salle_bain_app_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_salle_bain_app_name;
            move_uploaded_file($img_salle_bain_app_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

// $img_sallon_app_name = $_FILES['img_sallon_app'];

if(isset($_FILES['img_sallon_app'])){
    $img_sallon_app_name = $_FILES['img_sallon_app']['name'];
    $img_sallon_app_size = $_FILES['img_sallon_app']['size'];
    $img_sallon_app_tmp_name = $_FILES['img_sallon_app']['tmp_name'];
    $img_sallon_app_error = $_FILES['img_sallon_app']['error'];
}


if ($img_sallon_app_error === 0) {
    if ($img_sallon_app_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_sallon_app_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_sallon_app_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_sallon_app_name;
            move_uploaded_file($img_sallon_app_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}
if(isset($_POST['titre_annonce_app'])){
    $titre_annonce_app = $_POST['titre_annonce_app'];
}
if(isset($_POST['prix_annonce_app'])){
    $prix_app = $_POST['prix_annonce_app'];
}
if(isset($_POST['description_annonce_app'])){
    $description_annonce_app = $_POST['description_annonce_app'];

}


for($i = 1; $i <= $nbr_chambre; $i++) {
    ${"nbr_max_chambre$i"} = $_POST["nbr_max_chambre_app$i"];
    ${"prix_cham$i"} = $_POST["prix_cham_app$i"];
    ${"desc_chambre$i"} = $_POST["desc_chambre_app$i"];
    // image chambre //
    // ${"img_chambre_app$i"+"_name"} = $_FILES["img_chambre_app$i"];

    // ${"new_img_chambre_app$i"+"_name"} = uploadimage (${"img_chambre_app$i"+"_name"});
    
    if(isset($_FILES["img_chambre_app$i"])){
        $imgname = $_FILES["img_chambre_app$i"]['name'];
        $imgsize = $_FILES["img_chambre_app$i"]['size'];
        $imgtmp = $_FILES["img_chambre_app$i"]['tmp_name'];
        $imgerror = $_FILES["img_chambre_app$i"]['error'];
    }


    if ($imgerror === 0) {
        if ($imgsize > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: Registration_locataire.php?error=$em");
        }else {
            $img_ex = pathinfo($imgname, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
    
            $allowed_exs = array("jpg", "jpeg", "png"); 
    
            if (in_array($img_ex_lc, $allowed_exs)) {
                ${"new_img_chambre_app$i"+"_name"} = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'image/'.${"new_img_chambre_app$i"+"_name"};
                move_uploaded_file($imgtmp, $img_upload_path);
            }else {
                $em = "You can't upload files of this type";
                echo $em;
                // header("Location: add_house.php");
            }
        }
    }else {
        $em = "unknown error occurred!";
        echo $em;
        // header("Location: add_house.php");
    }
}

//////////////////////////////////////////// Etape 3 chambre ///////////////////////////////////

if(isset($_POST["nbr_toilet_cham"])){
    $nbr_toilet_cham = $_POST["nbr_toilet_cham"];
}

if(isset($_POST["nbr_sallon_cham"])){
    $nbr_sallon_cham = $_POST["nbr_sallon_cham"];
}

if(isset($_POST["nbr_Surface_cham"])){
    $nbr_Surface_cham = $_POST["nbr_Surface_cham"];
}

if(isset($_POST["frais_syndic_cham"])){
    $frais_syndic_cham = $_POST["frais_syndic_cham"];
}

if(isset($_POST["details_sup_cham"])){
    $details_sup_cham = $_POST["details_sup_cham"];
}


$Meuble_cham = false;
$Balcon_cham = false;
$Douche_cham = false;
$Cuisine_Equip_cham = false;

if(isset($_POST['details_sup_cham'])){

    foreach ($_POST['details_sup_cham'] as $service) {
        if($service == "Meuble"){
            $Meuble_cham = true;
        }elseif($service == "Balcon"){
            $Balcon_cham = true;
        }elseif($service == "Douche"){
            $Douche_cham = true;
        }elseif($service == "Cuisine_Equip"){
            $Cuisine_Equip_cham = true;
        }
    }
}


// $img_cuisine_cham_name = $_FILES['img_cuisine_cham'];

if(isset($_FILES['img_cuisine_cham'])){
    $img_cuisine_cham_name = $_FILES['img_cuisine_cham']['name'];
    $img_cuisine_cham_size = $_FILES['img_cuisine_cham']['size'];
    $img_cuisine_cham_tmp_name = $_FILES['img_cuisine_cham']['tmp_name'];
    $img_cuisine_cham_error = $_FILES['img_cuisine_cham']['error'];
}


if ($img_cuisine_cham_error === 0) {
    if ($img_cuisine_cham_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_cuisine_cham_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_cuisine_cham_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_cuisine_cham_name;
            move_uploaded_file($img_cuisine_cham_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

// $img_salle_bain_cham_name = $_FILES['img_salle_bain_cham'];

if(isset($_FILES['img_salle_bain_cham'])){
    $img_salle_bain_cham_name = $_FILES['img_salle_bain_cham']['name'];
    $img_salle_bain_cham_size = $_FILES['img_salle_bain_cham']['size'];
    $img_salle_bain_cham_tmp_name = $_FILES['img_salle_bain_cham']['tmp_name'];
    $img_salle_bain_cham_error = $_FILES['img_salle_bain_cham']['error'];
}


if ($img_salle_bain_cham_error === 0) {
    if ($img_salle_bain_cham_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_salle_bain_cham_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_salle_bain_cham_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_salle_bain_cham_name;
            move_uploaded_file($img_salle_bain_cham_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

// $img_sallon_cham_name = $_FILES['img_sallon_cham'];

if(isset($_FILES['img_sallon_cham'])){
    $img_sallon_cham_name = $_FILES['img_sallon_cham']['name'];
    $img_sallon_cham_size = $_FILES['img_sallon_cham']['size'];
    $img_sallon_cham_tmp_name = $_FILES['img_sallon_cham']['tmp_name'];
    $img_sallon_cham_error = $_FILES['img_sallon_cham']['error'];
}

if ($img_sallon_cham_error === 0) {
    if ($img_sallon_cham_size > 1250000) {
        $em = "Sorry, your file is too large.";
        header("Location: Registration_locataire.php?error=$em");
    }else {
        $img_ex = pathinfo($img_sallon_cham_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png"); 

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_sallon_cham_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'image/'.$new_img_sallon_cham_name;
            move_uploaded_file($img_sallon_cham_tmp_name, $img_upload_path);
        }else {
            $em = "You can't upload files of this type";
            echo $em;
            // header("Location: add_house.php");
        }
    }
}else {
    $em = "unknown error occurred!";
    echo $em;
    // header("Location: add_house.php");
}

if(isset($_POST['titre_annonce_cham'])){
    $titre_annonce_cham = $_POST['titre_annonce_cham'];
}
if(isset($_POST['prix_maison_cham'])){
    $prix_maison_cham = $_POST['prix_maison_cham'];
}
if(isset($_POST['description_annonce_cham'])){
    $description_annonce_cham = $_POST['description_annonce_cham'];
}

$type_destinataire_app = "male";
$type_destinataire_maison = "male";

// echo "hadi hia " + $nbr_max_chambre1;
// main code //

if($typeannonce == "maison"){

    $ID_MAISON = rand(time(), 100000000);
    
    if($typelocation == "complet"){

        $requete = $bd->prepare('INSERT INTO annonce_maison_villa values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $requete->bindValue(1,$ID_MAISON);
        $requete->bindValue(2,$ID_LOCATAIRE);
        $requete->bindValue(3,"complet");
        $requete->bindValue(4,$ville);
        $requete->bindValue(5,$secteur);
        $requete->bindValue(6,$adress);
        $requete->bindValue(7,$nbr_chambre);
        $requete->bindValue(8,$nbr_toilet);
        $requete->bindValue(9,$nbr_sallon);
        $requete->bindValue(10,$nbr_etage);
        $requete->bindValue(11,$type_destinataire_maison);
        $requete->bindValue(12,$nbr_Surface);
        $requete->bindValue(13,$frais_syndic);
        $requete->bindValue(14,$Meuble_maison);
        $requete->bindValue(15,$Balcon_maison);
        $requete->bindValue(16,$Douche_maison);
        $requete->bindValue(17,$Cuisine_Equip_maison);
        $requete->bindValue(18,$new_img_cuisine_name);
        $requete->bindValue(19,$new_img_salle_bain_name);
        $requete->bindValue(20,$new_img_sallon_name);
        $requete->bindValue(21,$titre_annonce);
        $requete->bindValue(22,$prix_maison);
        $requete->bindValue(23,$description_annonce);
        $requete->execute();


        for($i = 1; $i <= $nbr_chambre; $i++) {
            ${"ID_CHAM$i"}  = rand(time(), 100000000);
            ${"requete_cham$i"} = $bd->prepare('INSERT INTO chambres values (?,?,?,?,?,?,?,?)');
            ${"requete_cham$i"}->bindValue(1,${"ID_CHAM$i"});
            ${"requete_cham$i"}->bindValue(2,$ID_MAISON);
            ${"requete_cham$i"}->bindValue(3,NULL);
            // ${"requete_cham$i"}->bindValue(4,${"nbr_max_chambre$i"});
            ${"requete_cham$i"}->bindValue(4,2);
            ${"requete_cham$i"}->bindValue(5,NULL);
            ${"requete_cham$i"}->bindValue(6,${"desc_chambre$i"});
            ${"requete_cham$i"}->bindValue(7,${"etage_selection$i"});
            // ${"requete_cham$i"}->bindValue(8,${"new_img_chambre$i"+"_name"});
            ${"requete_cham$i"}->bindValue(8,NULL);
            ${"requete_cham$i"}->execute();
        }
        
 
    }elseif($typelocation == "etage"){

    }elseif($typelocation == "chambre"){

        $requete = $bd->prepare('INSERT INTO annonce_maison_villa values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $requete->bindValue(1,$ID_MAISON);
        $requete->bindValue(2,$ID_LOCATAIRE);
        $requete->bindValue(3,"complet");
        $requete->bindValue(4,$ville);
        $requete->bindValue(5,$secteur);
        $requete->bindValue(6,$adress);
        $requete->bindValue(7,$nbr_chambre);
        $requete->bindValue(8,$nbr_toilet);
        $requete->bindValue(9,$nbr_sallon);
        $requete->bindValue(10,$nbr_etage);
        $requete->bindValue(11,$type_destinataire_maison);
        $requete->bindValue(12,$nbr_Surface);
        $requete->bindValue(13,$frais_syndic);
        $requete->bindValue(14,$Meuble_maison);
        $requete->bindValue(15,$Balcon_maison);
        $requete->bindValue(16,$Douche_maison);
        $requete->bindValue(17,$Cuisine_Equip_maison);
        $requete->bindValue(18,$new_img_cuisine_name);
        $requete->bindValue(19,$new_img_salle_bain_name);
        $requete->bindValue(20,$new_img_sallon_name);
        $requete->bindValue(21,$titre_annonce);
        $requete->bindValue(22,NULL);
        $requete->bindValue(23,$description_annonce);
        $requete->execute();

        for($i = 1; $i <= $nbr_chambre; $i++) {
            ${"ID_CHAM$i"}  = rand(time(), 100000000);
            ${"requete_cham$i"} = $bd->prepare('INSERT INTO chambres values (?,?,?,?,?,?,?)');
            ${"requete_cham$i"}->bindValue(1,${"ID_CHAM$i"});
            ${"requete_cham$i"}->bindValue(2,$ID_MAISON);
            ${"requete_cham$i"}->bindValue(3,NULL);
            ${"requete_cham$i"}->bindValue(4,${"nbr_max_chambre$i"});
            ${"requete_cham$i"}->bindValue(5,${"prix_cham$i"});
            ${"requete_cham$i"}->bindValue(6,${"desc_chambre$i"});
            ${"requete_cham$i"}->bindValue(7,${"etage_selection$i"});
            ${"requete_cham$i"}->bindValue(8,${"new_img_chambre$i"+"_name"});
            ${"requete_cham$i"}->execute();
        }

    }

}elseif($typeannonce == "appartement"){

    $ID_APP = rand(time(), 100000000);

    if($typelocationapp = "complet"){

        $requete = $bd->prepare('INSERT INTO annonce_maison_villa values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $requete->bindValue(1,$ID_APP);
        $requete->bindValue(2,$ID_LOCATAIRE);
        $requete->bindValue(3,"complet");
        $requete->bindValue(4,$villeapp);
        $requete->bindValue(5,$secteurapp);
        $requete->bindValue(6,$adressapp);
        $requete->bindValue(7,$nbr_chambre_app);
        $requete->bindValue(8,$nbr_toilet_app);
        $requete->bindValue(9,$nbr_sallon_app);
        $requete->bindValue(11,$type_destinataire_app);
        $requete->bindValue(12,$nbr_Surface_app);
        $requete->bindValue(13,$frais_syndic_app);
        $requete->bindValue(14,$Meuble_app);
        $requete->bindValue(15,$Balcon_app);
        $requete->bindValue(16,$Douche_app);
        $requete->bindValue(17,$Cuisine_Equip_app);
        $requete->bindValue(18,$new_img_cuisine_app_name);
        $requete->bindValue(19,$new_img_salle_bain_app_name);
        $requete->bindValue(20,$new_img_sallon_app_name);
        $requete->bindValue(21,$titre_annonce_app);
        $requete->bindValue(22,$prix_app);
        $requete->bindValue(23,$description_annonce_app);
        $requete->execute();


        for($i = 1; $i <= $nbr_chambre; $i++) {
            ${"ID_CHAM$i"}  = rand(time(), 100000000);
            ${"requete_cham$i"} = $bd->prepare('INSERT INTO chambres values (?,?,?,?,?,?,?)');
            ${"requete_cham$i"}->bindValue(1,${"ID_CHAM$i"});
            ${"requete_cham$i"}->bindValue(2,NULL);
            ${"requete_cham$i"}->bindValue(3,$ID_APP);
            ${"requete_cham$i"}->bindValue(4,${"nbr_max_chambre$i"});
            ${"requete_cham$i"}->bindValue(5,NULL);
            ${"requete_cham$i"}->bindValue(6,${"desc_chambre$i"});
            ${"requete_cham$i"}->bindValue(7,${"etage_selection$i"});
            ${"requete_cham$i"}->bindValue(8,${"new_img_chambre$i"+"_name"});
            ${"requete_cham$i"}->execute();
        }

    }elseif($typelocationapp = "chambre"){

        $requete = $bd->prepare('INSERT INTO annonce_maison_villa values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $requete->bindValue(1,$ID_APP);
        $requete->bindValue(2,$ID_LOCATAIRE);
        $requete->bindValue(3,"complet");
        $requete->bindValue(4,$villeapp);
        $requete->bindValue(5,$secteurapp);
        $requete->bindValue(6,$adressapp);
        $requete->bindValue(7,$nbr_chambre_app);
        $requete->bindValue(8,$nbr_toilet_app);
        $requete->bindValue(9,$nbr_sallon_app);
        $requete->bindValue(11,$type_destinataire_app);
        $requete->bindValue(12,$nbr_Surface_app);
        $requete->bindValue(13,$frais_syndic_app);
        $requete->bindValue(14,$Meuble_app);
        $requete->bindValue(15,$Balcon_app);
        $requete->bindValue(16,$Douche_app);
        $requete->bindValue(17,$Cuisine_Equip_app);
        $requete->bindValue(18,$new_img_cuisine_app_name);
        $requete->bindValue(19,$new_img_salle_bain_app_name);
        $requete->bindValue(20,$new_img_sallon_app_name);
        $requete->bindValue(21,$titre_annonce_app);
        $requete->bindValue(22,NULL);
        $requete->bindValue(23,$description_annonce_app);
        $requete->execute();


        for($i = 1; $i <= $nbr_chambre; $i++) {
            ${"ID_CHAM$i"}  = rand(time(), 100000000);
            ${"requete_cham$i"} = $bd->prepare('INSERT INTO chambres values (?,?,?,?,?,?,?)');
            ${"requete_cham$i"}->bindValue(1,${"ID_CHAM$i"});
            ${"requete_cham$i"}->bindValue(2,NULL);
            ${"requete_cham$i"}->bindValue(3,$ID_APP);
            ${"requete_cham$i"}->bindValue(4,${"nbr_max_chambre$i"});
            ${"requete_cham$i"}->bindValue(5,${"prix_cham$i"});
            ${"requete_cham$i"}->bindValue(6,${"desc_chambre$i"});
            ${"requete_cham$i"}->bindValue(7,${"etage_selection$i"});
            ${"requete_cham$i"}->bindValue(8,${"new_img_chambre$i"+"_name"});
            ${"requete_cham$i"}->execute();
        }

    }

}elseif($typeannonce == "chambre"){
    $ID_CHAM = rand(time(), 100000000);
    $requete_cham = $bd->prepare('INSERT INTO annonce_chambre values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $requete_cham->bindValue(1,$ID_CHAM);
    $requete_cham->bindValue(2,$ID_LOCATAIRE);
    $requete_cham->bindValue(3,$villecham);
    $requete_cham->bindValue(4,$secteurapp);
    $requete_cham->bindValue(5,$adresscham);
    $requete_cham->bindValue(6,$nbr_toilet_cham);
    $requete_cham->bindValue(7,$nbr_sallon_cham);
    $requete_cham->bindValue(8,$nbr_Surface_cham);
    $requete_cham->bindValue(9,$frais_syndic_cham);
    $requete_cham->bindValue(10,$Meuble_cham);
    $requete_cham->bindValue(11,$Balcon_cham);
    $requete_cham->bindValue(12,$Douche_cham);
    $requete_cham->bindValue(13,$Cuisine_Equip_cham);
    $requete_cham->bindValue(14,$new_img_cuisine_cham_name);
    $requete_cham->bindValue(15,$new_img_salle_bain_cham_name);
    $requete_cham->bindValue(16,$new_img_sallon_cham_name);
    $requete_cham->bindValue(17,$titre_annonce_cham);
    $requete_cham->bindValue(18,$prix_maison_cham);
    $requete_cham->bindValue(19,$description_annonce_cham);
    $requete_cham->bindValue(20,$nbr_max_pers);
    $requete_cham->execute();
}

}else{
    echo "You are not connected";
    
}

?>