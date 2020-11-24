<?php
//require('model/autoloader.php');
// Chargement des classes
require_once('model/class/Commet.class.php');
require_once('model/class/Co.class.php');

function accueil()
{
    $comment = new Commet(); // Création d'un objet
    $voir = $comment->getVoir(); // Appel d'une fonction de cet objet

    require('vue/accueil.php');
    // $manager = new Manager(); // Création d'un objet
    // $voir = $manager->getVoir(); // Appel d'une fonction de cet objet
    $perso = new Co(Co::FORCE_MOYENNE);
    echo var_dump($perso);
    $perso->parler();
    // require('vue/accueil.php');
}
function regarder()
{
    $comment = new Commet(); // Création d'un objet
    $vue = $comment->getVue(); // Appel d'une fonction de cet objet

    require('vue/regarder.php');
}
function commenter()
{
    $comment = new Commet(); // Création d'un objet
    $parler = $comment->getCommenter(); // Appel d'une fonction de cet objet

    require('vue/commenter.php');
}
function mesInfos()
{
    $comment = new Commet(); // Création d'un objet
    $cha = $comment->getMesInfos(); // Appel d'une fonction de cet objet

    // if ($cha === false) {
    //     die('Impossible d\'ajouter le commentaire !');
    // }
    // else {
    //     header('Location: index.php?action=mesInfos');
    // }
    require('vue/commenter.php');
}
function question()
{
    $quest = new Commet();
    $repond = $quest->getRep();
    // $vart = $quest->dire();
    // echo $vart;
    // $repond = $quest->lancerLeTest();
    require('vue/entrainer.php');
}
function maman()
{
 
    $co = new Co();
    $wif = new Commet($co);
    $truc = $wif->mia();
    //echo var_dump($truc);
    require('vue/maman.php');
}
function obj()
{
    $co = new Co();
    $wif = new Commet();
    $bidule = $wif->enreg($co);

    require('vue/obj.php');
}