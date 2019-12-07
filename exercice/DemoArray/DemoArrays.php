<?php
/**
 * Created by PhpStorm.
 * User: Esteban Giorgis
 *
 * Date: 05.12.2018
 * Title : DemoArrays.php
 */

/* Help:    https://www.w3schools.com/php/php_arrays.asp
            http://php.net/manual/en/function.array.php
*/

//<editor-fold desc="Indexed Array">
// each Element of this array content a name of a Web Browser
$browsers = array('Safari','Edge','Chrome','Firefox');

// assign 'Chrome' to $mostUsedBrowser
$mostUsedBrowser = $browsers[2];

// Replaces 'Edge' with 'Opera'
$browsers[1]='Opera';



//TODO - il vous faut coder ici

// Loop through an Indexed Array
$arrLength = count($browsers);// Assign the number of Elements of the Array '$browsers'


$browsersList = "";//assigne une valeur de base a $browsersList

//tant que toute les valeur du tableau $browsers n'auront pas été prise la boucle for ne s'arretera pas
for ($index = 0; $index < $arrLength; $index++) {
        $browsersList =  $browsersList.$browsers[$index].' - ';//ajoute un tiret après chaque mot
}



//TODO - il vous faut coder ici

//</editor-fold>

//<editor-fold desc="Associated Array">
// each Element of this associated array contains a part of the contact information
$contactInfo= array(
    'name'      => 'John Doe',
    'address'   => 'Rue de Lausanne 25',
    'NPA'       => 1400,
    'City'      => 'Yverdon'
);

// assign the city ("Yverdon") to $Home
$Home=$contactInfo['City'];




// Replaces 'John Doe' with 'Jane Doe'
//TODO - il vous faut coder ici
$contactInfo['name']='Jane Doe';//remplace la valeur de name par Jane Doe



// Loop through an Associated Array
$completedContact="";//assigne une valeur de base a $completedContact

//tant qu'il na pas parcouru tout les index du tableau $contactInfo il continura a ajouter en string chaque index du tableau $contactInfo dans la variable $completedContact
foreach ($contactInfo as $element){
    $completedContact=$completedContact.$element." - ";//ajoute un tiret après chaque mot
}



//</editor-fold>

//<editor-fold desc="Two-dimensional Array">
// Each Element of this Two-dimensional array contains a name of a person
$people= array(
    array('Perceval','Arthur','Lancelot','Leodagan'),
    array('Marge','Homer','Bart','Maggie'),
    array('Joe','Jack','William','Averell'),
);

// assign "Joe" to $person
//TODO - il vous faut coder ici
$person=$people[2][0];




// Replaces 'Bart' with 'Lisa'
//TODO - il vous faut coder ici
$people[1][2]='Lisa';


// Loop through an Two-dimensional Array
$rowLength = count($people);        //Assign the number of rows of the array "People"
$colLength = count($people[0]);     //Assign the number of Elements (columns) of the of the array "People"
$personList="";                     // Initialise the string $PersonList

//TODO - il vous faut coder ici

//tant qu'il n'aura pas prit toute les ligne du tableau $people il ne s'aretera pas
for($i=0;$i<$rowLength;$i++){

    //tant qu'il n'aura pas prit chaque valeur d'une ligne du tableau $people il ne s'aretera pas
    for( $j=0;$j<$colLength;$j++){
        $personList=$personList.$people[$i][$j].' - ';//$personList va est egale a chaque valeur d'une ligne du tableau $people
    }

}


//</editor-fold>
