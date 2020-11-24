<?php $title = 'Mon blog'; ?>


<h1>Mon super blog !</h1>
<p>Derniers billets du blog :</p>


<?php
while ($data = $voir->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=regarder&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php

}

?>
<?php
// On envoie une « FORCE_MOYENNE » en guise de force initiale.

?>
   <em><a href="index.php?action=regarder&amp;">Commentaires</a></em>

