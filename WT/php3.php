<html>
<?php 
$no= $_POST["number"];
echo "Table is <br>";
for($x=1;$x<=10;$x++){
    echo $no * $x;
    echo "<br>";
}
?>
</html>