<?php
$hashed_password = crypt('testing');
echo $hashed_password;
echo '<br>';
$user_input='testing';
if (crypt($user_input, $hashed_password) == $hashed_password) {
   echo "Password verified!";
}else{
echo "not verified ";
}

?>