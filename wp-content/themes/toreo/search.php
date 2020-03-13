<?php get_header(); ?>
<!--==============================      content     ================================-->

<div class="grupo destacados">











<div class="caja base-100">
	<div class="caja base-100">
        <h2 class="busqueda__titulo">Resultado de la busqueda: <b><?php echo get_search_query(); ?></b></h2>
    </div>
	
	
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
            <div class="caja base-50 tablet-1-3 web-25">
                
                    <div class="destacados__item">
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
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
    </div>





    <div class="caja base-100">
		    <div class="paginador">
		    <?php 	
		    wp_pagenavi(); ?>
		    </div>
    </div> 
    
<!--
<div class="caja no-padding">
                <?php the_posts_pagination( array('mid_size'  => 7, 'screen_reader_text' => '', 'prev_text' => __( 'Anterior', 'textdomain' ), 'next_text' => __( 'Siguiente', 'textdomain' ) )); ?>
            </div>
-->










    
    

    <div class="caja tablet-30">
        <?php get_sidebar('single'); ?>    
    </div>

</div>
<!--==============================footer=================================-->
<?php get_footer(); ?>