<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


// connect to database
$db = mysqli_connect('localhost', 'root', '', 'ngo');





// call the sendemail() function if login btn is clicked
if (isset($_POST['done'])) {

	sendmail();
}

function generateotp($name,$to_value,$flag){
    $value='';
    $length = 1;
    for($i=0;$i<4;$i++){
        $val=rand(0,9);
        $value.=$val;
        $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
        $value.=$randomletter;
    }
    $_SESSION['otp']=$value;
    $_SESSION['to_value']=$to_value;
    $_SESSION['name']=$name;
    $_SESSION['flag']=$flag;
    $_SESSION['starttime']=time();
    return $value;
}


function sendmail(){

    $name=$_POST['name'];
    $to_value=$_POST['value'];
    $flag=$_POST['flag'];
    $val=checkifcontact_exists($to_value);
    if($val==1){

        $otp=generateotp($name,$to_value,$flag);
        if($flag==2){
            $to_value.="@gmail.com";
        }

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

      //  $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port       = 465;
        $mail->Host       = "mail.sabsngo.org";
        $mail->Username   = "info@sabsngo.org";
        $mail->Password   = "Sabs@org";


        $mail->IsHTML(true);
        $mail->AddAddress($to_value, $name);
        $mail->SetFrom("info@sabsngo.org", "NGO");

        $mail->Subject = "OTP";
        $content = "<b>Your otp is ".$otp.".</b>";

        $mail->MsgHTML($content);
        if(!$mail->Send()) {
          echo "2";
          var_dump($mail);
        } else {
          echo "1";
        }
    }
    else{
        echo "0";
    }
}


// call the sendemail() function if login btn is clicked
if (isset($_POST['checkotp'])) {
	checkotp();
}


function checkotp(){
    if(!isLoginSessionExpired()) {
        $otp=$_POST['otp'];
        $to_value=$_SESSION['to_value'];
        $flag=$_SESSION['flag'];
        $name=$_SESSION['name'];
        global $db;
        //valid otp
        if($otp==$_SESSION['otp']){
            if($flag==1){
               $query = "INSERT INTO registrations (contact, email, name)
					  VALUES(' ', '$to_value', '$name')";
            }
            if($flag==2){
                $query = "INSERT INTO registrations (contact, email, name)
					  VALUES('$to_value', ' ', '$name')";
            }

			mysqli_query($db, $query);
                        header("location:student_reg.php");
                        $_SESSION['email']=$to_value;

            echo "1";
        }
    }
    else{
        echo "Session Expired";
    }
}



function isLoginSessionExpired() {
	$login_session_duration = 1000;
	$current_time = time();
	if(isset($_SESSION['otp']) and isset($_SESSION["starttime"])){
		if(((time() - $_SESSION['starttime']) > $login_session_duration)){

			return true;
		}
	}
	return false;
}




// call the checkLogin() function if checklogin btn is clicked
if (isset($_POST['checklogin'])) {

	checkLogin();
}


function checkLogin(){
    global $db;
    $login_name=$_POST['login_name'];
    $login_contact=$_POST['login_contact'];

    $query = "SELECT * FROM registrations WHERE contact='$login_contact' OR email='$login_contact' LIMIT 1";
    $results = mysqli_query($db, $query);


    if (mysqli_num_rows($results) == 1) { // user found
        $_SESSION['loggedin_user']=$login_name;
        echo "1";

    }
    else{
        echo "0";
    }
}


function checkifcontact_exists($to_value){
    global $db;
    $query = "SELECT * FROM registrations WHERE contact='$to_value' OR email='$to_value' LIMIT 1";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 0) { // user found
        $_SESSION['email']=$to_value;
        return 1;
    }
    else{
        return 0;
    }
}


if (isset($_POST['logout'])) {
    unset($_SESSION["loggedin_user"]);
}
?>
