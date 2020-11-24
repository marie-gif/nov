<?php
require_once('model/class/Manager.class.php');
class Co //extends Manager
{
    private $_id; 
    private $_question;
    private $_reponse;    
  

  const FORCE_PETITE = 20;
  const FORCE_MOYENNE = 50;
  const FORCE_GRANDE = 80;

//   public function __construct(array $donnees)
//   {
//       $this->hydrate($donnees);
//   }    
  
  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

  
  public function id()  { return $this->_id;  }
  public function question()  { return $this->_question;  }
  public function reponse()  { return $this->_reponse;  }

  public function setId($id)
  {
    $this->_id = (int) $id;
  }    
  public function setQuestion()
  {
    return $this->_question;
  }
  
  public function setReponse()
  {
    return $this->_reponse;
  }

  private static $_texteADire = 'Je vais tous vous  !';
// en haut autre possiblité que echo seul directement
//   public static function parler()
//   {
//     echo 'Je vais tous vous parler !';
//   }
  public static function parler()
  {
    echo self::$_texteADire; // On donne le texte à dire.
  }
  
}