<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GulpTheme
 */

get_header(); ?>


		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

					if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile;

			
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

<script>
jQuery(document).ready(function($) {
    document.addEventListener('textlayerrendered', function (e) {
      if (e.detail.pageNumber === PDFViewerApplication.page) {
          console.log('hello');


var canvas = document.getElementById("page" + $('#pageNumber').val());
var context = canvas.getContext("2d");

$( ".comment_positioned" ).each(function( index ) {
 
  $(this).prependTo($('.page[data-page-number="' + $( this ).data('page')+ '"]'));


});




 $(".comment_positioned").show();

 window.addEventListener('mousemove', draw, false);
window.addEventListener('dblclick', comment, false);


function createImageOnCanvas(imageId) {
    //canvas.style.display = "block";
    //document.getElementById("images").style.overflowY = "hidden";
    //var img = new Image(300, 300);
    //img.src = document.getElementById(imageId).src;
    //context.drawImage(img, (0), (0)); //onload....
}

function draw(e) {
  canvas = document.getElementById("page" + $('#pageNumber').val());
   context = canvas.getContext("2d");
    var pos = getMousePos(canvas, e);
    posx = pos.x;
    posy = pos.y;

    context.fillStyle = "#000000";
    context.fillRect(posx-2, posy-2, 4, 4);
}


function comment(e){
  canvas = document.getElementById("page" + $('#pageNumber').val());
   context = canvas.getContext("2d");
  var pos = getMousePos(canvas, e);
    posx = pos.x;
    posy = pos.y;
    //alert("change")
 
  $(".comment-respond").prependTo($('.page[data-page-number="' + $('#pageNumber').val()+ '"]'));
  $(".comment-respond").css({top: posy, left: posx , position:'absolute', 'z-index':"100"});
  $("#new_post_data").val(posx + ',' + posy + ',' + $('#pageNumber').val())

}

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top
    };
}

      }
    }, true);

});
    </script>

<?php

get_footer();
