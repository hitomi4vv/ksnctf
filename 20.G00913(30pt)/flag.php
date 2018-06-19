<?php
  function prime($n) {
    for ($d = 2; $d < $n; $d++) {
      if ($n % $d == 0) {
        return false;
      }
    }
    return true;
  }
  $pi = '31415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679';
  for ($i = 0; $i < strlen($pi) - 10; $i++) {
    $n = substr($pi, $i, 10);
    if (prime($n)) {
      echo 'FLAG_Q20_' . $n;
      exit;
    }
  }
?>
