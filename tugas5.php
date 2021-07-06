<?php
  $true = 1;
  $false = 0;
  $logika1 = (false AND false);
  $logika2 = (false AND true);
  $logika3 = (true AND false);
  $logika4 = (true AND true);
  $logika5 = (false OR false);
  $logika6 = (false OR true);
  $logika7 = (true OR false);
  $logika8 = (true OR true);

  echo "
  <h3>Tabel Logika 1111</h3>
  <table border=1>
    <tr>
      <th>Input True</th>
      <th>Input 2</th>
      <th>AND</th>
      <th>OR</th>
    </tr>
    <tr>
      <td>false</td>
      <td>false</td>
      <td><center>$logika1</center></td>
      <td><center>$logika5</center></td>
    </tr>
    <tr>
      <td>false</td>
      <td>true</td>
      <td><center>$logika2</center></td>
      <td><center>$logika6</center></td>
    </tr>
    <tr>
      <td>true</td>
      <td>false</td>
      <td><center>$logika3</center></td>
      <td><center>$logika7</center></td>
    </tr>
    <tr>
      <td>true</td>
      <td>true</td>
      <td><center>$logika4</center></td>
      <td><center>$logika8</center></td>
    </tr>
  </table>
  <br>=======================<br>
  ";

  $input1 = "Input 1";
  $input2 = "Input 2";
  $hasil = "Hasil";
  $text1 = "Ayo";
  $text2 = "Belajar";
  $gabungan = $text1.'&nbsp'.$text2;
  $text3 = "Bersama";
  $text4 = "Niomic";
  $gabungan2 = $text3.'&nbsp'.$text4;
  echo "
    <h1>Operator String</h2>
    <table border=1>
      <tr>
        <th>$input1</th>
        <th>$input2</th>
        <th>$hasil</th>
      </tr>
      <tr>
        <td>$text1</td>
        <td>$text2</td>
        <td>$gabungan</td>
      </tr>
      <tr>
        <td>$text3</td>
        <td>$text4</td>
        <td>$gabungan2</td>
      </tr>
    </table>
  ";
?>
