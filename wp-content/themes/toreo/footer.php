<footer id="pie" class="pie fondo-conte">

	<div class="grupo">
		<div class="caja base-100 web-50">
			
			<div class="pie__horarios">
				<h3><span class="icon icon-clock-o"></span> Horario de atención</h3>
				<p>
				Lunes a Viernes: 8:30 A.M. a 6:00 P.M. <br>
				Sábados: 8:30 A.M. a 1:00 P.M.
				</p>
			</div>

			<ul class="pie__menu">
					<li><a href="http://tornillostoreo.com/quienes-somos/"><span class="icon icon-angle-right"></span>¿Quiénes Somos?</a></li>
					<li><a href="http://tornillostoreo.com/aviso-de-privacidad/"><span class="icon icon-angle-right"></span>Aviso de privacidad</a></li>
					<li><a href="http://tornillostoreo.com/contactanos/"><span class="icon icon-angle-right"></span>Contáctanos</a></li>
			</ul>
			
		</div>

		<div class="caja base-100 web-50">
			<div class="pie__direccion">
					<h3>Tornillos</h3>
					
					<p>
						<span class="icon icon-map-marker"> </span> Carmelo Pérez No. 655 Col. Benito Juárez</br>
						Nezahualcoyotl Estado de México, C.P. 57000</br>
						Teléfonos: 5730-9548 / 5734-1643 / 5734-1644
					</p>

					<a href="mailto:#"><span class="icon icon-envelope"> </span> email: cdthsa@hotmail.com</a>
			</div>
		</div>
	</div>

</footer>    	


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/bxslider/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/angular.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>
	var direc = '<?php bloginfo('template_directory'); ?>';
	$( document ).tooltip();
	$('#whats_tel').click( function() {            
            alert('Llámanos al: 55-4325-0149');
            
        });
	
	var app = angular.module('formulario', []);

	app.controller('myCtrl', function($scope) {
		$scope.boton = true;
	});
</script>

</body>
</html>