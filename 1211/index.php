<?php
//require('model/Autoloader.php');
require('controller/controller.php');
echo 'coucou';
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'accueil') {
            accueil();
        }
            if ($_GET['action'] == 'regarder') {
            //  if (isset($_GET['id']) && $_GET['id'] > 0) {
                regarder();
            }
            if ($_GET['action'] == 'commenter') {
                //  if (isset($_GET['id']) && $_GET['id'] > 0) {
                    commenter();
                }
            if ($_GET['action'] == 'mesInfos') {
                    //   if (isset($_GET['id']) && $_GET['id'] > 0) {
                     mesInfos();
               //}
            }
            if ($_GET['action'] == 'question') {
                //   if (isset($_GET['id']) && $_GET['id'] > 0) {
                 question();
            }
            if ($_GET['action'] == 'maman') {
                maman();
            }
            elseif ($_GET['action'] == 'obj') {
                obj();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    
    else {
        accueil();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
