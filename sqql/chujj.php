<head>
<meta charset="utf-8">
<link rel="stylesheet" href="huhu.css">
</head>
<?php
$zapytanie = $_GET['query'];
$conn = mysqli_connect('localhost', 'root','', 'chuj');
$wynik = mysqli_query($conn,$zapytanie);
while($row = mysqli_fetch_row($wynik))
{
    echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]."<br>"; 
}

?>
<body>
<form action=chuj.php>
<input type=submit value ="Powrót">
</form>

</body>