<!DOCTYPE html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Perfect Body Portal Interno</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/css/media-queries.css')}}">

        
    </head>

    <body>

		<!-- Top menu -->
		<nav id ="navbar-principal" class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
			<div class="container dimension-nav">
				<a class="navbar-brand" href="index.html">Perfect Body Portal Interno</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav ml-auto"> 
			            <li class="nav-item">
			                <a class="nav-link scroll-link" href="#top-content">Inicio</a>
			            </li>
			            <li class="nav-item">
			                <!--<a class="nav-link scroll-link" href="#section-2">Anuncios</a>-->
			                <a class="nav-link scroll-link" href="#anuncio1">Anuncios</a>
			            </li>
			            <li class="nav-item">
			                <!--<a class="nav-link scroll-link" href="#section-1">Cumpleaños</a>-->
			                <a class="nav-link scroll-link" href="#seccion-cumpleaños">Cumpleaños</a>
			            </li>
			            <li class="nav-item">
			                <!--<a class="nav-link scroll-link" href="#section-3">Protocolos Covid19</a>-->
			                <a class="nav-link scroll-link" href="#seccion-protocoloscovid">Protocolos Covid19</a>
			            </li>
			            <li id="boton_menu" class="nav-item" onclick="clickMenu()">
			                <a class="nav-link scroll-link" style="background-color: #003660;" href="">Menú</a>
			                <div id="contenedor_opciones_menu" class="contenedor_opciones_menu dropdown-content">
	                            <h3 class="titulo_enlace_menu">
									 <strong>
										Perfect Body
									</strong> 
								</h3>
								<a class="enlace_menu" href="http://192.168.1.95/ADMISIONES/index.aspx" target="_blank">
	                                Admisiones
	                            </a>
	                            <a class="enlace_menu" href="http://192.168.1.95/ActivosFijos/index.aspx" target="_blank">
	                                Activos Fijos</a>
	                            <a class="enlace_menu" href="http://192.168.1.95/CITAS/index.aspx">
	                                Citas</a>
	                            <a class="enlace_menu" href="http://192.168.1.95/contratacion/Index.aspx" target="_blank">
	                                Contratación</a>
	                            <a class="enlace_menu" href="http://192.168.1.95/SIOS/" target="_blank">
	                                SIOS</a>
	                            <a class="enlace_menu" href="http://192.168.1.95/ORDENES/index.aspx" target="_blank">
	                                Orden Externa</a>
	                            <a class="enlace_menu" href="http://192.168.1.100:8080/oviyam2/" target="_blank">
	                                RX-Oviyam</a>
	                            <a class="enlace_menu" href="http://192.168.1.95/gerencial/index.aspx" target="_blank">
	                                Gerencial</a>
	                            <a class="enlace_menu" href="http://192.168.1.52:8686/Incidencias/public/login" target="_blank">
	                                Incidencias</a>
	                            <a class="enlace_menu" href="http://192.168.1.52:8686/Gestion_Documental/public/login" target="_blank">
	                                Gestion Documental</a>
	                            <a class="enlace_menu" href="http://192.168.1.52:8686/Inspeccion_perfect_Body/public/login" target="_blank">
	                                Inspección</a>
	                            <a class="enlace_menu" href="http://192.168.1.52:8686/SST_Perfect-Body/public/" target="_blank">
	                                C.P.C.PBMC</a>
	                           
								<h3 class="titulo_enlace_menu">
									<strong>
									   Otros Enlaces
								   </strong> 
							   </h3>
	                            <a class="enlace_menu" href="https://mipres.sispro.gov.co/MIPRESNOPBS/Login.aspx" target="_blank">
	                                Mipres SISPRO</a>
	                            <a class="enlace_menu" href="https://imagenes.rras-sas.com/viewer/index.php" target="_blank">
	                                Radiologos S.A.S</a>
	                            <a class="enlace_menu" href="https://resultados.patologosasociados.com/" target="_blank">
	                                Patologos Asociados</a>
	                            <a class="enlace_menu" href="https://www.colmenaseguros.com/Paginas/EncuestaCovid.aspx" target="_blank">
	                                Encuesta Colmena</a>
	                            <a class="enlace_menu" href="https://drive.google.com/drive/folders/15VjXdXO1VjGVTE-TJrNMcfFSWxHn741r?usp=sharing" target="_blank">
	                                Fichas INS
	                            </a>
								<a class="enlace_menu" href="{{url('/login')}}" target="_blank">
	                                Administrar
	                            </a>
                            </div>
			            </li>
			            
			        </ul>
			    </div>
		    </div>
		</nav>

		
		<!-- Top content -->
        <div class="top-content">
	        <div class="container" style="">
	        	<!-- Title and description row -->
	            
	            <!-- End title and description row --> 
	            
	            <!-- Carousel row -->
	            <div class="row margin-top-carousel">
	            <!--<div class="col">-->
	            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
	                	<!-- Carousel -->
	                	<div id="carousel-example" class="carousel slide">
	                <!--<div id="carousel-example" class="carousel slide ancho-carousel">-->	
	                		

	                		<!--carousel indicadores-->
	                	     		
	       					<!--fin carousel indicadores-->
	       					
	       					<div id="contenido-carousel" class="carousel-inner">
	       						
	       						<div class="carousel-item active">
	       							<a id="" class="scroll-link" href="#anuncio2">
	       								<img src="{{asset('/img/slides/enfermero.jpg')}}" class="d-block w-100" alt="slide-img-1">
	       							</a>
	       							<div class="carousel-caption">
										<a  class="scroll-link" href="#anuncio2">
											<h3 class="carousel-anuncio-titulo"><span class="fondo-texto">FELIZ DIA DEL PROFESIONAL DE ENFERMERIA</span></h3>
											<div class="carousel-anuncio-descripcion">
												<p><span class="fondo-texto">Feliz dia a todos los profesionales de enfermeria</span></p>
											</div>
										</a>
									</div>
	       						</div>
	       						     						

	       						<div class="carousel-item">
	       							<div class="imagen-slider">
	       								<img src="{{asset('/img/slides/foto_gracias_editada.jpg')}}" class="d-block w-100" alt="slide-img-2" style="height: auto">
	       							</div>
	       							
	       							<div class="carousel-caption">
	       								<a  class="scroll-link" href="#anuncio2">
											<h3 class="carousel-anuncio-titulo"><span class="fondo-texto">GRACIAS A TODOS</span></h3>
											<div class="carousel-anuncio-descripcion">
												<p><span class="fondo-texto">Gracias por brindar lo mejor en cada en atención.</span></p>
											</div>
										</a>
									</div>
	       						</div>
	       						<div class="carousel-item">
	       							<img src="{{asset('/img/slides/huellero.jpg')}}" class="d-block w-100" alt="slide-img-2">
	       							<div class="carousel-caption">
										<h3 class="carousel-anuncio-titulo"><span class="fondo-texto">ENTRADA O SALIDA SOLO CON LA HUELLA</span></h3>
										<div class="carousel-anuncio-descripcion">
											<p><span class="fondo-texto">Para registrar su ingreso o salida, solo utlice su huella</span></p>
										</div>
									</div>
	       						</div>
	       						
	       						<div class="carousel-item">
	       							<div class="embed-responsive embed-responsive-16by9">
	       								<video class="embed-responsive-item" src="{{asset('/videos/video4.mp4')}}" allowfullscreen controls ></video>
	       							</div>
	       							<div class="carousel-caption">
										<h3 class="carousel-anuncio-titulo">
											<span class="fondo-texto">
												Caption to Video 3
											</span>
                                        </h3>
										<div class="carousel-anuncio-descripcion">
											<p><span class="fondo-texto">
												This is the caption description text to video 3.
											</p>
										</div>
									</div>
	       						</div>
	       						
	       					</div>
	       					
							<a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
	       				</div>
	                	<!-- End carousel -->
	                </div>
	            </div>
	            <!-- End carousel row -->
	        </div>
        </div>
	       

		

		<!-- Section 1 -->
        <div id="seccion-cumpleaños"  class="section-1-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col section-1 section-description wow fadeIn">
	                    <h2>Cumpleaños Mayo</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	
		                		<!--<div class="section-1-box-icon">
		                		<i class="fab fa-twitter"></i>
		                		</div>-->
		                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">ALVARO PEREZ ORDOÑEZ</h3>
	                    		<h4 id="cargo">Farmacia</h3>
	                    		<p class="color-fecha" id="fecha_cumple">5 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>

                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	
		                		<!--<div class="section-1-box-icon">
		                		<i class="fab fa-twitter"></i>
		                		</div>-->
		                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">MILENA GUERRERO LESMES</h3>
	                    		<h4 id="cargo">Asistencial</h3>
	                    		<p class="color-fecha" id="fecha_cumple">6 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>

                	<div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
                		<div class="row">
                			<div class="col-md-4">
                				<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	<!--<div class="section-1-box-icon">
			                		<i class="fas fa-magic"></i>
			                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:30px;height:40px;">
			                	</div>-->
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio" id="nombre">NAIRO REDONDO FLOREZ</h3>
	                    		<h4 id="cargo">Jefe Mantenimiento</h3>
	                    		<p class="color-fecha" id="fecha_cumple">10 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInDown">
	                	<div class="row">
                			<div class="col-md-4">
			                	<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	<!--			                		
			                	</div><div class="section-1-box-icon">
			                		<i class="fas fa-cog"></i>
			                	</div>-->
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">LINA SALGADO GOMEZ</h3>
	                    		<h4 id="cargo">Administrativo</h3>
	                    		<p class="color-fecha" id="fecha_cumple">11 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	<!--
			                	<div class="section-1-box-icon">

			                		<i class="fab fa-twitter"></i>
			                	</div>
			                	-->
			                	<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">OSCAR RODRIGUEZ AVENDAÑO</h3>
	                    		<h4 id="cargo">Asistencial</h3>
	                    		<p class="color-fecha" id="fecha_cumple">11 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>

                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	
		                		<!--<div class="section-1-box-icon">
		                		<i class="fab fa-twitter"></i>
		                		</div>-->
		                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">JORGE LINDARTE ANGARITA.</h3>
	                    		<h4 id="cargo">Asistencial</h3>
	                    		<p class="color-fecha" id="fecha_cumple">15 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	
		                		<!--<div class="section-1-box-icon">
		                		<i class="fab fa-twitter"></i>
		                		</div>-->
		                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">KATIA CAMARGO POLO</h3>
	                    		<h4 id="cargo">Asistencial</h3>
	                    		<p class="color-fecha" id="fecha_cumple">17 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>
                    <div class="contenedor-cumple col-md-4 section-1-box wow fadeInUp">
	                	<div class="row">
                			<div class="col-md-4">
			                	
		                		<!--<div class="section-1-box-icon">
		                		<i class="fab fa-twitter"></i>
		                		</div>-->
		                		<img src="{{asset('/img/pastel-de-cumpleanos.png')}}" alt="cumpleaños" style="width:80px;height:120px;">
			                	
		                	</div>
	                		<div class="col-md-8">
	                    		<h3 class="titulo-cumpleanio">IVIS PATIÑO</h3>
	                    		<h4 id="cargo">Asistencial</h3>
	                    		<p class="color-fecha" id="fecha_cumple">24 de Mayo</p>
	                    	</div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>

		<!-- Section 3 -->
        <div   class="section-3-container section-container">
	        <div class="container">
	        	
	            <div class="row">
	                <div id="seccion-protocoloscovid" class="col section-3 section-description wow fadeIn">
	                    <h2>Protocolos Covid19</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<a href="" >

	                			</a>
	                			<h3>Protocolo covid-19</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Restauracion de servicios</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Atencion y prevencion</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Manejo de cadaveres</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Manejo biológico</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-md-6 section-3-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-md-3">
	                			<!--<div class="section-3-box-icon">
	                				<i class="fas fa-paperclip"></i>
	                			</div>
	                			<embed width="191" height="207" name="plugin" src="assets/documents/AAL CIRUGIA.pdf')}}" type="application/pdf">-->
                				<img src="{{asset('/img/pdf.png')}}" alt="documento" style="width:90px;height:120px;">

	                		</div>
	                		<div class="col-md-9">
	                			<h3>Plantilla de aislamiento</h3>
		                    	<p>
		                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
		                    		Ut wisi enim ad minim veniam, quis nostrud.
		                    	</p>
	                		</div>
	                	</div>
	                </div>
	            </div>

	        </div>
        </div>

		
        <!-- Footer -->
        <footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div class="col">
                    	&copy; Portal para la divulgación interna de información concierniente a la institución <a id="link-footer" href="http://www.perfectbody.com.co/" target="_blank">Perfect Body Medical Center</a>.
                    </div>
                    
                </div>
	        </div>
                	
        </footer>

		
        <!-- Javascript -->
		<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('/js/jquery-migrate-3.0.0.min.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="{{asset('/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('/js/wow.min.js')}}"></script>
        <script src="{{asset('/js/waypoints.min.js')}}"></script>
        <script src="{{asset('/js/scripts.js')}}"></script>
        <script src="{{asset('/js/index_scripts.js')}}"></script>

    </body>

</html>