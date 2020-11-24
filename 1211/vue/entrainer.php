<?php $title = 'Mes reponses'; ?>
<h1>Mes reponse !</h1>
<p>Derniere reponse :</p>




<?php
//while ($donnees = $repond->fetchAll()) // Chaque entrée sera récupérée et placée dans un array.
//{
  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
  
        
  foreach ($repond as $repons)
  
{

// On envoie une « FORCE_MOYENNE » en guise de force initiale.
echo $repons['id'], ' a ', $repons['question'], ' de force, ', $repons['reponse'];
}
?>
   <em><a href="index.php?action=maman&amp;">Commentaires</a></em>

