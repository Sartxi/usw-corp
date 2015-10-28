<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utah Shrink Wrap Services | Utah's Shrink Wrap Connection</title>
	<meta name="description" content="Utah's Shrink Wrap Specialists! When you need high quality Shrink Wrap Services or supplies, we're the ones that do it right." />
	<meta name="keywords" content="shrink wrap, packaging, shipping, protection, wrapping, winterize, shrinkwrap" />
	<link rel="icon" type="image/x-icon" href="/favicon.ico" />

	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/slider.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">

	<script src="/js/modernizr.custom.28468.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.cslider.js"></script>
	<script src="/js/app.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<!--[if lte IE 8]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->  
</head>
<body>
	<div id="body">
		<div id="header" class="head">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<a href="/"><img src="/img/logo.png" class="img-responsive img-rounded mainlogo"/></a>
					</div>
					<div class="col-md-7 hidden-xs">
						<div class="row">
							<div class="col-md-12">
								<h2 class="pull-right">801-557-0863</h2>
								<a href="/contact" class="btn btn-primary btn-sm pull-right head-req">Request a Quote</a>
							</div>
							<div class="col-md-12 social-head">
								<a href="/"><img src="/img/mailicon.png" class="pull-right"></a>
								<a href="/"><img src="/img/gplus.png" class="pull-right"></a>
								<a href="https://www.facebook.com/pages/Utah-Shrink-Wrap/167103873318163" target="_blank"><img src="/img/facebook.png" class="pull-right"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?=$this->Element('nav'); ?>

		<div id="content" class="mainarea">
			<div class="container messges">
				<?=$this->Session->flash(); ?>
			</div>
			<?=$this->fetch('content'); ?>
		</div>
		<div id="footer" class="foot">
			<div class="container">
				<div class="row">
					<div class="col-md-4" style="text-align:center;">
						<a href="/"><img src="/img/logo.png" class="img-responsive img-rounded footerlogo center-block"/></a>
						<h3>801-557-0863</h3>
						<br />
						<p class="text-center">&copy; 2015 Utah Shrink Wrap Services LLC</p>
					</div>
					<div class="col-md-8">
						<ul class="list-inline foot-nav">
							<li><a href="/">Home</a></li>
							<li><a href="/products">Products</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/packaging">Packaging</a></li>
							<li><a href="/faq">FAQ</a></li>
							<li><a href="/safety">Safety</a></li>
							<li><a href="/about">About Us</a></li>
							<li><a href="/contact">Contact Us</a></li>
						</ul>
						<hr>
						<h3 class="hands">About Us</h3>
						<hr>
						<p>After the heavy winter of 2007-08 we lost an awning and suffered extensive damage to assets at our mountain property in southern Utah. We searched for a form of protection from the heavy mountain snowfall for our camp trailers during the brutal winter months and protection for our winter toys from the harsh summer sun and wind. Searching the internet we discovered several applications of shrink wrap products and realized we found our solution.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?=$this->Element('modals'); ?>

</body>
</html>
