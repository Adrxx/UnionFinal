<!DOCTYPE html>
<html>
<head>

<!-- JQUERY / JQUERY MOBILE -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- UTF-8 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<!-- ViewPort no scalable/zoomable -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="recursos/css/universal.css">

<link rel="stylesheet" media="(max-width: 600px)," type="text/css"  href="recursos/css/universal_compact.css">

<link rel="stylesheet" type="text/css"  href="recursos/css/busqueda.css">

<link rel="stylesheet" media="(max-width: 600px)," type="text/css"  href="recursos/css/busqueda_compact.css">
   
<!-- Javascript librerias externas -->
<script src="recursos/javascript/snap.svg-min.js"></script>   
 
<!-- Javascript interno -->
<script src="recursos/javascript/busqueda.js"></script>
    
<title>UNIÓN</title>
</head>
	
	<body ontouchstart="" ontouchend="">
		
		
			
<!-- MENUS -->
		<div id="menu_bar">
		
			
			
				<table id="menu_bar_container" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td id="logo_container"><div id="logo"></div></td>
						<td>	
							<table id="tabs_container_voluntario" border="0" cellpadding="0" cellspacing="0">
							
								<tr id="row_desktop">
									<td class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_inicio_blanco.png"/>
										<span id="tab_title">Inicio</span>
									</td>
									<td id="selected_tab" class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_busqueda_blanco.png"/>
										<span id="tab_title">Búsqueda</span>
									</td>
									<td  class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_perfil_blanco.png"/>
										<span id="tab_title">Perfil</span>
									</td>
									
								</tr>
								
								<tr id="row_mobile">
								
									<td  class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_inicio_blanco.png"/>
									</td>
									<td id="selected_tab" class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_busqueda_blanco.png"/>
									</td>
									<td class="menu_tab">
										<img id="tab_icon" src="recursos/imgs/icono_perfil_blanco.png"/>
									</td>
									
								</tr>
		
								
								
									
							</table>
						</td>
					</tr>
				</table>
			
				
	
		</div>
		
		
		<div id="main_panel">
		
<!-- SIDEBAR (PERFIL) -->
			<div id="sidebar">
				
			<form name="input" action="demo_form_action.asp" method="get">
			
				<div id="search_bar">

						<input placeholder="Buscar" id="search_box">


				</div>
								<div id="untitled_separator"></div>

				<div id="filtros">
				
					<div id="filtros_interes" onclick="expandirFiltro(this)"><span placeholder="Interés">Interés</span>

						<svg id="one" class="indicator"></svg>
						
					</div>
					
					<div id="dropdown_filtro">

							<div id="sin_filtro" class="filtro_interes">Sin filtro
							</div>
							<div class="separator"></div>
							<div class="filtro_interes">Medio ambiente
								<div id="icono_interes_medio_color" class="filtro_icon"></div> 						
							</div>
							<div class="separator"></div>
							
							<div class="filtro_interes"><span>Educación</span>
								<div id="icono_interes_salud_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>

							<div class="filtro_interes"><snap>Salud</snap>
								<div id="icono_interes_educacion_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>

							<div class="filtro_interes">Emprendimiento
								<div id="icono_interes_emprendimiento_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>

							<div class="filtro_interes">Deporte y recreación
								<div id="icono_interes_deportes_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>

							<div class="filtro_interes">Arte y Cultura
								<div id="icono_interes_arte_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>
							
							<div class="filtro_interes">Ciencia y tecnología
								<div id="icono_interes_ciencia_color" class="filtro_icon"></div>
							</div>
							<div class="separator"></div>

							<div class="filtro_interes">Derechos Humanos
								<div id="icono_interes_derechos_color" class="filtro_icon"></div>
							</div>




						</div>

					<div class="separator"></div>

					<div id="filtros_interes" onclick="expandirFiltro(this)"><span placeholder="Ubicación">Ubicación</span>

						<svg id="two" class="indicator"></svg>

					</div>
					
					<div id="dropdown_filtro">
						
						<div id="sin_filtro" class="filtro_interes"><span>Sin filtro</span>
						</div>
						<div class="separator"></div>

						<div id="centered" class="filtro_interes"><span>Cercanos a mí</span>
						</div>
						<div class="separator"></div>

						<div id="centered" class="filtro_interes"><span>En mi municipio</span>
						</div>
						<div class="separator"></div>

						<div  id="centered" class="filtro_interes"><span>En mi estado</span>
						</div>
						

					</div>


					<div class="separator"></div>

					<div id="filtros_interes" onclick="expandirFiltro(this)"><span placeholder="Fecha de inicio">Fecha de inicio</span>

						<svg id="three" class="indicator"></svg>


					</div>
					
					<div id="dropdown_filtro">
						
						
						<div id="sin_filtro" class="filtro_interes">Sin filtro
							</div>
						<div class="separator"></div>

						<div id="centered" class="filtro_interes">Este mes
						</div>
						<div class="separator"></div>

						<div id="centered" class="filtro_interes">El próximo mes
						</div>
						<div class="separator"></div>

						<div  id="centered" class="filtro_interes">En tres meses
						</div>
						

					</div>
				
				</div>
				
												<div id="untitled_separator"></div>

				<div id="buscar_boton">Buscar</div>
		

			</form>
			
			
				

			</div>
			
<!-- TIMELINE (ACTIVIDADES) -->
	
			<div id="timeline">
			
				
				<div class="titled_separator">Resultados</div>
				
				<div id="activity">
				
					<div id="resultado_layout">
						
						<div id="resultado_imagen">
						
							<div id="resultado_imagen_container">
								<img id="img_resultado" src="recursos/imgs/baruch.jpg"/>
							</div>
						
							
						</div>
						<div id="resultado_texto">
							<div id="titulo_activity">Reforestando México</div> 
							<div id="subtitulo_activity">ITESM-CEM</div>
							<div class="separator"></div>

							<div id="descripcion_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</div>
							
						</div>
						<div id="datos_imagen">
							<div id="icono_interes_medio_color" class="categoria_activity"> </div>
							<div id="fecha_activity" class="interface">
										<div id="month">SEP</div>
										<div id="day">5</div>
							</div>
						</div>


					</div>
					
					
					 

				</div>
				
				<div id="untitled_separator"></div>

				
				<div id="activity">
				
					<div id="resultado_layout">
						
						<div id="resultado_imagen">
						
							<div id="resultado_imagen_container">
								<img id="img_resultado" src="recursos/imgs/baruch.jpg"/>
							</div>
						
							
						</div>
						<div id="resultado_texto">
							<div id="titulo_activity">Reforestando México</div> 
							<div id="subtitulo_activity">ITESM-CEM</div>
							<div class="separator"></div>

							<div id="descripcion_activity">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi</div>
							
						</div>
						<div id="datos_imagen">
							<div id="icono_interes_medio_color" class="categoria_activity"> </div>
							<div id="fecha_activity" class="interface">
										<div id="month">SEP</div>
										<div id="day">5</div>
							</div>
						</div>


					</div>
					
					
					 

				</div>
				
				
			</div>
			
		</div>
		
		
		
		
				<script>
			
				setProfileColor("#796fd9");

				</script>
	</body>
		
</html>