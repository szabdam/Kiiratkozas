<html>
<head>
<title> Feldolg feladat </title>
<?php
echo "Kedves " ;
echo $_POST['nev'] . "<br>";
echo "A következő gomb volt bekapcsolva : " . $_POST['radio'] . "<br>";
if( $_POST['radio'] == "hármas" )
{
    echo "<br> Gratulálunk! Ön abba hagyta egyetemi pályafutását!" ;
}
else{
    echo "<br> Kellemes szenvedést!" ;
}

?> 
</SCRIPT>
</head> 