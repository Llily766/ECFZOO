<?php require_once('../templates/header.php'); ?>
<h1>
    Services
</h1>

    <h2>Formulaire de Services</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="description">Description :</label>
        <input type="description" id="description" name="description" required><br><br>
        
       
        
        <input type="submit" name="submit" value="Envoyer">
    </form>
   
    

<?php require_once('../templates/footer.php'); ?>