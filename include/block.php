<?php
$ip_address = "";
include("config.php");
$get_list = "select * from block_user";
$run_list = mysqli_query($connect,$get_list);
while($row_list = mysqli_fetch_array($run_list)){
    $ip_address = $row_list['ip'];
  
}
if (isset($_SERVER['HTTP_CLIENT_IP']))
{
    $client_ip = $_SERVER['HTTP_CLIENT_IP'];
} else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_X_FORWARDED'])) {
    $client_ip = $_SERVER['HTTP_X_FORWARDED'];
} else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
    $client_ip = $_SERVER['HTTP_FORWARDED_FOR'];
} else if(isset($_SERVER['HTTP_FORWARDED'])) {
    $client_ip = $_SERVER['HTTP_FORWARDED'];
} else if(isset($_SERVER['REMOTE_ADDR'])) {
    $client_ip = $_SERVER['REMOTE_ADDR'];
}
$blocked = false;
if($ip_address != 0){
foreach( $ip_address as $ip)
        {
            if($client_ip == $ip)
            {
                $blocked = true;
                break;
            }else if(strpos($ip, '*') !== false){
                $digits = explode(".", $ip);
                $client_ip_digits = explode(".", $client_ip);
                if($digits[1] == '*' && $digits[0] == $client_ip_digits[0])
                {
                    $blocked = true;
                    break;
                }else if($digits[2] == '*' && $digits[0] == $client_ip_digits[0] && $digits[1] == $client_ip_digits[1]){
                    $blocked = true;
                    break;
                }else if($digits[3] == '*' && $digits[0] == $client_ip_digits[0] && $digits[1] == $client_ip_digits[1] && $digits[2] == $client_ip_digits[2]){
                    $blocked = true;
                    break;
                }
            }else if(strpos($ip, "-") !== false){
                list($start_ip, $end_ip) = explode("-", $ip);
                $start_ip = preg_replace('/\s+/', '', $start_ip);
                $end_ip = preg_replace('/\s+/', '', $end_ip);
                 
                $start_ip_long = ip2long($start_ip);
                $end_ip_long = ip2long($end_ip);
                 
                if($client_ip_long >= $start_ip_long && $client_ip_long <= $end_ip_long)
                {
                    $blocked = true;
                    break;
                }
            }
        }
    }
        if($blocked == true)
    {
        header('Location: blocked-page.php');
    }
?>