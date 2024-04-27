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
    $b = "<br>";
    echo "printing in echo ".$b;
    echo("printing in echo method".$b);
    echo print "print  returns 1 value".$b;
    print("printing in print method".$b);
  ?>
</body>
</html>