<?php
//memulai 
session 
session_s
tart();
//cek  adanya  session,  jika  session  ada  maka  akan  di  unset
dan  dilanjutkan  dengan session_destroy
if(ISSET($_SESSION['username'])){ 
UNSET($_SESSION['username']);
}
header("location: index.php");
session_destroy();
?>