<section>
  <div class="container-fluid">
    <h2>Conceptos Básicos</h2>
    <!-- la etiqueta script -->
    <article>
      <h3 id="et_script">La etiqueta <strong><em>&lt;script&gt;&lt;/script&gt;</em></strong></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js">Se utiliza para incluir código y/o archivos de javascript en un documento <b>html</b>. Existen 3 formas de hacerlo</p>
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
            <dt id="defer"><b><em>defer</em></b></dt>
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
      <h3 id="et_noscript">La etiqueta <strong><em>&lt;noscript&gt;&lt;/noscript&gt;</em></strong></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js">Se utiliza para avisar que el navegador tiene javascript <b>desactivado.</b></p>
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
      <h3 id="alzado">Alzado (hoisting)</h3>
      <div class="row mt-3">
        <p class="destacado destacado-js">Es la secuencia en la que javascript lee e interpreta un documento <b>html</b>.</p>
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
          <li><i class="bi bi-back"></i>Cuando sólo se declara ( o crea ) una variable, Javascript le asigna el valor <strong><em>undefined</em></strong>.</li>
          <li><i class="bi bi-back"></i>Cuando Javascript lee un documento lo hace de <b>arriba</b> hacia <b>abajo</b> y alza hacia el inicio de la programación en el siguiente orden:
            <ol>
              <li>La declaración de variables <b>(no la inicializacion).</b>
                <pre class="pre-content-list">

                <span class="comentario">//Invocación antes de la declaración</span>
                <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> ); <span class="comentario">//Resultado: Undefined.</span>
                <span class="comentario">//Javascript deja de buscar y lo alza</span>

                <span class="comentario">//Javascript continua después del alzado</span>
                <span class="text-danger">var</span>  <span class="text-info">nombre</span> = "Kenny";
                <span class="comentario">//Javascript detecta la asignación de un valor a la variable</span>
                <span class="comentario">//<b>nombre</b> deja de tener valor <em>undefined</em> para valer <b>"Kenny"</b></span>

                <span class="comentario">//Invocación después de la declaración - asignación.</span>
                <span class="text-danger">var</span> <span class="text-info">nombre</span> = "Kenny"
                <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> ); <span class="comentario">//Resultado: Kenny</span>
                <span class="comentario">//Javascript sigue su camino.</span>
                </pre>
              </li>
              <li>Las funciones declaradas.</li>
                <pre class="pre-content-list">

                <span class="comentario">//Este codigo funcionara correctamente</span>
                  <span class="text-lila">saludar()</span>;
                  <span class="text-warning">function</span> <span class="text-lila">saludar()</span>{
                    <span class="text-danger">console.log</span>("hola");
                  }
                </pre>
                <p class="p-list">Esto explica el porqué se puede invocar una función antes de declararla.</p>
              </li>
            </ol>
            <p>Ejemplo:</p>
              <pre class="pre-content-list">

                <span class="text-lila">saludar()</span>; <span class="comentario">Invocación</span>
                <span class="text-warning">function</span> <span class="text-lila">saludar()</span>{ <span class="comentario">declaración de la función</span>
                  <span class="text-danger">console.log</span>("hola desde la función saludar");
                }

                <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> );<span class="comentario">//Javascript ignora esta línea de código</span>

                <span class="text-danger">var</span> <span class="text-info">nombre</span>;<span class="comentario">//Javascript realiza el alzado</span>
                <span class="text-info">nombre</span> = "Kenny"; <span class="comentario">//encuentra la asignación</span>

                <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> ); <span class="comentario">//lo imprime en pantalla</span>

                <span class="comentario">Resultado:</span>
                - hola desde la función saludar
                - undefined
                - Kenny
              </pre>
        </ul>
      </div>
    </article>
    <!-- Declaracion con var -->
    <article>
      <h3 id="var">Declaración con <strong>var</strong></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"><b><em>var</em></b> hoy en dia ya no se usa mucho debido a la cuestión de la reasignación de valores a las variables</p>
        <p>Características:</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Es completamente reasignable.
          <li><i class="bi bi-back"></i>Si son declaradas en el ámbito global pueden ser accedidas desde cualquier lugar.
            <pre class="pre-content-list">

                <span class="text-danger">var</span> <span class="text-info">nombre</span> = "Juan";
                <span class="text-danger">function</span> <span class="text-warning">saludar()</span>{
                  <span class="text-danger">console.log</span>("Hola " + <span class="text-info">nombre</span>);
                }
                <span class="text-warning">saludar()</span>; <span class="comentario">//Resultado: "Hola Juan"</span>
            </pre>
          </li>
          <li><i class="bi bi-back"></i>Tiene ámbito de función, es decir, pueden ser accedidas desde la función donde fueron creadas y también de funciones interiores.
            <pre class="pre-content-list">

              <span class="text-danger">var</span> <span class="text-info">nombre</span> = "Juan";
              <span class="text-danger">function</span> <span class="text-warning">saludar()</span>{
                <span class="text-danger">var</span> <span class="text-info">nombre</span> = "Andrés";
                <span class="text-danger">console.log</span>("Hola " + <span class="text-info">nombre</span>);
              }
                <span class="text-warning">saludar()</span>; <span class="comentario">//Resultado: "Hola Andrés"</span>
            </pre>
          </li>
        </ul>
      </div>
    </article>
    <!-- declaración con let -->
    <article>
      <h3 id="let">Declaración con <strong>let</strong></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js">Es lo que está vigente desde 2015 (ES6)</p>
        <p>Características</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Es completamente reasignable dentro de su ámbito.
          <li><i class="bi bi-back"></i>Tienen ámbito de bloque.
            <pre class="pre-content-list">

              {
                <span class="text-danger">let</span> <span class="text-info">nombre</span> = "Andrés";
              }

              <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> ); <span class="comentario">//Error de referencia</span>

            </pre>
          </li>
          <li><i class="bi bi-back"></i>Sólo pueden ser accedidas desde el bloque donde fueron creados y bloques interiores.
            <pre class="pre-content-list">

              {
                <span class="text-danger">let</span> <span class="text-info">nombre</span> = "Andrés";
                {
                  <span class="text-danger">console.log</span>( <span class="text-info">nombre</span> ); <span class="comentario">//Resultado: Andrés</span>
                }
              }
            </pre>
          </li>
          <li><i class="bi bi-back"></i>Bloque es todo aquello que está entre llaves ( &lbrace; &rbrace; ).</li>
          <li><i class="bi bi-back"></i><b>let</b> es muy utilizado en estructuras de control y de flujo(bucles) ya que estos manejan ámbitos de bloque.
          </li>
          <li><i class="bi bi-back"></i><b>let</b> NO genera <b>undefined</b> sino que muestra un mensaje de error más preciso en el que obliga a declarar e inicializarse al mismo tiempo.</li>
          <li><i class="bi bi-back"></i><b>let</b> nunca es <b>alzado</b> por Javascript, al contrario, detiene la ejecución del programa.</li>
          <li><i class="bi bi-back"></i><b>let</b> se aprovecha en la utilización de manejadores de error de javascript como el <b>Try - Catch</b>.</li>
        </ul>
      </div>
    </article>
    <!-- la inmutabilidad -->
    <article>
      <h3 id="inmutabilidad">La inmutabilidad</h3>      
      <div class="row mt-3">
        <p class="destacado destacado-js">JavaScript es un lenguaje muy (quizá demasiado) flexible y ofrece varias opciones para manipular todo tipo de estructura de datos, algunas de estas opciones son <strong>Mutables</strong> y otros <strong>Inmutables</strong>.</p>
        <p>
          Este concepto comenzó  a tener un auge importante en el desarrollo frontend gracias a que la programación funcional comenzó poco a poco a hacerse presente, siendo quizá el culpable la dupla React + Redux.
        </p>
        <p>
          Una de las características más importantes de los lenguajes funcionales es que sus estructuras de datos son inmutables lo que ayuda a reducir la complejidad del software.
        </p>
        <p>Un valor <strong><em>inmutable</em></strong> es algo que no puede ser cambiado.</p>
        <p>Ver el artículo completo de freecodecamp <a href="./src/inmutabilidad-freecodecamp/espanol/news/que-es-inmutabilidad-en-javascript/index.html" target="_blank">aquí</a></p>        
      </div>
    </article>
    <!-- Declaracion con const -->
    <article>
      <h3 id="const">Declaración con <strong>const</strong></h3>
      <div class="row mt-3">
        <p class="muted destacado destacado-js">Se utiliza para almacenar valores constantes (asociados a datos <a href="#" data-bs-toggle="tooltip" data-bs-title="number, string, boolean, undefined, null">primitivos</a>)es decir, que nunca cambiarán durante la ejecución del programa.</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Las variables <b><em>const</em></b> no pueden ser alzadas.
            <pre class="pre-content-list">

              <span class="text-danger">console.log</span>(nombre); <span class="comentario">//Error de accesibilidad</span>
              <span class="text-danger">const</span> <span class="text-info">nombre</span> = "Juan";
            </pre>   
          </li>
        </ul>
        <h4>La inmutabilidad en la variable const</h4>        
        <ul class="listado">
          <li><i class="bi bi-back"></i><b><em>const</em></b> no es completamente inmutable</li>
          <li><i class="bi bi-back"></i><b><em>const</em></b> no acepta la reasignación de valores primitivos.
            <pre class="pre-content-list">

              <span class="text-danger">const</span> <span class="text-info">nombre</span> = "Juan";                
              <span class="text-info">nombre</span> = "Victor" <span class="comentario">//Error</span>
            </pre>    
          </li>
          <li><i class="bi bi-back"></i>Si se pueden <b><em>mutar</em></b> propiedades del valor asociado a la constante (esto se da en el caso de <b>arrays</b> y/o <b>objetos</b>).
            <pre class="pre-content-list">

              <span class="text-danger">const</span> <span class="text-info">persona</span> = <span class="text-warning">{</span>
                nombre : "Juan",
                apellido : "Nuñez"
              <span class="text-warning">}</span>

                <span class="text-info">persona</span>.apellido = "Nuñez Garcia";
                <span class="text-danger">console.log</span>(persona);
            </pre>        
            <p>Resultado:</p>
            <figure><img src="/assets/img/cambio-atributo-const.JPG" alt="cambio-const"></figure>
          </li>
          <li><i class="bi bi-back"></i>Tiene ámbito de bloque</li>
        </ul>
        <pre class="pre-content-list">

          {

            <span class="text-danger">const</span> <span class="text-info">nombre</span> = "Juan";
            {
              <span class="text-danger">console.log</span>(<span class="text-info">nombre</span>)<span class="comentario">//Resultado: Juan</span>    
            }
                        
          }
          
          <span class="text-danger">console.log</span>(<span class="text-info">nombre</span>)<span class="comentario">//error</span>
        </pre>
      </div>
    </article>
    <!-- Tipos de datos -->
    <article>
      <h3 id="datosjs">Tipos de datos en Javascript</h3>
      <div class="row mt-3">
        <p class="destacado destacado-js">Existen 2 tipos de datos en Javascript: <strong>Primitivos</strong> y <strong>Estructurales</strong>.</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Los datos primitivos son controlados por el operador <strong><em>typeof</em></strong>.</li>
          <li><i class="bi bi-back"></i>Los datos estructurales son controlados por el operador <strong><em>instanceof</em></strong></li>
        </ul>        
        <h4>Tipos de Datos Primitivos</h4>
        <dl>
          <dt><b><em>typeof</em></b></dt>
          <dd>Devuelve el tipo de dato de una variable</dd>
        </dl>
        <div class="div-table">
          <table class="table table-striped-columns">
            <thead>
              <tr>              
                <th class="text-center">Nombre</th>
                <th class="text-center">Valores</th>
                <th class="text-center">typeof ===</th>
              </tr>
            </thead>
            <tbody>
              <tr>              
                <td>Undefined</td>
                <td>Existe, pero no tiene valor</td>
                <td>'undefined'</td>
                
              </tr>
              <tr>              
                <td>Boolean</td>
                <td>true, false</td>                
                <td>'boolean'</td>
              </tr>
              <tr>              
                <td>Number</td>
                <td>Number, BigItn</td>
                <td>'number'</td>
              </tr>
              <tr>              
                <td>String</td>
                <td>valores numéricos (indice) que indican la posicion (comienza en 0)<br /> del string dentro de la cadena de caracteres.</td>
                <td>'string'</td>
              </tr>
              <tr>              
                <td>Symbol</td>
                <td></td>
                <td>'symbol'</td>
              </tr>
              <tr>
                <td>Null</td>
                <td>vacío</td>
                <td>'null'</td>
              </tr>
            </tbody>
          </table>
        </div>
        <h4>Tipos de Datos Estructurales</h4>
        <dl>
          <dt><b><em>instanceof</em></b></dt>
          <dd>verifica si un objeto en su cadena de prototipos contiene la propiedad <strong><em>prototype</em></strong> de un constructor</dd>
        </dl>
        <div class="div-table">
          <table class="table table-striped-columns">
            <thead>
              <tr>              
                <th class="text-center">Nombre</th>
                <th class="text-center">Tipo de Objeto</th>
                <th class="text-center">instanceof ===</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Function</td>
                <td>const funcion = new Function</td>
                <td>funcion instanceof Function <span class="comentario">//true</span></td>
                
              </tr>
              <tr>
                <td>Object</td>
                <td>const obj = new Object
                  <br/>const arr = new Array
                  <br/>const map = new Map
                  <br/>const set = new Set
                  <br/>const fecha = new Date
                  <br/>const weakmap = new WeakMap
                  <br/>const weakset = new WeakSet                  
                </td>                
                <td>obj instanceof Object  <span class="comentario">//true</span>
                  <br/>arr instanceof Array  <span class="comentario">//true</span>
                  <br/>map instanceof Map  <span class="comentario">//true</span>
                  <br/>set instanceof Set  <span class="comentario">//true</span>
                  <br/>fecha instanceof Date  <span class="comentario">//true</span>
                  <br/>weakmap instanceof WeakMap  <span class="comentario">//true</span>
                  <br/>weakset instanceof WeakSet  <span class="comentario">//true</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>        
      </div>
    </article>
  </div>
</section>




<!--
<section>
  <div class="container-fluid">
    <h2></h2>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"></p>
        <pre class="pre-content-list">    
    
        </pre>
      </div>
    </article>
    <article>
      <h3></h3>
      <div class="row mt-3">
        <p class="destacado destacado-js"></p>
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
