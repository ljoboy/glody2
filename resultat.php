<?php
if (!isset($resultat))
    header('location: index.php');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultat</title>
</head>
<body>
<ul>
<?php
foreach ($resultat as $r):
    ?>
<li><a href="fichiers/<?php echo $r['nom'] ?>"><?php echo $r['nom'] ?></a></li>
<?php
endforeach;
?>

</ul>
</body>
</html>
