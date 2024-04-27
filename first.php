<html lang="en">
<head>
    <style>
        @media (prefers-color-scheme: dark) {
            body {
                filter: invert(1) hue-rotate(180deg);
                background-color: #000;
                color: #000;
            }
        }
    </style>
</head>
<body>
  <script>
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
        location.reload();
      }
    });
  </script>
  <?php 
    define("B","<br>");
    
    echo "printing in echo ".B;
    echo("printing in echo method".B);
    echo print "print  returns 1 value".B;
    print("printing in print method".B);
    echo "hello","world" . B;
    echo 'vineel\'s birthday'.B;
    echo "vineel's birthday".B;
    $name="vineel";
    echo $name.B;
    // $this="this is an object";
    // echo $this.$b; Cannot re-assign $this in pho
    //echo("hello","world" . $b); now work for echo method
  //assigning variable by value
  echo "assiigning variable by value".B;
    $x=10;
  $y=$x;
  echo "x=$x,y=$y" . B;
  $y=100;
  echo "x=$x,y=$y" . B;
  //assigning variable by reference
  echo "assigning variable by reference".B;
  $a=10;
  $b=&$a;
  echo "a=$a,b=$b" . B;
  $b=100;
  echo "a=$a,b=$b" . B;
  $name = "vineel";
  echo 'myname is $name'.B;
  echo 'myname is {$name}'.B;
  echo 'we can\'t use varibale in  a single quation string ' . B;
  echo "myname is $name".B;
  echo "myname is {$name}".B;
  echo "we cant use varibale in  a double quation string ".B;
  echo "concatination operator is dot in php" . B;
  # comment which not effect end tag in php22?>
  <?php $c=10 ;$d=20;?>
  <?=  "sum of c and d are ".$c+$d." printing without using echo".B; ?>
</body>
</html>