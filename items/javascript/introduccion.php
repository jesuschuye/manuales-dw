<section>
  <div class="container-fluid">
    <h2>Conceptos Básicos</h2>
    <!-- la etiqueta script -->
    <article>
      <h3>La etiqueta <strong><em>&lt;script&gt;&lt;/script&gt;</em></strong></h3>
      <div class="row mt-3">        
        <p class="destacado">Se utiliza para incluir código y/o archivos de javascript en un documento <b>html</b>. Existen 3 formas de hacerlo</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Dentro de la etiqueta <b><em>head</em></b></li>
          <pre class="pre-content-list">                        
          <span class="text-info">&lt;head&gt;</span>
            <span class="comentario">//Inclusión externa</span>
            <span class="text-warning">&lt;script</span> src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"<span class="text-warning">&gt;&lt;/script&gt;</span>

            <span class="comentario">//Inclusión Local</span>
            <span class="text-warning">&lt;script</span> src="app.js"<span class="text-warning">&gt;&lt;/script&gt;</span>

            <span class="comentario">//Inclusión Inline</span>
            <span class="text-warning">&lt;script&gt;</span>
                console.log("Hola, mi nombre es Kenny");
            <span class="text-warning">&lt;/script&gt;</span>
          <span class="text-info">&lt;/head&gt;</span>                        
          </pre>                    
          <li><i class="bi bi-back"></i>Antes del cierre de la etiqueta <b><em>/body</em></b></li>
          <pre class="pre-content-list">                        
          <span class="text-info">&lt;body&gt;</span>

            <span class="text-warning">&lt;script</span> src="app.js"<span class="text-warning">&gt;&lt;/script&gt;</span>
          <span class="text-info">&lt;/body&gt;</span>                        
          </pre>
          <p class="destacado"><b><em>Head</em></b> es lo primero que se va a cargar del documento <b>html</b>, asi que si existiera algún archivo javascript que haga referencia a algún elemento del <b>DOM</b> se producirá un error de tipo <b><em>null</em></b></p>
          <li><i class="bi bi-back"></i>Dentro de la etiqueta <b><em>head</em></b> usando el atributo <b>defer</b></li>
          <dl>
            <dt><b><em>defer</em></b></dt>
            <dd>Difiere la carga del documento permitiendo esperar a que se cargue todo el <b><em>DOM</em></b> del  documento html.
            </dd>
          </dl>
          <pre class="pre-content-list">                        
            <span class="text-info">&lt;head&gt;</span>
              <span class="text-warning">&lt;script</span> <span class="text-lila">defer</span> src="app.js"<span class="text-warning">&gt;&lt;/script&gt;</span>
            <span class="text-info">&lt;/head&gt;</span>                  
          </pre>
        </ul>
      </div>
    </article>
    <!-- la etiqueta noscript -->
    <article>
      <h3>La etiqueta <strong><em>&lt;noscript&gt;&lt;/noscript&gt;</em></strong></h3>
      <div class="row mt-3">        
        <p class="destacado">Se utiliza para avisar que el navegador tiene javascript <b>desactivado.</b></p>
        <pre class="pre-content-list">              
          <span class="text-info">&lt;head&gt;</span>
            <span class="text-warning">&lt;noscript&gt;</span>
              Javascript desactivado <span class="text-danger">⚠</span>
            <span class="text-warning">&lt;/noscript&gt;</span>
          <span class="text-info">&lt;/head&gt;</span>
        </pre>        
      </div>
    </article>
    <!-- alzado - hoisting -->
    <article>
      <h3>Alzado (hoisting)</h3>
      <div class="row mt-3">        
        <p class="destacado">Es la secuencia en la que javascript lee e interpreta un documento <b>html</b>.</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Javascript es un lenguaje que utiliza un tipado (tipo de datos) dinámico. Es decir, se puede asignar y reasignar diferentes tipos de datos a una misma variable.</li>
          <li><i class="bi bi-back"></i>Para ello se utilizan 2 fases: la <strong>declaración</strong> y la <strong>inicialización</strong> de variables.
            <pre class="pre-content-list">              
              <span class="comentario">Declaración</span>
              <span class="text-warning">var</span> <span class="text-lila">nombre</span>;

              <span class="comentario">Inicialización</span>
              <span class="text-warning">var</span> <span class="text-lila">nombre</span> = "Erick";

              <span class="comentario">Reasignación</span>
              <span class="text-warning">var</span> <span class="text-lila">nombre</span> = false;
            </pre>        
          </li>
          <li><i class="bi bi-back"></i>Una variable se puede declarar con: <strong>var</strong> y <strong>let</strong>.</li>
          <li><i class="bi bi-back"></i>Una constante se  declara con: <strong>const</strong>.</li>
          <li><i class="bi bi-back"></i>Ambas <b>declaración</b> e <b>inicialización</b> se pueden dar en dos ámbitos o contextos diferentes: <strong>Global</strong> y <strong>Local</strong>.
            <figure>
              <img src="/assets/img/ambitos.jpg" alt="ambitos">
            </figure>
          </li>
          <li><i class="bi bi-back"></i>Cuando sólo se declara ( o crea ) una variables, Javascript le asigna el valor <strong><em>undefined</em></strong>.</li>
          <li><i class="bi bi-back"></i>Cuando Javascript lee un documento lo hace de <b>arriba</b> hacia <b>abajo</b> y alza hacia el inicio de la programación en el siguiente orden:
            <ol>
              <li>La declaración de variables <b>(no la inicializacion).</b>
                <pre class="pre-content-list">  
                <span class="comentario">//Invocación antes de la declaración</span>
                <span class="text-warning">console.log</span>( <span class="text-lila">nombre</span> ); <span class="comentario">//Resultado: Undefined.</span>
                <span class="text-warning">var</span>  <span class="text-lila">nombre</span> = "Kenny";
                <span class="comentario">//Javascript deja de buscar y lo alza</span>

                <span class="comentario">//Invocación después de la declaración.</span>
                <span class="text-warning">var</span> <span class="text-lila">nombre</span> ="Kenny"
                <span class="text-warning">console.log</span>( <span class="text-lila">nombre</span> ); <span class="comentario">//Resultado: Kenny</span>
                <span class="comentario">//Javascript sigue su camino.</span>
                </pre>
              </li>
              <li>Las funciones declaradas.</li>
                <pre class="pre-content-list">              
                <span class="comentario">//Este codigo funcionara correctamente</span>
                  saludar();
                  function saludar(){
                    console.log("hola");
                  }
                </pre>
                <p class="p-list">Esto esplica el porqué se puede invocar una función antes de declararla.</p>                                
              </li>
            </ol>          
            <p>Ejemplo:</p>
              <pre class="pre-content-list">              
                saludar();
                function saludar(){
                  console.log("hola desde la función saludar");
                }

                console.log(nombre);
                var nombre;
                nombre = "Kenny";

                console.log(nombre);

                <span class="comentario">Resultado:</span>
                - hola desde la función saludar
                - undefined
                - Kenny
              </pre>                    
        </ul>
        
      </div>
    </article>
  </div>
</section>

<!-- 
<article>
  <h3></h3>
  <div class="row mt-3">        
    <p class="destacado"></p>
    <pre class="pre-content-list">              
      
    </pre>        
  </div>
</article>
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