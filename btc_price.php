<?php
require ('coinbase_api_credentials.php');
require_once ('coinbase-php-master/lib/Coinbase.php');
$coinbase = Coinbase::withApiKey($api_key, $api_secret);
$current_buy = $coinbase->getBuyPrice('1');
$current_sell = $coinbase->getSellPrice('1');
?>

<html>
<title><?php echo $current_buy; ?></title>
<head>
	<meta charset="UTF-8">
	<meta name="This page pulls buy and sell quotes from Coinbase every 60 seconds." content="Bitcoin pricing">
	<meta name="Bitcoin price coinbase" content="HTML,CSS">
    <meta http-equiv="refresh" content="60" >
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,900' rel='stylesheet' type='text/css'>
    <style>
    body {text-align:center; overflow:auto}
    h1 {font-size:80px; font-family: 'Arial', sans-serif; color:#6E6E6E;}
    h3, #footer {font-family: 'Lato', sans-serif; font-weight:400; color:#D8D8D8;}
    #buy, #sell {width:200px;}
    #bracket {width:70%; margin-left:auto; margin-right:auto; margin-top:50px;}
    </style>
</head>

<body>
<div id="bracket">
<div id="buy" style="float:left;">
<h3>Buy 1 Bitcoin from Coinbase for</h3>
<h1><?php echo $current_buy; ?></h1>
</div>

<div id="sell" style="float:right;">
<h3>Sell 1 Bitcoin to Coinbase for</h3>
<h1><?php echo $current_sell; ?></h1>
</div>
</div>

<div id="footer" style="clear:both; padding:40px;">
1HmTRJyn6ddqumL8z8kKsS9wDEXkQj9GdU
</div>
</body>

</html>
