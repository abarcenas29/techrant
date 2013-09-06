<?php get_header() ?>

<!-- Home CSS -->
<?php print css('home.css'); ?>

<!-- Shows' about description -->
<article id="show-banner" class="main-wrapper display-table">
	<section class="table-child  desktop-description side-padding">
	<article>
	<header>
		<h2 class="zxx"><span>#</span>TECH RANT</h2>
		<p>With Jay Agonoy and Mr A</p>
	</header>
	<section>
	<p><strong>Tech Rant</strong> is a 90-minute show on Technology, 
	the latest trends and what the tech industry has to offer. 
	It provides the latest news from various sources; 
	gives commentary on the latest trends that is happening in 
	the tech industry as of today; and unlike other tech shows, 
	it shares useful tips and tricks for the common tech guy.
	Tech Rant airs every Wednesdays, 9pm (with replays on Fridays 9:30pm)</p>
	</section>
	<footer>
	<?php print img('jay.png'); ?>
	</footer>
	</article>
	</section>
	<section class="table-child desktop-image">
		<?php print img('jay.png'); ?>
	</section>
</article>

<!-- Main content -->
<article id="main-content" class="main-wrapper display-table">
<section class="table-child side-bar">
	
	<article class="ask-img wrapper">
	<section>
	<p class="bree">COMMENT <span class="social-bar">"</span></p>
	</section>
	</article>
	
	<article class="episode-list">
	<header>
	<h3 class="bree">Current Episode</h3>
	</header>
	<section>
	<?php 
		$qCEp = new WP_Query('cat=5');
		$qCEp->post_count = 1;
		if($qCEp->have_posts()):while($qCEp->have_posts()):$qCEp->the_post();
		$cFields = get_post_custom(get_the_ID());
		?>
	<br>
	<div id="player"> Loadin! </div>
	<script>
	jwplayer('player').setup({
		'file'  : "<?php print $cFields['wp_audio_url'][0];  ?>",
		'width' : '275',
		'image' : 'http://techrant.beyondobjective.com/wp-content/uploads/2013/09/cover-300x300.jpg'
	});
	</script>
	<?php endwhile;wp_reset_postdata(); endif; ?>
	</section>
	</article>
	
	<article class="episode-list">
	<header>
	<h3 class="bree">Episode List</h3>
	</header>
	<section>
	<ul>
	<?php
	$qEpisode = new WP_Query('cat=5');
	$qEpisode->post_count = 10;
	if($qEpisode->have_posts()):
	while($qEpisode->have_posts()):$qEpisode->the_post();
	?>
	<li><a href="<?php print get_permalink(); ?>">
		<?php print get_the_title(); ?>
		</a></li>
	<?php 
	endwhile;
	endif;
	?>
	</ul>
	</section>
	</article>
	
	<article class="twitter wrapper display-table">
	<section class="table-child">
	<a class="twitter-timeline" 
	   href="https://twitter.com/techrantphl" 
	   data-widget-id="364602007564197890">Tweets by @techrantphl</a>
	<script>
		!function(d,s,id)
		{
			var js;
			var fjs=d.getElementsByTagName(s)[0];
			var p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id))
			{
				js=d.createElement(s);
				js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document,"script","twitter-wjs");
	</script>
	</section>
	</article>
	
</section>
<section class="table-child loop">
<!-- Social Links -->
<article class="social-bar">
<header class="oswald">
<h3 class="oswald">Social Links</h3>
</header>
<section class="display-table wrapper">
<div class="table-child">
<ul>
	<li><div class="fb-like" 
			 data-href="http://facebook.com/techrantphl" 
			 data-width="50" 
			 data-layout="button_count" 
			 data-action="like" 
			 data-show-faces="false" 
			 data-send="false"></div></li>
	 <li><a href="https://twitter.com/techrantphl" 
			class="twitter-follow-button" 
			data-show-count="false" 
			data-size="small">Follow @techrantphl</a>
			<script>
				!function(d,s,id)
				{
					var js;
					var fjs=d.getElementsByTagName(s)[0]
					var p=/^http:/.test(d.location)?'http':'https';
				if(!d.getElementById(id))
				{
					js=d.createElement(s);
					js.id=id;
					js.src=p+'://platform.twitter.com/widgets.js';
					fjs.parentNode.insertBefore(js,fjs);
				}
				}(document, 'script', 'twitter-wjs');</script>
	 </li>
</ul>
</div>
<div class="table-child">
<ul>
	<li><a href="http://facebook.com/techrantphl" 
		   class="facebook"
		   target="_new">!</a></li>
	<li><a href="http://twitter.com/techrantphl" 
		   class="twitter"
		   target="_new">"</a></li>
	<li><a href="_new" class="gplus">#</a></li>
	<li><a href="<?php print bloginfo('rss2_url'); ?>" 
		   class="rss"
		   target="_new">$</a></li>
</ul>
</div>
</section>
</article>

<!-- Mobile SideBar -->
<article class="sidebar-mobile">

<!-- Comment -->
<section>
<article class="ask-img wrapper">
<section>
<p class="bree">COMMENT <span class="social-bar">"</span></p>
</section>
</article>
</section>
	
<!-- Episode List -->
<section>
<article class="episode-list">
<header><h3 class="oswald">Episode List</h3></header>
<section>
	<ul>
	<?php
	$qEpisode = new WP_Query('cat=5');
	$qEpisode->post_count = 10;
	if($qEpisode->have_posts()):
	while($qEpisode->have_posts()):$qEpisode->the_post();
	?>
	<li><a href="<?php print get_permalink(); ?>">
		<?php print get_the_title(); ?>
		</a></li>
	<?php 
	endwhile;
	endif;
	?>
	</ul>
</section>
</article>
</section>

</article>

<article class="post-loop-title">
<header><h3 class="oswald">Articles</h3></header>
</article>

<?php 
$mainHome_loop = new WP_Query('cat=-22,-1,-30');
$mainHome_loop->post_count = 10;
if($mainHome_loop->have_posts()):
while($mainHome_loop->have_posts()):$mainHome_loop->the_post();
$cat_list	= get_the_category();
?>

<!-- Loop -->
<article class="post-loop">
<header>
<p>
<a href="<?php print 'category/'.$cat_list[count($cat_list)-1]->slug ?>">
	<?php print $cat_list[count($cat_list)-1]->name; ?> 
</a>
</p>
<h4><a class="bree" href="<?php print get_permalink(); ?>">
<?php print get_the_title(); ?>	
</a></h4>
</header>
<section>
<div class="display-table">
<div class="table-child image-loop">
<!-- Will use thumbnail function on this -->
<?php 
	if(has_post_thumbnail()): 
		print get_the_post_thumbnail(get_the_ID(),'thumbnail');
	else:
		print img('no-image.png');
	endif;
?>
</div>
<div class="table-child text-loop">
<p><?php print get_the_excerpt() ?></p>
</div>
</div>
</section>
<footer>
<p>By: <?php print get_the_author() .'; '. get_the_date('l, F d, Y'); ?></p>
</footer>
</article>

<?php 
wp_reset_postdata(); 
endwhile; 
endif;
?>

</section>
</article>
<script>
$(document).ready(function()
{
	var $loopImg = $('.image-loop img');
	$loopImg.removeAttr('width');
	$loopImg.removeAttr('height');
});
</script>
<?php get_footer(); ?>
