<?php print css('footer.css'); ?>
<footer id="main-footer" class="main-wrapper display-table">
	<section class="table-child footer-title">
		<h2 class="zxx"><span>#</span>TECH<span>RANT</span></h2>
		<p>Tech Rant is a <em>Beyond Objective</em> creation. 
			Copyright 2013. All rights reserved.</p>
		<br>
		<p>Web Design: <strong>Aldrich Allen Barcenas</strong> (Mr. A)</p>
	</section>
	<section class="table-child footer-list">
	
	<!-- Footer List -->
	<article class="display-table">
	<section class="table-child">
	<h3 class="bree">Affiliates</h3>
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