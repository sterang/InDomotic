<?php

 include ("conexion.php");
 
 echo '      
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
     <html>
       <head>
          <link rel="stylesheet" href="css/estilos_virtual.css" 			type="text/css">
           <title> Control de Luces - IN-DOMOTICAPP - Inclusive 
			 Domotic Application		
		</title>
          <META HTTP-EQUIV="REFRESH"  CONTENT="15;URL=control_luces.php">
        </head>
       <body>
        <table width="100%" align=center>
   	   <tr>
          <td valign="top" align=center> 
            <img src="img/banner_control_luces.jpg" border=0
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
                <td width="25%" height="20%" align="center" 				bgcolor="#DEEEF5" class="_espacio_celdas" 					style="color: #044062; 
			font-weight: bold">
         			UBICACION
		      </td>
                <td width="30%" height="20%" align="center" 
			bgcolor="#DEEEF5" 
			class="_espacio_celdas" style="color: #044062; 
			font-weight: bold">
			  ESTADO
                </td>
	          <td width="45%" height="20%" align="center" 
			bgcolor="#DEEEF5" 
			class="_espacio_celdas" style="color: #044062; 
			font-weight: bold">
			  OPERACION
                </td>
		    </tr>  
       
		    <tr>
			<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          			SALA
		      </td>
           	<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">';
			
			// Se hace la consulta a la base de datos si el bombillo está encendido o apagado en la vivienda.
			
			$mysqli = new mysqli($host, $user, $pw, $db);
			$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz='1' order by id DESC";
			$result1 = $mysqli->query($sql);
			$row1 = $result1->fetch_array(MYSQLI_NUM);
			$estado_led = $row1[3];
			if ($estado_led == 1)
   			 echo "<img src=img/bombillo_encendido.jpg>";
			else
   			 echo "<img src=img/bombillo_apagado.jpg>";
			echo '</td>
	     		<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          		 <form action="escribe_dato_luz.php" 					   method=POST>
    			 <input type=hidden value="1" name="dato_led">
    			 <input type=hidden value="1" name="id_luz">
    			 <input type=submit value="ENCENDER" 						 name="enviar1">
   			 </form>
   			 <form action="escribe_dato_luz.php" 					  method=POST>
   			 <input type=hidden value="0" name="dato_led">
   			 <input type=hidden value="1" name="id_luz">
			 <input type=submit value="APAGAR" 						  name="enviar2">
   			 </form>
                </td>
		    </tr>


		    <tr>
			<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          			HABITACION
		      </td>
           	<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">';
			
			// Se hace la consulta a la base de datos si el bombillo está encendido o apagado en la vivienda.
			
			$mysqli = new mysqli($host, $user, $pw, $db);
			$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz='2' order by id DESC";
			$result1 = $mysqli->query($sql);
			$row1 = $result1->fetch_array(MYSQLI_NUM);
			$estado_led = $row1[3];
			if ($estado_led == 1)
   			 echo "<img src=img/bombillo_encendido.jpg>";
			else
   			 echo "<img src=img/bombillo_apagado.jpg>";
		   
      
      echo '</td>
	     		<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          		 <form action="escribe_dato_luz.php" 					   method=POST>
    			 <input type=hidden value="1" name="dato_led">
    			 <input type=hidden value="2" name="id_luz">
    			 <input type=submit value="ENCENDER" 						 name="enviar1">
   			 </form>
   			 <form action="escribe_dato_luz.php" 					  method=POST>
   			 <input type=hidden value="0" name="dato_led">
   			 <input type=hidden value="2" name="id_luz">
			 <input type=submit value="APAGAR" 						  name="enviar2">
   			 </form>
                </td>
		    </tr>
           
		    <tr>
			<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          			ESTUDIO
		      </td>
           	<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">';
			
			// Se hace la consulta a la base de datos si el bombillo está encendido o apagado en la vivienda.

			$mysqli = new mysqli($host, $user, $pw, $db);
			$sql = "SELECT * from estado_leds where id_mod='A000001' and id_luz='3' order by id DESC";
			$result1 = $mysqli->query($sql);
			$row1 = $result1->fetch_array(MYSQLI_NUM);
			$estado_led = $row1[3];
			if ($estado_led == 1)
   			 echo "<img src=img/bombillo_encendido.jpg>";
			else
   			 echo "<img src=img/bombillo_apagado.jpg>";
			echo '</td>
	     		<td height="20" align="center" bgcolor="#F2F7F9" 				class="_espacio_celdas">
          		 <form action="escribe_dato_luz.php" method=POST>
    			 <input type=hidden value="1" name="dato_led">
    			 <input type=hidden value="3" name="id_luz">
    			 <input type=submit value="ENCENDER" 						 name="enviar1">
   			 </form>
   			 <form action="escribe_dato_luz.php" 					  method=POST>
   			 <input type=hidden value="0" name="dato_led">
   			 <input type=hidden value="3" name="id_luz">
			 <input type=submit value="APAGAR" name="enviar2">
   			 </form>
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
