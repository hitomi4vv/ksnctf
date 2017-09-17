- POSTパラメーターにarray型を設定したとき、受け取ったPHPのコードはstring型からarray型にキャストされる。

- array型は、strcasecmpで比較ができないため、NULLを返す。  
  (PHP5.3以降から、一部のネイティブ関数について、引数型エラーのときの返り値がNULLになった。)
  > Warning: strcasecmp() expects parameter 1 to be string, array given in...

- PHPのLoose comparisonでは、"NULL"と"0"をイコールとする。
