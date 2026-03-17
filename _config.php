
<?php 

$conn = new mysqli("suggestmeone.gamer.gd", "if0_41411294", "yusuf78692", "if0_41411294 (Anime)"); //just like $conn = new mysqli("localhost", "root", "", "anipaca");


if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    echo("Database connection failed.");
}

$websiteTitle = "Killerrr!!!!";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "soon@gmail.com";

$version = "1.0.2";

$discord = "https://dcd.gg/shitcord";
$github = "https://github.com/KillerXxD";
$telegram = "https://t.me/killertlg";
$instagram = "https://www.instagram.com/_kill4r._"; 

// all the api you need
$zpi = "https://zenapi-chi.vercel.app/"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed just put // before the first proxy and remove slashes from this one 
//$proxy = "https://your-hosted-proxy.com/proxy?url="; //https://github.com/PacaHat/shrina-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
