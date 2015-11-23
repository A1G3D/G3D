<?php
$title="Inscrition à Event'U";
ob_start();
?>
<form action="inscription.php" method="get">
		Nom : <input type="text" name="nom" value="<?php echo $nom; ?>"/>
		Prenom : <input type="text" name="prenom" value="<?php echo $prenom; ?>"/>
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="hidden" name="action" value="save"/>
    <input type="submit"/>
</form>
<?php
$contenu = ob_get_contents();
ob_end_flush();
include "gabarit.php";
?>