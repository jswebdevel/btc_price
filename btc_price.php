<!-- This tells the browser we're using HTML5 -->
<!DOCTYPE html> 

<?php
require ('coinbase_api_credentials.php');
require_once ('coinbase-php-master/lib/Coinbase.php');
$coinbase = Coinbase::withApiKey($api_key, $api_secret);
$current_buy = $coinbase->getBuyPrice('1');
$current_sell = $coinbase->getSellPrice('1');
?>

<header>

     <title><?php echo $current_buy; ?></title>
     <!-- title must be in the header tag, see 
     http://www.w3.org/TR/html401/struct/global.html#h-7.4.1 -->
     <meta name="viewport" content="width=device-width, user-scalable=no">
     <!-- This is so it looks right on mobile devices, instead of having to scroll around everywhere -->

     <meta charset="UTF-8">
     <meta name="description" content="This page pulls buy and sell quotes from Coinbase every 60 seconds.">
     <meta name="keywords" content ="Bitcoin price coinbase">
     <meta http-equiv="refresh" content="60" >
     
     <link href='http://fonts.googleapis.com/css?family=Lato:400,100,900' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="style.css" />

</header>

<body>
     <div class="wrapper">

          <div id="bracket">
               <div>
                    <h3>Buy 1 Bitcoin from Coinbase for</h3>
                    <h1><?php echo $current_buy; ?></h1>
                    <!-- generally, H1 tags always go first, for SEO purposes
                    but in this case, it doesn't really matter -->
               </div>

               <div>
                    <h3>Sell 1 Bitcoin to Coinbase for</h3>
                    <h1><?php echo $current_sell; ?></h1>
               </div>
          </div>

     </div>
</body>

<footer>
     <a href="bitcoin:1HmTRJyn6ddqumL8z8kKsS9wDEXkQj9GdU">       
              <p>1HmTRJyn6ddqumL8z8kKsS9wDEXkQj9GdU</p>
     </a>
</footer>
