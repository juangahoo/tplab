<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >	
			<ul class="header-in">
				@if (Auth::check())
					<li ><a href="/logout" >Cerrar sesión</a></li>
				@else
					<li ><a href="/login" >Ingresar</a></li>
					<li ><a href="/register" >Registrarse</a></li>
				@endif
				<li><a href="mailto:los.juegos.de.ricky@gmail.com">Contáctenos</a></li>
			</ul>
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>

				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="index.html"><span> L</span>os <span>J</span>uegos <span>D</span>e <span>R</span>icky</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="/images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="index.html"  >Home</a></li>
						<li><a class="color2" href="games.html"  >Games</a></li>
						<li><a class="color5" href="blog.html"  >Blog</a></li>
						<li><a class="color6" href="contact.html" >Contact</a></li>
						@if (Auth::check())
							<li><a class="color6" href="nombre.html" >{{ Auth::user()->name }}</a></li>
						@endif
						
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>