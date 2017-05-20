
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ejemplo web responsive</title>
    <meta name="title" content="Ejemplo web responsive">
    <meta name="description" content="Ejemplo de la utilización de CSS para crear una web responsive">
    <meta name="keywords" content="código,css,css3,web,responsive">
	
	<style>
	.container {
		width:996px;
		margin:0px auto;
		font-size:1em;
	}
	section,aside {
		padding: 10px;
		background:#ccc;
		-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px;
	}
	section {
		float: left;
		width: 70%;
	}
	aside {
		float: right;
		width: 25%;
	}
	nav {
		overflow: hidden;
	}
	nav ul {
		list-style-type:none;
		float:left;
		padding:0px;
	}
	nav ul li {
		float:left;
		padding:3px 10px;
		margin:2px;
		background:#ccccff;
		-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px;
	}
	footer {
		margin:10px;
		text-align:center;
		clear:both;
	}
	
	/* para 980px o menos */
	@media screen and (max-width:980px) {
		.container {
			width:98%;
		}
		section {
			width:68%;
		}
	}

	/* para 700px o menos */
	@media screen and (max-width:700px) {
		aside,section {
			float:none;
			width:96%;
		}
		nav, section {
			font-size:1.2em;
		}
		aside {
			margin-top:5px;
		}
		nav ul {
			float:none;
			clear:both;
		}
	}

	/* para 480px o menos */
	@media screen and (max-width:480px) {
		aside {
			display:none;
		}
		nav, section {
			font-size:1.5em;
		}
		section {
			width:94%;
		}
		nav ul {
			float:left;
			clear:none;
			width:50%;
		}
		nav ul li {
			float:none;
		}
	}
	</style>

</head>

<body>

<div class="container">
	<header>
		<style>
.headerCode {background-color:#555;overflow:hidden;clear:both;margin-top:0 auto;padding:10px;overflow:hidden;text-align:center;}
</style>
<header class='headerCode'>
<div class='publi header_logo'><div id='wfg_ad-LDB1'></div></div>
</header>		<h1>Ejemplo web responsive</h1>
	<header>

	<nav>
		<ul>
			<li>menu 1</li>
			<li>menu 2</li>
			<li>menu 3</li>
			<li>menu 4</li>
		</ul>
		<ul>
			<li>menu 5</li>
			<li>menu 6</li>
			<li>menu 7</li>
			<li>menu 8</li>
		</ul>
	</nav>
	
	<section>
		<p>
			<b>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;</b>
			<br>Este meta tag se utiliza para controlar cómo aparecerá el contenido HTML en los navegadores móviles. Así nos aseguramos que el contenido se ajusta al ancho del dispositivo. En este caso estamos indicando que el contenido tendrá el ancho del dispositivo y que la escala inicial es de 1
		</p>
		
		<p>
			La expresión <b>@media</b> de css3, es fundamental. Nos permite estableces condiciones desde CSS para conocer el dispositivo desde el se accede a nuestra web y aplicar nuevos estilos CSS. Por ejemplo: podemos eliminar el sidebar de nuestro blog si el navegador mide menos de 600px.
			<br>Tenéis la info más detallada en: http://www.w3.org/TR/css3-mediaqueries/
			<p>
				Las propiedades que más nos interesan son las siguientes:
				<ul>
					a) <b>width y height</b> Ancho y alto del navegador (podemos añadir el prefijo min- o max-)
					<br>b) <b>width y height</b> Ancho y alto del dispositivo, móviles y tablets (podemos añadir el prefijo min- o max- )
					<br>c) <b>orientation</b> Orientación del móvil o tablet (para panorámico utilizaremos orientation:portrait, para vertical orientation:landscape)
				</ul>
			</p>
			
			<p>
				<b>@media screen and (max-width:980px)</b> Se utiliza para definir un tamaño o inferior. En este caso, para 980px o menos.
			</p>
		</p>
	</section>
	<aside>Aside</aside>
	
	<footer>
		<p><a href="http://www.lawebdelprogramador.com">http://www.lawebdelprogramador.com</a>
		<br>Puedes ver el código fuente en <a href="http://lwp-l.com/s2694">http://lwp-l.com/s2694</a></p>
		<style>
.publi_belowForms {clear:both;margin-top:10px;overflow:hidden;text-align:center;}
</style>
	</footer>
</div>
</body>
</html>