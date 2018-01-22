<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GulpTheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<script>



(function($) {
	
   // document.addEventListener('textlayerrendered', function (e) {
     // if (e.detail.pageNumber === PDFViewerApplication.page) {
          console.log('hello');


$('iframe').ready(function(){




var c = $(this).contents().find("canvas");
console.log(c);

var canvas = c.get(0);
console.log(canvas);
var frame =document.getElementsByTagName('iframe')[0];
//var body = frame.contentWindow.document.getElementById("page1");;
  var iframe = document.getElementsByTagName('iframe')[0];
   var innerDoc = iframe.contentDocument || iframe.contentWindow.document;
   console.log(innerDoc.div);



//document.getElementById('myframe1').contentWindow.document.getElementById('x')
var iframe = document.getElementsByTagName('iframe');
/*var innerDoc = (iframe.contentDocument) ? iframe.contentDocument : iframe.contentWindow.document;
console.log(innerDoc.getElementById("page1"));*/

//var context = canvas[0].getContext("2d");

function createImageOnCanvas(imageId) {
    //canvas.style.display = "block";
    //document.getElementById("images").style.overflowY = "hidden";
    //var img = new Image(300, 300);
    //img.src = document.getElementById(imageId).src;
    //context.drawImage(img, (0), (0)); //onload....
}

function draw(e) {
    var pos = getMousePos(canvas, e);
    posx = pos.x;
    posy = pos.y;
    console.log(posx + ',' + posy);
    context.fillStyle = "#000000";
    context.fillRect(posx-2, posy-2, 4, 4);
}
window.addEventListener('mousemove', draw, false);

function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top
    };
}

      //}
   // }, true);
 });
	
})( jQuery );

/*  $('iframe').load(function(){
  $(this).contents().find("body").on('click', function(e) { 

  	alert('test');
  		  var y = e.pageY; 
 alert(y);
     //gives me 0
     var y = $(this).offset().top;

     alert(y);
  	 });
}); 
	// $ Works! You can test it with next line if you like
	// console.log($);
	
})( jQuery );
*/



/*
var iframepos = $("#iframe").position();


$('#iframe').contents().find('html').on('mousemove', function (e) { 
    var x = e.clientX + iframepos.left; 
    var y = e.clientY + iframepos.top;
    console.log(x + " " + y);
})*/

</script>
<?php

get_footer();
