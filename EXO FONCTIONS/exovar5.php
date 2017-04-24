
<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
    <title> 1er php</title>
  </head>


  <body>
      <P>
        <?php

        function maFonction ($nom="Ruault",$prenom="Fabien",$age=26)
        {
          echo "bonjour" . " ". $nom ." ". $prenom . " tu as"." " . $age . " ". "ans";
        }

         maFonction();


        ?>
      </p>

</body>
</html>
