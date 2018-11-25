<!-- when a single post is clicked, it will show this instead of index.php -->
<?php 
// keep looping while we still have posts to loop through
while (have_posts()) {
	the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php }

 ?>