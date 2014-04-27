<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>ELAXIS</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
      <section>

<?php 
$nombre = $_GET['n'];
for ($i=0;$i<=$nombre;$i++) {
    echo '<span id="loader" class="loader-circles"></span>';
}

?>
      </section>
            <script type="text/javascript">
            var hauteur = window.innerHeight;
            var largeur = window.innerWidth;
            var nombre = Math.floor(Math.floor(largeur/66)*Math.floor(hauteur/66));
            <?php if (!$_GET) { 
                echo 'window.location = ("index.php?n="+nombre);';
                } 
            ?>
            </script>
    </body>
</html>