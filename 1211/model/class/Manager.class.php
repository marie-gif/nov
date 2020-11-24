<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=tt;charset=utf8', 'root', '');
        return $db;
    }
    public function dire()
    {
        echo 'coucou';
    }
    public function lancerLeTest()
   {
    static::quiEstCe();
   }
  
  public function quiEstCe()
   {
    echo 'Je suis la classe <strong>Mere</strong> !';
   }
}