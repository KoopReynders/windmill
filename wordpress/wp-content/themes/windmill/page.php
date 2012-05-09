<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
			<div id="sidebar">
				<div class="cta">
					<ul>
						<li class="icon team"><a href="#">Team registration</a></li>
						<li class="icon heart"><a href="#">Be a volunteer at windmill</a></li>
					</ul>
				</div>
				
				<div class="tweets">
					<h2>Latest Tweets</h2>
					<div class="tweet">
						<p>
							He will be tweeting, facebooking and taking care of all social media related activities of Windmill. First Q: what should be the windmill #?
						</p>
						<a class="timestamp" href="#">31 minutes ago</a>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div><!-- #container -->


<?php get_footer(); ?>
