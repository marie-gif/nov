<?php
require_once('model/class/Manager.class.php');
class Commet extends Manager
{
    public function getVoir()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') 
        AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }
    public function getVue()
    {
        $db = $this->dbConnect();
        $op = $db->prepare('SELECT title FROM posts');
        $op->execute();
        $vue =$op->fetch();
        return $vue;
    }
    public function getCommenter()
    {
        $db = $this->dbConnect();
        $op = $db->prepare('INSERT INTO commentaire(dialogue,nom) VALUES (:dialogue,:nom)');
        $parler = $op->execute(array('dialogue'=>$_POST['dialogue'],
                                     'nom'=>$_POST['nom']));
        return $parler;
    }
    public function getMesInfos()
    {
        $db = $this->dbConnect();
        $ch = $db->prepare('INSERT INTO chater(dire,repondre) VALUES (:dire,:repondre)');
        $cha = $ch->execute(array('dire'=>$_POST['dire'],
                            'repondre'=>$_POST['repondre']));
        
        return $cha;
    }
    public function getRep()
    {
        $db = $this->dbConnect();
        $repond = $db->query('SELECT id,question,reponse FROM co');
        //$repond= $repo->fetch();
        return  $repond;
    }
    public function dire()
    {
        parent::dire();
        echo 'coucou ça va !';
        
    }
    public function quiEstCe()
    {
      echo 'Je suis la classe <strong>Enfant</strong> !';
    }
    public function mia()
    {
         $db = $this->dbConnect();
         $mam = $db->query('SELECT id,question,reponse FROM co');
        $truc= $mam->fetch();
        return  $truc;
    }
    public function enreg()
    {
        $db= $this->dbConnect();
        $col = $db->prepare('INSERT INTO co(question,reponse) VALUES (:question,:reponse)');
        // $col->bindParam(':nom', $co->question());
        // $col->bindParam(':forcePerso', $co->reponse());
        $bidule=$col->execute(array('question'=>$_POST['question'],
        'reponse'=>$_POST['reponse']));
        return $bidule;
    }
    

    
}