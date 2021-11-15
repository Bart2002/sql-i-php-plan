<head>
<meta charset="utf-8">
<link rel="stylesheet" href="huhu.css">
</head>
<?php
$conn = mysqli_connect('localhost', 'root','', 'chuj');
$wynik = mysqli_query($conn,'SELECT * FROM plan;');
echo("<table border=1>");
echo("<th colspan='10'>plan lekcji</th>");

for ($ii = 1; $ii <= 5; $ii++) {
    echo("<tr>");
    if($ii==1){
    echo "<td>Poniedziałek</td>";
    }elseif($ii==2){
        echo "<td>wtorek</td>";
    }elseif($ii==3){
        echo "<td>Sroda</td>";
    }
    elseif($ii==4){
        echo "<td>Czwartek</td>";

    }elseif($ii==5){
            echo "<td>Piontek</td>";
    }


    for ($i = 1; $i <= 9; $i++) {
        
        $wynik = mysqli_query($conn,'SELECT * FROM plan WHERE dzien='.$ii.' and nr='.$i.';');
       
        $row= mysqli_fetch_array($wynik);
        echo "<td>".$row[3]." ".$row[4]."</td>";
    }
    echo("</tr>");

}
echo("</table>");
?>
<head>

</head>
<body>
<form action=chujj.php method="GET">
<input type="text" value="" name="query">
<input type=submit value ="Zapytanie">
</form>

<form action=chuja.php>
<select name="dzien">
    <option value="1">pon</option>
    <option value="2">wt</option>
    <option value="3">sr</option>
    <option value="4">czw</option>
    <option value="5">pt</option>
</select>
<select name="nr">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>
<select name="lekcja">
    <?php
    $conn = mysqli_connect('localhost', 'root','', 'chuj');
    $wynik = mysqli_query($conn,"SELECT DISTINCT nazwa FROM plan;");
    while($row = mysqli_fetch_row($wynik))
    {
        echo "<option value='$row[0]'> $row[0] </option> <br>"; 
    }
    ?>
</select>

<input type=submit value ="Zastępstwo">
</form>
<form action=chujb.php>
<select name="dzien">
    <option value="1">pon</option>
    <option value="2">wt</option>
    <option value="3">sr</option>
    <option value="4">czw</option>
    <option value="5">pt</option>
</select>
<select name="nr">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>
<input type=submit value ="Usuwanie">
</form>
</body>