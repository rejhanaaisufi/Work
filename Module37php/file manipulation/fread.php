<?php

  $my_filename = 'ds.txt';   // mundemi qysh dojna me i lon emrin ds.txt ose dse.txt ...

  $my_file = fopen($my_filename, 'r')  //read mode 'r'

  $my_size = filesize ($my_filename);

  $my_filedata = fread($my_file, $my_size)

?>