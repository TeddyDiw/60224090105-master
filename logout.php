<?php 

// unset($_COOKIE['valid_user']);
// unset($_COOKIE['namecolor']);
// unset($_COOKIE['usize']);
// unset($_COOKIE['username']);
// echo "logout success";
// header("refresh:1;url=/60224090105/show.php");

setcookie('valid_user',0,time()-600);
setcookie('username',0,time()-600);
setcookie('namecolor',0,time()-600);
setcookie('usize',0,time()-600);
echo "logout success";
header("refresh:1;url=/60224090105/show.php");
?>