<section>
  <div class="container-fluid">
    <h2>Fudamentos</h2>
    <!-- Función print() -->
    <article>
      <h3 id="">Función print()</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Sirve para mostrar un resultado en consola</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Si se desea mostrar texto debe ir entre comillas simples o dobles</li>
          <pre class="pre-content-list">

            print("Hola mundo Python")

            print('Hola mundo python')

            print('Hola mundo "Python"')
          </pre>
          
          <li><i class="bi bi-back"></i>Se puede <b><em>concatenar</em></b> cadenas de textos.</li>
          <pre class="pre-content-list">

            print("Hola" + " " + "mundo" + " " + "Python")
          </pre>
          
          <li><i class="bi bi-back"></i><b><em>\n</em></b> Permite que una cadena de texto se pueda escribir en varias líneas.</li>
          <pre class="pre-content-list">            
            print("Esta es una linea \nEsta es una segunda linea")
          </pre>

          <li><i class="bi bi-back"></i><b><em>\t</em></b> Permite aplicar sangría a  una cadena de texto.</li>
          <pre class="pre-content-list">            
            print("\tEsta es una linea con sangría")
          </pre>
        </ul>
      </div>
    </article>
    <!-- funcion input() -->
    <article>      
      <h3>Función input()</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Permite ingresar datos</p>
        <pre class="pre-content-list">    
          print("Nombre: " + input("Ingresa tu nombre: "))
          print("Apellido: " + input("Ingresa tu apellido: "))

          <span class="comentario"># Imprimir en una sola linea</span>
          print("Nombre Completo: "
          + input("Ingresa tu nombre: ")
          + " "
          + input("Ingresa tu apellido: "))
        </pre>

        <p class="destacado destacado-py">El valor de un <b>input</b> puede asignarse a variables</p>
        <pre class="pre-content-list">

          nombre = input("Ingresa tu nombre: ")
          apellido = input("Ingresa tu apellido: ")
        </pre>

        <p class="destacado destacado-py">El valor de un input es <b><em>string</em></b></p>
        <dl>
          <dt><b><em>type()</em></b></dt>
          <dd>Devuelve el tipo de dato de una variable.</dd>
        </dl>
        <pre class="pre-content-list">

          edad = input("ingrese su edad: ")
          print(type(edad))
        </pre>

        <p class="destacado destacado-py">Se pueden concatenar variables</p>
        <pre class="pre-content-list">

          nombre_completo = nombre + " " + apellido

          <span class="comentario"># Imprimir con salto de linea</span>
          print("Nombre completo: " + nombre_completo + "\nEdad: " + edad)
        </pre>
      </div>      
    </article>
    <article>
      <h3>Valores numéricos</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Los valores numéricos pueden ser <strong><em>int</em></strong> y <strong><em>float</em></strong></p>
        <pre class="pre-content-list">      
          numero_01 = 10
          print(numero_01)

          numero_02 = 8+13
          print(numero_02)

          print(numero_02+numero_02)
          <span class="comentario"># Saber que tipo de dato es</span>
          print(type(numero_02)) <span class="comentario"># &lt;class 'int'&gt; </span>

          numero_03 = 5.8
          print(numero_02+numero_03)
          print(type(numero_02+numero_03)) <span class="comentario"># &lt;class 'float'&gt; </span>
        </pre>
      </div>
    </article>
    <!-- Conversion de datos -->
    <article>
      <h3>Conversion de datos</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Los datos pueden ser convertidos y reconvertidos entre si. A este proceso se le llama <em>casting</em></p>
        <pre class="pre-content-list">        
            int(entero) -> str(string)
            str(string) -> int(entero)

            int(entero) -> float(decimales)
            float(decimales) -> int(entero)

            str(string) -> bool(falso o verdadero)
            bool -> str
        </pre>

        <p class="destacado destacado-py">Convertir string a entero</p>

        <pre class="pre-content-list">      
          edad = input("Ingrese su edad: ")
          print(type(edad))

          edad_int = int(edad)
          print(type(edad_int))
          edad_int = edad_int+1
          print(edad_int)
        </pre>

        <p class="destacado destacado-py">Convertir entero a string</p>
        <pre class="pre-content-list">      
          edad_str = str(edad)
          print("Nueva edad: " + edad_str)
        </pre>
      </div>
    </article>
    <article>
      <h3>Cadena Literal: f</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Es un formato de presentación que permite <em>interpolar</em> datos sin la necesidad de realizar conversion de datos</p>
        <pre class="pre-content-list">        
          print(f"Mi edad hoy es {edad} y el proximo año cumplire {edad_int}")    
        </pre>
      </div>
    </article>
    <article>
      <h3>Función .format()</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Permite hacer lo mismo que con cadenas literales con la diferencia que se pueden realizar operaciones.</p>
        <pre class="pre-content-list">        
          x = 10
          y = 15
          print("Mis numeros favoritos son {} y {} y suman {} ".format(x, y, x+y))
        </pre>
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
        <p class="destacado destacado-py"></p>
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
