<?php
 echo '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 	Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
     <html>
       <head>
          <link rel="stylesheet" href="css/estilos_virtual.css" 			type="text/css">
           <title> Reporte Temperatura - IN-DOMOTICAPP - 				Inclusive Domotic Application		
		</title>
		<META HTTP-EQUIV="REFRESH" 		
	CONTENT="20;URL=reporte_temperatura.php">
        </head>
       <body>
        <table width="100%" align=center>
   	   <tr>
          <td valign="top" align=center> 
            <img src="img/banner_temperatura.jpg" border=0
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
         		  Temperatura Actual
		      </td>
                <td width="50%" height="20" align="center" 				 	  bgcolor="#F2F7F9" 				
			  class="_espacio_celdas2">';
			  $temperatura = rand(18,32);;
                  echo $temperatura."º C";
			echo'
		      </td>
		    </tr>  
       
		    <tr>
			<td width="50%" height="20%" align="center" 
			bgcolor="#DEEEF5" 
			class="_espacio_celdas" style="color: #044062; 
			font-weight: bold">
			     Temperatura Promedio del día
                </td>
			<td width="50%" height="20" align="center" 		
			bgcolor="#F2F7F9" 						
			class="_espacio_celdas1">';
			  $temperatura_prom = rand(23,29);;
                  echo $temperatura_prom."º C";
			echo'
          	      </td>
           	</tr>        
			<tr>
		       <td colspan=2 width="100%" height="20%" 
			  align="center" 
		       bgcolor="#DEEEF5" 
		       class="_espacio_celdas" style="color: #044062; 
		       font-weight: bold">
		         <br>Grafica de Temperatura vs Horas del Dia 
			    <input type=date value="2015-08-14"></input>
			  <br><br>
			   
		       <img 
			  src="img/grafica_temperatura_vs_tiempo.jpg" 
		   	  border=0>
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
