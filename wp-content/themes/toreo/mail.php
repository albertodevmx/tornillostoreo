<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = strip_tags(trim($_POST["nombre"]));
		$nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        if ( empty($nombre) OR empty($mensaje) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            http_response_code(400);
            echo "Hay un problema con los datos que proporcionaste, verfícalo por favor.";
            exit;
        }
		
		$to = "cdthsa@hotmail.com";


        $subject = "Nuevo contacto $nombre";

        $cuerpo = "<table style='border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #fbfbfb;' cellpadding='0' cellspacing='0'>
	<tbody>
		<tr>
			<td>
		      <div>
		        
		        <div style='Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>
		        <!--[if (mso)|(IE)]><table align='center' cellpadding='0' cellspacing='0'><tr><td style='width: 600px'><![endif]-->
		          <div style='font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #41637e;font-family: Avenir,Segoe UI,Corbel,Geneva,sans-serif;Margin-left: 20px;Margin-right: 20px;' align='center'>
		            <div align='center'><img style='display: block;height: auto;width: 100%;border: 0;max-width: 146px;' src='http://tornillostoreo.com/wp-content/themes/toreo/img/logo_tornillos.png' alt='' width='146'></div>
		          </div>
		        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
		        </div>
		      </div>
		      <div>
		      <div style='Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;'>
		        <div style='border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;'>
		        <!--[if (mso)|(IE)]><table align='center' cellpadding='0' cellspacing='0'><tr><td style='width: 600px' class='w560'><![endif]-->
		          <div style='text-align: left;color: #565656;font-size: 14px;line-height: 21px;font-family: Georgia,PT Serif,Times New Roman,serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>
		        
		            <div style='Margin-left: 20px;Margin-right: 20px;Margin-top: 24px;Margin-bottom: 24px;'>
		      <p style='Margin-top: 0;Margin-bottom: 0;font-family: avenir,sans-serif;font-size: 20px;line-height: 28px;text-align: center;' lang='x-size-24'><span class='font-avenir'><span style='color:#ff0000'>Mensaje de la página</span></span></p>
		    </div>
		        
		          </div>
		        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
		        </div>
		      </div>
		  
		      <div style='line-height:20px;font-size:20px;'>&nbsp;</div>
		  
		      <div style='Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;'>
		        <div style='border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;'>
		        <!--[if (mso)|(IE)]><table align='center' cellpadding='0' cellspacing='0' role='presentation'><tr><td style='width: 600px' class='w560'><![endif]-->
		          <div style='text-align: left;color: #565656;font-size: 14px;line-height: 21px;font-family: Georgia,PT Serif,Times New Roman,serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);'>
		        
		            <div style='Margin-left: 20px;Margin-right: 20px;Margin-top: 24px;Margin-bottom: 24px;'>
		      <p style='Margin-top: 0;Margin-bottom: 0;font-family: avenir,sans-serif;font-size: 16px;line-height: 24px;' lang='x-size-16'><span>Nombre: " . $nombre . "</span><br><span>Correo: " . $email . "</span> <br> <span>Teléfono: " . $telefono . "</span> <br> <span>Mensaje: " . $mensaje . "</span></p>
		    </div>
		        
		          </div>
		        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
		        </div>
		      </div>
		  
		      <div style='line-height:20px;font-size:20px;'>&nbsp;</div>
		  
		      
		      <div>
		        <div style='Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;'>
		          <div style='border-collapse: collapse;display: table;width: 100%;'>
		          <!--[if (mso)|(IE)]><table align='center' cellpadding='0' cellspacing='0'><tr><td style='width: 400px;' valign='top' class='w360'><![endif]-->
		            <div style='text-align: left;font-size: 12px;line-height: 19px;color: #999;font-family: Georgia,PT Serif,Times New Roman,serif;Float: left;max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);'>
		              <div style='Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;'>
		                <table style='border-collapse: collapse;table-layout: fixed;'><tbody><tr>
		                
		                </tr></tbody></table>
		                <div style='font-size: 12px;line-height: 19px;Margin-top: 20px;'>
		                  <div>Tornillos Toreo<br>
			                  Carmelo Pérez No. 655 Col. Benito Juárez<br>
			                  Nezahualcoyotl Estado de México, C.P. 5700<br>
			                  Teléfonos: 5730-9548 / 5734-1643 / 5734-1644<br>
			                  email: cdthsa@hotmail.com<br>
			              </div>
		                <div style='font-size: 12px;line-height: 19px;Margin-top: 18px;'>
		                  
		                </div>
		              </div>
		            </div>
		          <!--[if (mso)|(IE)]></td><td style='width: 200px;' valign='top' class='w160'><![endif]-->
		          </div>
		        </div>
		      </div>
		    </div>
		    </td>
		</tr>
	</tbody>
</table>";
		$cabezera = "MIME-Version: 1.0\r\n"; 
		$cabezera .= "Content-type: text/html; charset=UTF-8\r\n"; 
	
        $cabezera .= "From: $nombre <$email>";

        if (mail($to, $subject, $cuerpo, $cabezera)) {

            http_response_code(200);
            echo "Tu mensaje se ha enviado";
        } else {

            http_response_code(500);
            echo "Ocurrió un error, inténtalo de nuevo por favor.";
        }

    } else {
	    
        http_response_code(403);
        echo "Hay un problema con la conexión, intenta más tarde. ";
    }

?>