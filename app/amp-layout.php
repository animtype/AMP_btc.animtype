<!doctype html>
<html ⚡>
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<link rel="canonical" href="<?php echo Base::instance()->get('url'); ?>">
<?php $ver = "?ver=6"; ?>
<?php echo (View::instance()->render("app/description.php")); ?>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
<script async custom-element="amp-date-countdown" src="https://cdn.ampproject.org/v0/amp-date-countdown-0.1.js"></script>
<style amp-custom>
<?php echo MinifyOutput::minifyCSS(View::instance()->render('app/css/page.css','text/css')); ?>
</style>
</head>
<body>
<?php
	// date in UTC
	// 12 May 2020 11:09:54 
	$dateString = '12 May 2020 10:15:44 UTC';
	$timestamp = strtotime($dateString);

?>
	<main>
		

		<section class="perspective">
			<h1>BITCOIN halving countdown</h1>
			<h2>Bitcoin was designed as a deflationary currency.</h2>
			<amp-date-countdown
			  timestamp-seconds="<?php echo $timestamp; ?>"
			  layout="responsive"
			  height="400"
			  width="500"
			  class="counter"			  
			>
			  <template type="amp-mustache">
			    <span class="d">{{dd}}</span><span class="h">{{hh}}</span><span class="m">{{mm}}</span><span class="s">{{ss}}</span>
			  </template>
			</amp-date-countdown>

		</section>
		<h3>
			The Bitcoin halving decreases the number of new bitcoins generated per block. As of now, the block reward is 12.5 coins per block and will fall to 6.25 coins per block. This means the supply of new bitcoins is lower. 
			<br><br>
			Therefore, in most markets, lower BTC supply with steady demand usually leads to higher prices. Should we experience something similar to this year halving? What do you think?
			<br>
			#btc, #deflation, #bitcoin, #halving
			<br><br>
			<small>Due date: <?php echo $dateString; ?></small>
		</h3>
		<a title="buy BTC with MasterCard or Visa" href="https://anim.tech/blog/buy-bitcoins" class="button buy">How to buy Bitcoins with a Credit Card</a>
		<br>
	</main>


<footer>
	<div class="text">	
		<p class="small">
			<amp-img src="<?php echo Base::instance()->get('url'); ?>mstile-270x270.png" width="135" height="135" alt="animtype"></amp-img>
			<br>
			©2004-<?php echo date("Y"); ?> AnimType; <em>We do not use tracking cookies in this site.</em><br><strong>The meaning of animtype:</strong> <em>the animation type for the specified object in the stage.</em></p>
		<p class="small"></p>
			<nav>
				<a title="animtype" class="button small" href="https://animtype.com">Animtype since 2004</a>
				<a title="anim.tech" class="button small" href="https://anim.tech">Proud member of Anim.tech</a>				
				<a title="legal" class="button small" href="<?php echo Base::instance()->get('url'); ?>legal-notice">Legal Notice</a>
			</nav>
		<p>&nbsp;</p>
	</div>
</footer>
</body>
</html>