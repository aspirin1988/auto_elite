<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auto_elite
 */
$curent=get_post();
//print_r($post->ID);
$cat=get_the_category( $post->ID );
//print_r($cat[0]);
?>
<!-- Main content -->
<section class="main-content">
	<div class="wrapper">
		<div class="content">
			<section class="services-section uk-grid">
				<?php $post=get_post();
						$cat=get_the_category( $post->ID );
						//echo get_category_parents($cat[0]->ID);
						$post=get_posts($args1 = array( 'cat'=> $cat[0]->cat_ID ,'numberposts'=>20, 'order'=> 'ASC', )); ?>
				<div class="uk-width-1-1 uk-width-medium-1-3 uk-width-large-1-3">
					<ul class="uk-list">
						<?php /*print_r($post);*/ foreach($post as $key=>$value ): ?>
							<li><a <?php if($curent->ID==$value->ID){ echo 'style="text-shadow: #fff 0px 0px 12px"';} ?> href="<?php echo $value->guid;?>" ><?php echo $value->post_title;?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="services-image uk-width-1-1 uk-width-medium-2-3 uk-width-large-2-3">
					<img src="<?php echo get_the_post_thumbnail_url($curent->ID,'full')?>" alt="">
				</div>

				<div class="services-content uk-width-1-1">
					<h2 class="mct uk-text-center wow slideInLeft"><?=$curent->post_title?></h2>
					<p><?=$curent->post_content?></p>
				</div>
			</section>
		</div>
	</div>
</section><!-- Main content end -->