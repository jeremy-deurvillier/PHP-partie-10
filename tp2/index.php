<?php

$civility = 'mme';
$firstname = '';
$lastname = '';
$age = '';
$company = '';

if (count($_GET) > 0) {
    $civility = $_GET['civility'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];
    $company = $_GET['company'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 10 - TP2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="/tp2" method="get">
        <label for="civility">Civilité :</label>
        <select name="civility">
        <option value="mr" <?= ($civility == 'mr')?'selected':''; ?>>Monsieur</option>
            <option value="mme"  <?= ($civility == 'mme')?'selected':''; ?>>Madame</option>
        <select>
        <label for="firstname">Nom :</label>
        <input type="text" name="firstname" value="<?= $firstname; ?>" required>
        <label for="lastname">Prénom</label>
        <input type="text" name="lastname" value="<?= $lastname; ?>" required>
        <label for="age">Age :</label>
        <input type="text" name="age" value="<?= $age; ?>" required>
        <label for="company">Société :</label>
        <input type="text" name="company" value="<?= $company; ?>" required>
        <input type="submit" value="Valider">
    </form>

<?php if (count($_GET) > 0) { ?>
    <div>
        <p>Civilité : <?= ($civility === 'mr')?'Monsieur':'Madame'; ?></p>
        <p>Nom : <?= $firstname; ?></p>
        <p>Prénom : <?= $lastname; ?></p>
        <p>Age : <?= $age; ?></p>
        <p>Société : <?= $company; ?></p>
    </div>
<?php } ?>

</body>
</html>
