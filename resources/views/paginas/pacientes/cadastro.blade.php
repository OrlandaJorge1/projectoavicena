<!DOCTYPE html>
<html lang="en">
<head>
<title>Cadastro</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="#">About us</a></li>
				<li class="menu_item"><a href="#">Services</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">health<span>+</span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">Help Desk</a></li>
												<li><a href="#">Emergency Services</a></li>
												<li><a href="#">Appointment</a></li>
											</ul>
										</div>
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>+34 586 778 8892</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href={{"inicio"}}>Pagina Inicial</a></li>
										            <li class=active><a href={{"cadastro"}}>Cadastro</a></li>
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="#" id="search_container_form" class="search_container_form">
													<input type="text" class="search_container_input" placeholder="Procurar Paciente" required="required">
													<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Cadastro de pacientes</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

		

					<!-- Identififcacao-->
				<hr>
				@if( isset($errors) && count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $errors)
					<p>{{@erro_todos_os_campo_sao_obrigatorios}}</p>
				@endforeach
			</div>
		@endif
		
		
	<div class="col-lg-4 contact_col">
		<div class="info_form_container">
			
						<div class="info_form_title">Identificacao</div>
						<hr class="hr">
			<form action={{"cadastrados"}} class="info_form" id="info_form"method="POST">
					{!! csrf_field() !!}
					
								<div class="form-group">
										<label for="txt_nome">Nome (completo):</label>
										<input type="text" class="form-control" id="txt_nome" name="nome" value="{{ old('nome')}}">
								</div>
								
								<div class="form-group">
										<label for="txt_nome">Nome da Mae:</label>
										<input type="text" class="form-control" id="txt_nome" name="nome_da_mae" value="{{old('nome_da_mae')}}">
							    </div>

								<div class="form-group">
										<label for="txt_nome">Nome do Pai:</label>
										<input type="text" class="form-control" id="txt_nome" name="nome_do_pai" value="{{old('nome_do_pai')}}">
								</div>

								<div class="form-group">
									<label for="txt_nome">email:</label>
									<input type="email" class="form-control" id="txt_nome" name="email" value="{{old('email')}}">
							</div>
							
	
								<div class="form-group">
										<label for="txt_nome">Sexo:</label><br>
										<input type="checkbox" name="sexo" value="M">M<br>
										<input type="checkbox" name="sexo" value="F">F<br>
								</div>
							</div>
						</div>

				<!-- Identififcacao-->


				<!-- Perinatal-->
					
							<div class="col-lg-4 contact_col">
							<div class="info_form_container">
						<div class="info_form_title">Perintal</div>
						<hr class="hr">
				
							
								<div class="form-group">
										<label for="txt_nome">Data:</label>
										<input type="date" class="form-control" id="txt_nome"name="data_de_nascimento" value="{{old('data_de_nascimento')}}">
								</div>
					
							
								<div class="form-group">
									<label for="txt_nome">Peso:</label>
									<input type="text" class="form-control" id="txt_nome" name="peso_nascimento" value="{{old('peso_nascimento')}}">
								</div>

								<div class="form-group">
										<label for="txt_nome">Password:</label>
										<input type="password" class="form-control" id="txt_nome" name="password">
								</div>
									
								<div class="form-group">
											<label for="txt_nome">Local de Parto:</label><br>
											<input type="checkbox" name="local_do_parto" value="Em Casa">Em casa
											<input type="checkbox" name="local_do_parto" value="A Caminho">A Caminho
											<input type="checkbox" name="local_do_parto" value="Na Maternidade">Na Maternidade
								</div>
										
								<div class="form-group">
												<label for="txt_nome">Tipo de Parto:</label><br>
												<input type="checkbox" name="tipo_de_parto" value="Normal" >Normal
												<input type="checkbox" name="tipo_de_parto" value="Ventoso" >Ventoso
												<input type="checkbox" name="tipo_de_parto" value="Cesariana" >Cesariana
												<input type="checkbox" name="tipo_de_parto" value="Pelvico" >Pelvico
								</div>
						</div>				  
					</div>
					
								
           
                                
					
				<!-- Perinatal-->
				
				<!-- Complicacoes-->
				
				
							
							<button class="info_form_button" >Cadastrar</button>
			</form>
		
	    </div>
	</div>
	
				<!-- Complicacoes-->
				
				
				
				
				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title" class="btn btn-primary btn-add">Contact Info</div>
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 Gibraltar</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 London UK</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Opening Hours</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday-Thursday</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Friday</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 - 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">health<span>+</span></a>	
							</div>
							<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="#">Help Desk</a></li>
									<li><a href="#">Emergency Services</a></li>
									<li><a href="#">Appointment</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+34 586 778 8892</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>