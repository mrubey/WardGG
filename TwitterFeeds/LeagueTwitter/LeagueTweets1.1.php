<?php
session_start();
require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "lolesports";
$notweets = 10;
$consumerkey = "eTiDQlRj3EFxkmjHuDATezNuV";
$consumersecret = "lqNgYQEx66n6VaHvgfTyjTpOPr0xoxBnrgTt8fTXM6pmdIHJUq";
$accesstoken = "565026683-9yirrVxtrcM2nFLTcj2P4ewH6WwkKHztLmM0mpmQ";
$accesstokensecret = "E9F2LQyPUYJqf8SICd0sqjqdbUsuGM3o8ZaOrhle5DxXY";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>