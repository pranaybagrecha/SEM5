<html>

<!-- Get browser -->
<?php 
echo $_SERVER['HTTP_USER_AGENT']; 
//using get_browser() with return_array set to TRUE  
$mybrowser = get_browser(null, true); 
print_r($mybrowser); 
?> 
<!--IP Address-->
<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    //ip from share internet
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    //ip pass from proxy
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo $ip;
?>
<!--
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
-->
<!-- <?php
$all_lines = file('https://www.w3resource.com/');
foreach ($all_lines as $x)
 {
 	echo htmlspecialchars($x);
 }
?> -->

</html>