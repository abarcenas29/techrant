<?php print css('footer.css'); ?>
<footer id="main-footer" class="main-wrapper display-table">
	<section class="table-child footer-title">
		<h2 class="zxx"><span>#</span>TECH RANT</h2>
		<p>#Tech Rant is created by Beyod Media. 
			Copyright 2013 Beyond Media All rights reserved.</p>
		<br>
		<p>WebDesign/Developer: <b>Aldrich Allen Barcenas</p>
	</section>
	<section class="table-child footer-list">
	
	<!-- Footer List -->
	<article class="display-table">
	<section class="table-child">
	<h3 class="bree">List Affiliates</h3>
	<?php nav('menu_affiliate'); ?>
	</section>
	<section class="table-child">
	<h3 class="bree">Radyo Pirata</h3>
	<?php nav('menu_rp'); ?>
	</section>
	</article>
	
	</section>
</footer>
</body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=479421232080499";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>