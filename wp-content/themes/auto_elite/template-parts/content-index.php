<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auto_elite
 */

?>
<section class="homepage-advertise uk-hidden-small">
	<div class="wrapper">
	<?php $cat=get_category_by_slug('service');  $post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>4, )); ?>
		<section>
			<?php foreach($post as $key=>$value ): ?>
			<article class="wow fadeInLeft" style="background-image: url('<?php echo get_the_post_thumbnail_url($value->ID,'full')?>');">
			<div class="bottom-yellow">
				<p><?php echo $value->post_title;?></p>
			</div>
			</article>
			<?php endforeach; ?>
		</section>
	</div>
</section>

<!-- Main content -->
<section class="main-content">
	<div class="wrapper">
		<h2 class="mct uk-text-center wow slideInLeft"><?php the_field('title',4); ?></h2>
		<?php $cat=get_category_by_slug('index-left');  $post=get_posts($args1 = array( 'cat'=> $cat->cat_ID ,'numberposts'=>4, )); ?>
		<section class="cs uk-grid" data-uk-grid-margin>
			<!-- Main content left side -->
			<aside class="csl uk-width-1-1 uk-width-medium-1-1 uk-width-large-1-3 wow slideInLeft">
				<?php foreach($post as $key=>$value ): ?>
					<article class="csla">
					<div class="points"><i></i><i></i><i></i><i></i></div>
					<div class="bg-cover"></div>
					<div class="bg-img" style="background-image: url('<?php echo get_the_post_thumbnail_url($value->ID,'full')?>');"></div>
					<p><?php echo $value->post_title;?></p>
				</article>
				<?php endforeach; ?>
			</aside><!-- Main content left side end -->

			<!-- Main content right side -->
			<aside class="csr uk-width-1-1 uk-width-medium-1-1 uk-width-large-2-3 wow slideInRight">
				<article class="csra">
					<?php the_content(); ?>
				</article>
			</aside><!-- Main content right side end-->

		</section>
	</div>
</section><!-- Main content end -->
