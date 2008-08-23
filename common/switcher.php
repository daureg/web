<?php
setcookie ('sitestyle', $set, time()+31536000, '/', 'geraudsoft.info', '0');
header("Location: $HTTP_REFERER");
?>
