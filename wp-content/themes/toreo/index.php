<?php get_header(); ?>

<!--============================== Slider =================================-->
<div class="grupo total">
    <div class="caja no-padding base-100">
        <div class="slider1">
            
            <div class="caja no-padding tablet-100">
                <ul class="bxslider">
                    <!-- <?php
                    $args = array('category_name' => 'principal', 'posts_per_page' => '4', );
                    $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        
                        <?php
                        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        ?>

                        <li>
                            <span class="slider1__slider__imagen">
                                <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>">
                            </span>
                        </li>


                    <?php endwhile; ?> -->

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_01_w.jpg">
                        </span>
                    </li>

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_02_w.jpg">
                        </span>
                    </li>

                    <li class="item active">
                        <span class="slider1__slider__imagen">
                            <img src="<?php bloginfo('template_directory'); ?>/img/slider_03_w.jpg">
                        </span>
                    </li>
                </ul>
            </div>            
            <!--<span id="slider-prev"></span>

            <span id="slider-next"></span>-->
        </div>
    </div>
</div>



<!--============================== Bienvenida =================================-->
<div class="grupo total bienvenida">
    <div class="grupo bienvenida__textos">
        <div class="caja">
            <h2>¿Quiénes Somos?</h2>
            
            <p>Somos una empresa constituida hace 25 años, con mucha experiencia en el mercado, creada para la distribución y comercialización de productos de fijación en sus diversas presentaciones, además contamos con un extenso surtido en herramientas.</p>

            <p>Contamos con un stock amplio en tornillos allen, acero inoxidable, métricos, Grado 2, 5, 8, y estructural entre otros. Varilla roscada galvanizada, B7. Tuercas y birlos automotrices. Taquetes arpón, tipo tx, expansión tipo z y plástico. Abrazadera para muelle, sinfín y omega. Miscelánea automotriz. contamos con todo tipo de herramienta de mano y eléctricas . Atendemos  industria, mercado ferretero y tlapalerías.</p>

            <p>Somos distribuidores directos de las mejores marcas: Prottor, Toledo, Atsa, Prottsa, Indux, Ideal, Anclo, Austromex, Urrea, Truper.</p>

            
            <h2>MISIÓN</h2>
            <p>Ofrecer a nuestros clientes servicio y producto de la mejor calidad y compromiso para mantenernos en su preferencia.</p>
            

            <h2>VISIÓN</h2>
            <p>Ser una empresa líder dentro del ramo, ampliar la distribución de nuestro productos y cumplir con las necesidades de cada uno de nuestros clientes.</p>
            

            <h2>VALORES</h2>
            
            <ul>
                <li>Competitividad</li>
                <li>Compromiso</li>
                <li>Honestidad</li>
                <li>Respeto</li>
                <li>Responsabilidad</li>
                <li>Satisfacción al cliente</li>
            </ul>
        </div>
    </div>

    
<div class="grupo bienvenida__logotipos">
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img src="http://tornillostoreo.com/wp-content/uploads/2017/03/anclo-300x167.jpg" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone size-medium wp-image-23" src="http://tornillostoreo.com/wp-content/uploads/2017/03/atsa-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="size-medium wp-image-24 alignnone" src="http://tornillostoreo.com/wp-content/uploads/2017/03/austromex-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="size-medium wp-image-27 alignleft" src="http://tornillostoreo.com/wp-content/uploads/2017/03/protor-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="size-medium wp-image-26 alignleft" src="http://tornillostoreo.com/wp-content/uploads/2017/03/indux-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="size-medium wp-image-28 alignleft" src="http://tornillostoreo.com/wp-content/uploads/2017/03/prottsa-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-467 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/akron.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="wp-image-469 size-full alignnone" src="http://tornillostoreo.com/wp-content/uploads/2017/03/m85.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="size-medium wp-image-30 alignleft" src="http://tornillostoreo.com/wp-content/uploads/2017/03/truper-300x167.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-470 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/fisher.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-472 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/ideal2.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-473 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/irwin.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-476 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/tenazit.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-474 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/lock.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-480 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/urrea3.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-479 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/urrea2-1.jpg" alt="" width="300" height="167" /></div>
<div class="caja base-50 tablet-20 bienvenida__logotipos__item"><img class="alignnone wp-image-475 size-full" src="http://tornillostoreo.com/wp-content/uploads/2017/03/surtek.jpg" alt="" width="300" height="167" /></div>
</div>




</div>



<!--============================== Banner inicia tu negocio =================================-->
<div class="grupo total" style="background: #ccc;">
<div class="grupo negocio">
<a href="http://tornillostoreo.com/inicia-tu-propio-negocio/" style="display: block; margin: 15px auto;">
<img src="http://tornillostoreo.com/wp-content/uploads/2017/04/banner_negocio.png">
</a>
</div>
</div>


<div class="grupo destacados">
    
    <!--============================== Main Izquierda =================================-->
    <div class="caja base-100">
        <h3 class="caja destacados__titulo">Productos Destacados</h3>
    </div>

    <div class="caja base-100">
	    <?php 
		    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		    $args = array('category_name'=>'destacados','posts_per_page' => 15, 'paged' => $paged );
		    query_posts($args); 
			    if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			    	
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
			   <?php else : ?>
			   <!-- No posts found -->
			   <?php endif; ?>
			    </div>
					<div class="caja base-100">
					    <div class="paginador">
					    <?php 	
					    wp_pagenavi(); ?>
					    </div>
			    </div> 

	   
	   	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
<!--
        <?php 
        $args = array('category_name' => 'destacados', 'posts_per_page' => '15');
        $my_query = new WP_Query($args); while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
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
--> 
   
</div>



<!--============================== Grupo Contacto =================================-->
<div class="grupo total contacto">
    <div class="grupo">
        <div class="caja base-100 web-60">
    </div>

    <div class="caja base-100 web-40" data-ng-app="formulario">
        <div class="formulario" data-ng-controller="myCtrl">
            <h3>Formulario de Contacto</h3>
            <form name="hmForm" id="hm-formulario" method="post" enctype="multipart/form-data" action="mail.php" class="form-horizontal">                    
                
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre:" data-ng-model="nombreIngresado" data-ng-minlength="3" data-ng-maxlength="45" data-ng-required="true">
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.required"> No has ingresado tu nombre.</div>
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.minlength"> ¿No te parece que el nombre es muy corto?.</div>
                    <div class="form-error" data-ng-show="hmForm.nombre.$error.maxlength"> Creo que el nombre es demasiado largo.</div>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input class="form-control" id="telefono" name="telefono" type="text"  placeholder="Teléfonos:" data-ng-model="telefonoIngresado" data-ng-minlength="8" data-ng-maxlength="40" data-ng-required="true">
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.required"> No has ingresado tu teléfono.</div>
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.minlength"> Con tan pocos números no podremos llamarte.</div>
                    <div class="form-error" data-ng-show="hmForm.telefono.$error.maxlength"> Con dos números es suficiente.</div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="E-mail:" data-ng-model="emailIngresado" data-ng-required="true" data-ng-Pattern="/^([a-z0-9]{1,30})(\.[_a-z0-9]{1,30})*@([a-z0-9-]{3,63})(\.[_a-z]{2,4})(\.[_a-z]{2,3})*$/">
                    <div class="form-error" data-ng-show="hmForm.email.$error.required"> Coloca tu e-mail para poder contactarte.</div>
                    <div class="form-error" data-ng-show="hmForm.email.$error.pattern"> Coloca un e-mail válido.</div>

                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" data-ng-model="mensajeIngresado" data-ng-minlength="8" data-ng-required="true"></textarea>
                    <div class="form-error" data-ng-show="hmForm.mensaje.$error.required"> Falta tu mensaje.</div>
                    <div class="form-error" data-ng-show="hmForm.mensaje.$error.minlength"> Tu mensaje es muy corto.</div>
                </div>

                <div class="from-group">
                    <div class="caja base-40">
                        <input id="boton-enviar" class="btn" type="submit" name="botonenviar" value="Enviar">
                    </div>
                    <div class="caja base-60">
                        <span id="hm-formulario-mensajes" class="form-exito"></span>
                    </div>
                </div>

                
            </form>             
        </div>
    </div>
    </div>
</div>

<!--==============================Pie de página=================================-->
<?php get_footer(); ?>