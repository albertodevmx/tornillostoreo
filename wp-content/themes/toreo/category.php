<?php get_header(); ?>

<!--============================== Portada Slidrs =================================-->
<div class="grupo single">
    <div class="caja base-100 single___contenido">
		<div class="single__producto__titulo">
		    <h1><?php single_cat_title(); ?></h1>
		</div>
		<?php custom_breadcrumbs(); ?>
	</div>
	
	<div class="caja base-100">
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="caja base-50 tablet-1-3 web-25" style="float:left;">
                
                    <div class="destacados__item">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>

                        <div class="destacados__item__imagen">
	                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<!--                             <a href="?p=<?php the_ID(); ?>"> -->
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="">
                            </a>

                            <a href="<?php the_permalink(); ?>" class="destacados__item__titulo">
                                    <?php echo get_the_title($ID); ?><br>
                                    <b>+</b>
                            </a>
                        </div> 
                    </div>

                </div>
		
		<?php endwhile; ?>
<!--
        <?php 
	        
        $args = array('cat' => the_category_ID(false), 'posts_per_page' => '80', );
            $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
            <div class="caja base-50 tablet-1-3 web-25">
                
                    <div class="destacados__item">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                        ?>

                        <div class="destacados__item__imagen">
                            <a href="?p=<?php the_ID(); ?>">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="">
                            </a>

                            <a href="?p=<?php the_ID(); ?>" class="destacados__item__titulo">
                                    <?php echo get_the_title($ID); ?><br>
                                    <b>+</b>
                            </a>
                        </div> 
                    </div>

                </div>
            <?php endwhile; ?> 

            
            
             
            <div class="caja no-padding">
                <?php the_posts_pagination( array('mid_size'  => 7, 'screen_reader_text' => '', 'prev_text' => __( 'Anterior', 'textdomain' ), 'next_text' => __( 'Siguiente', 'textdomain' ) )); ?>
            </div>   
-->    </div>
    <div class="caja base-100">
		    <div class="paginador">
		    <?php 	
		    wp_pagenavi(); ?>
		    </div>
    </div> 


    <div class="caja web-30">
        <?php get_sidebar(); ?>
    </div>    
</div>

      
<!--==============================footer=================================-->
<?php get_footer(); ?>