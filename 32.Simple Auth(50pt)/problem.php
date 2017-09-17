<?php
  $password = 'FLAG_????????????????';
  $array = (array)'password[]=""';
  if (strcasecmp($array, $password) == 0) {
    echo "Congratulations! The flag is $password";
  } else {
    echo "incorrect...";
  }
?>
