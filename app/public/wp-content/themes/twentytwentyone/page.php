<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();



/* Start the Loop */
// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'template-parts/content/content-page' );

// 	// If comments are open or there is at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}
// endwhile; // End of the loop.

//get_footer();

?>

<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Site Secure Challenge</title>

	<style>
		<?php include 'style.css'; ?>
	</style>

</head>

<body>
	<h1><?php the_field('title'); ?></h1>
	<ul>
		<li>
			<a>
				<?php
				$link1 = get_field('header_menu_1');
				echo $link1['title'];
				?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$link2 = get_field('header_menu_2');
				echo $link2['title'];
				?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$link3 = get_field('header_menu_3');
				echo $link3['title'];
				?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$link4 = get_field('header_menu_4');
				echo $link4['title'];
				?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$link5 = get_field('header_menu_5');
				echo $link5['title'];
				?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$link6 = get_field('header_menu_6');
				echo $link6['title'];
				?>
			</a>
		</li>
	</ul>
	<h3><?php the_field('subtitle_1'); ?></h3>
	<h3><?php the_field('subtitle_2'); ?></h3>
	<ul>
		<li>
			<a>
				<?php
				$side_link1 = get_field('side_menu_1');
				echo $side_link1['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link2 = get_field('side_menu_2');
				echo $side_link2['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link3 = get_field('side_menu_3');
				echo $side_link3['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link4 = get_field('side_menu_4');
				echo $side_link4['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link5 = get_field('side_menu_5');
				echo $side_link5['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link6 = get_field('side_menu_6');
				echo $side_link6['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link7 = get_field('side_menu_7');
				echo $side_link7['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link8 = get_field('side_menu_8');
				echo $side_link8['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link9 = get_field('side_menu_9');
				echo $side_link9['title']; ?>
			</a>
		<li>
			<a>
				<?php
				$side_link10 = get_field('side_menu_10');
				echo $side_link10['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link11 = get_field('side_menu_11');
				echo $side_link11['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link12 = get_field('side_menu_12');
				echo $side_link12['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link13 = get_field('side_menu_13');
				echo $side_link13['title']; ?>
			</a>
		</li>
		<li>
			<a>
				<?php
				$side_link14 = get_field('side_menu_14');
				echo $side_link14['title']; ?>
			</a>
		</li>
	</ul>
	<div>
		<?php
		foreach (get_field('featured_posts') as $post) {
			setup_postdata($post);
			echo the_title() . "\n";
		}
		?>
	</div>
	<?php
	wp_reset_postdata();
	?>
	<h4><?php
			the_field('most_popular');
			?></h4>
	<footer>
		<p><?php the_field('copyright'); ?></p>
		<p><?php the_field('copy'); ?></p>
		<p><?php the_field('contact'); ?></p>
	</footer>

</body>

</html>