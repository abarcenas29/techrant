<?php get_header(); ?>
<?php print css('post.css'); ?>
<!-- Main content -->
<article id="main-content" class="main-wrapper wrapper">
	
<!-- Start the Single Post Run -->
<?php 
	the_post(); 
	$cat = get_the_category();
?>

<section class="category">
	<h2>
	<a class="oswald base" href="/category/<?php print $cat[0]->slug;?>">
	<?php print $cat[count($cat)-1]->name; ?>
	</a>/ 
	<a class="oswald end" href="/category/<?php print $cat[count($cat)-1]->slug;?>">
	<?php print $cat[0]->name; ?>
	</a>
	</h2>
</section>

<!-- post-loop -->
<section class="post-loop">
<article class="display-table wrapper">
<section class="table-child post-article">
	<!-- Post Actual content -->
	<article>
	<header>
	<h3 class="bree">
	<?php print get_the_title(); ?>
	</h3>
	<p>
		By: <?php print get_the_author(); ?>;
		<?php print get_the_date('l, F d, Y'); ?>
	</p>
	</header>
	<section>
	<?php the_content(); ?>
	</section>
	<footer>
	<section>
		<?php comments_template(); ?>
	</section>
	</footer>
	</article>
</section>

<!-- aside -->
<aside class="table-child aside">
	<!-- Top post for the category -->
	<section class="top-comment">
	<?php 
	$popular = new WP_Query('orderby=comment_count&post_per_page=1');
	$popular->post_count = 1;
	if($popular->have_posts()):while($popular->have_posts()):$popular->the_post();
	$cat = get_the_category();
	?>
	<article>
	<header>
	<h3 class="oswald">Top Content</h3>
	</header>
	<section class="image">
		<img src="http://media.deremoe.com.s3.amazonaws.com/2013/06/vlcsnap-2013-06-29-18h50m11s46-620x348.jpg"/>
	</section>
	<section>
	<p>
	<a href="category/<?php print $cat[count($cat)-1]->slug?>">
		<?php print $cat[count($cat)-1]->name ?>
	</a>
	</p>
	<h4>
	<a href="<?php print get_permalink(); ?>"
	   class="bree">
		<?php print get_the_title(); ?>
	</a>
	</h4>
	</section>
	</article>
	<?php 
	endwhile;
	endif;
	wp_reset_postdata();
	?>
	</section>
	
	<!-- Commentary -->
	<section class="ask-img">
	<article class="ask-img wrapper">
	<section>
	<p class="bree">COMMENT <span>"</span></p>
	</section>
	</article>
	</section>
	
	<!-- Social Links -->
	<section class="social-bar">
	<article>
	<header><h3 class="oswald">Social Bar</h3></header>
	<section>
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
	</section>
	</article>
	</section>
	
	<!-- Related Content Same Category -->
	<section class="related-content">
	<article>
	<header><h3 class="oswald">Related content</h3></header>
	
	<!-- Related Loop -->
	<?php 
		$query = new WP_Query('cat='.$cat[count($cat)-1]->cat_ID);
		$query->post_count = 5;
		if($query->have_posts()):while($query->have_posts()):$query->the_post();
	?>
	<section class="related-loop">
	<div class="img">
	<!-- Will use thumbnail function on this -->
	<?php 
		if(has_post_thumbnail()): 
			print get_the_post_thumbnail(get_the_ID(),'thumbnail');
		else:
			print img('no-image.png');
		endif;
	?>
	</div>
	<div class="title">
	<h4>
	<a class="bree" href="<?php print get_permalink(); ?>">
	<?php print get_the_title(); ?>
	</a>
	</h4>
	</div>
	</section>
	<?php 
		endwhile;
		endif;
		wp_reset_postdata();
	?>
	</article>
	</section>
</aside>

</article>
</section>
<script>
$(document).ready(function()
{
	var $loopImg = $('.img img');
	$loopImg.removeAttr('width');
	$loopImg.removeAttr('height');
});
</script>
</article>
<?php get_footer(); ?>