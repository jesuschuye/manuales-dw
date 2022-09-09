<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../assets/bootstrap520/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../assets/estilos-generales.css">

    <link rel="stylesheet" href="../../css/estilos-css.css">
    <title>CSS basicos</title>
</head>

<body>
	<?php require "../../../templates/nav.php";?>
	<?php include "../../nav-css.php";?>		
	<div class="contenedor">
		<div class="indice-container">
			<nav class="nav-indice">
				<ul class="list-indice">
					<li class="list-indice-item"><a href="#ini_css" rel="noopener noreferrer">Iniciando CSS</a>
						<ul class="sub-list-indice">
							<li class="sub-list-indice-item"><a href="#ins_css" rel="noopener noreferrer">Insertar CSS en HTML</a></li>
							<li class="sub-list-indice-item"><a href="#sin_sel_css" rel="noopener noreferrer">Sintaxis y selectores de CSS</a></li>
							<li class="sub-list-indice-item"><a href="#at_rules" rel="noopener noreferrer">at-rules</a></li>
							<li class="sub-list-indice-item"><a href="#selectores" rel="noopener noreferrer">Tipos de selectores</a></li>
						</ul>
					</li>
					<li class="list-indice-item"><a href="#esp_casc_inherit" rel="noopener noreferrer">Herencia, especificidad y cascada</a>
						<ul class="sub-list-indice">
							<li class="sub-list-indice-item"><a href="#herencia" rel="noopener noreferrer">Herencia</a></li>
							<li class="sub-list-indice-item"><a href="#cascada" rel="noopener noreferrer">Cascada</a></li>
							<li class="sub-list-indice-item"><a href="#especificidad" rel="noopener noreferrer">Especificidad</a></li>
						</ul>
					</li>
					<li class="list-indice-item"><a href="#reset" rel="noopener noreferrer">Resetear estilos de los navegadores</a></li>
					<li class="list-indice-item"><a href="#bem" rel="noopener noreferrer">Metodologia BEM</a></li>
					<li class="list-indice-item"><a href="#box_model" rel="noopener noreferrer">Box model</a></li>
					<li class="list-indice-item"><a href="#margin_padding" rel="noopener noreferrer">Margin y Padding</a></li>
					<li class="list-indice-item"><a href="#border" rel="noopener noreferrer">Border</a></li>
					<li class="list-indice-item"><a href="#outline" rel="noopener noreferrer">Outline</a></li>
					<li class="list-indice-item"><a href="#position" rel="noopener noreferrer">Position - Conceptos básicos</a>
						<ul class="sub-list-indice">
							<li class="sub-list-indice-item"><a href="#pos_relative" rel="noopener noreferrer">Position Relative</a></li>
							<li class="sub-list-indice-item"><a href="#pos_absolute" rel="noopener noreferrer">Position Absolute</a></li>
							<li class="sub-list-indice-item"><a href="#pos_fixed" rel="noopener noreferrer">Position Fixed</a></li>
							<li class="sub-list-indice-item"><a href="#pos_sticky" rel="noopener noreferrer">Position sticky</a></li>
							<li class="sub-list-indice-item"><a href="#pos_z-index" rel="noopener noreferrer">Propiedad z-index</a></li>
						</ul>
					</li>
					<li class="list-indice-item"><a href="#display" rel="noopener noreferrer">Propiedad Display</a></li>
						<ul class="sub-list-indice">
							<li class="sub-list-indice-item"><a href="#d_inline" rel="noopener noreferrer">Display: inline</a></li>
						<li class="sub-list-indice-item"><a href="#d_inline-block" rel="noopener noreferrer">Display: inline-block</a></li>
						</ul>
					<li class="list-indice-item"><a href="#pseudoelementos" rel="noopener noreferrer">Pseudoelementos</a>
					<li class="list-indice-item"><a href="#pseudoclases" rel="noopener noreferrer">Pseudoclases</a></li>
					<li class="list-indice-item"><a href="#variables" rel="noopener noreferrer">Variables CSS - Introducción</a></li>
					<li class="list-indice-item"><a href="#background" rel="noopener noreferrer">Propiedad Background</a></li>
					<li class="list-indice-item"><a href="#tex_tipo_i" rel="noopener noreferrer">Textos y tipografías I</a></li>
					<li class="list-indice-item"><a href="#tex_tipo_ii" rel="noopener noreferrer">Textos y tipografías II</a></li>
					<li class="list-indice-item"><a href="#listas" rel="noopener noreferrer">Listas en CSS</a></li>
					<li class="list-indice-item"><a href="#tablas" rel="noopener noreferrer">Tablas en CSS</a></li>
					<li class="list-indice-item"><a href="#imagenes" rel="noopener noreferrer">Imágenes en CSS</a></li>
				</ul>
			</nav>
		</div>
		<div class="contenido">
			<!--Clase 1: Iniciando en CSS-->
			<section id="ini_css" class="section">
				<h2>Iniciando CSS</h2>
				<!-- Insertar CSS -->
				<article id="ins_css" class="article">
					<h3>Insertar CSS en HTML</h3>
					<p class="destacado">Existen 4 formas de incluir CSS en un documento HTML</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item-type-title">En la cabecera &lt; head &gt;: a través de la etiqueta &lt; style &gt; pero no es recomendable.</li>
							<pre class="pre-list">
								&lt;head&gt;
								&nbsp;&nbsp;&nbsp;&lt;style&gt;código css&lt;/style&gt;
								&lt;/head&gt;
							</pre>
							<li class="list-item-type-title">En línea, es decir dentro de la etiqueta. No recomendado para estilos estáticos. Generalmente se utiliza con
							JavaScript para cambiar estilos de forma dinámica, es decir, en tiempo de ejecución.</li>
							<pre class="pre-list">
								&lt;p style ="codigo css&gt;"
							</pre>
							<li class="list-item-type-title">Asociando una hoja de estilos externa al documento HTML. Es la forma recomendada porque permite reutilizar el código.</li>
							<pre class="pre-list">
								&lt;link rel="stylesheet" type="text/css" href="styles.css"&gt;
							</pre>
							<li class="list-item-type-title">A través de @import dentro de las etiquetas &lt;style&gt;&lt;/style&gt;. Esta forma no se recomienda para evitar posibles fallos.</li>
							<pre class="pre-list">
								&lt;style&gt;
									&nbsp;&nbsp;&nbsp;@import url&#40"styles.css"&#41
								&lt;/style&gt;
							</pre>
						</ul>
					</div>
				</article>
				<!-- Sintaxis y selectore -->
				<article id="sin_sel_css" class="article">
					<h3>Sintaxis y selectores de CSS</h3>
					<div class="div-organizador">
						<pre class="pre-list">
							selector&#123
								&nbsp;&nbsp;&nbsp;propiedad: valor;
								&nbsp;&nbsp;&nbsp;...............
							&#125

							Ejemplo:

							body&#123
								&nbsp;&nbsp;&nbsp;background:red;
							&#125
						</pre>
					</div>
				</article>
				<!-- Reglas preprogramadas en CSS: at-rules -->
				<article id="at_rules" class="article">
					<h3>Reglas preprogramadas en CSS: at-rules</h3>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">@media&#123&#125</li>
							<li class="list-item">@font-face&#123&#125</li>
							<li class="list-item">@keyframes&#123&#125</li>
							<li class="list-item">@import&#123&#125</li>
						</ul>
					</div>
				</article>
				<!-- Tipos de selectores -->
				<article id="selectores" class="article">
					<h3>Tipos de selectores</h3>
					<p class="destacado">Un selector hace referencia al elemento al que se le aplicará estilos.</p>
					<h4>Selectores Básicos</h4>
					<h5>Selectores a través de atributos</h5>
					<div class="div-organizador">
						<pre class="pre-list">
							EjemploS:

							//Selecciona los elementos que tengan el atributo href:
							<span>[href]</span>&#123
								color: green;
							&#125

							//Selecciona los elementos que tengan el atributo href con un valor
							<span>[href="valor"]</span>&#123
								color:red;
							&#125

							//Selecciona los elementos que tengan el atributo con su valor al menos una vez
							<span>[class ~= "valor"]</span>&#123
								color:red;
							&#125

							//Selecciona los elementos que tengan el atributo exactamente con su valor o empiece por el valor seguido de un guión
							<span>[class |= "valor"]</span>&#123
								color:red;
							&#125

							/* Seleccionar los elementos que tienen ese atributo y empiezan por ese valor*/
							<span>[class^="rojo"]</span>&#123
								color:purple;
							&#125

							/* Seleccionar los elementos que tienen ese atributo y terminan por ese valor*/
							<span>[class$="rojo"]</span>&#123
								color:steelblue;
							&#125

							/* Seleccionar los elementos que tienen ese atributo y contengan ese valor*/
							<span>[class*="rojo"]</span>&#123
								color:brown;
							&#125
						</pre>
					</div>
					<h5>Selectores Combinadores</h5>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Selectores de hermanos adyacentes
								<p>Selecciona al hermano que esté justo por debajo de el. El estilo se aplica al hermano inferior.</p>
							</li>
							<pre class="pre-list">
								h1 + h2&#123
									&nbsp;&nbsp;&nbsp;color:red;
								&#125
							</pre>
							<li class="list-item">Selector de hermano general
								<p>Selecciona todos los hermanos que estén por debajo de él. El estilo se aplica a todos los hermanos.</p>
							</li>
							<pre class="pre-list">
								h1 ~ h3&#123
									&nbsp;&nbsp;&nbsp;color: green;
								&#125
							</pre>
							<li class="list-item">Selectores descendientes
								<p>Selecciona todos los hijos. El estilo se aplica a todos los hijos.</p>
							</li>
							<pre class="pre-list">
								div span&#123
									&nbsp;&nbsp;&nbsp;color: red;
								&#125
							</pre>
							<li class="list-item">Selector de hijo directo
								<p>Selecciona todos los hijos que sean directos, es decir que no estén dentro de otras etiquetas. El estilo se aplica a todos los hijos.</p>
							</li>
							<pre class="pre-list">
								p > span&#123
									&nbsp;&nbsp;&nbsp;color: blue;
								&#125
							</pre>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 2: Especificidad, herencia y cascada-->
			<section id="esp_casc_inherit" class="section">
				<h2>Herencia, Especificidad y Cascada</h2>
				<!-- Herencia -->
				<article id="herencia" class="article">
					<h3>Herencia</h3>
					<p>Se aplica con el valor <b>inherit</b>, esto obliga al elemento a heredar la propiedad de su elemento más cercano.</p>
				</article>
				<!-- Cascada -->
				<article id="cascada" class="article">
					<h3>Cascada</h3>
					<p class="destacado">Es el orden en el que se le aplicarán los estilos al ir leyendo el CSS. Los estilos que vienen después sobreescriben a los anteriores.</p>
					<div class="div-organizador">
						<pre class="pre-list">
							p &#123color:red;&#125

							....mas codigo css

							p &#123color:green;&#125

							Debido a que los estilos se aplican a una misma etiqueta (p) la especificidad queda inaplicable para dar paso a la cascada
							Los párrafos finalmente se pintarán de color verde porque es lo último que se declara.
						</pre>
						<pre class="pre-list">
							.parrafo &#123color:red;&#125

							....mas codigo css

							p &#123color:green;&#125

							En este caso no se aplica la cascada sino la ESPECIFICIDAD ya que la clase tiene más peso que la etiqueta.
						</pre>
					</div>
				</article>
				<!-- Especificidad -->
				<article id="especificidad" class="article">
					<h3>Especificidad</h3>
					<p class="destacado">Es el peso que tienen un selector que se ejecuta cuando existen conflicto de estilos. GANA A LA CASCADA</p>
					<table>
						<thead>
							<tr>
								<th>
									Selector
								</th>
								<th>
									Peso
								</th>
								<th>
									Ejemplo
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Etiqueta
								</td>
								<td>
									0, 0, 0, 1
								</td>
								<td>
									a{color:inherit;} //etiqueta a coje el color de su padre
								</td>
							</tr>
							<tr>
								<td>
									Clases y pseudoclases
								</td>
								<td>
									0, 0, 1, 0
								</td>
								<td>
									.parrafo{color:green;}
								</td>
							</tr>
							<tr>
								<td>
									ID
								</td>
								<td>
									0, 1, 0, 0
								</td>
								<td>
									#parrafo{color:red;}
								</td>
							</tr>
							<tr>
								<td>
									Estilos en línea
								</td>
								<td>
									1, 0, 0, 0
								</td>
								<td>
									&lt;p style="color: red;"&gt;
								</td>
							</tr>
							<tr>
								<td>
									!import
								</td>
								<td>
									Gana a todos
								</td>
								<td>
									p{color:blue !import;}
								</td>
							</tr>
						</tbody>
					</table>
				</article>
			</section>

			<!--Clase 3: Resetear stylos de los navegadores-->
			<section id="reset" class="section">
				<h2>Resetear estilos por defecto de los navegadores</h2>
				<!-- Normalize -->
				<article id="normalize" class="article">
					<p class="destacado">Se utiliza la hoja CSS pre fabricada de Normalize.</p>
					<p>Se puede descargar <span>normalize</span> de <a href="https://" target="_blank" rel="noopener noreferrer">aqui</a></p>
					<p>Sólo se debe agregar la siguiente linea CSS</p>
					<div class="div-organizador">
						<pre class="pre-list">
							img&#123
								&nbsp;&nbsp;&nbsp;max-width: 100%;
							&#125

							*&#123
								&nbsp;&nbsp;&nbsp;box-sizing: border-box;
							&#125
						</pre>
					</div>
				</article>
			</section>

			<!--Clase 4: Metodologia BEM-->
			<section id="bem" class="section">
				<h2>Metodología BEM</h2>
				<article class="article">
					<h3>Metodologías en CSS</h3>
					<p class="destacado">Una metodología en CSS son una serie de normas para estructurar las clases de una forma sencilla, escalable y reutilizable.</p>
					<ul class="list">
						<li class="list-item"><span class="span">BEM</span> = Block Element Modifier</li>
						<li class="list-item"><span class="span">Block</span>.- Es cualquier elemento autónomo y aislado de nuestro documento. Un menú, una galería, un formulario, etc.</li>
						<li class="list-item"><span class="span">Element</span>.- Es cada uno de los elementos del bloque. Un link, una foto, un campo de texto, etc</li>
						<li class="list-item"><span class="span">Modifier</span>.- Cuando un bloque se repite en otro lugar de nuestra web pero con alguna modificación: el color del texto, el tamaño de la fuente, etc</li>
					</ul>
				</article>
				<article class="article">
					<h3>Forma de escibir con BEM</h3>
					<p>Los bloques se pueden denominar con una sola palabra o con 2 palabras separadas con un guión </p>
					<div class="div-organizador">
						<pre class="pre-list">
							Ejemplo
							.menu -> .main-menu
							.gallery -> .main-gallery
						</pre>
					</div>
					<p>Los elementos se nombran con el nombre del bloque al que pertenecen y su nombre con 2 guiones bajos __</p>
					<div class="div-organizador">
						<pre class="pre-list">
							Ejemplo:

							.menu__item / .main-menu__link
							.gallery__img / .main-gallery__item
						</pre>
					</div>
					<p>Los modificadores se nombran con el nombre del bloue al que pertenecen y su modificador con 2 guiones.</p>
					<div class="div-organizador">
						<pre class="pre-list">
							.menu__item--active
							.gallery__item--special
						</pre>
					</div>
				</article>
			</section>

			<!--Clase 5: Box Model-->
			<section id="box_model" class="section">
				<h2>Box model</h2>
				<article class="article">
					<h3>Modelo de caja</h3>
					<p class="destacado">En la web todo son cajas, al conjunto de esas cajas y a la forma en que el navegador los dibjua se le denomina LAYOUT</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">
								Las propiedades principales de cada una de estas cajas son el ancho &#40width&#41 y el alto &#40height&#41.
							</li>
							<li class="list-item">Existen 2 tipos de elementos en HTML, los elementos en línea &#40inline&#41 y los elementos de
								bloque &#40block&#41. Estas propiedades se pueden modificar con el atributo display.</li>
						</ul>
					</div>
					<figure>
						<img src="img/box_model.PNG" alt="box_model">
					</figure>
					<div class="div-organizador">
						<h4>Elementos en línea &#40inline&#41</h4>
						<ul class="list">
							<li class="list-item">Son elementos que sólo ocupan su contenido.</li>
							<li class="list-item">No se puede modificar ni su alto ni su ancho.</li>
						</ul>
						<h4>Elementos de bloque &#40block&#41</h4>
						<ul class="list">
							<li class="list-item">Ocupan todo el ancho disponible del viewport.</li>
							<li class="list-item">Se les puede asignar ancho y alto. Por defecto el ancho es todo el espacio disponible y el alto va a ser lo que ocupe su contenido. A excepción del <span class="span">h1</span> y el <span class="span">p</span> a los que se les debe resetear los estilos por defecto de los navegadores.</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 6: Margin y Padding-->
			<section id="margin_padding" class="section">
				<h2>Margin, padding, border y outline</h2>
				<!-- Margin -->
				<article id="margin" class="article">
					<h3>Margin</h3>
					<p class="destacado">Es la separación entre una caja y las cajas adyacentes.</p>
					<div class="div-organizador">
						<pre class="pre-list">
							margin: 1em;
						</pre>
						<p>La propiedad <span>margin</span> es un shorthand de:</p>
						<ul class="list">
							<li class="list-item">marging-top: Establece el margen superior</li>
							<li class="list-item">margin-right: Establece el margen derecho</li>
							<li class="list-item">margin-bottom: Establece el margen inferior</li>
							<li class="list-item">margin-left: Establece el margen inferior</li>
						</li>
					</div>
					<div class="div-organizador">
						<table>
							<thead>
								<tr>
									<th>Valores</th>
									<th>Se aplica a:</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>margin:1em;</td>
									<td>top right bottom left</td>
								</tr>
								<tr>
									<td>margin: 1em 2em;</td>
									<td>[top-bottom], [left-right]</td>
								</tr>
								<tr>
									<td>margin:1em 2em 3em</td>
									<td>top, [left-right], bottom</td>
								</tr>
								<tr>
									<td>margin: 1em 2em 3em 4em</td>
									<td>top right bottom left</td>
								</tr>
							</tbody>
						</table>
					</div>
				</article>
				<!-- Padding -->
				<article id="padding" class="article">
					<h3>Padding</h3>
					<p class="destacado">Es la separación entre el contenido y su borde.</p>
					<div class="div-organizador">
						<pre class="pre-list">
							padding: 2em;
						</pre>
						<p>La propiedad <span>padding</span> es un shorthand</p>
						<ul class="list">
							<li class="list-item">padding-top</li>
							<li class="list-item">padding-right</li>
							<li class="list-item">padding-bottom</li>
							<li class="list-item">padding-left</li>
						</ul>
					</div>
					<div class="div-organizador">
						<table>
							<thead>
								<tr>
									<th>Valores</th>
									<th>Se aplica a:</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>padding:1em;</td>
									<td>top right bottom left</td>
								</tr>
								<tr>
									<td>padding: 1em 2em;</td>
									<td>[top-bottom], [left-right]</td>
								</tr>
								<tr>
									<td>padding:1em 2em 3em</td>
									<td>top, [left-right], bottom</td>
								</tr>
								<tr>
									<td>padding: 1em 2em 3em 4em</td>
									<td>top right bottom left</td>
								</tr>
							</tbody>
						</table>
					</div>
				</article>
				<!--Border-->
				<article id="border" class="article">
					<h3>Border</h3>
					<p class="destacado">Es la propiedad que le da un estilo al borde de una caja. Es la línea que rodea la caja</p>
					<div class="div-organizador">
						<pre class="pre-list">
							border:1px solid blue;
						</pre>
						<p>La propiedad <span>border</span> es un shorthand</p>
						<p>Las propiedades de los bordes son:</p>
						<div class="div-organizador">
							<dl class="list"><span>width</span>
								<dt class="list-item">Establece el ancho del borde.</dt>
							</dl>
							<dl class="list"><span>style</span>
								<dt class="list-item">Establece la forma o modelo del borde.</dt>
							</dl>
							<dl class="list"><span>color</span>
								<dt class="list-item">Establece el color del borde.</dt>
							</dl>
						</div>
						<p>Existen muchas combinaciones</p>
						<div class="div-organizador">
							<table>
								<thead>
									<tr>
										<th>Valores</th>
										<th>Se aplica a:</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>border-width:2px;</td>
										<td>top right bottom left</td>
									</tr>
									<tr>
										<td>border-style:solid dashed;</td>
										<td>[top-bottom], [left-right]</td>
									</tr>
									<tr>
										<td>border-color:red bluegreen</td>
										<td>top, [left-right], bottom</td>
									</tr>
									<tr>
										<td>border-width:2px 3px 4px 5px</td>
										<td>top right bottom left</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="div-organizador">
						<pre class="pre-list">
							Border

							border-width
							px|em|rem|%|....
							<div class="div-pre">
								border-style
								none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
							</div>

							*Estas medidas dependen del navegador*
							thick (ancho)
							medium (medio)
							thin (fino)
							<div class="div-pre">
								border-color
								css native|rgb|rgba|hsl|hsla|hexadecimal|transparent

								border-top-(width | style | color)
								border-right-(width | style | color)
								border-bottom-(width | style | color)
								border-left-(width | style | color)
							</div>
						</pre>
					</div>
				</article>
				<!--Outline -->
				<article id="outline" class="article">
					<h3>Outline</h3>
					<p class="destacado">Es la línea que rodea la caja entre el <b>borde</b> y el <b>margin</b></p>
					<figure>
						<img src="img/outline.PNG" alt="outline">
					</figure>
					<div class="div-organizador">
						<pre class="pre-list">
							outline: 1px solid orange;
						</pre>
						<p>Outline es un shorthand.</p>
						<p>Sus propiedades son:</p>
						<ul class="list">
							<li class="list-style-none">
								<div class="div-organizador">
									<dl class="list"><span>width</span>
										<dt class="list-item">Establece el ancho del outline de la caja.</dt>
									</dl>
									<dl class="list"><span>style</span>
										<dt class="list-item">Establece el modelo del outline de la caja.</dt>
									</dl>
									<dl class="list"><span>color</span>
										<dt class="list-item">Establece el color del outline de la caja.</dt>
									</dl>
									<dl class="list"><span>offset</span>
										<dt class="list-item">Establece la separación del outline con el borde de la caja.</dt>
									</dl>
								</div>
							</li>
							<li class="list-item">Existen varias combinaciones</li>
							<div class="div-organizador">
								<table>
									<thead>
										<tr>
											<th>Valores</th>
											<th>Se aplica a:</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>outline-width:2px;</td>
											<td>top right bottom left</td>
										</tr>
										<tr>
											<td>outline-style:solid dashed;</td>
											<td>[top-bottom], [left-right]</td>
										</tr>
										<tr>
											<td>outline-color:red bluegreen</td>
											<td>top, [left-right], bottom</td>
										</tr>
										<tr>
											<td>outline-width:2px 3px 4px 5px</td>
											<td>top right bottom left</td>
										</tr>
										<tr>
											<td>outline-offset:+-px | em | rem ... </td>
											<td>top right bottom left</td>
										</tr>
									</tbody>
								</table>
							</div>
							<li class="list-item">outline-offset produce una linea que se separa de la caja la cantidad de medida que se le asigne. No empuja a los elementos adyacentes sino que se monta.</li>
								<pre class="pre-list">
									.img&#123
										&nbsp;&nbsp;&nbsp;border: 5px solid lightcoral;
										&nbsp;&nbsp;&nbsp;outline: 5px dotted blue;
										&nbsp;&nbsp;&nbsp;outline-offset: 25px; //se separa 25px de la caja
									&#125
								</pre>
							<figure>
								<img src="img/outline_offset.PNG" alt="outline_offset">
							</figure>

							<li class="list-item">Tambien acepta valores negativos</li>
								<pre class="pre-list">
									outline-offset: -25px;
								</pre>
							<figure>
								<img src="img/outline_offset_in.PNG" alt="outline_offset_in">
							</figure>
							<li class="list-item">
								Efecto utilizado en fotos:</li>
								<pre class="pre-list">
									[class*=box]{
										width: 400px;
										margin: 2em auto;
										position: relative;
										display: flex;
										justify-content: center;
										align-items: center;
									}

									.text{
										position: absolute;
										color: lightcoral;
										font-size: 3em;
									}
								</pre>
							<figure>
								<img src="img/outline_efecto_foto.PNG" alt="outline_efecto_foto">
							</figure>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 9: Flujo en HTML-->
			<section id="flujo" class="section">
				<h2>El flujo en HTML</h2>
				<p class="destacado">El <span class="span">flujo</span> en HTML es el orden en el que aparecen los elementos en el navegador.</p>
				<!-- Position -->
				<article id="position" class="article">
					<h3>Position</h3>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Position es la propiedad que nos permite modificar el flujo en HTML.</li>
							<li class="list-item">Los valores de position son:
								<ul class="list list-item-type-title">
									<li class="list-item">static: Valor por defecto</li>
									<li class="list-item">Relative</li>
									<li class="list-item">Absolute</li>
									<li class="list-item">Fixed</li>
									<li class="list-item">Sticky</li>
								</ul>
							</li>
							<li class="list-item">Al tener posicionado un elemento se puede mover en los 3 ejes.
								<ul class="list list-item-type-title">
									<li class="list-item"><span class="span">top:</span> Se mueve el elemento en relación a la parte superior</li>
									<li class="list-item"><span class="span">right:</span> Se mueve el elemento en relación a la parte derecha</li>
									<li class="list-item"><span class="span">bottom:</span> Se mueve el elemento en relación a la parte inferior</li>
									<li class="list-item"><span class="span">left:</span> Se mueve el elemento en relación a la parte izquierda</li>
									<li class="list-item"><span class="span">z-index:</span> Se mueve el elemento en el eje Z.</li>
								</ul>
							</li>
							<li class="list-item">Para entender position es necesario primero conocer 2 propiedades con las que se utilizan muy a menudo:
								<ul class="list list-item-type-title">
									<li class="list-item">Propiedad <span>visibility: hidden</span>
										<p>Con la propiedad visibility y su valor hidden el elemento HTML se oculta pero el espacio que ocupa en el flujo del documento HTML se reserva.</p>
									</li>
									<figure>
										<img src="img/visibility.PNG" alt="visibility">
									</figure>
									<li class="list-item">Propiedad <span>display: none</span>
										<p>Con la propiedad display y su valor none el elemento HTML se oculta y NO se reserva su espacio.</p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</article>
				<!--Position Relative-->
				<article id="pos_relative" class="article">
					<h3>Position: relative</h3>
					<p class="destacado">El valor  relative hace que el elemento se coloque respecto a su posición en el flujo.</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Se puede mover el elemento con top, right, bottom, left y z-index. </li>
							<li class="list-item">Al mover el elemento su espacio queda reservado.</li>
							<li class="list-item">Su punto de referencia no se modificará aunque el elemento sea movido.
								<figure>
									<img src="img/relative.PNG" alt="position relative">
								</figure>
							</li>
							<li class="list-item">Un posicionamiento definido por <span class="span">top</span> y <span class="span">left</span> tiene mayor peso que un posicionamiento con <span class="span">bottom</span> y <span class="span">right</span>.</li>
							<div class="div-organizador">
								<div class="div-graphic-position">Posición original
									<div class="box-1">Box 1</div>
									<div class="box-2">Box 2</div>
								</div>
								<div class="div-graphic-position div-graphic-pos-relative-box1">Nueva posición del Box1
									<div class="box-1">
										Box 1
										position:relative;
										top: 50px;
										right: 50px;
									</div>
									<div class="box-2">Box 2</div>
								</div>
								<div class="div-graphic-position div-graphic-pos-relative-box2">Nueva posición del Box 2
									<div class="box-1">
										Box 1
									</div>
									<div class="box-2">Box 2
										position:relative;
										top: -50px;
										right: -50px;
									</div>
								</div>
							</div>
							<li class="list-item">Al posicionar un elemento automáticamente adquiere la propiedad <span class="span">z-index.</span>
							</li>
							<li class="list-item">De haber más de un elemento posicionado se tomará en cuenta el flujo en el que se han creado los
								elementos para definir su respectivo <span class="span">z-index</span>. El último en el flujo se renderizará por
								encima de los demás.</li>
						</ul>
					</div>
					<div class="div-organizador">
						<div class="div-graphic-position div-z-index">z-index
							<div class="box-1">Box 1</div>
							<div class="box-2">Box 2</div>
							<div class="box-3">Box 3</div>
							<div class="box-4">Box 4</div>
						</div>
					</div>
					<div class="div-organizador">
						<video controls>
							<source src="videos/10-position-relative.mp4" type="video/mp4">
						</video>
					</div>
				</article>
				<!--Position Absolute-->
				<article id="pos_absolute" class="article">
					<h3>Position: absolute</h3>
					<p class="destacado">Position absolute hace que el elemento se posicione respecto a su contenedor más cercano, sino encuentra uno tomará como referencia el <span>viewport.</span></p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">El elemento no conserva su espacio en el flujo, es decir, desaparece del flujo.</li>
							<li class="list-item">Si no tienen dimensiones declaradas, sus dimensiones se ajustarán al contenido</li>
							<li class="list-item">El punto de referencia no se modificará aunque el elemento sea movido.</li>
							<li class="list-item list-style-none">
								<div class="div-organizador">
									<p><span class="span">Posición original</p>
									<div class="div-graphic-position-original">
										<div class="box-1"></div>
										<div class="box-2"></div>
										<div class="box-3"></div>
										<div class="box-4"></div>
										<div class="box-5"></div>
									</div>
								</div>
							</li>
							<li class="list-item list-style-none">
								<div class="div-organizador">
									<p><span class="span">Position: absolute del box-1</p>
									<div class="div-graphic-position-absolute">
										<div class="box-1">
											<p>position: absolute; left:160px; </p>
										</div>
										<div class="box-2"></div>
										<div class="box-3"></div>
										<div class="box-4"></div>
										<div class="box-5"></div>
									</div>
								</div>
							</li>
							<li class="list-item list-style-none">Ejercicio</li>
							<li class="list-item list-style-none">
								<div class="div-organizador">
									<div class="div-graphic-position-ejercicio">
										<div class="box-1">
											<p>position: absolute; top:0; left:0; </p>
										</div>
										<div class="box-2">
											<p>position: absolute; top:0; right:0; </p>
										</div>
										<div class="box-3">
											<p>position: absolute; bottom:0; left:0; </p>
										</div>
										<div class="box-4">
											<p>position: absolute; bottom:0; right:0; </p>
										</div>
										<div class="box-5">
											<p>position: absolute; top:0; right:0;bottom:0; left:0x; margin:auto; </p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</article>
				<!--Position fixed-->
				<article id="pos_fixed" class="article">
					<h3>Position: fixed;</h3>
					<p class="destacado">El valor fixed hace que el elemento se coloque respecto al viewport.</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">El elemento no conserva su espacio en el flujo.</li>
							<li class="list-item">Si no tienen dimensiones declaradas, sus dimensiones se ajustan al contenido.</li>
							<li class="list-item">Su punto de referencia no se modifica aunque el elemento sea movido.</li>
							<li class="list-item">Cuando se hace scroll el elemento no se moverá, se queda fijo.</li>
							<li class="list-style-none">
								<a href="/fixed.html">Ver ejemplo</a>
							</li>
						</ul>
					</div>
				</article>
				<!--Clase 13: Position sticky-->
				<article id="pos_sticky" class="article">
					<h3>Position sticky</h3>
					<p class="destacado">El valor sticky es una mezcla entre <span class="span">relative</span> y <span class="span">fixed</span></p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">El elemento conserva su espacio en el flujo.</li>
							<li class="list-item">Si no tiene dimensiones declaradas, sus dimensiones se ajustan a su contenido.</li>
							<li class="list-item">Su punto de referencia no se moverá aunque se mueva el elemento.</li>
							<li class="list-item">Cuando se hace scroll el elemento se moverá hasta alcanzar el tope establecido.</li>
							<li class="list-style-none">
								<div class="div-graphic-position-sticky">
									<div class="slide">Slide</div>
									<div class="menu">Menu</div>
									<h1 class="title">Titulo</h1>
									<p class="text">
										Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio nisi vero magni dolor quaerat quasi doloremque saepe possimus cumque nesciunt hic id laborum sint magnam veniam nobis natus doloribus, sunt ab nostrum eligendi cupiditate quisquam asperiores earum. Sunt dolores doloribus rem ratione libero repellat, voluptate modi! Adipisci ab illum ratione aspernatur odit, ullam suscipit enim rem nihil reiciendis hic architecto delectus laborum ipsam similique incidunt perspiciatis ex quas ea eum molestias sint? Provident dolores amet illo aliquid, autem quis inventore ut itaque molestias placeat numquam, eos illum ea cum rerum exercitationem, laboriosam nesciunt voluptate maxime ipsum animi debitis? Cupiditate et temporibus error maiores nulla, quasi fugiat quo possimus neque laboriosam nemo qui excepturi, distinctio odio. Fuga illum harum amet quisquam beatae nihil aperiam voluptas nemo ex officiis. Sequi earum nam iste eius sapiente! Corrupti accusantium recusandae ad eveniet quos assumenda corporis esse officia dolore iusto, alias impedit, incidunt eligendi ipsam error mollitia quisquam. Nihil quasi magni, libero quas aliquid pariatur illum dolor ducimus exercitationem cum dolorum, nisi rem! Iste saepe nisi veritatis, officia, accusantium quisquam, excepturi nesciunt modi ex natus animi. Cumque deleniti ipsa non odio, perspiciatis culpa distinctio neque numquam, consequuntur ipsum illum officiis veniam maiores! Blanditiis laboriosam dolorem ea consectetur totam quo? Reiciendis dignissimos distinctio pariatur. Dolor temporibus commodi error quas est neque saepe provident, perferendis modi laborum necessitatibus nisi. Impedit earum ullam dicta aliquid commodi alias dolorum quae architecto libero id! Labore, exercitationem quos. Cumque sapiente exercitationem quasi, delectus id accusantium cupiditate unde ratione laudantium, totam natus. Sint, neque officia. Quo maiores facilis dolorum eius deleniti quam excepturi exercitationem aliquam? Impedit voluptatem non corporis. Tempora, ipsam reiciendis molestias placeat iusto cupiditate. Maiores, explicabo magnam officiis eos velit earum ullam dolore officia adipisci alias ratione accusamus praesentium rerum, laborum, perferendis excepturi iste repudiandae fuga consequatur impedit vitae fugit? Earum pariatur, libero eos minus commodi atque quod aspernatur quasi accusantium necessitatibus quis non delectus harum eum aut? Delectus sapiente minus soluta praesentium perferendis repellat neque explicabo odit quam labore error expedita earum aliquam iusto unde, in nulla odio rerum voluptate dolore reiciendis. At explicabo quisquam odit aliquam, hic eveniet. Eius nobis inventore consequatur hic ut deleniti nulla quasi dolore, consectetur voluptate nemo ullam tempore reiciendis sint rerum! Voluptatem dicta animi quaerat, recusandae expedita fugiat consequatur pariatur delectus laboriosam harum est fuga, iusto odit molestiae atque officiis similique quas consectetur sapiente? Sed ex ullam rem mollitia sint libero explicabo blanditiis accusantium ipsa sit velit, eius quis excepturi maxime id optio sequi? Maiores, harum voluptatibus. Iste, repellat. Ex voluptas sint dolorum, animi in quis beatae! Fuga, aspernatur quod est eius laboriosam distinctio odio ullam. Quos sint accusantium aperiam facere quidem facilis excepturi modi quia officiis cumque nesciunt, similique vero autem inventore exercitationem perspiciatis doloribus ratione. Esse eaque facilis officiis numquam eveniet culpa ipsum temporibus ex deleniti, corporis inventore vel. Eaque fuga dolores, quis expedita error iure debitis quidem cumque minima labore inventore, ab quas repudiandae minus quae praesentium esse asperiores hic? Soluta eveniet, explicabo assumenda atque odio laborum culpa iste excepturi?
									</p>
									<p class="text">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, dignissimos iste. Maiores aliquid possimus accusantium ipsum deleniti quis quae, molestiae hic optio beatae fugiat maxime nobis, voluptate enim tempore qui voluptatum corrupti unde laudantium nulla numquam cumque ea eaque magnam! Architecto totam, facere quos assumenda eaque dolores sunt provident animi. Amet accusamus dolore voluptate non omnis ad qui reprehenderit cum ab, id pariatur cupiditate quae incidunt sit totam, consequuntur nulla illo! Eius ex voluptatibus sequi, nemo tempora soluta consectetur illum quis dicta quibusdam quod necessitatibus aliquid explicabo magnam? Expedita iusto laborum quis obcaecati assumenda labore at, quasi eligendi ab debitis, possimus ullam quidem sint alias ut? Natus illo aliquam quibusdam suscipit dignissimos ab nostrum rerum optio, veritatis ea placeat expedita. Illo laboriosam id suscipit voluptatem, quidem officiis sit, dignissimos vero debitis ratione quae, tenetur quisquam hic. Ipsam, saepe necessitatibus. Voluptatum, quos, similique adipisci eos obcaecati explicabo necessitatibus corrupti, aut reprehenderit illo distinctio? Consequatur, asperiores culpa at voluptatibus libero explicabo reiciendis rem, accusamus tempora deserunt, neque sequi nisi optio deleniti qui saepe in iure eius ea officia. Aliquam culpa, aperiam eius mollitia dolore quos! Reiciendis eius eligendi vitae vel fuga dicta. Explicabo incidunt, in sed temporibus, aperiam nostrum recusandae aliquam vero magni dolorem autem, quasi commodi tempora numquam adipisci ratione fugiat quae perferendis nobis rem amet molestiae aut veritatis! Neque deleniti vel quidem corporis, impedit maxime ducimus rem provident. Quod, veritatis voluptatem vero nisi veniam delectus, beatae quae obcaecati aspernatur, reprehenderit illo facere natus voluptatum facilis! Laudantium quod adipisci tenetur perferendis reiciendis officia iure harum, dolorem quibusdam sit minima nihil modi qui quisquam consequuntur dignissimos, doloribus voluptatibus totam tempore rem ducimus alias dolorum nostrum! Maiores, illum distinctio. Perferendis incidunt corrupti repudiandae! Rerum facilis in debitis sequi magni adipisci recusandae molestias, nulla exercitationem veritatis ab alias, odit sapiente. Ratione, eveniet ipsam sunt dolor ipsa expedita iure quasi vitae deserunt. Fugit similique qui, voluptas distinctio numquam non nulla repellendus odit mollitia reiciendis quaerat doloribus, eligendi corrupti minima consectetur ad labore laboriosam officiis at. Veniam dolorum, nam veritatis voluptatum iusto fugit beatae accusamus esse, iure sit nesciunt fuga nemo dicta eveniet optio in voluptatem quod recusandae enim rem asperiores debitis quam itaque amet. Voluptates possimus vitae fuga odio blanditiis dolorem nisi, molestias optio quo delectus unde aperiam eligendi ut quae consequatur illum tempora reiciendis, quibusdam facere nostrum nulla nihil iste. Et tenetur, ipsum illo accusamus harum sequi tempora autem aliquam assumenda consectetur earum quia mollitia magni, est id cupiditate ipsa, quod nisi dolore! Temporibus, hic? Similique qui aperiam officiis voluptate suscipit hic excepturi, nesciunt odio rerum temporibus reiciendis beatae aut minus quo aliquam enim amet, praesentium sit possimus provident. Possimus nostrum ab, quia soluta sunt ratione assumenda unde omnis, maiores ducimus magni nulla atque! Earum neque facilis repellendus voluptatum natus officia fuga, blanditiis enim accusantium est, exercitationem doloremque cum. Impedit asperiores inventore, soluta eius, minus quasi quis ullam, adipisci molestiae magni repellat ipsam quos quia illum in sapiente provident nam esse voluptates. Facere neque veniam totam eligendi sint distinctio sunt perspiciatis saepe nesciunt officia?
									</p>
								</div>
							</li>
						</ul>
					</div>

				</article>
				<!--z-index-->
				<article id="pos_z-index" class="article">
					<h3>Propiedad z-index</h3>
					<p class="destacado">Esta propiedad nos permite modificar el orden de las capas en el eje z &#40profundidad&#41.</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Admite valores positivos y negativos.Es recomendable usar valores NO consecutivos. Es recomendable valores como: 100, 200, 300</li>
							<li class="list-item">Si el padre tiene z-index declarado NO se puede poner a un hijo por encima.</li>
							<li class="list-item">No se admiten valores decimales.</li>
							<li class="list-item list-style-none">
								<div class="div-organizador">
									<figure>
										<img src="img/z-index.PNG" alt="z-index">
									</figure>
								</div>
							</li>
							<li class="list-item">Ejemplo:</li>
							<li class="list-item list-style-none">
								<div class="div-organizador div-flex">
									<div class="div-graphic-position-z-index">
										<div class="box box-1"><p>Box-1</p></div>
										<div class="box box-2"><p>Box-2</p></div>
										<div class="box box-3"><p>Box-3</p></div>
									</div>
									<div class="div-graphic-item-z_index">
										<div class="box box-1"><p>Box-1; z-index:3;</p></div>
										<div class="box box-2"><p>Box-2; z-index:2;</p></div>
										<div class="box box-3"><p>Box-3; z-index:1;</p></div>
									</div>
								</div>
							</li>
							<li class="list-item">
								Para posicionar un elemento padre por encima de un elemento hijo se debe colocar z-index negativo al hijo y no declarar z-index al padre.
							</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 15: display-->
			<section id="display" class="section">
				<h2>Propiedad display</h2>
				<p class="destacado">Permite definir el comportamiento de una caja respecto a las cajas adyacentes.</p>
				<!-- Display -->
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">De forma natural existen elementos en línea y elementos en bloque.
								<div class="div-organizador">
									<figure>
										<img src="img/display.PNG" alt="display">
									</figure>
								</div>
							</li>
							<li class="list-item">Los valores de la propiedad <span class="span">display</span> son:
								<div class="div-organizador">
									<dl class="list"><span class="span">inline:</span>
										<dt class="list-item">Establece que un elemento de bloque se comporte como si fuera un elemento en línea.</dt>
									</dl>
									<dl class="list"> <span class="span">block:</span>
										<dt class="list-item">Establece que un elemento de linea se comporte como si fuera un elemento de bloque.</dt>
									</dl>
									<dl class="list"><span class="span">inline-block: </span>
										<dt class="list-item">El elemento se comporta como si fuera de linea pero acepta las propiedades de ancho (width) y alto (height)</dt>
									</dl>
									<dl class="list"><span class="span">none: </span>
										<dt class="list-item">El elemento se oculta pero se sigue renderizando. Se recomienda su utilización para elementos que tengan que ocultarse o mostrarse dinámicamente.</dt>
									</dl>
									<dl class="list"><span class="span">table: </span>
										<dt class="list-item">El elemento imita el comportamiento de una tabla. Está casi en desuso.</dt>
									</dl>
									<dl class="list"><span class="span">list-item: </span>
										<dt class="list-item">El elemento imita el comportamiento de una lista. Está casi en desuso</dt>
									</dl>
									<dl class="list"><span class="span">flex: </span>
										<dt class="list-item">Se utiliza para maquetar componentes. Por ejemplo un menú.</dt>
									</dl>
									<dl class="list"><span class="span">grid: </span>
										<dt class="list-item">Se utiliza para maquetar layouts.</dt>
									</dl>
								</div>
							</li>
						</ul>
					</div>
				</article>
				<!-- Display:Inline -->
				<article id="d_inline" class="article">
					<h3>Elementos inline</h3>
					<p class="destacado">Son elementos que se pueden colocar uno a continuación del otro.</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">No admiten dimensiones de ancho y alto.</li>
							<li class="list-item">Admiten margin y pading solo en el fluho horizontal NO en el vertical.</li>
							<li class="list-item">Si el elemento inline tiene background y se aplica padding en el flujo verical este comportamiento afectará a los elementos en bloque que hubiesen alrededor</li>
							<li class="list-item list-style-none">
								<div class="div-graphic-item-inline">
									<span class="inline">Soy un elemento inline</span>
									<span class="inline">Soy otro elemento inline</span>
									<p class="bloque">Soy un elemento en bloque</p>
								</div>
							</li>
							<li class="list-item">Pero si el elemento no tuviese background entonces la propiedad padding no causaría efecto alguno.</li>
							<li class="list-item list-style-none">
								<div class="div-graphic-item-inline_sin_background">
									<span class="inline">Soy un elemento inline</span>
									<span class="inline">Soy otro elemento inline</span>
									<p class="bloque">Soy un elemento en bloque</p>
								</div>
							</li>
						</ul>
					</div>
				</article>
				<!-- Display: Inline-block -->
				<article id="d_inline-block" class="article">
					<h3>Elementos inline-block</h3>
					<p class="destacado">
						Ofrece las mismas caracteristicas de los elementos inline pero además las complementa con las de los elementos de bloque.
					</p>
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Al aplicarsele propiedades de ancho y alto afectará a los elementos que esten alrededor.</li>
							<li class="list-item list-style-none">
								<pre class="pre-list">
									.inline-block&#123
									&nbsp;&nbsp;&nbsp;margin-bottom:2em;
									&#125
								</pre>
								<div class="div-graphic-item-inline-block">
									<span class="inline">Soy un elemento inline-block</span>
									<span class="inline">Soy otro elemento inline-block</span>
									<p class="bloque">Soy un elemento en bloque</p>
								</div>
							</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 16: Pseudo elementos-->
			<section id="pseudoelementos" class="section">
				<h2>Pseudo elementos</h2>
				<p class="destacado">Se utilizan para dar cierto estilo a partes específicas de un elemento.</p>
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Sintaxis:
								<pre class="pre-list">
									selector::pseudo-elemento {estilos}
								</pre>
							</li>
							<li class="list-item">Existe 5 pseudo elementos:
								<dl class="list"><span class="span">::first-line</span>
									<dt class="list-item">Sólo para elementos de bloque.</dt>
								</dl>
								<dl class="list"><span class="span">::first-letter</span>
									<dt class="list-item">Se aplica a la primera letra. Sólo para elementos de bloque.</dt>
								</dl>
								<dl class="list"><span class="span">::before</span>
									<dt class="list-item">Por defecto es un elemento de línea que no pertenece al HTML y por consecuencia no existen en el DOM. Es hijo directo del elemento al que pertenece y se coloca antes de él.</dt>
								</dl>
								<dl class="list"><span class="span">::after</span>
									<dt class="list-item">Por defecto es un elemento de línea que no pertenece al HTML y por consecuencia no existen en el DOM. Es hijo directo del elemento al que pertenece y se coloca despues de él.</dt>
								</dl>
								<dl class="list"><span class="span">::selection</span>
									<dt class="list-item">Retirado de la especificación.</dt>
								</dl>
							</li>
							<li class="list-item">
								Es obligatorio el uso de la propiedad <span class="span">content</span> en <span class="span">::before</span> y <span class="span">::after</span>. Si se deja vacío (content:' '), se debe usar su propiedad <span class="span">display: block</span>
							</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clases 17 - 18 - 19: Pseudo clases-->
			<section id="pseudoclases" class="section">
				<h2>Pseudo clases</h2>
				<p class="destacado">Son selectores que reaccionan en tiempo real detectando la iteracción del usuario con los elementos.</p>
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Funciona con todos los selectores CSS</li>
							<li class="list-item">No están atados a un elemento </li>
							<li class="list-item">Sintaxis:
								<pre class="pre-list">
									selector:pseudoclase&#123estilos css&#125

									Si no hay selector:

									:pseudoclase &#123estilos css&#125
								</pre>
							</li>
						</ul>
						<h3>Tipos de pseudo clases</h3>
						<div class="div-graphic-item-pseudoclases">
							<h4>Dinámicas</h4>
							<dl class="list"><span class="span">:link</span>
								<dt class="list-item">Aplicable sólo a links. Es para enlaces aún no visitados.</dt>
							</dl>
							<dl class="list"><span class="span">:visited</span>
								<dt class="list-item">Aplicable sólo a links. Es para enlaces que ya han sido  vistados. Casi ya no se usa por cuestiones estéticas. Mayormente utilizado en buscadores.</dt>
							</dl>
							<dl class="list"><span class="span">:hover</span>
								<dt class="list-item">Se activa al poner el mouse sobre el elemento.</dt>
							</dl>
							<dl class="list"><span class="span">:active</span>
								<dt class="list-item">Aplicable sólo a links. Se activa sólo al momento de hacer click sobre el elemento, luego se desactiva.</dt>
							</dl>
							<dl class="list"><span class="span">:focus</span>
								<dt class="list-item">Se activa cuando se hace click en el elemento y se desactiva al hacer click fuera del elemento.</dt>
							</dl>
						</div>
						<div class="div-graphic-item-pseudoclases">
							<h4>De enlaces</h4>
							<dl class="list"><span class="span">:target</span>
								<dt class="list-item">Se aplica a un elemento es objetivo de un marcador o ancla.</dt>
							</dl>
						</div>
						<div class="div-graphic-item-pseudoclases">
							<h4>De lenguaje:</h4>
							<dl class="list"><span class="span">:lang&#40 &#41</span>
								<dt class="list-item">Elemento que contiene el atributo lang que se especifique.</dt>
								<pre class="pre-list">
									Ejemplo:

									&lt;span lang="en" class="span" &gt;Hello world&lt;/span&gt;

									&lt;span lang="es" class="span" &gt;Hola mundo&lt;/span&gt;

									En CSS:

									.span:lang&#40en&#41&#123
										&nbsp;&nbsp;&nbsp;color:red;
									&#125

									.span:lang&#40es&#41&#123
										&nbsp;&nbsp;&nbsp;color:blue;
									&#125
								</pre>
							</dl>
						</div>
						<div class="div-graphic-item-pseudoclases">
							<h4 class="span">De estado:</h4>
							<dl class="list"><span class="span">:enabled</span>
								<dt class="list-item">El estado del elemento es activado o está activo.</dt>

							</dl>
							<dl class="list"><span class="span">:disabled</span>
								<dt class="list-item">El estado del elemento es desactivado o está inactivo.</dt>
							</dl>
							<dl class="list"><span class="span">:checked</span>
								<dt class="list-item">Selecciona uno o varios elementos.</dt>
							</dl>
							<dl class="list"><span class="span">:in-range</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:out-of-range</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:required</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:optional</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:valid</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:invalid</span>
								<dt class="list-item">.</dt>
							</dl>
							<dl class="list"><span class="span">:fullscreen</span>
								<dt class="list-item">Se aplica cuando el elemento está en pantalla completa.</dt>
							</dl>
						</div>
						<div class="div-graphic-item-pseudoclases">
							<p>Ejemplo:</p>
							<div class="div-graphic-item-form">
								<form action="#">
									<label class="label">:enabled</label>
									<input class="input" type="text">
									<label class="label">:disabled</label>
									<input class="input" type="text" disabled>
									<input id="checkbox" class="input" type="checkbox">
									<label for="checkbox" class="label">:checked</label>
									<label class="label">:in-range</label>
									<input class="input" type="number" min="50" max="60">
									<label class="label">:out-of-range</label>
									<input class="input" type="number" min="50" max="100">
									<label class="label">:optional</label>
									<input class="input" type="text">
									<label class="label">:required</label>
									<input class="input" type="text" required>
									<label class="label">:valid</label>
									<input class="input" type="number">
									<label class="label">:invalid</label>
									<input class="input" type="number">
								</form>
							</div>
						</div>
						<div class="div-graphic-item-pseudoclases">
							<div class="div-video">
								<video controls>
									<source src="videos/17-pseudoclases-I -dinamicas-marcadores-e-idioma.mp4" type="video/mp4">
								</video>
							</div>
						</div>
					</div>
				</article>
				<article id="pseudo_clases_estructurales" class="article">
					<h2>Pseudo Clases Estructurales</h2>
					<p class="destacado">El uso de una pseudo clase ofrece una especificidad muy alta, mucho mayor que las del propio css.</p>
					<div class="div-organizador">
						<div class="div-graphic-item-pseudoclases">
							<dl class="list"><span class="span">:root</span>
								<dt class="list-item">Representa la raiz del documento html. Es como si fuese la etiqueta &lt;html&gt; pero con mayor peso. Utilizada con variables CSS.</dt>
								<pre class="pre-list">
									:root &#123
									&nbsp;&nbsp;&nbsp;estilos css
									&#125
								</pre>
							</dl>
							<dl class="list"><span class="span">:empty</span>
								<dt class="list-item">Aplicable a elementos vacíos, es decir, etiquetas que no tienen contenido. Etiquetas vacías se suelen dejar para agregar contenido dinámco con <span class="span">Javascript.</span></dt>
								<pre class="pre-list">
									selector:empty &#123
									&nbsp;&nbsp;&nbsp;estilos css
									&#125
								</pre>
								<p class="destacado">Para resetear estilos de un elemento específico se utiliza el selector <span class="span">all</span> con su propiedad <span class="span">unset;</span></p>
								<pre class="pre-list">
									selector:empty &#123
									&nbsp;&nbsp;&nbsp;all: unset;
									&#125
								</pre>
							</dl>
							<dl class="list"><span class="span">:first-child</span>
								<dt class="list-item">Selecciona al primer hijo &#40independiente del tipo de elemento&#41 que tenga la clase especificada como selector.</dt>
								<pre class="pre-list">
									.hijo:first-child &#123
									&nbsp;&nbsp;&nbsp;background: blue;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-child">
									<div class="first-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:last-child</span>
								<dt class="list-item">Selecciona al último hijo &#40independiente del tipo de elemento&#41 que tenga la clase especificada como selector.</dt>
								<pre class="pre-list">
									.hijo:last-child &#123
									&nbsp;&nbsp;&nbsp;background: blue;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-child">
									<div class="last-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:nth-child&#40 n &#41</span>
								<dt class="list-item">Selecciona al hijo <span class="span">n</span> &#40independientemente de la etiqueta&#41</dt>
								<pre class="pre-list">
									.hijo:nth-child&#40 2 &#41 &#123
									&nbsp;&nbsp;&nbsp;background: red;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-child">
									<div class="nth-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
									</div>
								</div>
								<pre class="pre-list">
									Valor n = odd para impares
									.hijo:nth-child&#40 odd &#41 &#123
									&nbsp;&nbsp;&nbsp;background: orange;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-odd">
									<div class="nth-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
									</div>
								</div>
								<pre class="pre-list">
									Valor n = even para pares
									.hijo:nth-child&#40 even &#41 &#123
									&nbsp;&nbsp;&nbsp;background: burlywood;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-even">
									<div class="nth-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
									</div>
								</div>
								<pre class="pre-list">
									Valor n = ecuaciones = 1n,3n,4n+1,n+4,...
									donde <span class="span">n</span> es un multiplicador y va desde
										0 hasta n.

									.hijo:nth-child&#40 3n &#41 &#123
									&nbsp;&nbsp;&nbsp;background: lightsalmon;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-ecuaciones">
									<div class="nth-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:nth-last-child&#40 n &#41</span>
								<dt class="list-item">Selecciona al hijo <span class="span">n</span> empezando a contar desde el último. &#40independientemente de la etiqueta&#41</dt>

								<pre class="pre-list">
									Valor n = cualquier valor entero oecuación

									.hijo:nth-last-child&#40 4 &#41 &#123
									&nbsp;&nbsp;&nbsp;background: skyblue;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-last-child">
									<div class="nth-child">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:only-child</span>
								<dt class="list-item">Sólo es aplicable cuando existe <span class="span">hijo único</span>. Si existen hermanos la pseudo clase no funciona &#40independientemente de la etiqueta&#41</dt>
							</dl>
							<dl class="list"><span class="span">:first-of-type</span>
								<dt class="list-item">Funciona igual que <span class="span">first-child</span> con la diferencia que la etiqueta o elemento si es importante.</dt>
								<pre class="pre-list">
									.hijo:first-of-type
									&nbsp;&nbsp;&nbsp;background: lightpink;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-of-type">
									<div class="first-of-type">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:last-of-type</span>
								<dt class="list-item">Funciona igual que <span class="span">last-child</span> con la diferencia que la etiqueta o elemento si es importante.</dt>
								<pre class="pre-list">
									.hijo:last-of-type
									&nbsp;&nbsp;&nbsp;background: lightpink;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-of-type">
									<div class="last-of-type">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:nth-of-type&#40 &#41</span>
								<dt class="list-item">Funciona igual que <span class="span">nth-child</span> con la diferencia que la etiqueta o elemento si es importante.</dt>
								<pre class="pre-list">
									.hijo:nth-of-type&#40 5 &#41
									&nbsp;&nbsp;&nbsp;background: lightpink;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-of-type">
									<div class="nth-of-type">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:nth-last-of-type&#40 &#41</span>
								<dt class="list-item">Funciona igual que <span>nth-last-child(n) pero teniendo en cuenta el tipo de elemento. 	</dt>
								<pre class="pre-list">
									.hijo:nth-last-of-type&#40 2 &#41
									&nbsp;&nbsp;&nbsp;background: lightpink;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-of-type">
									<div class="nth-last-of-type">
										<p class="hijo">Soy first-child con class="hijo"</p>
										<p class="hijo">Soy second-child con class="hijo"</p>
										<p class="hijo">Soy third-child con class="hijo"</p>
										<p class="hijo">Soy four-child con class="hijo"</p>
										<p class="hijo">Soy five-child con class="hijo"</p>
										<p class="hijo">Soy six-child con class="hijo"</p>
									</div>
								</div>
							</dl>
							<dl class="list"><span class="span">:not&#40etiqueta&#41</span>
								<dt class="list-item">Los estilos no se aplicarán a los elementos con la etiqueta especificad</dt>
								<pre class="pre-list">
									.hijo:not&#40 div &#41 // Se excluyen los divs
									&nbsp;&nbsp;&nbsp;background: greenyellow;
									&nbsp;&nbsp;&nbsp;color: white;
									&#125
								</pre>
								<div class="div-graphic-item-not">
									<div class="not">
										<div class="clase_comun">div1 con class="clase_comun"</div>
										<div class="clase_comun">div2 con class="clase_comun"</div>
										<div class="clase_comun">div3 con class="clase_comun"</div>
										<p class="clase_comun">Párrafo con class = "clase_comun"</p>
										<p class="clase_comun">Párrafo con class = "clase_comun"</p>
										<p class="clase_comun">Párrafo con class = "clase_comun"</p>
									</div>
								</div>
							</dl>
						</div>
					</div>
				</article>
			</section>

			<!--Clase 20: Variables-->
			<section id="variables" class="section">
				<h2>Introducción a Variables CSS</h2>
				<p class="destacado">Variable es un espacio en memoria en el que se guarda un valor para poder reutilizarlo o modificarlo después.</p>
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Necesitan estar dentro de un selector.</li>
							<li class="list-item">Tienen herencia y cascada.</li>
							<li class="list-item">Existen variables locales y globales &#40declaradas en el root.&#41</li>
							<li class="list-item">No son lo mismo que las variables Sass.</li>
							<li class="list-item list-style-none">Sintaxis
								<pre class="pre-list">
									selector &#123
									&nbsp;&nbsp;&nbsp;--nombre-variable: valor;
									&#125

									<span class="span">Uso:</span>

									propiedad:var&#40--nombre-variable&#41
								</pre>
							</li>
							<li class="list-item list-style-none">Ejemplo:
								<pre class="pre-list">
									&lt;h1 class="title"&gt;Variables CSS&lt;/h1&gt;
									&lt;article class="article-uno"&gt;
										&nbsp;&nbsp;&nbsp;&lt;p class="parrafo"&gt;Párrafo principal&lt;/p&gt;
									&lt;/article&gt;
									&lt;article class="article-dos"&gt;
										&nbsp;&nbsp;&nbsp;&lt;p class="parrafo"&gt;Otro párrafo&lt;/p&gt;
									&lt;/article&gt;
									&lt;input type="checkbox" class="check"&gt;
									&lt;div class="box"&gt;&lt;/div&gt;

									&lt;style&gt;
									&nbsp;&nbsp;&nbsp;:root&#123
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color:red;//Declaración de la variable
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--border: 3px solid yellow;
									&nbsp;&nbsp;&nbsp;&#125

									&nbsp;&nbsp;&nbsp.parrafo&#123
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color: var&#40--color&#41; //Uso de la variable
									&nbsp;&nbsp;&nbsp&#125

									Usando cascada:
									&nbsp;&nbsp;&nbsp.article-dos&#123
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color: green; //Cambio del valor de la variable.
									&nbsp;&nbsp;&nbsp;&#125

									&nbsp;&nbsp;&nbsp;.check:checked + .box&#123
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--color: purple;
									&nbsp;&nbsp;&nbsp;&#125

									&nbsp;&nbsp;&nbsp;.box&#123
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 100px;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height: 100px;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background: var&#40--color&#41
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;border: var&#40--border&#41
									&nbsp;&nbsp;&nbsp;&#125
									&lt;/style&gt;

								</pre>
							</li>
							<li class="list-item list-style-none">
								<div class="div-graphic-item-variables">
									<p>Solución ejercicio:</p>
									<article class="article-uno">
										<p class="parrafo">Párrafo del article-uno</p>
									</article>
									<article class="article-dos">
										<p class="parrafo">Párrafo del article-dos</p>
									</article>
									<input type="checkbox" class="check">
									<div class="box"></div>
								</div>
							</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 21: Propiedad background-->
			<section id="background" class="section">
				<h2>Propiedad Background</h2>
				<p class="destacado">Propiedad que permite darle estilo al fondo de una caja.</p>
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Es un shorthand.</li>
							<li class="list-item">Propiedades:</li>
							<li class="list-item list-style-none">
								<div class="div-graphic-item-background">
									<dl class="list"><span class="span">background-color</span>
										<dt class="list-item">Establece el color de fondo de la caja.</dt>
										<div class="bg-color"></div>
									</dl>

									<dl class="list"><span class="span">background-image:url&#40ruta&#41</span>
										<dt class="list-item">Establece la imagen de fondo de la caja.</dt>
										<div class="bg-image"></div>
									</dl>

									<dl class="list"><span class="span">background-size</span>
										<dt class="list-item">Establece el tamaño de la imagen de fondo. Acepta ancho &#40x&#41 y alto &#40y&#41. Si no se establece el alto se hace automático.</dt>
										<pre class="pre-list">
											background-size: size_eje_X size_eje_Y
											Valores:
											|auto|-> automatico
											|cover| -> cubre la caja por completo aunque la imagen se desborde.
											|contain| -> la imagen se ajusta a su contenedor aunque no lo rellene.
										</pre>
										<div class="bg-size"></div>
									</dl>

									<dl class="list"><span class="span">background-repeat</span>
										<dt class="list-item">Establece si la imagen se repite o no.</dt>
										<pre class="pre-list">
											Valores:

											|repeat-x|-> se repite en el eje X.
											|repeat-y|-> se repite en el eje Y.
											|no-repeat| -> no se repite.
										</pre>
										<div class="bg-repeat"></div>
									</dl>

									<dl class="list"><span class="span">background-position</span>
										<dt class="list-item">Establece la posicion de la imagen, si no se especifica un segundo valor se establecerá como <span class="span">center</span>.</dt>
										<pre class="pre-list">
											Valores:

											left top
											left center
											left bottom
											right top
											right center
											right bottom
											center top
											center center
											center bottom
											x% y%
											xpos ypos -> valores en px, em, rem, etc
											initial -> Utilizado en animaciones.
											inherit -> Utilizado en animaciones.
										</pre>
										<div class="bg-position"></div>
									</dl>

									<dl class="list"><span class="span">background-clip</span>
										<dt class="list-item">Establece que parte de la caja rellenará el fondo.
										Muestra la imagen desde donde le decimos. Sólo oculta, NO redimensiona.</dt>
										<pre class="pre-list">
											valores:

											|border-box| ->
											|padding-box| ->
											|content-box| ->
										</pre>
										<div class="bg-clip">
											<p>border-box</p>
											<div class="border-box"></div>
											<p>padding-box</p>
											<div class="padding-box"></div>
											<p>content-box</p>
											<div class="content-box"></div>
										</div>
									</dl>

									<dl class="list"><span class="span">background-origin</span>
										<dt class="list-item">Establece donde comienza el fondo. Redimensiona la imagen para que ocupe la zona que le decimos.</dt>
										<pre class="pre-list">
											valores:

											|border-box| ->
											|padding-box| ->
											|content-box| ->
										</pre>
										<div class="bg-origin">
											<p>border-box</p>
											<div class="border-box"></div>
											<p>padding-box</p>
											<div class="padding-box"></div>
											<p>content-box</p>
											<div class="content-box"></div>
										</div>
									</dl>

									<dl class="list"><span class="span">background-attachment</span>
										<dt class="list-item">Permite establecer si el fondo se coloca respecto a la caja o al viewport.</dt>
										<pre class="pre-list">
											background-image: url(../img/cafe.jpeg);
											background-size: contain;
											background-attachment: fixed;
										</pre>
										<div class="div-attachment">
											<div class="bg-attachment"></div>
										</div>
									</dl>

									<dl class="list"><span class="span">background múltiples</span>
										<dt class="list-item">
											Se puede usar varios background al mismo tiempo
										</dt>
										<pre class="pre-list">
											background-image: url(../img/logo.png), url(../img/cafe.jpeg);
											background-size: 10%, cover;
											background-repeat: no-repeat;
											background-position: bottom right, center;
										</pre>
										<div class="bg-multiple"></div>
									</dl>
								</div>
							</li>
						</ul>
					</div>
				</article>
			</section>

			<!--Clase 22: Textos y tipografías I-->
			<section id="tex_tipo_i" class="section">
				<h2>22.- Textos y Tipografías</h2>
				<p class="destacado">Tipografía es el tipo de letra que utiliza una página web. Se puede dividir en 2 grupos:Familias tipográficas y familias genéricas. </p>
				<!-- Textos y tipografias I -->
				<article class="article">
					<h3>22.- Textos y Tipografías I</h3>
					<pre class="pre-list">
						font-family: Arial, Helvetica, sans-serif;

						Cuando el nombre de la fuente se compone de varias palabras irá entre comillas:

						font-family: 'Franklin Gothic Medium', 'Arial Narrow';
					</pre>
					<div class="div-organizador">
						<dl class="list"><span class="span">Familias tipográficas</span>
							<dt class="list-item">Son fuentes específias con nombre: Arial, Times New Roman, Verdana, ... </dt>
						</dl>
						<dl class="list"><span class="span">Familias genéricas:</span>
							<dt class="list-item">Son fuentes según sus características.: sans, sans-serif, cursive, ...</dt>
						</dl>
						<ul class="list">
							<li class="list-item">Las propiedades para cambiar el estilo de las fuentes/textos se aplican a la letra y son:
								<dl class="list"><span>font-family</span>
									<dt class="list-item">Establece la familia de la fuente.</dt>
								</dl>
								<dl class="list"><span>font-size</span>
									<dt class="list-item">Establece el tamaño de la fuente.</dt>
								</dl>
								<dl class="list"><span>font-weight</span>
									<dt class="list-item">Establece el ancho de la fuente.</dt>
								</dl>
								<dl class="list"><span>font-style</span>
									<dt class="list-item">Especifica el estilo de la fuente: negrita, normal, ligera.</dt>
							</li>
							<li class="list-item">Propiedades de textos: Se aplican al contenedor de la letra y son:
								<dl class="list"><span>text-transform</span>
									<dt class="list-item">Establece que la fuente esté en mayúsculas, minúsculas o si la primera letra es en mayúsculas.</dt>
								</dl>
								<dl class="list"><span>text-align</span>
									<dt class="list-item">Determina el alineamiento del texto: derecha, izquierda, centrado o justificado.</dt>
								</dl>
								<dl class="list"><span>text-decoration</span>
									<dt class="list-item">Decora la letra con una línea: subrayado, por encima y tachado</dt>
								</dl>
								<dl class="list"><span>text-indent</span>
									<dt class="list-item">Hace que la primera letra de un párrafo sea identado.</dt>
								</dl>
								<dl class="list"><span>line-height</span>
									<dt class="list-item">Establece el alto de línea.</dt>
								</dl>
								<dl class="list"><span>letter-spacing</span>
									<dt class="list-item">Establece la separación entre letras.</dt>
								</dl>
							</li>
						</ul>
					</div>
				</article>
				<article id="medidas_fuentes" class="article">
					<h3>Tamaños de fuentes: Unidades de medidas</h3>
					<pre class="pre-list">
						font-size: 30px;
						font-size: 50%;
						font-size: 2em;
						font-size: 3rem;
					</pre>
					<div class="div-organizador">
						<dl class="list"><span>px</span>
							<dt class="list-item">Pixeles &#40medida absoluta.&#41</dt>
						</dl>
						<div class="div-graphic-pixel">
							<h4>Párrafo con font-size:12px</h4>
							<p class="doce_px" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aut laudantium culpa quidem perspiciatis pariatur quo maxime beatae quasi doloremque cumque tenetur dolor sunt minus nam eos, itaque, commodi reiciendis dolorem magni aliquam. Qui, adipisci beatae itaque autem est non.
							</p>
							<h4>Párrafo con font-size por defecto del html = 16px</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque deleniti eos consectetur reprehenderit quos esse, asperiores accusamus corporis sed nemo recusandae unde aperiam labore. Recusandae, assumenda. Cumque repellat nemo blanditiis aspernatur adipisci vero sed saepe? Veritatis explicabo nobis neque!</p>
						</div>
						<dl class="list"><span>em</span>
							<dt class="list-item">Medida relativa al contexto &#40al padre.&#41</dt>
						</dl>
						<div class="div-graphic-em">
							<h4>Párrafo Padre con font-size: 1em = 16px => Por defecto del html</h4>
							<p class="unem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae ad dolore, voluptatibus, nobis optio soluta quas harum at praesentium odio earum perspiciatis porro in modi saepe nesciunt <span class="dosem">span hijo con font-size = 2em = 32px </span>corporis vitae officiis natus maxime. Officiis nisi aperiam vero necessitatibus tenetur ullam eum.</p>
							<h4>Párrafo Padre con font-size = 10px</h4>
							<p class="diezpx">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ex nobis <span class="veintepx">Span hijo con font-size = 2em = 20px </span>ad reprehenderit maxime natus neque voluptates.
							</p>
						</div>
						<dl class="list"><span>rem</span>
							<dt class="list-item">Medida relativa al html. Siempre tomará su valor respecto a los 16px que son por defecto del HTML</dt>
						</dl>
						<div class="div-graphic-rem">
							<h4>Párrafo con font-size configurado por defecto a 10px</h4>
							<pre class="pre-list">
								body&#123
									&nbsp;&nbsp;&nbsp;font-size: 10px;
								&#125
							</pre>
							<h4>Párrafo Padre con font-size 20px</h4>
							<p class="veintepx">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque deleniti eos consectetur reprehenderit <span class="dosrem">span hijo con font-size = 2rem = 32px => Respeta el font-size por defecto del html que es de 16px</span> quos esse, asperiores accusamus corporis sed nemo.
							</p>
						</div>
						<dl class="list"><span>% &#40porcentaje&#41</span>
							<dt class="list-item">Medida relativa al tamaño actual del padre.</dt>
						</dl>
						<div class="div-graphic-porcentaje">
							<h4>Párrafo con font-size configurado por defecto a 20px</h4>
							<pre class="pre-list">
								body&#123
									&nbsp;&nbsp;&nbsp;font-size: 20px;
								&#125
							</pre>
							<h4>Párrafo Padre con font-size 200% = 40px</h4>
							<p class="doscientosporciento">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque deleniti eos consectetur reprehenderit <span class="cienporciento">span hijo con font-size = 100% = 40px que es del párrafo padre. </span> quos esse, asperiores accusamus corporis sed nemo.
							</p>
						</div>
					</div>
				</article>
				<article id="medidas_relativas_viewport" class="article">
					<h3>Medidas Relativas al Viewport</h3>
					<pre class="pre-list">
						vh: medida relativa al height del viewport
						vw: media relativa al width del viewport
						vmin: medida relativa al valor mínimo de viewport
						vmax: medida relativa al valor máximo de viewport
					</pre>
				</article>
				<article id="estilos_para_fuentes" class="article">
					<h3>Estilos para fuentes y tipografías</h3>
					<pre class="pre-list">
						font-weight: Establece el grosor de la fuente
						bold | normal | 100-900

						100-900 Son medidas que se utilizan para fuentes externas. Por ejemplo de Google Fonts.

						font-style: Establece el estilo de la tipografía
						normal | italic | oblique
					</pre>
				</article>
				<!--Clase 23: Textos y tipografías II-->
				<article id="tex_tipo_ii" class="article">
					<h3>Textos y Tipografias II</h3>
					<div class="div-organizador">
						<dl class="list"><span>text-transform:</span>
							<dt class="list-item">Transforma el texto a mayúsculas, minúsculas, etc.</dt>
							<pre class="pre-list">
								lowercase (minusculas) | uppercase (mayusculas) | capitalize (primera letra de cada palabra en mayusculas)
							</pre>
						</dl>
						<dl class="list"><span>text-align:</span>
							<dt class="list-item">Alinea el texto del elemento a la izquierda, derecha, etc. SOLO ELEMENTOS DE BLOQUE (excepto en botones, que aunque sean
							de elementos en línea funciona)</dt>
							<pre class="pre-list">
								center | left | right | justify
							</pre>
						</dl>
						<dl class="list"><span>text-decoration:</span>
							<dt class="list-item">Establece la decoración del texto</dt>
							<pre class="pre-list">
								overline | line-through | underline | none
							</pre>
						</dl>
						<dl class="list"><span>text-indent:</span>
							<dt class="list-item">mueve la primera linea de un de texto. SOLO ELEMENTOS DE BLOQUE</dt>
						</dl>
					</div>
				</article>
			</section>

			<!--Clase 25: Listas-->
			<section id="listas" class="section">
				<h2>25.- Listas en CSS</h2>
				<p class="destacado">Buena práctica: Resetear los estilos por defecto de los navegadores</p>
				<article class="article">
					<h3>Resetear estilos por defecto de los navegadores para listas</h3>
					<div class="div-organizador">
						<pre class="pre-list">
							*&#123
							&nbsp;&nbsp;&nbsp;margin-top:0;
							&nbsp;&nbsp;&nbsp;margin-bottom:0;
							&nbsp;&nbsp;&nbsp;padding-left:0;
							&#125
						</pre>
						<p>Hay tres propiedades para las listas, se pueden aplicar al padre o a los elementos de la lista</p>
						<dl class="list"><span>list-style-type:</span>
							<dt class="list-item">Establece el estilo de viñeta y tiene los siguientes valores:</dt>
						</dl>
						<pre class="pre-list">
							disc.- Viene por defecto.
							circle.- Disco sin relleno.
							square.- Cuadrado.
							decimal.- Se comporta como <span>ol.</span>
							decimal-leading-zero.- Deja un cero por delante.
							lower-roman.- Números romanos en minúsculas.
							upper-roman.- Números romanos en mayúsculas.
							upper-latin.- Letras en mayúsculas.
							lower-latin.- Letras en minúsculas.
							lower-greek.- Alfabeto griego.
							armenian.- Alfabeto armenio.
							georgian.- Alfabeto giorgiano.
							lower-alpha.- Similar al <span>lower-latin</span>.
							upper-alpha.- Similar al <span>upper-latin</span>.
						</pre>
						<dl class="list"><span>list-style-image:</span>
							<dt class="list-item">Pone una imagen en lugar de la viñeta, no se suele utilizar porque hay formas mucho más eficientes de hacerlo.</dt>
						</dl>
						<pre class="pre-list">
							list-style-image:url&#40check.png&#41
						</pre>
						<p>Ejemplo:</p>
						<pre class="pre-list">
							.list &#123 //seria el <span>ul</span>
							&nbsp;&nbsp;&nbsp;margin-top: 0;
							&nbsp;&nbsp;&nbsp;margin-bottom: 0;
							&nbsp;&nbsp;&nbsp;padding-left: 0;
							&#125
						</pre>
						<pre class="pre-list">
							.list__item &#123 //seria el <span>li</span>
							&nbsp;&nbsp;&nbsp;list-style: none;
							&#125
						</pre>
						<pre class="pre-list">
							.list__item &#123
							&nbsp;&nbsp;&nbsp;background-image: url(check.png);
							&nbsp;&nbsp;&nbsp;background-position: 0 0;
							&nbsp;&nbsp;&nbsp;background-size: contain;
							&nbsp;&nbsp;&nbsp;background-repeat: no-repeat;
							&nbsp;&nbsp;&nbsp;padding-left: 2em;
							&#125
						</pre>
						<div class="div-graphic-list-image">
							<ul>
								<li class="list__item">Item 1</li>
								<li class="list__item">Item 2</li>
								<li class="list__item">Item 3</li>
								<li class="list__item">Item 4</li>
								<li class="list__item">Item 5</li>
							</ul>
						</div>
						<dl class="list"><span>list-style-position:</span>
							<dt class="list-item">Hace que las viñetas se coloquen por dentro o por fuera del elemento.</dt>
						</dl>
						<pre class="pre-list">
							outside | inside
						</pre>
					</div>
				</article>
			</section>

			<!--Clase 26: Tablas-->
			<section id="tablas" class="section">
				<h2>26.- Tablas en CSS</h2>
				<p class="destacado">Sirven para mostrar información ordenada en campos y celdas.</p>
				<article>
					<div class="div-organizador">
						<pre class="pre-list">
							&lt;table class="table"&gt;
								&lt;caption&gt;Avengers&lt;/caption&gt;
								&lt;colgroup&gt;
									&nbsp&nbsp&nbsp;&lt;col class="col1"&gt;
									&nbsp&nbsp&nbsp;&lt;col class="col2"&gt;
									&nbsp&nbsp&nbsp;&lt;col class="col3"&gt;
								&lt;/colgroup&gt;
								&lt;thead&gt;
									&nbsp;&nbsp;&nbsp;&lt;th class="table__head"&gt;Username&lt;/th&gt;
									&nbsp;&nbsp;&nbsp;&lt;th class="table__head"&gt;Email&lt;/th&gt;
									&nbsp;&nbsp;&nbsp;&lt;th class="table__head"&gt;Company&lt;/th&gt;
								&lt;/thead&gt;
								&lt;tbody&gt;
									&lt;tr class="table__row"&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;TonyStark&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;tonystark@gmail.com&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;Marvel&lt;/td&gt;
									&lt;/tr&gt;
									&lt;tr class="table__row"&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;Bruce Banner&gt;/td&lt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;brucebanner@gmail.com&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;Marvel&lt;/td&gt;
									&lt;/tr&gt;
									&lt;tr class="table__row"&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;PeterParker&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;spiderman@gmail.com&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;Marvel&lt;/td&gt;
									&lt;/tr&gt;
									&lt;tr class="table__row"&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;SteveRogers&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;&lt;/td&gt;
										&nbsp;&nbsp;&nbsp;&lt;td class="table__data"&gt;Marvel&lt;/td&gt;
									&lt;/tr&gt;
								&lt;/tbody&gt;
							&lt;/table&gt;
						</pre>
						<figure>
							<img src="img/tabla.PNG" alt="tabla">
						</figure>
					</div>
					<div class="div-organizador">
						<h3>Atributos</h3>
						<dl class="list"><span>table-layout:</span>
							<dt class="list-item">Define como se comportan las dimensiones de una tabla y los anchos de las "columnas".</dt>
						</dl>
							<pre class="pre-list">
								automatic: valor por defecto
								fixed: necesita un width declarado, si no se le da un ancho a cada columna se distribuyen equitativamente.
							</pre>
						<dl class="list"><span>caption-side:</span>
							<dt class="list-item">Define donde se coloca el título de una tabla.</dt>
						</dl>
							<pre class="pre-list">
								top: valor por defecto
								bottom: se coloca al pie de la tabla
							</pre>
						<dl class="list"><span>border-spacing:</span>
							<dt class="list-item">Controla el espacio entre las celdas. Recibe una medida en cualquier unidad de medida.</dt>
						</dl>
						<dl class="list"><span>border-collapse:</span>
							<dt class="list-item">Controla si las celdas se mantienen juntas o separadas.</dt>
						</dl>
							<pre class="pre-list">
								separate: valor por defecto. Separa las celdas.
								collapse: junta las celdas para no dejar espacios entre ellas. Anula a border-spacing si en caso se estuviese aplicando ambos al mismo elemento.
							</pre>
						<dl class="list"><span>empty-cells:</span>
							<dt class="list-item">Controla qué hacer con las celdas vacías</dt>
						</dl>
							<pre class="pre-list">
								show: Valor por defecto
								hide: Oculta las celdas vacías. Pero no se aplica su efecto si en caso border-collapse también se estuviese aplicando al mismo elemento.
							</pre>
					</div>
				</article>
				<p class="destacado">Una tabla responsive se construye encerrándola en un div contenedor al que se aplica el estilo <span>overflow-x: auto;</span></p>
			</section>
			<!--Clase 27: Imágenes-->
			<section id="imagenes" class="section" >
				<h2>27.- Imágenes en CSS</h2>
				<p class="destacado">No existen propiedades para imágenes en CSS. Para imágenes responsive se recomienda: <span>max-width: 100%;</span> aplicarlo al archivo base de css que se tenga.</p>
				<article class="article">
					<div class="div-organizador">
						<ul class="list">
							<li class="list-item">Las imágenes por defecto son elementos inline, esto causa un espacio por debajo debido a su line-height, se puede solucionar de dos formas.
							Dando un <span>line-height:0</span> al contenedor o un <span>display:block</span> a la imagen
							</li>
							<li class="list-item">Para centrado horizontal: <span>display:block</span> y márgenes laterales automáticos <span>margin: auto auto;</span>
							</li>
							<li class="list-item">Si la imagen no es de bloque utilizar <span>text-align: center.</span></li>
							<li class="list-item">Para centrado vertical usar Flexbox.
							Aplicar <span>vertical-align: middle</span> a la imagen y al texto</li>
							<li class="list-item"></li>
						</ul>
					</div>
				</article>
				<article class="article">
					<h2>Centrar imágenes verticalmente</h2>
					<div class="div-organizador">
						<pre class="pre-list">
							.img-container img,
							.img-container span&#123
							&nbsp;&nbsp;&nbsp;vertical-align: middle;
							&#125

							.img-container&#123
							&nbsp;&nbsp;&nbsp;display: table;
							&#125

							.img-container span,
							.img-container p&#123
							&nbsp;&nbsp;&nbsp;display: table-cell;
							&#125
						</pre>
					</div>
				</article>
			</section>
		</div>
	</div>

	<script src="../../../../assets/popper.min.js"></script>
    <script src="../../../../assets/bootstrap520/js/bootstrap.min.js"></script>
</body>
</html>
		
