<?php get_header(); ?>

<!--==============================Contenidos=================================-->

<div class="grupo total bienvenida">
<div class="grupo bienvenida__textos">
        <div class="caja">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <h2 class="pagina__titulo"><?php echo get_the_title($ID); ?></h2>

                    
                                        
                            <?php the_content(); ?>
                    

            <?php endwhile; ?>   
    </div>
</div>
</div>
    <div class="caja base-100">
		    <div class="paginador">
		    <?php 	
		    wp_pagenavi(); ?>
		    </div>
    </div> 
    
    <div class="caja tablet-30">
        <?php get_sidebar(); ?>    
    </div>

</div><!-- main -->


<!--==============================footer=================================-->
<?php get_footer(); ?>