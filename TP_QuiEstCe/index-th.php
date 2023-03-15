<!DOCTYPE html>

<html>

<head>



  <style>
    h1 {
      text-align: center;
    }
  </style>

  <meta charset="utf-8">
  <title>Qui-est ce ?</title>

</head>

<body>

  <h1>Qui-est ce ?</h1>

  <!--Image-->
  <table>
    <tr>
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0000000.jpg" alt="image0">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0001111.jpg" alt="image1">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0010011.jpg" alt="image2">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0011100.jpg" alt="image3">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0100101.jpg" alt="image4">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0101010.jpg" alt="image5">
      </br>
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0110110.jpg" alt="image6">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/0111001.jpg" alt="image7">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1000110.jpg" alt="image8">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1001001.jpg" alt="image9">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1010101.jpg" alt="image10">
      </br>
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1011010.jpg" alt="image11">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1100011.jpg" alt="image12">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1101100.jpg" alt="image13">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1110000.jpg" alt="image14">
      <img src="http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/1111111.jpg" alt="image15">
      </br>

    </tr>


    <!--Questions/Formulaire , chaque question renvoie un 1 ou un 0-->
    <tr>

      <form method="post" action="quiestce.php">

        <fieldset>

          <h3>Question 1: Votre personnage porte-il des lunettes ?</h3>
          Oui<input type="radio" name="question1" value="1" /> |
          Non<input type="radio" name="question1" value="0" />

          </br>
          <h3>Question 2: Votre personnage a-t-il une moustache ?</h3>
          Oui<input type="radio" name="question2" value="1" /> |
          Non<input type="radio" name="question2" value="0" />

          </br>
          <h3>Question 3: Votre personnage a-t-il un chapeau ?</h3>
          Oui<input type="radio" name="question3" value="1" /> |
          Non<input type="radio" name="question3" value="0" />

          </br>
          <h3>Question 4: Votre personnage a-t-il des cheveux ?</h3>
          Oui<input type="radio" name="question4" value="1" /> |
          Non<input type="radio" name="question4" value="0" />

          </br>
          <h3>Question 5: Votre personnage a-t-il une boucle d'oreille ?</h3>
          Oui<input type="radio" name="question5" value="1" /> |
          Non<input type="radio" name="question5" value="0" />

          </br>
          <h3>Question 6: Votre personnage a-t-il une barbe ?</h3>
          Oui<input type="radio" name="question6" value="1" /> |
          Non<input type="radio" name="question6" value="0" />

          </br>
          <h3>Question 7: Votre personnage a-t-il un noeud papillon ?</h3>
          Oui<input type="radio" name="question7" value="1" /> |
          Non<input type="radio" name="question7" value="0" />

          <br /><br />
          <input type="submit" name="envoyer" value="Envoyer votre réponse">
          <br /> <br />

          <?php

          // Syndrome S1, S2 et S3
          $S1 = $_POST['question1'] + $_POST['question3'] + $_POST['question5'] + $_POST['question7'];
          $S1 = $S1 % 2;

          $S2 = $_POST['question2'] + $_POST['question3'] + $_POST['question5'] + $_POST['question6'];
          $S2 = $S2 % 2;

          $S3 = $_POST['question4'] + $_POST['question5'] + $_POST['question6'] + $_POST['question7'];
          $S3 = $S3 % 2;

          // Code pour savoir quelle question l'utilisateur a menti et remplace la valeur de la question si l'utilisateur a vraiment menti
          if ($_POST["envoyer"]) {
            if (($S1 == 1) && ($S2 == 0) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 1 </FONT COLOR>";
              if ($_POST['question1'] == 1) {
                $_POST['question1'] = 0;
              } else {
                $_POST['question1'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 2 </FONT COLOR>";
              if ($_POST['question2'] == 1) {
                $_POST['question2'] = 0;
              } else {
                $_POST['question2'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 0)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 3 </FONT COLOR>";
              if ($_POST['question3'] == 1) {
                $_POST['question3'] = 0;
              } else {
                $_POST['question3'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 0) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 4 </FONT COLOR>";
              if ($_POST['question4'] == 1) {
                $_POST['question4'] = 0;
              } else {
                $_POST['question4'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 1) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 5 </FONT COLOR>";
              if ($_POST['question5'] == 1) {
                $_POST['question5'] = 0;
              } else {
                $_POST['question5'] = 1;
              }
            } elseif (($S1 == 0) && ($S2 == 1) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 6 </FONT COLOR>";
              if ($_POST['question6'] == 1) {
                $_POST['question6'] = 0;
              } else {
                $_POST['question6'] = 1;
              }
            } elseif (($S1 == 1) && ($S2 == 0) && ($S3 == 1)) {
              echo "<FONT COLOR='#FF2828'> Vous avez menti à la question 7 </FONT COLOR>";
              if ($_POST['question7'] == 1) {
                $_POST['question7'] = 0;
              } else {
                $_POST['question7'] = 1;
              }
            } else {
              echo 'Vous n\'avez pas menti';
            }
          }

          echo "<br/>";

          // On obtient le id du personnage que l'utilisateur a choisi
          $personnage = $_POST['question1'] . $_POST['question2'] . $_POST['question3'] . $_POST['question4'] . $_POST['question5'] . $_POST['question6'] . $_POST['question7'];


          // Se déclenche après avoir appuyer sur le bouton envoyer, renvoie le personnage que l'utilisateur a choisi
          if ($_POST["envoyer"]) {
            echo 'Vous avez choisi : <img src=http://btsio.org/2022/pruskit/TP_QuiEstCe/Image_QuiEstCe/' . $personnage . '.jpg alt=personnage>';
          }
          ?>
    </tr>
  </table>
  </fieldset>


</body>

</html>