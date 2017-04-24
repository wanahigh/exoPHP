
<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
    <title> 1er php</title>
  </head>


  <body>
      <P>
          <?php

      $var2=mt_rand(1, 100);

      for ($var1 = 100 ; $var1 >= 10 ; $var1--){
        $result=$var1*$var2;
        echo '<p>'. $result . '</p>';
      }






          ?>
      </p>

</body>
</html>
