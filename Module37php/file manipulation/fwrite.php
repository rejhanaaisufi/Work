 <?php

  $my_file =  fopen('ds.txt', 'w');
  $my_text = "digital School\n";

  fwrite($my_file, $my_text);
  
  
 ?>