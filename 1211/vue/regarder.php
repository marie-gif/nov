<?php $title = 'regarder'; ?>


<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
// while ($data = $vue->fetch())
// {
?>
    <div class="news">
        <h3>
         
        <?= htmlspecialchars($vue['title']) ?>
          
        </p>
    </div>
<?php

// }

?>

<form action = "index.php?action=commenter" method ="POST">
  
  <label for="motdePasse">Choisir un mot de passe :</label>
  <input type="text" name="dialogue">
  <input type="text" name="nom">
  <input type="submit" value="se connecter">

</form>
   <!-- <em><a href="index.php?action=commenter&amp;">Commentaires</a></em> -->
<?php
 
   echo $vue['title'];
 


?>
