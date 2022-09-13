<section>
  <div class="container-fluid">        
    <article>
      <h2>La etiqueta <strong><em>&lt;script&gt;&lt;/script&gt;</em></strong></h2>
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
    <article>
      <h2>La etiqueta <strong><em>&lt;noscript&gt;&lt;/noscript&gt;</em></strong></h2>
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
  </div>
</section>
