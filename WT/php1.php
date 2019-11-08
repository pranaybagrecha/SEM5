<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your mobile number is: <?php echo $_POST["mob"]; ?>
<?php
$myfile=fopen("php1.txt","w");
fwrite($myfile,$_POST["name"]);
fwrite($myfile,"\n");
fwrite($myfile,$_POST["mob"]);
?>
</body>
</html>