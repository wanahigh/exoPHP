
<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
    <title> 1er php</title>
  </head>


  <body>
      <P>
        <?php

        function maFonction ($nb1=10,$nb2=2)
        {
          

            if ($nb1 > $nb2){
              echo "Le premier nombre est plus grand";
            }
            else if ($nb1 < $nb2){
              echo "Le premier nombre est plus petit";
            }
            else
            {
              echo "Les deux nombres sont identiques";
            }

        }

         maFonction();


        ?>
      </p>

</body>
</html>
