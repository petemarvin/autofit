<?php
   ob_start();
   include('autofit.html');
   $returned = ob_get_contents();
   ob_end_clean();

   echo $returned;
?>
