<?php
   ob_start();
   include('autofit.html');
   $returned = ob_get_contents();
   echo $returned;
   ob_end_clean();
?>
