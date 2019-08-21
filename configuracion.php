<?php
 echo '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
     <html>
       <head>
          <link rel="stylesheet" href="css/estilos_virtual.css" 			type="text/css">
           <title> Configuración del Sistema - IN-DOMOTICAPP - 				Inclusive Domotic Application		
		</title>
        </head>
       <body>
        <table width="100%" align=center>
   	   <tr>
          <td valign="top" align=center> 
            <img src="img/banner_configuracion.jpg" border=0
		  USEMAP="#inicio">
		   <map name="inicio">
  			<area shape=rect 
				 coords="456,0,670,140" 
			      href="index.php"  alt="Luces">
  		   </map>        
	     </td>
         </tr>
	    <tr>
          <td valign="top" align=center> 
	      <table align=center width=670>
              <tr>
                <td width="50%" height="20%" align="center" 				bgcolor="#DEEEF5" class="_espacio_celdas" 					style="color: #044062; 
			font-weight: bold">
         		  Control de Luces Automatico
		      </td>
                <td width="50%" height="20" align="center" 				 	  bgcolor="#F2F7F9" 				
			  class="_espacio_celdas">
			  SI <input type="radio" name="conluc" value="SI">
			  NO <input type="radio" name="conluc" value="NO" checked>
		      </td>
		    </tr>  

              <tr>
                <td width="50%" height="20%" align="center" 				bgcolor="#DEEEF5" class="_espacio_celdas" 					style="color: #044062; 
			font-weight: bold">
         		  Generación de Alertas
		      </td>
                <td width="50%" height="20" align="center" 				 	  bgcolor="#F2F7F9" 				
			  class="_espacio_celdas">
			  VISUALES <input type="radio" name="alertas" value="SI" checked><br>
			  VISUALES Y SONORAS <input type="radio" name="alertas" value="NO">
		      </td>
		    </tr>  
               
		    <tr>
                <td width="50%" height="20%" align="center" 				bgcolor="#DEEEF5" class="_espacio_celdas" 					style="color: #044062; 
			font-weight: bold">
         		  Envío de alertas a email
		      </td>
                <td width="50%" height="20" align="center" 				 	  bgcolor="#F2F7F9" 				
			  class="_espacio_celdas">
			  SI<input type="radio" name="email" value="SI" checked>
			  NO<input type="radio" name="email" value="NO">
		      </td>
		    </tr>  

		    

              </table>
	      </td>
          </tr>
   	   </table><br><br>
        <br><br>
       </body>
      </html>';
?>
