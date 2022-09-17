<?php include "../../../templates/head.php";?>
        <link rel="stylesheet" href="../css/aside.css">
        <link rel="stylesheet" href="../css/contenido.css">
        <link rel="stylesheet" href="../css/js-css.css">
        <title>Funciones en Javascrip</title>
    </head>
<body>

<?php include "../../../templates/nav-ini.php";?>
<?php include "../nav-js.php";?>

<div class="container-fluid mt-3">
  <div class="row p-4">
      <!-- menu -->
      <div class="col-md-3">
          <?php include "./templates/aside-js.php";?>
      </div>
      <!-- contenido -->
      <div class="col-md-9 bg-light">
          <section>
            <div class="container-fluid">
              <h2>Funciones</h2>
              <!-- Tipos de funciones -->
              <article>
                <h3>Concepto</h3>
                <div class="row mt-3">
                  <p class="destacado">Las funciones son uno de los bloques de construcción fundamentales en JavaScript</p>
                  <p>Una función en JavaScript es similar a un procedimiento — un conjunto de instrucciones que realiza una tarea o calcula un valor, pero para que un procedimiento califique como función, debe tomar alguna entrada y devolver una salida donde hay alguna relación obvia entre la entrada y la salida. Para usar una función, debes definirla en algún lugar del ámbito desde el que deseas llamarla.</p>
                </div>
              </article>
              <article>
                <h3>Tipos de Funciones</h3>
                <div class="row mt-3">
                  <p>Existen 3 tipos de funciones</p>
                  <ul>
                      <li><i class="bi bi-back"></i>Funciones Declaradas</li>
                      <li><i class="bi bi-back"></i>Funciones expresadas</li>
                      <li><i class="bi bi-back"></i>Funciones Flecha o Arrow Functions</li>
                  </ul>
                </div>
              </article>
              <article>
                <h3 id="f_declaradas">Funciones Declaradas</h3>
                <p>Requieren un identificador y son <span class="text-primary"><a href="#">alzables</a></span>. Pueden ser llamadas (invocadas) desde cualquier parte del código.</p>
                <pre class="pre-content-list">

                  <span class="text-warning">nombre</span>();
                  <span class="text-danger">function</span> <span class="text-info">nombre</span>(){
                    <span class="text-danger">console.log</span> "Mi nombre es Jesús"  
                  }    
                </pre>            
              </article>
              <article>
                <h3 id="f_expresadas">Funciones Expresadas</h3>
                <p>Pueden tener nombre o ser <b>anónimas</b>. Lo que se <span class="text-primary"><a href="#">alza</a></span> es la declaración, no la asignación. Sólo pueden ser llamadas después de ser asignadas.</p>
                <pre class="pre-content-list">

                  <span class="text-danger">const</span> <span class="text-info">saludar</span> = <span class="text-warning">function</span>(){
                    <span class="text-danger">console.log</span>("Hola, mi nombre es Jesús");
                  } 

                  <span class="comentario">//invocación</span>
                  <span class="text-info">saludar</span>();    
                </pre>            
              </article>
              <article>
                <h3 id="f_flecha">Funciones Flecha</h3>
                <ul class="listado">
                    <li><i class="bi bi-caret-right-fill"></i>No disponen de contexto propio de <b><em>this</em></b>.</li>
                    <li><i class="bi bi-caret-right-fill"></i>Disponen de <b><em>Retorno implícito</em></b>, delimitadores opcionales. </li>
                    <li><i class="bi bi-caret-right-fill"></i>No se alzan.</li>
                </ul>
                <pre class="pre-content-list">

                  <span class="text-danger">const</span> <span class="text-info">saludo</span> = () <sspan class="text-warning">=></sspan> {
                    <span class="text-danger">console.log</span> ("Hola me llamo Jesús");
                  }
                  <span class="text-comentario">//invocación</span>
                  <span class="text-info">saludo</span>();
                </pre>
                <p class="destacado">En ocasiones en que el contenido de la <em>función flecha</em> es de una sola línea, se podrán <b>omitir</b> los <b>paréntesis</b> que envuelven a los argumentos, <b>las llaves</b> que envuelven el cuerpo de la función y la palabra <b>return</b></p>
                <pre class="pre-content-list">

                  <span class="comentario">//Función que convierte en mayúscula</span>
                  <span class="text-danger">const</span> <span class="text-lila">mayuscula</span> = ( <span class="text-info">nombre</span> ) =>{
                      <span class="text-info">nombre</span> = <span class="text-info">nombre</span>.<span class="text-warning">toUpperCase</span>();
                      return <span class="text-info">nombre</span>;
                  }
                  <span class="text-danger">console.log</span> (<span class="text-lila">mayuscula</span>("jesus"));

                  <span class="comentario">//Forma abreviada</span>
                  <span class="text-danger">const</span> <span class="text-lila">mayuscula</span> = <span class="text-info">nombre</span> => <span class="text-info">nombre</span>.<span class="text-warning">toUpperCase</span>();
                  <span class="text-danger">console.log</span>( <span class="text-lila">mayuscula</span> ("Jesus H."));
                </pre>
                <a class="btn btn-outline-primary mt-3 mb-3" href="../desarrollo/funciones/funciones.html" target="_blank">Resultado</a>
              </article>
            </div>
          </section>
      </div>
  </div>
</div>


<?php include "../../../templates/footer.php";?>

<!--
<section>
  <div class="container-fluid">
    <h2></h2>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
  </div>
</section>
 -->
 

<!--
 <ul class="listado">
  <li><i class="bi bi-back"></i></li>
  <li><i class="bi bi-back"></i></li>
</ul>
 -->

<!--
  <div class="pre-div-name">
    <p class="name_file">📂 introduccion.php</p>
    <pre class="pre-content-list">
      <span class="text-info">&lt;head&gt;</span>
        <span class="text-warning">&lt;noscript&gt;</span>
          Javascript desactivado <span class="text-danger">⚠</span>
        <span class="text-warning">&lt;/noscript&gt;</span>
      <span class="text-info">&lt;/head&gt;</span>
    </pre>
  </div>
 -->

<!-- 
<dl>
  <dt><b><em>defer</em></b></dt>
  <dd>Difiere la carga del documento permitiendo esperar a que se cargue todo el <b><em>DOM</em></b> del  documento html.
  </dd>
</dl>
 -->