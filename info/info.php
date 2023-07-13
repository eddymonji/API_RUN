<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Projet</title>
  </head>
  <body>
    <center>
    <h1><center>Information du serveur</center> </h1>
    <p>Nom d'utilisateur: <?php echo get_current_user(); ?></p>
    <p>Distribution utilisée: <i><?php echo php_uname('s'); ?></i></p>
    <p>La version de noyau Linux utilisée: <?php echo php_uname('r'); ?></p>
    <p>Taille de la mémoire RAM: <?php echo formatBytes(memory_get_usage()); ?></p>
    <p>Taille disque dur: <?php echo formatBytes(disk_free_space("/")) . ' / ' . formatBytes(disk_total_space("/")); ?></p>
   </center>
  </body>
</html>

<?php
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>
