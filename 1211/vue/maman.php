<?php $title = 'regarder'; ?>


<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
// while ($data = $vue->fetch())
// {
?>
    <div class="news">
        <h3>
         
        <?php
//while ($donnees = $repond->fetchAll()) // Chaque entrée sera récupérée et placée dans un array.
//{
  // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
  // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
  
        
//   foreach ($truc as $true)
  
// {

// On envoie une « FORCE_MOYENNE » en guise de force initiale.
echo $truc['id'], ' a ', $truc['question'], ' de force, ', $truc['reponse'];
//}
?>
          
        </p>
    </div>
    <form action = "index.php?action=obj" method ="POST">
  
  <label for="motdePasse">Choisir un mot de passe :</label>
  <input type="text" name="question">
  <input type="text" name="reponse">
  <input type="submit" value="se parler">

</form>
<?php


?>



