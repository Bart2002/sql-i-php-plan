<head>
<meta charset="utf-8">
<link rel="stylesheet" href="huhu.css">
</head>
<?php
$dzien=$_GET['dzien'];
$nr=$_GET['nr'];
$nazwa=$_GET['lekcja'];
echo ("zmieniono lekcje z dnia: ".$dzien." o numerze: ".$nr." na: ".$nazwa."<br>");
$con = mysqli_connect('localhost', 'root','', 'chuj');
mysqli_query($con,"UPDATE plan SET nazwa='$nazwa' WHERE dzien ='$dzien' AND nr='$nr';");

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
<form action="chuj.php">
<input type="submit" value ="powrót">
</form>

</body>