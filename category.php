<?php 
	get_header(); 
	print css('category.css');
?>
<!-- Main content -->
<article id="main-content" class="main-wrapper display-table">

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
			 data-href="http://techrant.beyondobjective.com" 
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
	<li><a href="http://facebook.com/techrantphl" class="facebook">!</a></li>
	<li><a href="http://twitter.com/techrantphl" class="twitter">"</a></li>
	<li><a href="_new" class="gplus">#</a></li>
	<li><a href="<?php print bloginfo('rss2_url'); ?>" class="rss">$</a></li>
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

<?php if(have_posts()):while(have_posts()):the_post(); $cat = get_the_category();?>

<!-- Loop -->
<article class="post-loop">
<header>
<p><a href="category/<?php print $cat[count($cat)-1]->slug ?>">
		<?php print $cat[count($cat)-1]->name; ?>
</a></p>
<h4>
	<a class="bree" href="<?php print get_permalink() ?>">
	<?php print get_the_title(); ?>
	</a>	
</h4>
</header>
<section>
	<div class="display-table">
	<div class="table-child image-loop">
	<?php 
	if(has_post_thumbnail()): 
		print get_the_post_thumbnail();
	else:
		print img('no-image.png');
	endif;
	?>
	</div>
	<div class="table-child text-loop">
	<p><?php print get_the_excerpt(); ?></p>
	</div>
	</div>
</section>
<footer>
	<p>By: <?php print get_the_author() .'; '. get_the_date('l, F d, Y'); ?></p>
</footer>
</article>

<?php endwhile; endif; ?>

<!-- Nav Posts -->
<div class="nav-post">
<article class="display-table wrapper">
<section class="table-child">
	<?php previous_posts_link('Previous',true); ?>
</section>
<section class="table-child">
	<?php next_posts_link('Next',true);?>
</section>
</article>
</div>

</section>
	
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
	<p>Current Episode player</p>
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
	
</article>
<?php get_footer(); ?>