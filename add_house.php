<!DOCTYPE html>
<html lang="en">
<?php include "db_conn.php"; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="http://www.phphive.info/wp-content/uploads/2014/10/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="author" content="Puneet Mehta">
    <meta name="description" content="Responsive MultiStep Form with Bootstrap and Jquery - www.PHPHive.info">
    <meta name="title" content="Responsive MultiStep Form with Bootstrap and Jquery - www.PHPHive.info">

    <title>Nouvelle Annonce</title>

    <!-- Bootstrap -->
    <link href="bootstrap_add/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap_add/css/bootstrap-social.css" rel="stylesheet">
    <link href="bootstrap_add/css/font-awesome.css" rel="stylesheet">
    <link href="css_add/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap_add/js/jquery-1.9.0.min.js"></script>
</head>

<body>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="http://www.phphive.info" target="_blank"><span class="glyphicon glyphicon-home"></span> PHPHive</a>
            </div>
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://www.phphive.info/category/php-for-beginners/">PHP for Beginners</a></li>
                    <li><a href="http://www.phphive.info/category/snippets/">Snippets</a></li>
                    <li><a href="http://www.phphive.info/about/">About</a></li>
                    <li><a href="http://www.phphive.info/contact/">Contact Us</a></li>
                    <li><a href="http://www.phphive.info/request-tutorial/">Request Tutorial</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mainbody">
        <div class="page-header">
            <h1>Nouvelle Annonce</h1>
        </div>
        <div class="clearfix"></div>
        <style>
            ul#stepForm,
            ul#stepForm li {
                margin: 0;
                padding: 0;
            }
            
            ul#stepForm li {
                list-style: none outside none;
            }
            
            label {
                margin-top: 10px;
            }
            
            .help-inline-error {
                color: red;
            }
        </style>

        <script>
            function toggleText(vr1,vr2,vr3) {
                x = document.getElementById(vr1);
                y = document.getElementById(vr2);
                z = document.getElementById(vr3);
                document.getElementById("btn_next").disabled = false;
                x.style.display = "block";
                y.style.display = "none";
                z.style.display = "none";
            }
        </script>
        
        <div class="container" style="padding-left: 0px; padding-right: 15px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Merci de compléter ces 4 étapes</h3>
                </div>
                <div class="panel-body">
                    <form name="basicform" id="basicform" method="post" action="nvl_annonce.php" enctype="multipart/form-data">
                        <div id="sf1" class="frm">
                            <fieldset>
                                <script>
                                    function rdtype(var0){
                                        document.getElementById(var0).checked = true;
                                    }
                                </script>
                                <legend>Etape 1 sur 4</legend>
                                <h2>Merci de choisir le type de votre propriété</h2>
                                <div class="cnt_type">
                                    <input type="radio" name="rtype" value="maison" id="1" style="display: none;">
                                    <div class="type_1 type">
                                        <button type="button" onclick="toggleText('Myid','Myid1','Myid2'); hadi('maison'); rdtype('1');">
                                            <img src="images_add/maison_villa.png" alt="maison et villa">
                                            <p>Maison et Villa</p>
                                        </button>
                                    </div>
                                    <input type="radio" name="rtype" value="appartement" id="2" style="display: none;">
                                    <div class="type_2 type">
                                        <button type="button" onclick="toggleText('Myid1','Myid','Myid2'); hadi('appartement'); rdtype('2');">
                                            <img src="images_add/appartement.png" alt="appartement">
                                            <p>Appartement</p>
                                        </button>
                                    </div>
                                    <input type="radio" name="rtype" value="chambre" id="3" style="display: none;">
                                    <div class="type_3 type">
                                        <button type="button" onclick="toggleText('Myid2','Myid','Myid1'); hadi('Chambre'); rdtype('3');">
                                            <img src="images_add/chambre.png" alt="Chambre">
                                            <p>Chambre</p>
                                        </button>
                                    </div>
                                </div>

                                <div class="clearfix" style="height: 10px;clear: both;"></div>


                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-primary open1" type="button" onClick="return false;" id="btn_next">Next <span class="fa fa-arrow-right"></span></button>
                                    </div>
                                    <script>document.getElementById("btn_next").disabled = true;</script>
                                </div>

                            </fieldset>
                        </div>

                        <div id="sf2" class="frm" style="display: none;">
                            <fieldset>
                                <legend>Etape 2 sur 4</legend>
                                <div id="Myid">
                                    <div class="type_location">
                                        <label for="type_location"><span class="oblig">*</span> Location par : </label><br>
                                        <select name="type_location" id="type_location">
                                            <option value="complet">Maison/Villa complet</option>
                                            <option value="etage">Etage</option>
                                            <option value="chambre">Chambre</option>
                                        </select>
                                    </div>
                                    <script type="text/javascript">
                                        function findmyvalue() {
                                            var myval = document.getElementById("ville").value;
                                            document.getElementById("jadid").innerHTML = myval;
                                        }
                                    </script>
                                    <div class="ville">
                                        <label for="ville"><span  class="oblig">*</span> Ville : </label><br>
                                        <select name="ville" id="ville" onchange="findmyvalue();">
                                            <?php
                                                $requete_ville = $bd->prepare('SELECT `NOM_VILLE`,`ID_VILLE` FROM `villes`');
                                                $requete_ville->execute();
                                                $tab = $requete_ville->fetchAll(PDO::FETCH_ASSOC);
                                                foreach($tab as $tab1){
                                                    echo "<option value='".$tab1["ID_VILLE"]."' class='".$tab1["ID_VILLE"]."'>".$tab1["NOM_VILLE"]."</option>";
                                                };
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <?php 
                                    $requete_secteur = $bd->prepare('SELECT `NOM_SECTEUR`,`ID_VILLE` FROM `secteurs`');
                                    $requete_secteur->execute();
                                    $tab2 = $requete_secteur->fetchAll(PDO::FETCH_ASSOC);
                                    ?>
                                    <div class="secteur">
                                        <label for="secteur"><span class="oblig">*</span> Secteur : </label><br>
                                        <select name="secteur" id="type_location">
                                            <?php
                                                foreach($tab2 as $tab3){
                                                        echo "<option value='1' class='".$tab3["ID_VILLE"]."'>".$tab3["NOM_SECTEUR"]."</option>";
                                                };
                                            ?>
                                            <option value="2" id="jadid"></option>
                                        </select>
                                    </div>
                                    <div class="adress">
                                        <label for="adress">Adress :</label><br>
                                        <input name="adress" class="h_input" type="text">
                                    </div>
                                </div>
                                
                                <!-- my id 1 -->
                                
                                <div id="Myid1">
                                    <div class="type_location">
                                        <label for="type_location"><span  class="oblig">*</span> Location par : </label><br>
                                        <select name="type_location_app" id="type_location">
                                            <option value="complet">Appartement complet</option>
                                            <option value="chambre">Chambre</option>
                                        </select>
                                    </div>
                                    <div class="ville">
                                        <label for="ville"><span  class="oblig">*</span> Ville : </label><br>
                                        <select name="ville_app" id="ville" onchange="findmyvalue()">
                                            <option value="Meknes">Meknes</option>
                                            <option value="Rabat">Rabat</option>
                                            <option value="Fes">Fes</option>
                                        </select>
                                    </div>

                                    <script type="text/javascript">
                                        function findmyvalue() {
                                            var myval = document.getElementById("ville").value;
                                            document.cookie = "ville = " + myval;
                                            document.getElementById("jadid").innerHTML = myval;
                                        }
                                    </script>
                                    
                                    <div class="secteur">
                                        <label for="secteur"><span  class="oblig">*</span> Secteur : </label><br>
                                        <select name="secteur_app" id="type_location">
                                            <option value="Meknes">Mansour</option>
                                            <option value="Rabat">Marjane</option>
                                            <option value="Fes">Hamria</option>
                                            <option value="Jdid" id="jadid"></option>
                                        </select>
                                    </div>
                                    <div class="adress">
                                        <label for="adress">Adress :</label><br>
                                        <input name="adress_app" class="h_input" type="text">
                                    </div>
                                </div>

                                <!-- my id 2 chambre -->

                                <div id="Myid2">
                                    <div class="ville">
                                        <label for="ville"><span  class="oblig">*</span> Ville : </label><br>
                                        <select name="ville_cham" id="ville" onchange="findmyvalue()">
                                            <option value="Meknes">Meknes</option>
                                            <option value="Rabat">Rabat</option>
                                            <option value="Fes">Fes</option>
                                        </select>
                                    </div>

                                    <script type="text/javascript">
                                        function findmyvalue() {
                                            var myval = document.getElementById("ville").value;
                                            document.getElementById("jadid").innerHTML = myval;
                                        }
                                    </script>
                                    
                                    <div class="secteur">
                                        <label for="secteur"><span class="oblig">*</span> Secteur : </label><br>
                                        <select name="secteur_cham" id="type_location">
                                            <option value="Mansour">Mansour</option>
                                            <option value="Marjane">Marjane</option>
                                            <option value="Hamria">Hamria</option>
                                            <option value="Jdid" id="jadid"></option>
                                        </select>
                                    </div>
                                    <div class="adress">
                                        <label for="adress">Adress :</label><br>
                                        <input name="adress_cham" class="h_input" type="text">
                                    </div>
                                </div>


                                <div class="clearfix" style="height: 10px;clear: both;"></div>



                                <div class="clearfix" style="height: 10px;clear: both;"></div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                                        <button class="btn btn-primary open2" type="button">Next <span class="fa fa-arrow-right"></span></button>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <!-- etape3 -->

                        <script>
                            function hadi(var1){
                                var a = document.getElementById("Myid3");
                                var b = document.getElementById("Myid4");
                                var c = document.getElementById("Myid5");
                                if (var1 == 'maison'){
                                    a.style.display = "block";
                                    b.style.display = "none";
                                    c.style.display = "none";
                                }
                                if (var1 == 'appartement'){
                                    a.style.display = "none";
                                    b.style.display = "block";
                                    c.style.display = "none";
                                }
                                if (var1 == 'Chambre'){
                                    a.style.display = "none";
                                    b.style.display = "none";
                                    c.style.display = "block";
                                }
                            }
                        </script>

                        <div id="sf3" class="frm" style="display: none;">
                            <fieldset>
                                <legend>Etape 3 sur 4</legend>
                                <div id="Myid3">
                                    <div class="details">
                                        <h2>Détails Du Bien</h2>
                                        <div class="cnt_details">
                                            <div class="nbr_chambre contain">
                                                <label for="nbr_chambre" class="titre_details">Chambres</label>
                                                <div class="select_details">
                                                    <select name="nbr_chambre" id="nbr_chambre" onchange="findmyvaluechambre();">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_toilet contain">
                                                <label for="nbr_toilet" class="titre_details">Toilet</label>
                                                <div class="select_details">
                                                    <select name="nbr_toilet" id="nbr_toilet">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_sallon contain">
                                                <label for="nbr_sallon" class="titre_details">Sallon</label>
                                                <div class="select_details">
                                                    <select name="nbr_sallon" id="nbr_sallon">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_etage contain">
                                                <label for="nbr_etage" class="titre_details">Etage</label>
                                                <div class="select_details">
                                                    <select name="nbr_etage" id="nbr_etage" onchange="etage_nub();">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="Surface contain">
                                                <label for="nbr_Surface" class="titre_details">Surface</label>
                                                <input type="text" name="nbr_Surface" class="input_Surface detail_input h_input"/>
                                            </div>

                                            <div class="frais_syndic contain">
                                                <label for="frais_syndic" class="titre_details">Frais syndic</label>
                                                <input type="text" name="frais_syndic" class="input_frais_syndic detail_input h_input"/>
                                            </div>
                                            
                                        </div>
                                        <hr/>
                                        <div class="Details_supplementaires">
                                            <h2>Détails supplémentaires</h2>
                                            <!-- hena  -->
                                            <div class="Details_supplementaires_cheack">
                                                <label class="container">Meublé
                                                    <input name="details_sup[]" class="h_input" type="checkbox" value="Meuble" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container">Balcon
                                                    <input name="details_sup[]" class="h_input" type="checkbox" value="Balcon">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container">Douche
                                                    <input name="details_sup[]" class="h_input" value="Douche" type="checkbox">
                                                    <span class="checkmark"></span>
                                   
                                                </label>
                                                <label class="container">Cuisine Equipée
                                                    <input name="details_sup[]" class="h_input" value="Cuisine_Equip" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="images_supp">
                                                <div class="img_supp">
                                                    <div>Image Cuisine</div>
                                                    <input name="img_cuisine" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Salle de Bain</div>
                                                    <input name="img_salle_bain" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Sallon</div>
                                                    <input name="img_sallon" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                            </div>
                                            <!-- hena -->
                                        </div>
                                    </div>

                                    <div class="DESCRIPTION">
                                        <h2 style="text-align: center;">Description General</h2>
                                        <div class="description_container">
                                            <div class="element">
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Titre de l'annonce :</div>
                                                    <input name="titre_annonce" id="titre_annonce" class="h_input" type="text">
                                                </div>
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Prix : </div>
                                                    <input name="prix_maison" id="prix_tous" class="h_input" type="text" disabled>
                                                </div>
                                            </div>
                                            <div class="hn description_annonce_cnt">
                                                    <div class="description_annonce descr"><span>*</span> Description de l'annonce :</div>
                                                    <textarea name="description_annonce" class="input_descrip h_input" style="height: 200px; padding:5px;" placeholder="La chambre a une fenetre et bien ensoleillée"></textarea>
                                            </div>
                                        </div>
                                        <script>
                                            
                                            document.getElementById("prix_tous").disabled = false;
                                        </script>
                                        <div id="chambres" class="chambres">   
                                            <div id="chamb">
                                                <h2 id="titre_chamb" style="text-align: center;">Chambre</h2>
                                                <div class="element">
                                                    <div class="hn">
                                                        <div id="titre_annonce" class="titre_annonce descr"><span>*</span> Nombre Max de Personne :</div>
                                                        <input name="nbr_max_chambre1" class="h_input" type="number">
                                                    </div>
                                                    <div class="hn">
                                                        <div class="titre_annonce descr"><span>*</span> Prix : </div>
                                                        <input name="prix_cham1" class="h_input prix_specific" type="number">
                                                    </div>
                                                </div>
                                                <div class="hn description_annonce_cnt">
                                                        <div class="description_annonce descr"><span>*</span> Description de la chambre :</div>
                                                        <textarea name="desc_chambre1" class="input_descrip h_input" style="height: 200px; padding:5px;" placeholder="La chambre a une fenetre et bien ensoleillée"></textarea>
                                                </div>
                                                <div>
                                                    <div>Telecharger Image Chambre</div>
                                                    <input name="img_chambre1" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="cnt_etage_selection">
                                                    <label for="etage_selection">Etage de La Chambre :</label>
                                                    <select name="etage_selection1" id="etage_selection" class="etage_selection" style="width: 50px; border-radius: 15px; background-color: #3fb6187d;"></select>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function findmyvaluechambre() {
                                                etage_nub();
                                                var myval = document.getElementById("nbr_chambre").value;
                                                document.getElementById("chambres").innerHTML = "<div id='chamb'><h2 style='text-align: center;'>Chambre</h2><div class='element'><div class='hn'><div class='titre_annonce descr'><span>*</span> Nombre Max de Personne :</div><input name='nbr_max_chambre1' class='h_input' type='text'></div><div class='hn'><div class='titre_annonce descr'><span>*</span> Prix : </div><input name='prix_cham1' class='h_input' type='number'></div></div><div class='hn description_annonce_cnt'><div class='description_annonce descr'><span>*</span> Description de l'annonce :</div><textarea name='desc_chambre1' class='input_descrip h_input' style='height: 200px;' placeholder='La chambre a une fenetre et bien ensoleillée'></textarea></div><div><div>Telecharger Image</div><input name='img_chambre1' type='file' id='file' /><label for='file' class='btn-2'>upload</label></div><div class='cnt_etage_selection'><label for='etage_selection'>Etage de La Chambre :</label><select name='etage_selection1' id='etage_selection' style='width: 50px; border-radius: 15px; background-color: #3fb6187d;'></select></div></div>";
                                                for(let i=1;i<myval;i++){
                                                    document.getElementById("chambres").innerHTML = document.getElementById("chambres").innerHTML + "<div id='chamb'><h2 style='text-align: center;'>Chambre</h2><div class='element'><div class='hn'><div class='titre_annonce descr'><span>*</span> Nombre Max de Personne :</div><input name='nbr_max_chambre" + (i+1) + "' class='h_input' type='text'></div><div class='hn'><div class='titre_annonce descr'><span>*</span> Prix : </div><input name='prix_cham" + i + "' class='h_input' type='number'></div></div><div class='hn description_annonce_cnt'><div class='description_annonce descr'><span>*</span> Description de l'annonce :</div><textarea name='desc_chambre" + i +"' class='input_descrip h_input' style='height: 200px;' placeholder='La chambre a une fenetre et bien ensoleillée'></textarea></div><div><div>Telecharger Image</div><input name='img_chambre" + i + "' type='file' id='file' /><label for='file' class='btn-2'>upload</label></div><div class='cnt_etage_selection'><label for='etage_selection'>Etage de La Chambre :</label><select name='etage_selection" + i + "' id='etage_selection"+ i +"' style='width: 50px; border-radius: 15px; background-color: #3fb6187d;'></select></div></div>";
                                                    //document.getElementById("titre_chamb").innerHTML = "Chambre " + i;
                                                    var myvaletage = document.getElementById("nbr_etage").value;
                                                    var nmvar = "etage_selection" + i;
                                                    document.getElementById(nmvar).innerHTML = "<option value='1'>1</option>";
                                                    for(let i=2;i<=myvaletage;i++){
                                                        document.getElementById(nmvar).innerHTML = document.getElementById(nmvar).innerHTML + "<option value=" + i + ">"+ i +"</option>";
                                                    }
                                                }
                                            }
                                        </script>
                                        <script>
                                            function etage_nub(){
                                                var myvaletage = document.getElementById("nbr_etage").value;
                                                document.getElementById("etage_selection").innerHTML = "<option value='1'>1</option>";
                                                    for(let i=2;i<=myvaletage;i++){
                                                        document.getElementById("etage_selection").innerHTML = document.getElementById("etage_selection").innerHTML + "<option value=" + i + ">"+ i +"</option>";
                                                    }
                                                var myval = document.getElementById("nbr_chambre").value;
                                                for(let i=1;i<myval;i++){
                                                    var nmvar = "etage_selection" + i;
                                                    for(let i=2;i<=myvaletage;i++){
                                                        document.getElementById(nmvar).innerHTML = document.getElementById(nmvar).innerHTML + "<option value=" + i + ">"+ i +"</option>";
                                                    }
                                                }
                                            }
                                                            
                                        </script>
                                    </div>
                                </div>

                                <!-- hena -->

                                <div id="Myid4">
                                    <div class="details">
                                        <h2>Détails Du Bien</h2>
                                        <div class="cnt_details">
                                            <div class="nbr_chambre contain">
                                                <label for="nbr_chambre" class="titre_details">Chambres</label>
                                                <div class="select_details">
                                                    <select name="nbr_chambre_app" id="nbr_chambre1" onchange="findmyvaluechambre1();">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_toilet contain">
                                                <label for="nbr_toilet" class="titre_details">Toilet</label>
                                                <div class="select_details">
                                                    <select name="nbr_toilet_app" id="nbr_toilet">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_sallon contain">
                                                <label for="nbr_sallon" class="titre_details">Sallon</label>
                                                <div class="select_details">
                                                    <select name="nbr_sallon_app" id="nbr_sallon">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_etage contain">
                                                <label for="nbr_etage" class="titre_details">Num Etage</label>
                                                <div class="select_details">
                                                    <select name="nbr_etage_app" id="nbr_etage1">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="Surface contain">
                                                <label for="nbr_Surface" class="titre_details">Surface</label>
                                                <input type="text" name="nbr_Surface_app" class="input_Surface detail_input h_input"/>
                                            </div>

                                            <div class="frais_syndic contain">
                                                <label for="frais_syndic" class="titre_details">Frais syndic</label>
                                                <input type="text" name="frais_syndic_app" class="input_frais_syndic detail_input h_input"/>
                                            </div>
                                            
                                        </div>
                                        <hr/>
                                        <div class="Details_supplementaires">
                                            <h2>Détails supplémentaires</h2>
                                            <!-- hena  -->
                                            <div class="Details_supplementaires_cheack">
                                                <label class="container">Meublé
                                                    <input name="details_sup_app[]" class="h_input" type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container">Balcon
                                                    <input name="details_sup_app[]" class="h_input" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container">Douche
                                                    <input name="details_sup_app[]" class="h_input" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container">Cuisine Equipée
                                                    <input name="details_sup_app[]" class="h_input" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="images_supp">
                                                <div class="img_supp">
                                                    <div>Image Cuisine</div>
                                                    <input name="img_cuisine_app" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Salle de Bain</div>
                                                    <input name="img_salle_bain_app" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Sallon</div>
                                                    <input name="img_sallon_app" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                            </div>
                                            <!-- hena -->
                                        </div>
                                    </div>

                                    <div class="DESCRIPTION">
                                        <h2 style="text-align: center;">Description General</h2>
                                        <div class="description_container">
                                            <div class="element">
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Titre de l'annonce :</div>
                                                    <input name="titre_annonce_app" id="titre_annonce" class="h_input" type="text">
                                                </div>
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Prix : </div>
                                                    <input name="prix_annonce_app" id="prix_tous" class="h_input" type="number" disabled>
                                                </div>
                                            </div>
                                            <div class="hn description_annonce_cnt">
                                                    <div class="description_annonce descr"><span>*</span> Description de l'annonce :</div>
                                                    <textarea name="description_annonce_app" class="input_descrip h_input" style="height: 200px; padding:5px;" placeholder="La chambre a une fenetre et bien ensoleillée"></textarea>
                                            </div>
                                        </div>
                                        <script>
                                            
                                            document.getElementById("prix_tous").disabled = false;
                                        </script>
                                        <div id="chambres1" class="chambres">   
                                            <div id="chamb">
                                                <h2 id="titre_chamb" style="text-align: center;">Chambre</h2>
                                                <div class="element">
                                                    <div class="hn">
                                                        <div id="titre_annonce" class="titre_annonce descr"><span>*</span> Nombre Max de Personne :</div>
                                                        <input name="nbr_max_chambre_app1" class="h_input" type="number">
                                                    </div>
                                                    <div class="hn">
                                                        <div class="titre_annonce descr"><span>*</span> Prix : </div>
                                                        <input name="prix_cham_app1" class="h_input prix_specific" type="number">
                                                    </div>
                                                </div>
                                                <div class="hn description_annonce_cnt">
                                                        <div class="description_annonce descr"><span>*</span> Description de la chambre :</div>
                                                        <textarea name="desc_chambre_app1" class="input_descrip h_input" style="height: 200px; padding:5px;" placeholder="La chambre a une fenetre et bien ensoleillée"></textarea>
                                                </div>
                                                <div>
                                                    <div>Telecharger Image Chambre</div>
                                                    <input name="img_chambre_app1" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>

                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function findmyvaluechambre1() {
                                                var myval = document.getElementById("nbr_chambre1").value;
                                                document.getElementById("chambres1").innerHTML = "<div id='chamb'><h2 style='text-align: center;'>Chambre</h2><div class='element'><div class='hn'><div class='titre_annonce descr'><span>*</span> Nombre Max de Personne :</div><input name='nbr_max_chambre_app1' class='h_input' type='text'></div><div class='hn'><div class='titre_annonce descr'><span>*</span> Prix : </div><input name='prix_cham_app1' class='h_input' type='text'></div></div><div class='hn description_annonce_cnt'><div class='description_annonce descr'><span>*</span> Description de l'annonce :</div><textarea name='desc_chambre_app1' class='input_descrip h_input' style='height: 200px;' placeholder='La chambre a une fenetre et bien ensoleillée'></textarea></div><div><div>Telecharger Image</div><input name='img_chambre_app1' type='file' id='file' /><label for='file' class='btn-2'>upload</label></div></div>";
                                                for(let i=1;i<myval;i++){
                                                    document.getElementById("chambres1").innerHTML = document.getElementById("chambres1").innerHTML + "<div id='chamb'><h2 style='text-align: center;'>Chambre</h2><div class='element'><div class='hn'><div class='titre_annonce descr'><span>*</span> Nombre Max de Personne :</div><input name='nbr_max_chambre_app" + i +"' class='h_input' type='text'></div><div class='hn'><div class='titre_annonce descr'><span>*</span> Prix : </div><input name='prix_cham_app" + i + "' class='h_input' type='text'></div></div><div class='hn description_annonce_cnt'><div class='description_annonce descr'><span>*</span> Description de l'annonce :</div><textarea name='desc_chambre_app" + i + "' class='input_descrip h_input' style='height: 200px;' placeholder='La chambre a une fenetre et bien ensoleillée'></textarea></div><div><div>Telecharger Image</div><input name='img_chambre_app" + i + "' type='file' id='file' /><label for='file' class='btn-2'>upload</label></div></div>";
                                                }
                                            }
                                        </script>
                                        
                                    </div>
                                </div>

                                <!-- hena -->

                                <div id="Myid5">
                                    <div class="details">
                                        <h2>Détails Du Bien</h2>
                                        <div class="cnt_details">
                                            <div class="nbr_toilet contain">
                                                <label for="nbr_toilet" class="titre_details">Toilet</label>
                                                <div class="select_details">
                                                    <select name="nbr_toilet_cham" id="nbr_toilet">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="nbr_sallon contain">
                                                <label for="nbr_sallon" class="titre_details">Sallon</label>
                                                <div class="select_details">
                                                    <select name="nbr_sallon_cham" id="nbr_sallon">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="Surface contain">
                                                <label for="nbr_Surface" class="titre_details">Surface</label>
                                                <input type="text" name="nbr_Surface_cham" class="input_Surface detail_input h_input"/>
                                            </div>

                                            <div class="frais_syndic contain">
                                                <label for="frais_syndic" class="titre_details">Frais syndic</label>
                                                <input type="text" name="frais_syndic_cham" class="input_frais_syndic detail_input h_input"/>
                                            </div>
                                            
                                        </div>
                                        <hr/>
                                        <div class="Details_supplementaires">
                                            <h2>Détails supplémentaires</h2>
                                            <!-- hena  -->
                                            <div class="Details_supplementaires_cheack">
                                                <label class="container">Meublé
                                                    <input class="h_input" type="checkbox" checked="checked">
                                                    <span name="details_sup_cham[]" class="checkmark"></span>
                                                </label>
                                                <label class="container">Balcon
                                                    <input class="h_input" type="checkbox">
                                                    <span name="details_sup_cham[]" class="checkmark"></span>
                                                </label>
                                                <label class="container">Douche
                                                    <input class="h_input" type="checkbox">
                                                    <span name="details_sup_cham[]" class="checkmark"></span>
                                                </label>
                                                <label class="container">Cuisine Equipée
                                                    <input class="h_input" type="checkbox">
                                                    <span name="details_sup_cham[]" class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="images_supp">
                                                <div class="img_supp">
                                                    <div>Image Cuisine</div>
                                                    <input name="img_cuisine_cham" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Salle de Bain</div>
                                                    <input name="img_salle_bain_cham" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                                <div class="img_supp">
                                                    <div>Image Sallon</div>
                                                    <input name="img_sallon_cham" type="file" id="file" />
                                                    <label for="file" class="btn-2">upload</label>
                                                </div>
                                            </div>
                                            <!-- hena -->
                                        </div>
                                    </div>

                                    <div class="DESCRIPTION">
                                        <h2 style="text-align: center;">Description General</h2>
                                        <div class="description_container">
                                            <div class="element">
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Titre de l'annonce :</div>
                                                    <input name="titre_annonce_cham" id="titre_annonce" class="h_input" type="text">
                                                </div>
                                                <div class="hn">
                                                    <div class="titre_annonce descr"><span>*</span> Prix : </div>
                                                    <input name="prix_maison_cham" id="prix_tous" class="h_input" type="text" disabled>
                                                </div>
                                            </div>
                                            <div class="hn description_annonce_cnt">
                                                    <div class="description_annonce descr"><span>*</span> Description de l'annonce :</div>
                                                    <textarea name="description_annonce_cham" class="input_descrip h_input" style="height: 200px; padding:5px;" placeholder="La chambre a une fenetre et bien ensoleillée"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="clearfix" style="height: 10px;clear: both;"></div>


                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                                        <button class="btn btn-primary open3" type="button" onClick="return false;" id="btn_next">Next <span class="fa fa-arrow-right"></span></button>
                                    </div>
                                    <script>document.getElementById("btn_next").disabled = true;</script>
                                </div>
                              
                            </fieldset>
                        </div>

                        <!-- fin etape 3 -->

                        <div id="sf4" class="frm" style="display: none;">
                            <fieldset>
                                <legend>Step 4 sur 4</legend>

                                <p><input type="checkbox" name="terms" required > I accept the <u>Terms and Conditions</u></p>


                                <div class="clearfix" style="height: 10px;clear: both;"></div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-warning back4" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                                        <button class="btn btn-primary open4" type="button">Submit </button>
                                        <img src="spinner.gif" alt="" id="loader" style="display: none">
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>


        </div>
        <script type="text/javascript" src="jquery.validate.js"></script>
        <script type="text/javascript">
            jQuery().ready(function() {

                // validate form on keyup and submit
                var v = jQuery("#basicform").validate({
                    rules: {
                        uname: {
                            required: true,
                            minlength: 2,
                            maxlength: 16
                        },
                        uemail: {
                            required: true,
                            minlength: 2,
                            email: true,
                            maxlength: 100,
                        },
                        upass1: {
                            required: true,
                            minlength: 6,
                            maxlength: 15,
                        },
                        upass2: {
                            required: true,
                            minlength: 6,
                            equalTo: "#upass1",
                        }

                    },
                    errorElement: "span",
                    errorClass: "help-inline-error",
                });

                $(".open1").click(function() {
                    if (v.form()) {
                        $(".frm").hide("fast");
                        $("#sf2").show("slow");
                    }
                });

                $(".open2").click(function() {
                    if (v.form()) {
                        $(".frm").hide("fast");
                        $("#sf3").show("slow");
                    }
                });

                $(".open3").click(function() {
                    if (v.form()) {
                        $(".frm").hide("fast");
                        $("#sf4").show("slow");
                    }
                });

                $(".open4").click(function() {
                    if (v.form()) {
                        $("#loader").show();
                        setTimeout(function() {
                            $("#basicform").html('<h2>KriBclick vous remercie de votre patience</h2>');
                        }, 1000);
                        $("#basicform").submit();
                        return false;
                    }
                });

                $(".back2").click(function() {
                    $(".frm").hide("fast");
                    $("#sf1").show("slow");
                });

                $(".back3").click(function() {
                    $(".frm").hide("fast");
                    $("#sf2").show("slow");
                });

                $(".back4").click(function() {
                    $(".frm").hide("fast");
                    $("#sf3").show("slow");
                });

            });
        </script>


        <footer>
            <div class="navbar navbar-inverse footer">
                <div class="container-fluid">
                    <div class="copyright">
                        <a href="http://www.phphive.info" target="_blank">&copy; www.PHPHive.info  2014 | All rights reserved</a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>