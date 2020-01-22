<?php
/**
 * 133-Start-master - home.php
 *
 * Initial version by: Esteban.GIORGIS
 * Initial version created on: 16.12.2019 14:50
 */

// tampon de flux stocké en mémoire

//ouverture memoir tampon (tout ce qui se situera en dessous sa va le sauvgarder)
ob_start();

$titre="Rent A Snow - Accueil";
?>
    <!--les images défilantes-->
    <div class="row-fluid">
        <div class="span12">

            <div id="headerSeparator"></div>

            <div class="camera_full_width">
                <div id="camera_wrap">
                    <div data-src="view/content/slider-images/4.jpg">
                        <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à
                            disposition.
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/1.jpg">
                        <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des
                            sensations.
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/2.jpg"></div>
                </div>
                <br style="clear:both"/>
                <div style="margin-bottom:40px"></div>
            </div>

            <div id="headerSeparator2"></div>

        </div>
    </div>

<div class="span12" id="divMain">
    <h1>Nos activités</h1>

    <p><strong>Rent A Snow</strong> est spécialisée dans la location de snows. Nous avons tout types de
        modèles :
    <ul>
        <li>des plus récents au plus anciens,
        <li>pour débutants ou confirmés,
        <li>pour de la piste ou du hors-piste
    </ul>
    La location peut se faire au jour, à la semaine, au mois ou à la saison.
    </p>
    <p>
        Nous proposons aussi des cours privés ou en petits groupe (4 personnes maximum) pour tous les
        niveaux avec des moniteurs certifiés par l'école suisse de snowboard au prix de 60.- /heure.
    </p>

    <br/>
    <br/>

    <div class="row-fluid">
        <div class="span3">
            <div class="box">
                <i class="icon-wrench"></i>
                <h4 class="title">Entretien</h4>
                <hr/>
                <p>
                    Le matériel est toujours contrôlé avant d'être mis à disposition des clients. A
                    chaque fois que vous louerez un snow, vous pouvez partir surfer tranquille.
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-leaf"></i>
                <h4 class="title">Environnement</h4>
                <hr/>
                <p>
                    Nous veillons à respecter l'environnement en utilisant au maximum du matériel
                    recyclable et en prenant de consommer un minimum d'énergie lors de nos activités au
                    magasin,
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-edit"></i>
                <h4 class="title">Contrat</h4>
                <hr/>
                <p>
                    Un contrat sera signé à chaque location. D'autre part nous travaillons en étroite
                    collaboration avec la Rega et garantissons des conditions de sauvetage optimales.
                </p>
            </div>
        </div>

        <div class="span3">
            <div class="box">
                <i class="icon-signal"></i>
                <h4 class="title">Signal</h4>
                <hr/>
                <p>
                    Pour ceux qui aiments les sensations forte, nous louons du matériel de protection
                    d'avalanches.
                </p>
            </div>
        </div>
    </div>


</div>


<!-- formulaire pour les mois -->
    <form method="GET" action="index.php?action=home">
        <select name="Month">
            <option >Janvier</option>
            <option >Fevrier</option>
            <option >Mars</option>
            <option >Avril</option>
            <option >Mai</option>
            <option >Juin</option>
            <option >Juillet</option>
            <option >Aout</option>
            <option >Septembre</option>
            <option >Octobre</option>
            <option >Novembre</option>
            <option >Decembre</option>
        </select>
        <br>
        <input type="submit">
    </form>


    <h1>Calendrier 2020</h1>


    <!-- affiche le mois actuelle en lettre-->
    <div class="month">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>

            <?php


            //Tableau des mois
            $tableauMois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

            $month =@$_GET['Month'];//la variable $month va contenir l'element choisis du formulaire
            if(isset($month)){
                echo $month . "<br>";
                echo "2020";
            }
            else{
                echo date("F") . "<br>";
                echo "2020";
            }


            ?>

        </ul>
    </div>

    <!-- affiche les jours en lettre-->
    <ul class="weekdays">
        <?php
        //Tableau associatif des jours
        $tableauJour = array(
            'Lundi' => 'Lun',
            'Mardi' => 'Mar',
            'Mercredi' => 'Mer',
            'Jeudi' => 'Jeu',
            'Vendredi' => 'Ven',
            'Samedi' => 'Sam',
            'Dimanche' => 'Dim'
        );

        //Va chercher chaque ellement du tableau associatif : $tableauJour en créer a chaque fois un <li>
        foreach ($tableauJour as $element) {
            echo "<li>$element</li>"; //affichera Lun, Mar,...
        }
        ?>
    </ul>

    <ul class="days">

<?php

//controller dois exister pour que se qui se passe en dessous puisse fonctionner

//si il a choisis un mois alors il rentre dans la contition
if (isset($month)) {
    switch ($month) {
        case $tableauMois[0]:
            $JanA = 3;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois (2 car le premier jour du mois est un mardi)
            $JanB=31;//le nombre de jour total dans le mois
            $JanC="January";//Nom du mois en anglais
            jourEcrit($JanA,$JanB,$JanC);
            break;

        case $tableauMois[1]:
            $FevA = 6;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $FevB = 28;//le nombre de jour total dans le mois
            $FevC="February";//Nom du mois en anglais
            jourEcrit($FevA,$FevB,$FevC);
            break;

        case $tableauMois[2]:
            $MarA=7;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $MarB = 31;//le nombre de jour total dans le mois
            $MarC="March";//Nom du mois en anglais
            jourEcrit($MarA,$MarB,$MarC);
            break;

        case $tableauMois[3]:
            $AvrA=3;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $AvrB = 30;//le nombre de jour total dans le mois
            $AvrC="April";//Nom du mois en anglais
            jourEcrit($AvrA,$AvrB,$AvrC);
            break;

        case $tableauMois[4]:
            $MaiA=5;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $MaiB = 31;//le nombre de jour total dans le mois
            $MaiC="May";//Nom du mois en anglais
            jourEcrit($MaiA,$MaiB,$MaiC);
            break;

        case $tableauMois[5]:
            $JuinA=1;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $JuinB = 30;//le nombre de jour total dans le mois
            $JuinC="June";//Nom du mois en anglais
            jourEcrit($JuinA,$JuinB,$JuinC);
            break;

        case $tableauMois[6]:
            $JuilletA=3;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $JuilletB = 31;//le nombre de jour total dans le mois
            $JuilletC="July";//Nom du mois en anglais
            jourEcrit($JuilletA,$JuilletB,$JuilletC);
            break;

        case $tableauMois[7]:
            $AouA=6;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $AouB = 31;//le nombre de jour total dans le mois
            $AouC="August";//Nom du mois en anglais
            jourEcrit($AouA,$AouB,$AouC);
            break;

        case $tableauMois[8]:
            $SepA=2;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $SepB = 30;//le nombre de jour total dans le mois
            $SepC="September";//Nom du mois en anglais
            jourEcrit($SepA,$SepB,$SepC);
            break;

        case $tableauMois[9]:
            $OctA=4;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $OctB = 31;//le nombre de jour total dans le mois
            $OctC="October";//Nom du mois en anglais
            jourEcrit($OctA,$OctB,$OctC);
            break;

        case $tableauMois[10]:
            $NovA=7;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $NovB = 30;//le nombre de jour total dans le mois
            $NovC="November";//Nom du mois en anglais
            jourEcrit($NovA,$NovB,$NovC);
            break;

        case $tableauMois[11]:
            $DecA=2;//Coresspond numero du jour de la semaine(ex : 1=Lundi) pour le premier jour du mois
            $DecB = 31;//le nombre de jour total dans le mois
            $DecC="December";//Nom du mois en anglais
            jourEcrit($DecA,$DecB,$DecC);
            break;
    }
} else {


    //va appeler, dans le model.php, la fonction qui affiche le calendrier avec le mois actuelle
    showCurrentDay();
}


?>
<?php
// ob_get_clean va clotturer puis $content va valoire tous se qu'il y a depuis ob_start
$content = ob_get_clean();

//appelle le ficher et faut que gabarit.php exicte
require "gabarit.php";
