<?php
/**
 * Index
 */
use Box\Spout\Writer\Style\Style;
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		the_title( '<h1 style="color:blue">', '</h1>' );
		?>
<h3 style="color:green"> This is a book</h3>
		<br>
		<?php
        the_date();
        the_content();
	endwhile;
endif;
get_footer();
