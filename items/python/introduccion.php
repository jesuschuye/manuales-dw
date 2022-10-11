<section>
  <div class="container-fluid">
    <h2>Fundamentos</h2>
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
    <!-- valores numericos -->
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
    <!-- cadena literal f -->
    <article>
      <h3>Cadena Literal: f</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Es un formato de presentación que permite <em>interpolar</em> datos sin la necesidad de realizar conversion de datos</p>
        <pre class="pre-content-list">        
          print(f"Mi edad hoy es {edad} y el proximo año cumplire {edad_int}")    
        </pre>
      </div>
    </article>
    <!-- funcion .format() -->
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
    <!-- operaciones numericas -->
    <article>
      <h3>Operaciones numéricas</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Como todos los lenguajes python procesa las 4 operaciones fundamentales: suma(+), resta(-), multiplicacion(*), division(/)</p>
        <pre class="pre-content-list">    
          x = 6
          y = 2
          z = 7

          print(f" {x} + {y} es igual a {x + y}")  <span class="comentario"># Res: 8</span>
          print(f" {x} - {y} es igual a {x - y}")  <span class="comentario"># Res: 4</span>
          print(f" {x} x {y} es igual a {x * y}")  <span class="comentario"># Res: 12</span>
          print(f" {x} / {y} es igual a {x / y}")  <span class="comentario"># Res: 3</span>
        </pre>
        <ul class="listado">
          <li><i class="bi bi-back"></i>Division con resultado decimal aproximado al entero anterior
          <pre class="pre-content-list">        
            print(f" {z} / {y} es igual a {z <span class="text-lila">//</span> y}")
          </pre>
          </li>
          <li><i class="bi bi-back"></i>Obtencion del resto o modulo
          <pre class="pre-content-list">        
            print(f" {z} / {y} es igual a {z <span class="text-lila">%</span> y}")
          </pre>
          </li>
          <li><i class="bi bi-back"></i>Calculo de la potencia
          <pre class="pre-content-list">        
            print(f" {x} elevado al {y} es igual a {x <span class="text-lila">**</span> y}")
          </pre>
          </li>
          <li><i class="bi bi-back"></i>Calculo de la raiz cuadrada
          <pre class="pre-content-list">
            print(f" La raiz cuadrada de {x} es igual a {x <span class="text-lila">**</span> 0.5}")
          </pre>
          </li>
        </ul>
      </div>
    </article>
    <!-- redondeos -->
    <article>
      <h3>Redondeo</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py"><strong>round()</strong>: Permite hacer redondeos</p>
        <pre class="pre-content-list">    
          <span class="comentario"># caso 1:</span>
          num1 = <span class="text-lila">round</span>(96.66666666)
          print(num1)  <span class="comentario"># Res: 97</span>
          print(type(num1))  <span class="comentario"># Res: &lt;class 'int'&gt;</span>

          <span class="comentario"># caso 2:</span>
          num2 = 96.666666666
          print(<span class="text-lila">round</span>(num2)) <span class="comentario"># Res: 97</span>
          print(type(num2))  <span class="comentario"># Res: &lt;class 'float'&gt;</span>
        </pre>
        <p class="destacado destacado-py"><strong>round(a, b)</strong>: <b>a</b> puede ser: numero, operacion, variable  |  <b>b</b> es la cantidad de decimales que se desea.</p>
        <pre class="pre-content-list">          
          num_red = round(28.85412354984, 2)
          print(num_red) <span class="comentario">Res: #28.85</span>

          <span class="comentario"># A partir de 0.5 redondea hacia arriba</span>
          num_red = round(28.85<span class="text-warning">5</span>12354984, 2)
          print(num_red) <span class="comentario">Res: #28.86</span>
        </pre>
      </div>
    </article>
    <!-- strings -->
    <article>
      <h3>Strings</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Los strings son cadenas de texto. Cada elemento de la cadena tiene su posición la cual empieza en Cero.</p>
        <ul class="listado">
          <li><i class="bi bi-back"></i>La forma de acceder a cada elemento es especificando su posición numérica entre llaves.
            <pre class="pre-content-list">          
              texto = "Este es un texto de prueba"          

              primer_letra = texto[0]
              print(f"la primera letra del texto es {primer_letra}")
            </pre>
          </li>
          <li><i class="bi bi-back"></i>Es posible obtener la posición de un elemento empezando desde el final de la cadena.</li>
          <pre class="pre-content-list">
            <span class="comentario"># Obtener caracter que ocupa la posicion 5 
              contado desde el final del string</span>
            cualquier_letra = texto[-5]
            print(f"Letra que ocupa la posicion 5 buscada desde el final
            del texto: {cualquier_letra}")
          </pre>
        </ul>
        <h4>El método <strong>index()</strong></h4>
          <ul class="listado">
            <li><i class="bi bi-back"></i>Realiza busquedas de fragmentos de texto y lo hace de izquiera a derecha
            <pre class="pre-content-list">
              indice = texto.index("texto")
              print(f"La palabra \"texto\" empieza en el indice: {indice}")
            </pre>
            </li>
            <li><i class="bi bi-back"></i>En caso de repetirse varias veces el elemnto buscado, <b><em>index</em></b> devolverá sólo la 1era coincidencia.
            <pre class="pre-content-list">
              indice = texto.index("e")
              print(f"La letra \"e\" en su primera aparicion en el texto
              está en la posicion {indice}")
            </pre>
            </li>
            <li><i class="bi bi-back"></i>Las búsquedas son sensibles a letras mayúsculas. Por lo tanto, "texto" es diferente de "TEXTO"</li>
            <li><i class="bi bi-back"></i>Coincidencia no encontrada devolvera mensaje de error: "substring not found" y se terminará la ejecucion del programa</li>
          </ul>
        <h4>index(a, b, c)</h4>
        <ul class="listado">
          <li><i class="bi bi-back"></i><b>a</b>: es lo que se busca</li>
          <li><i class="bi bi-back"></i><b>b</b>: posicion de incio de la busqueda; se incluye en dicha busqueda</li>
          <li><i class="bi bi-back"></i><b>c</b>: posicion final de la busqueda; NO se incluye en la busqueda</li>
        </ul>
        <pre class="pre-content-list">      
          <span class="comentario"># Búsqueda a partir de un índice específico</span>
          indice = texto.index("e", 5)

          <span class="comentario"># Se puede indicar hasta qué posición se hace la busqueda
          # Esta posicion no se incluye</span>
          indice = texto.index("e", 6, 18)
        </pre>
        <h4>El método <strong>rindex()</strong></h4>
        <p class="destacado destacado-py">Básicamente hace lo mismo que <strong>index</strong> pero al revés. Es decir, realiza búsquedas de derecha a izquierda.</p>
        <h4>Substraer caracteres de un String</h4>
        <p class="destacado destacado-py">Es posible formar una nueva cadena de caracteres apartir de la substracción de caracteres de una cadena (string) principal.</p>
        <pre class="pre-content-list">            
          texto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
          <span class="comentario"># Extrae desde el indice 2 hasta el 5. 
          # En el resultado No se incluye el indice 5</span>
          fragmento = texto[2:5]  <span class="comentario">Res: CDE</span>

          <span class="comentario"># Extraer desde el indice 2 hasta el final</span>
          fragmento = texto[2:]  <span class="comentario">Res: CDEFGHIJKLMNOPQRSTUVWXYZ</span>

          <span class="comentario"># Extraer desde el inicio hasta un indice específico</span>
          fragmento = texto[:5]  <span class="comentario">Res: ABCDE</span>

          <span class="comentario"># Extraccion por intervalos</span>
          fragmento = texto[2:10:3]  <span class="comentario">Res: CFI</span>

          <span class="comentario"># Extraccion desde el final hacia adelante en intervalos de 2</span>
          fragmento = texto[::-2]  <span class="comentario">Res: ZXVTRPNLJHFDB</span>
        </pre>
      </div>
    </article>
    <article>
      <h3>Métodos de los strings</h3>
      <div class="row mt-3">
        <p class="destacado destacado-py">Los strings tienen muchos métodos, sin embargo, los más usados son los que se verán a continuación</p>
        <h4><strong>len():</strong></h4>
        <p>Devuelve el tamaño de un string. Se consideran los espacios en blanco.</p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = len(texto) <span class="comentario">Res: 38</span>
        </pre>

        <h4><strong>upper():</strong></h4>
        <p>Convierte a mayúsculas.</p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = texto.upper() <span class="comentario">Res: TEXTO DE PRUEBA PARA MANEJO DE STRINGS</span>
        </pre>

        <h4><strong>lower():</strong></h4>
        <p>Convierte a minúsculas.</p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = texto.lower() <span class="comentario">Res: texto de prueba para manejo de strings</span>
        </pre>

        <h4><strong>split():</strong></h4>
        <p>Separa elementos de un string en listas.</p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = texto.split() <span class="comentario">Res: ['Texto', 'de', 'prueba', 'para', 'manejo', 'de', 'strings']</span>

          <span class="comentario"># Utilizando un parámetro de separación Ej. letra "t"</span>
          res = texto.split("t")  <span class="comentario">Res: ['Tex', 'o de prueba para manejo de s', 'rings']</span>
        </pre>

        <h4><strong>join():</strong></h4>
        <p>Une cadenas en formato de listas. Debe usarse con un tipo de separador. Ej. un esacio en blanco (" "), un guión o una coma.</p>
        <pre class="pre-content-list">          
          a = "Aprender"
          b = "python"
          c = "es"
          d = "genial"
          texto = "Texto de prueba para manejo de strings"

          <span class="comentario"># Usando como separador un espacio en blanco</span>
          res = " ".join([a, b, c, d]) <span class="comentario">Res: Aprender python es genial</span>

          <span class="comentario"># Usando como separador un guion</span>
          res = "-".join([a, b, c, d]) <span class="comentario">Res: Aprender-python-es-genial</span>
        </pre>

        <h4><strong>find():</strong></h4>
        <p>Busca un caracter y devuelve su índice(posición). Si no lo encuentra devuelve <b>-1</b></p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = texto.find("p") <span class="comentario">Res: 9</span>
        </pre>

        <h4><strong>replace():</strong></h4>
        <p>Toma un fragmento de texto y lo reemplaza por otro las veces que sea encontrado. No altera la cadena principal</p>
        <pre class="pre-content-list">    
          texto = "Texto de prueba para manejo de strings"
          res = texto.replace("strings", "cadenas") <span class="comentario">Res: Texto de prueba para manejo de cadenas</span>

          res = texto.replace("s", "x")  <span class="comentario">Res: Texto de prueba para manejo de xtringx</span>

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
