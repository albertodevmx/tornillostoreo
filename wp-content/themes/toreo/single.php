<?php 
	get_header();
	
?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57c53c0bac5e16c0"></script>

<!-- Comment #2: SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Comment #4: Plugin Code -->
<div class="fb-quote"></div>

<!--==============================Contenidos=================================-->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="grupo single">
	<div class="caja base-100 single___contenido">
		<div class="single__producto__titulo">
		    <?php $categorias = get_the_category();
				$category_name = $categorias[0]->cat_name;
			?>
		    <h1><?php echo $category_name; ?></h1>
		</div>
		<?php custom_breadcrumbs(); ?>
	</div>
    <div class="caja base-100 single___contenido">
        <div class="caja base-50">
        	<div class="single__producto__contenido">
	        	<?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>
                        
	        	<img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="">
<!--             	<?php the_post_thumbnail($ID); ?> -->
                
            </div>
        </div>
        <div class="caja base-50">
	        <div class="single__producto__descripcion_titulo">
	    		<h3><?php echo get_the_title($ID); ?></h3>
	        </div>
			<div class="single__producto__descripcion">
            	<?php the_content(); ?>
	        	<div class="single__producto__like">
	        	<div id="fb-root"></div>
	                <script src="http://connect.facebook.net/es_ES/all.js#appId=123282127724030&amp;xfbml=1"></script>
	                <fb:like href="" send="false" layout="button_count" width="730" show_faces="false" font="trebuchet ms"></fb:like>       
	            </div> 
			</div>
			</div>
            <?php endwhile; ?>
    </div>
    <div class="caja base-100 single__compartir">
	        <h3>Comparte esta producto con tus amigos</h3>
            <div class="addthis_inline_share_toolbox_uy15"></div>
        </div>  
    <div class="caja base-100 single__compartir">
	    <?php
		    wp_pagenavi(); ?>
    </div>  
    <div class="caja tablet-30 no-padding">
        <?php get_sidebar(); ?>
    </div>
</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>