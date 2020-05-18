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
<style amp-custom>
<?php echo MinifyOutput::minifyCSS(View::instance()->render('app/css/page.css','text/css')); ?>
body {
	font-size: 14px;
}
.bg {
	width: 100%;
	height: 120vh;
}
.bg section { height: auto; }.bg .separator { width: 100%; padding: 0 2em; text-align: center; }.bg .button { width: 100%; }.bg { background-size: cover; background-repeat: no-repeat; background-position: top center; }
.bg.bg1 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg.jpg<?php echo $ver; ?>'); }
.bg.bg2 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg1.jpg<?php echo $ver; ?>'); }
.bg.bg3 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg2.jpg<?php echo $ver; ?>'); }
.bg.bg4 { background-image: url('<?php echo Base::instance()->get('url'); ?>app/img/small-bg3.jpg<?php echo $ver; ?>'); }
</style>
</head>
<body>

<main class="dark">



<h1>Legal Notice</h1>
<p>Last updated: (12th of November 2019)</p>

<p>
Never invest money you cannot afford to lose. Always do your own research and due diligence before placing a trade. We do not accept  any responsibility for any losses incurred  by following our advice. Any decision you make is purely your responsibility. We do not take part in "Pump and Dump" – FUD or FOMO. All analysis is based on a neutral standing.
</p>

<p>
We do not accept  any responsibility for any losses incurred  by following our advice. Any decision you make is purely your responsibility. By using our page, you agree to the Legal Notice and future revisions of it. By using this site, you hereby agree that:</p>

<p>
<li>You are solely responsible for your own decisions and any investments you make.</li>
<li>We cannot be blamed for  anything you do.</li>
<li>We cannot be held responsible for any losses.</li>
<li>We cannot cover any losses you might have</li>
<li>It is up to you to do due diligence on services in our articles, ads, and sponsored stories if you chose to use them.</li>
</p>

<p>Content on this page, or any other sub-pages, are not paid for or ordered by any 3rd party web pages. Links to other web pages might have an affiliate query attached. All artworks found on this page have been produced by Animtype unless stated otherwise.</p>






		<a href="<?php echo Base::instance()->get('url'); ?>" class="button buy" title="home">Take me back</a>

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