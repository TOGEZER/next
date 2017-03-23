<?php
/**
 * Template Name: Page map
 * The template for displaying a page without a sidebar.
 *
 * @package Libre
 */

get_header(); ?>

<script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />

<script src="/wp-content/themes/libre/js/jquery.slidereveal.js"></script>

<style>
  
   #map { position:absolute; top:0; bottom:0; width:80%; display: none; float: left;  }
   .itinerary-map{ position:relative; top:0; bottom:0; width: 20%; height: 100% ;background-color: #fff; float: right; }
   
   .popup.column {
    width: 100%;
}

.column, .columns, .columns-info {
    float: left;
    display: inline;
}

h3.sectionTitle {
    border-bottom: 1px solid #cacaca;
    font-size: 2.5rem;
    line-height: 40px;
    margin-bottom: 10px;
    padding: 26px 0 15px;
}

.container-itinerary {
   width: 80%;
   
   margin: 50px auto;
   position: relative;
   overflow-x: hidden;
   overflow-y: visible;
   height: 100%;

}

.timeline-block-left {
   float: left;
   direction: rtl;
   width: 100%;   
}


.marker {
   width: 16px;
   height: 16px;
   border-radius: 20%;
   border: 2px solid #f00;
   background: #f00;
   margin-top: 10px;
   z-index: 9999
}


.timeline-content {
   width: 95%;
   padding: 0 15px;
   color: #666
}










.info {
    background:#fff;
    position:absolute;
    width:260px;
    top:10px;
    right:10px;
    border-radius:2px;
    }
    .info .item {
      display:block;
      border-bottom:1px solid #eee;
      padding:10px;
      text-decoration:none;
      }
      .info .item small { color:#888; }
      .info .item:hover,
      .info .item.active { background:#f8f8f8; }
      .info .item:last-child { border-bottom:none; }





</style>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
        
        
        
        
        	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		
        
        	
        
        
        
<div id="map-slider">
       <div id="map"></div>
          
       <div class="itinerary-map">
       <div class="popup column">
            <h3 class="sectionTitle" style="text-align: center;">Jour par jour</h3>
       </div>
	   <div class="container-itinerary">
			<div class="timeline-block timeline-block-left">
      			 <div class="marker"></div>
                 <div class="timeline-content">
                      <a href="#day1">
                          <h3>Jour 1</h3>
                          <span>Chacaltaya - La Paz</span>
                      </a>

                 </div>
                 <div class="marker"></div>
                 <div class="timeline-content">
                     
                        <a href="#day2">
                          <h3>Jour 2</h3>
                          <span>Uyuni - Potosi</span>
                      </a>
                 </div>
   			</div>
            <div id='info' class='info'></div>
	   </div>
   </div>   
</div>

     
     
        
        
    <button id="trigger">mapaaaaa</button>    
        
        
        </main><!-- #main -->



			




	</div><!-- #primary -->






<script src="/wp-content/themes/libre/js/mapa.js"></script>






<?php get_footer(); ?>
