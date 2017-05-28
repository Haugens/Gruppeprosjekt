<?php
if(isset($_COOKIE['welcomeAnim'])){
    echo "I am a big butterfly";
}else{
    setcookie("welcomeAnim", "true",time()+60);
    echo "something has happened";
}
?>