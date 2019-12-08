<?php
/**
 * Created by PhpStorm.
 * User: Esteban Giorgis
 * Date: 04.12.2019
 * Title : Logger
 */

//<editor-fold desc="private attributes"> //add region in phpstorm -> https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-custom-code-folding-regions/
$logName = "application.log";//define log file name
$fileFullPath = setFullPath($logName);//define the full path until the log file (ou il va appeler la fonction sauf qu'il va changer l'argument logName)
$logHeader = "TimeStamp\t\t\tLevel\tMessage";//set the header of the future log file



//</editor-fold>

//<editor-fold desc="tests automation - entry point">
//create file and set header
writeMsgInFile($fileFullPath, $logHeader, true);//appele de fonction writeMsgInFile
//</editor-fold>

//<editor-fold desc="function">
/**
 * This function is designed to append a path with the fileName received as parameter
 * -The path will be found by the function
 * @param $fName : The file name to be append to the path
 * @return [String] full path to the log file expressed as a string
 * @example File Name : testFile.log / after function : [pathToFile]\testFile.log
 */
function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */

    //TODO - il vous faut coder le corps de cette fonction

    //création d'une variable qui est égale au lien de l'exercice + l'arguement qui sera changer avec la variable $logName qui elle contient "application.log"
    $currentFile=getcwd()."\\".$fName;


    return $currentFile;

}

/**
 * This function is designed to write a string message in a file.
 * -The opening and closing action is managed by the function
 * @param $fileFullPath : The path containing expressing the path from the root to the filename
 * @param $lineToWrite : Is the content to write in the file.
 * @param $erase : Is an option allowing to erase the file before writing or happening the $lineToWrite a the end of the file
 */
function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */

    //TODO - il vous faut coder le corps de cette fonction

    //cette condition va regarder si il y a deja le titre ecrit si oui elle va le supprimer puis en créer un si il n'y a pas deja un titre écrit alors elle va juste continuer a écrire le titre
    if($erase){
        //$handle va etre égale au dossier qu'il va ouvrir avec les permissions
        $handle=fopen("$fileFullPath", "w");
        fwrite($handle,$lineToWrite);
        fclose($handle);
    }
    else{
        //$handle va etre égale au dossier qu'il va ouvrir avec les permissions
        $handle=fopen("$fileFullPath", "a");
        fwrite($handle,$lineToWrite);
        fclose($handle);
    }




}

//</editor-fold>
?>