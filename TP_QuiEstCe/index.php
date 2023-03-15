<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="quiestce.css">
</head>

<body>

  <table align="bottom" border=1>

    <tr>
      <td><img src="images/0000000.jpg">
        <center>0000000</center>
      </td>
      <td><img src="images/0001111.jpg">
        <center>0001111</center>
      </td>
      <td><img src="images/0010011.jpg">
        <center>0010011</center>
      </td>
      <td><img src="images/0011100.jpg">
        <center>0011100</center>
      </td>
    </tr>

    <tr>
      <td><img src="images/0100101.jpg">
        <center>0100101</center>
      </td>
      <td><img src="images/0101010.jpg">
        <center>0101010</center>
      </td>
      <td><img src="images/0110110.jpg">
        <center>0110110</center>
      </td>
      <td><img src="images/0111001.jpg">
        <center>0111001</center>
      </td>
    </tr>

    <tr>
      <td><img src="images/1000110.jpg">
        <center>1000110</center>
      </td>
      <td><img src="images/1001001.jpg">
        <center>1001001</center>
      </td>
      <td><img src="images/1010101.jpg">
        <center>1010101</center>
      </td>
      <td><img src="images/1011010.jpg">
        <center>1011010</center>
      </td>
    </tr>

    <tr>
      <td><img src="images/1100011.jpg">
        <center>1100011</center>
      </td>
      <td><img src="images/1101100.jpg">
        <center>1101100</center>
      </td>
      <td><img src="images/1110000.jpg">
        <center>1110000</center>
      </td>
      <td><img src="images/1111111.jpg">
        <center>1111111</center>
      </td>
    </tr>

    <form method="post" action="index.php">

      <tr>
        <h2 id="q1"><u>1/ A-t-il des lunettes ?</u></h2>
        Oui<input type="radio" name="q1" value="1">
        Non<input type="radio" name="q1" value="0"><br><br>

        <h2 id="q2"><u>2/ A-t-il une moustache ?</u></h2>
        Oui<input type="radio" name="q2" value="1">
        Non<input type="radio" name="q2" value="0"><br><br>

        <h2 id="q3"><u>3/ A-t-il un chapeau ?</u></h2>
        Oui<input type="radio" name="q3" value="1">
        Non<input type="radio" name="q3" value="0"><br><br>

        <h2 id="q4"><u>4/ A-t-il des cheveux ?</u></h2>
        Oui<input type="radio" name="q4" value="1">
        Non<input type="radio" name="q4" value="0"><br><br>

        <h2 id="q5"><u>5/ A-t-il une boucle d'oreille ?</u></h2>
        Oui<input type="radio" name="q5" value="1">
        Non<input type="radio" name="q5" value="0"><br><br>

        <h2 id="q6"><u>6/ A-t-il une barbe ?</u></h2>
        Oui<input type="radio" name="q6" value="1">
        Non<input type="radio" name="q6" value="0"><br><br>

        <h2 id="q7"><u>7/ A-t-il un noeud papillon ?</u></h2>
        Oui<input type="radio" name="q7" value="1">
        Non<input type="radio" name="q7" value="0"><br><br>

        <input type="submit" name="Reponse" value="Cliquez pour avoir la réponse">

        <input type="reset" name="Rejouer" value="Cliquez pour rejouer">

        <?php

        $s1 = $_POST['q1'] + $_POST['q3'] + $_POST['q5'] + $_POST['q7'];
        $s1 = $s1 % 2;
        $s2 = $_POST['q2'] + $_POST['q3'] + $_POST['q5'] + $_POST['q6'];
        $s2 = $s2 % 2;
        $s3 = $_POST['q4'] + $_POST['q5'] + $_POST['q6'] + $_POST['q7'];
        $s3 = $s3 % 2;


        if ($_POST["Reponse"]) {
          if (($s1 == 1) && ($s2 == 0) && ($s3 == 0)) {
            echo " Vous avez menti à la qustion 1 ";
            if ($_POST['q1'] == 1) {
              $_POST['q1'] = 0;
            } else {
              $_POST['q1'] = 1;
            }
          } elseif (($s1 == 0) && ($s2 == 1) && ($s3 == 0)) {
            echo " Vous avez menti à la question 2 ";
            if ($_POST['q2'] == 1) {
              $_POST['q2'] = 0;
            } else {
              $_POST['q2'] = 1;
            }
          } elseif (($s1 == 1) && ($s2 == 1) && ($s3 == 0)) {
            echo " Vous avez menti à la question 3 ";
            if ($_POST['q3'] == 1) {
              $_POST['q3'] = 0;
            } else {
              $_POST['q3'] = 1;
            }
          } elseif (($s1 == 0) && ($s2 == 0) && ($s3 == 1)) {
            echo " Vous avez menti à la question 4 ";
            if ($_POST['q4'] == 1) {
              $_POST['q4'] = 0;
            } else {
              $_POST['q4'] = 1;
            }
          } elseif (($s1 == 1) && ($s2 == 1) && ($s3 == 1)) {
            echo " Vous avez menti à la question 5 ";
            if ($_POST['q5'] == 1) {
              $_POST['q5'] = 0;
            } else {
              $_POST['q5'] = 1;
            }
          } elseif (($s1 == 0) && ($s2 == 1) && ($s3 == 1)) {
            echo " Vous avez menti à la question 6 ";
            if ($_POST['q6'] == 1) {
              $_POST['q6'] = 0;
            } else {
              $_POST['q6'] = 1;
            }
          } elseif (($s1 == 1) && ($s2 == 0) && ($s3 == 1)) {
            echo "Vous avez menti à la question 7";
            if ($_POST['q7'] == 1) {
              $_POST['q7'] = 0;
            } else {
              $_POST['q7'] = 1;
            }
          } else {
            echo 'Vous n\'avez pas menti';
          }
        }

        echo "<br/>";

        $perso = $_POST['q1'] . $_POST['q2'] . $_POST['q3'] . $_POST['q4'] . $_POST['q5'] . $_POST['q6'] . $_POST['q7'];

        if ($_POST["Reponse"]) {
          echo 'Vous avez choisi : ' . $perso;
          echo '<img src=http://btsio.org/2022/pruskit/TP_QuiEstCe/images/' . $perso . '.jpg alt=personnage>';
        }
        ?>
      </tr>


  </table>

</body>

</html>