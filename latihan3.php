<html>

<head>
  <title>Variabel Static</title>
</head>

<body>
  <h1>Variabel Static</h1>
  <span>181011400697 / Martin Siregar</span>
  <br />
  <br />
  <?php function test()
  {
    static $a = 0;
    echo "Nilai a : ";
    echo $a;
    echo "<br>";
    $a++;
  }
  Test();
  Test();
  Test();
  Test();
  Test();
  ?>
</body>

</html>