<?php 
    include "./templates_js/header.php";
?>

<div class="content_body">
    <div class="aside">
        <aside class="menu-2">
            <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-5 fw-semibold">Temas</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">Fundamentos</button>
                        <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#fundamentos" class="link-dark rounded">Qué es Javascript</a></li>
                                <li><a href="#var_const" class="link-dark rounded">Variables y constantes</a></li>
                                <li><a href="#dec_var_var" class="link-dark rounded">Declaracion de variables con var</a></li>
                                <li><a href="#dec_var_let" class="link-dark rounded">Declaracion de variables con let</a></li>
                                <li><a href="#dec_const" class="link-dark rounded">Declaracion de constantes</a></li>
                                <li><a href="#asig_datos" class="link-dark rounded">Asignacion de datos</a></li>
                                <li><a href="#op_mat" class="link-dark rounded">Operadores matemáticos</a></li>
                                <li><a href="#op_log" class="link-dark rounded">Operadores lógicos</a></li>
                                <li><a href="#op_inc_dec" class="link-dark rounded">Operadores de incremento y decremento</a></li>                            
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">Tratamiento de los datos</button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#tipos_datos" class="link-dark rounded">Tipos de datos</a></li>
                                <li><a href="#strings" class="link-dark rounded">Strings</a></li>
                                <li><a href="#length" class="link-dark rounded">Propiedad Length</a></li>
                                <li><a href="#concat" class="link-dark rounded">Concatenacion de strings</a></li>
                                <li><a href="#func_strings" class="link-dark rounded">Funciones y métodos de strings</a></li>
                                <li><a href="#func_strings_es6" class="link-dark rounded">Funciones de strings ES6</a></li>
                                <li><a href="#string_a_num" class="link-dark rounded">Convertir string a numero</a></li>
                                <li><a href="#temp_string" class="link-dark rounded">Template string</a></li>
                                <li><a href="#numeros" class="link-dark rounded">Valores Numéricos</a></li>
                                <li><a href="#func_numeros" class="link-dark rounded">Funciones con números</a></li>
                                <li><a href="#objeto-math" class="link-dark rounded">El objeto Math</a></li>
                                <li><a href="#math_metodos" class="link-dark rounded">Métodos del obj Math</a></li>
                                <li><a href="#aum_decrement" class="link-dark rounded">Aumentos y decrementos</a></li>
                                <li><a href="#numer_strings" class="link-dark rounded">Convertir números a strings</a></li>
                                <li><a href="#typeof" class="link-dark rounded">Typeof Tipos de datos</a></li>
                                <li><a href="#op_comparacion" class="link-dark rounded">Operadores de comparación</a></li>
                                <li><a href="#operador-ternario" class="link-dark rounded">Operador Ternario</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">Arrays y objetos</button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#arrays" class="link-dark rounded">Arrays</a></li>
                                <li><a href="#array_prop" class="link-dark rounded">Propiedad length</a></li>
                                <li><a href="#array_met" class="link-dark rounded">Arrays - métodos</a></li>
                                <li><a href="#array_ejemp" class="link-dark rounded">Arrays - Ejemplos</a></li>
                                <li><a href="#const_arrays" class="link-dark rounded">Arrays - constantess</a></li>
                                <li><a href="#" class="link-dark rounded">New</a></li>
                                <li><a href="#" class="link-dark rounded">Processed</a></li>
                                <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                <li><a href="#" class="link-dark rounded">Returned</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                        </button>
                        <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">New...</a></li>
                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                        </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="main" id="main">
        <div id="fundamentos">
            <h1>FUNDAMENTOS DE JAVASCRIPT</h1>
            <h2>¿Qué es JavaScript?</h2>
            <p>
                JavaScript es un lenguaje de programación dinámico que tiene la capacidad de ser utilizado en muchos dispositivos diferentes. Puede usarse en ordenadores personales, servidores web y teléfonos inteligentes. Es un lenguaje interpretado, orientado a objetos, débilmente tipado y dinámico.
            </p>
            <p>
                JavaScript se emplea comúnmente para el desarrollo web front-end y más recientemente para algunos desarrollos back-end a través de frameworks como Node.Js. o Next.Js. Tiene características como la programación orientada a objetos, funciones y herencia basada en prototipos.
            </p>
            <h2>¿Cómo nace Javascript?</h2>
            <p>
                Nace con la necesidad de generar dinamismo en las páginas web y que a su vez los usuarios y las empresas pudieran interactuar unos con otros. Fue creado por Brendan Eich en 1995 y se convirtió en un estándar oficial del World Wide Web Consortium (W3C) en 1997.
            </p>
            <h2>¿Por qué decimos que Javascript es un lenguaje dinámico?</h2>
            <p>        
                Corre directamente en la etapa de Runtime, sin una etapa de compilación previa. Esto permite probar nuestro código inmediatamente; pero también es lo que hace que los errores no se muestren sino hasta que se ejecuta el programa. Lo que se ve a primera vista, cuando se analiza el código, es muy probable que no sea lo que se va a obtener cuando el programa se ejecute.
            </p>
            <p>
                JavaScript permite declarar (por ejemplo) variables cuyo valor (y tipo) solo se conocerá al momento de su ejecución en función de las condiciones dadas al momento de correrlo en un entorno real. En cambio, los lenguajes estáticos no compilarán en código ejecutable a menos que todos los valores (o tipos de valores) se conozcan por adelantado.
            </p>
            <h2>¿Por qué es débilmente tipado?</h2>
            <p>
                Porque los tipos de datos no están bien definidos en el lenguaje y permite, por ejemplo, operaciones entre numerosos y letras. Esto sucede porque el lenguaje asume tipos de datos que no necesariamente fueron los que se querían representar. Se pueden hacer operaciones entre tipos distintos de datos (enteros con strings, booleanos con enteros, etc.). Ejemplo:
            </p>
            <p>
                ¿Realmente es Javascript un lenguaje interpretado?
                Sí, y la razón es que el navegador lee línea por línea nuestro código, el cual le indica lo que tiene que ir haciendo, sin la necesidad de compilar. Todo esto es controlado por el motor de Javascript V8 del navegador
            </p>
            <p>
                Qué significa que Javascript es Backwards Compatible
                Todas las funciones nuevas que salen para Javascript no dañarán el trabajo ya hecho previamente, pero no se podrá utilizar en nuestro entorno de trabajo inmediatamente. Para solucionar esto está Babel, que permite usar las nuevas características del lenguaje, pero lo transforma a una versión que el navegador pueda entender.
            </p>
        </div>
        <div id="var_const">
            <!--Variables y constantes-->
            <section>
                <!--Creando variables con var-->
                <article>
                    <h2>Variables y Constantes en Javascript</h2>
                    <h3 id="dec_var_var">Declaracion de variables con var</h3>
                    <ul>
                        <li>No puede empezar con número</li>
                        <li>No puede empezar con caracteres especiales</li>
                        <li>Tiene un alcance global lo que puede ocasionar errores si se declaran nombres repetidos</li>
                        <li>Casi está en desuso</li>
                    </ul>
                    <pre class="px-5 py-0 bg-black border rounded mipre"><code class="mipre">
                        <span class="text-danger">var</span> <span class="text-warning">nombre</span>='Jesus', apellido='Chuye';
                        <span class="text-danger">var</span> <span class="text-warning">nombre</span>='Kenny', apellido='Chuye Duque';//puede asignársele otro valor
                        <span class="text-danger">var</span> <span class="text-warning">nombreCompleto</span> = nombre + " " + apellido;
                    
                    </code></pre>
                </article>
                <!--Creando variables con let-->
                <article>
                    <h3 id="dec_var_let">Declaración de Variables con let</h3>
                    <p><span class="text-warning">let</span> no permite la redeclaración de una variable.</p>            
                    <pre class="hljs"><code>
                    <span class="hljs-keyword">let</span> string;
                    <span class="hljs-keyword">let</span> number;
                    </code></pre>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">let</span> <span class="text-warning">curso</span>='Javascript';
                            <span class="text-danger">let</span> <span class="text-warning">curso</span>='PHP'; //esto arrojará error                   
                        </code>
                    </pre>
                    <p>Si permite la reasignación de un valor.</p>
                        <pre class="px-5 py-0 bg-black border rounded mipre">
                                <code class="mipre">
                                    <span class="text-danger">let</span> <span class="text-warning">curso</span>='Javascript';
                                    <span class="text-warning">curso</span>='PHP'; //esto NO arrojará error                   
                                </code>
                        </pre>
                        <p>Si permite la declaración inicial en blanco o vacio para la posterior asignación de un valor.</p>
                        <pre class="px-5 py-0 bg-black border rounded mipre">
                                <code class="mipre">
                                    <span class="text-danger">let</span> <span class="text-warning">curso</span>=' ';
                                    <span class="text-warning">curso</span>='PHP'; 
                                </code>
                        </pre>
                        <p class="bg-warning text-dark p-2 border rounded">En conclusión se puede usar <span>let</span> cuando posteriormente se piensa reasignar un valor.</p>
                </article>
                <!--Declaracion de constantes-->
                <article>
                    <h3 id="dec_const">Declaración de constantes</h3>
                    <pre class="hljs"><code><div>    <span class="hljs-keyword">const</span> Pi;
                    </div></code></pre>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">const</span> <span class="text-warning">pi</span>='3.1416';
                            <span class="text-danger">const</span> <span class="text-warning">igv</span>=18; 
                        </code>
                    </pre>
                    <p>No permite la reasignación de un valor</p>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">const</span> <span class="text-warning">curso</span>='Javascript';
                            <span class="text-warning">curso</span>='PHP'; //esto arrojará error.
                        </code>
                    </pre>
                    <p>No permite la inicialización en blanco para la posterior asignación de un valor.</p>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">const</span> <span class="text-warning">curso</span>=' ';
                            <span class="text-warning">curso</span>='PHP'; //esto arrojará error.
                        </code>
                    </pre>            
                    <p class="bg-warning text-dark p-2 border rounded p_destacado">En conclusión se puede usar <span>const</span>
                        cuando el valor no se piensa cambiar NUNCA.</p>
                </article>
                <!-- Asignacion de datos -->
                <article>
                    <h3 id="asig_datos">Asignación de datos a una variable y/o constante
                        </h3>
                        <pre class="hljs"><code><div>
                            <span class="hljs-keyword">let</span> numero = <span class="hljs-number">-4</span>;
                    
                            <span class="hljs-keyword">let</span> palabra = <span class="hljs-string">"Hola Mundo"</span>;
                            
                            <span class="hljs-keyword">let</span> respuesta = <span class="hljs-literal">false</span>;
                            
                            <span class="hljs-keyword">const</span> pi = <span class="hljs-number">3.14</span>;
                            
                            <span class="hljs-comment">//Reasignación de valor a una variable</span>
                        
                            numero = <span class="hljs-number">54</span>;
                            
                            palabra = <span class="hljs-string">'Adios'</span>;
                    
                        </div></code></pre>
                </article>
            </section>
            <!-- Operadores -->
            <section>
                <!-- Operadores Matematicos -->
                <article>
                    <h3 id="op_mat">Operadores Matemáticos</h3>
                    <pre class="hljs"><code><div>
                        <span class="hljs-comment">//Suma</span>
                        a+b;
                    
                        <span class="hljs-comment">//Resta</span>
                        a-b;
                    
                        <span class="hljs-comment">//Multiplicación</span>
                        a*b;
                    
                        <span class="hljs-comment">//División</span>
                        a/b;
                    
                        <span class="hljs-comment">//Resto</span>
                        a%b;
                    </div></code></pre>
                </article>
                <!-- operadores logicos -->
                <article>
                    <h3 id="op_log">Operadores Lógicos</h3>
                    <ul>
                        <li>and &amp;&amp;</li>
                        <li>ó ||</li>
                    </ul>
                </article>
                <!-- operadores de incremento y decremento -->
                <article>
                    <h3 id="op_inc_dec">Operadores de Incremento Decremento</h3>
                        <pre class="hljs"><code><div>
                            <span class="hljs-comment">//Post-incremento</span>
                            a++
                            
                            <span class="hljs-comment">//Pre-incremento</span>
                            ++a
                            
                            <span class="hljs-comment">//Post-decremento</span>
                            a--
                            
                            <span class="hljs-comment">//Pre-decremento</span>
                            --a
                        </div></code></pre>
                </article>
            </section>
            <!-- Tipos de datos -->
            <section>
                <!-- Todos los tipos de datos -->
                <article id="trat_info">
                    <h2 id="tipos_datos">Tipos de datos</h2>
                    <ul>
                        <li>string</li>
                        <li>number</li>
                        <li>boolean</li>
                        <li>undefined</li>
                        <li>null</li>
                        <li>symbol</li>
                    </ul>

                    <h2 id="strings">Strings</h2>
                    <!-- length -->
                    <h3 id="length">Propiedades</h3>
                    <p><strong>length</strong> : Devuelve la longitud de la cadena</p>
                    <pre class="hljs"><code><div>
                    <span class="hljs-keyword">let</span> cadena = <span class="hljs-string">"Hola Mundo"</span>;
                    <span class="hljs-built_in">console</span>.log(cadena.length);
                    </div></code></pre>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">let</span> <span class="text-warning">bienvenida</span>='Bienvenido al curso de';
                            <span class="text-danger">let</span> <span class="text-warning">tecnologia</span>='Javascript ';
                            
                            <span class="text-warning h6">.length</span>
                            <span class="text-info">console.log</span><span class="text-warning">(</span>tecnologia<span class="text-warning">.length</span><span class="text-warning">)</span>;//mostrará 10 que es la cantidad de caracteres de la palabra Javascript

                    </code></pre>
                    <!-- Concatenación de strings -->
                    <h3 id="concat" class="p-2 mt-2 backg">Concatenación de strings</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">let</span> <span class="text-warning">bienvenida</span>='Bienvenido al curso de';
                            <span class="text-danger">let</span> <span class="text-warning">tecnologia</span>='Javascript ';
                            
                            //concatenación tradicional
                            <span class="text-info">console.log</span><span class="text-danger"><span class="text-warning">(</span>bienvenida + " " + tecnologia<span class="text-warning">)</span>;</span>
        
                            //concatenación moderna usando ES6
                            <span class="text-info">console.log</span><span class="text-danger"><span class="text-warning">(</span>`${bienvenida} ${tecnologia}`<span class="text-warning">)</span>;</span>
                        </code>
                    </pre>
                    <!-- Funciones y métodos de strings -->
                    <h3 id="func_strings" class="p-2 mt-2 backg">Funciones y métodos de strings</h3>
                    <pre class="px-5 py-0 bg-black rounded mipre">
                        <code class="mipre">
                        <span class="text-warning h6">.concat&#40&#41</span>: Concatena o une 2 bloques de texto.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>tecnologia<span class="text-warning">.concat</span>(' ', 'Es genial')<span class="text-warning">)</span>;
        
                            <span class="text-warning h6">.toUpperCase&#40&#41</span>: Mostrará todo en mayúsculas.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>tecnologia<span
                                class="text-warning">.toUpperCase()</span><span class="text-warning">)</span>;
                            
                            <span class="text-warning h6">.toLowerCase&#40&#41</span>:  Mostrará todo en minúsculas.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>tecnologia<span
                                class="text-warning">.toLowerCase()</span><span class="text-warning">)</span>;
                            
                                <span class="text-warning h6">.indexOf&#40&#41</span>: Devuelve la posición (indice) en la que se encuentra el string, si no lo encuentra devuelve -1. Devuelve la primera coincidencia. El índice empieza en Cero. Los espacios en blanco si se cuentan. 
                                
                            <span class="text-danger">let</span> <span class="text-warning">mensaje</span>='Aprendiendo Javascript, CSS, HTML para ser frontend';
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.indexOf</span>("Javascript")<span class="text-warning">)</span>;
                            
                            Cuando la cadena a buscar no existe se retorna el valor -1.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.indexOf</span>('PHP')<span class="text-warning">)</span>;
                            
                            <span class="text-warning h6">.substr&#40indice_inicial, cant_caracteres_a _substraer&#41</span>: Devuelve una cadena substraida de otra cadena.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.substr</span>(0, 11)<span class="text-warning">)</span>; //devolverá 'Aprendiendo'
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.substr</span>(3, 11)<span class="text-warning">)</span>; //devolverá 'endiendo'
                            
                            <span class="text-warning h6">.slice&#40&#41</span>: Parecido a <span class="text-warning">substr</span> con la diferencia que acepta valores negativos.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.slice</span>(-3)<span class="text-warning">)</span>; //devolverá 'end'
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.slice</span>(-30)<span class="text-warning">)</span>; //devolverá 't, CSS, HTML para ser frontend'
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.slice</span>(3, 11)<span class="text-warning">)</span>;//devolverá 'endiendo'
                            
                            <span class="text-warning h6">.split&#40&#41</span>: Busca lo que se le pase como parámetro y lo toma como divisor. Devuelve un array.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.split</span>(' ')<span class="text-warning">)</span>;
                                //devolverá un array de palabras: (7) ["Aprendiendo", "Javascript,", "CSS,", "HTML", "para", "ser", "frontend"]
                            
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.split</span>(' , ')<span class="text-warning">)</span>;
                                //devolverá un array de 3 bloques de palabras: (3) ["Aprendiendo Javascript", "CSS", "HTML para ser frontend"]
                            
                            <span class="text-warning h6">.replace()</span>: Reemplaza una cadena por otra.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.replace</span>('CSS','PHP')<span class="text-warning">)</span>;
                                //devolverá "Aprendiendo Javascript, PHP, HTML para ser frontend"
                    </code></pre>
                    <p><strong>trim()</strong> : Elimina los espacios al inicio y al final de la cadena</p>
                        <pre class="hljs"><code><div>           <span class="hljs-keyword">let</span> cadena2 = <span class="hljs-string">'Hola youtube, estamos trabajando con cadenas';</span>        
                    <span class="hljs-built_in">console</span>.log(cadena2.trim());
                    </div></code></pre>
                </article>
                <article>
                    <!-- Funciones de strings o cadenas con ES6-->
                    <h3 id="func_strings_es6" class="p-2 mt-2 backg">Funciones de strings ES6</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-warning h6">.startsWith&#40"String_a_buscar"&#41</span>: Busca al inicio del string y devuelve un valor booleano si encuentra o no dicho string.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.startsWith</span>&#40"Java"&#41<span class="text-warning">)</span> ;
                            
                            <span>También acepta la ubicación desde donde se desea empezar a buscar.</span>
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.startsWith</span>&#40"Java", 6&#41<span class="text-warning">)</span> ;

                            <span class="text-warning h6">.endsWith&#40"String_a_buscar"&#41</span>: Busca al final del string y devuelve un
                            valor booleano si encuentra o no dicho string.

                            <span class="text-warning h6">.includes&#40&#41</span>: Devuelve un valor booleano dependiendo si encuentra o no el
                            valor de la cadena que se le pase. A diferencia de Indexof que devuelve un valor numerico.
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.includes</span>('CSS')<span class="text-warning">)</span>;
                            //devolverá true
                            
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje<span
                                class="text-warning">.includes</span>('PHP')<span class="text-warning">)</span>;
                            //devolverá false
                            
                            <span class="text-warning h6">.repeat()</span>: Devolverá en forma repetida la cantidad de veces que se le pase como
                            parámetro
                            <span class="text-info">console.log</span><span class="text-warning">(</span>mensaje.substring(0, 11)<span
                                class="text-warning">.repeat</span>(10)<span class="text-warning">)</span>; //devolverá
                            'AprendiendoAprendiendoAprendiendoAprendiendoAprendiendoAprendiendoAprendiendoAprendiendoAprendiendoAprendiendo'
                        </code>
                    </pre>
                    <!-- Convertir string a número -->
                    <h3 id="string_a_num" class="p-2 mt-2 backg">Convertir string a número</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-info">const</span> <span class="text-warning">num1</span>='50', <span class="text-warning">num2</span>=10 <span class="text-warning">num3</span>='tres';
        
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num1</span> + <span class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá 5010
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num1</span> - <span class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá 40
        
                            //Number() => convierte un string en número
        
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-success">Number</span>(<span class="text-warning">num1</span>) + <span class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá 60
                            
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">Number</span>(<span class="text-warning">num3</span>)<span class="text-danger">)</span>; // devolverá NaN (no es un número)
                            
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">Number</span>(<span class="text-warning">true</span>)<span class="text-danger">)</span>; //devolverá 1
        
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">Number</span>(<span class="text-warning">false</span>)<span class="text-danger">)</span>;//devolverá 0
                            
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">Number</span>(<span class="text-warning">null</span>)<span class="text-danger">)</span>;//devolverá 0
                            
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">Number</span>(<span class="text-warning">undefined</span>)<span
                                class="text-danger">)</span>;//devolverá NaN
        
                            //parseInt() también convierte un string en número
        
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">parseInt</span>(<span class="text-warning">num1</span>) + <span
                                class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá 60
        
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">parseInt</span>(<span class="text-warning">'100.203'</span>); // devolverá 100 como número
                            
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-success">parseFloat</span>(<span class="text-warning">'100.203'</span>); // devolverá 100.203 como número.
                            
                            // toFixed()
        
                            <span class="text-info">const</span> <span class="text-warning">dato</span>=18929173;
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-warning">dato.</span><span class="text-warning">toFixed</span>()<span class="text-danger">)</span>; // devolverá 18929174.
                            
                            <span class="text-info">const</span> <span class="text-warning">dato</span>=18929173.9812912871371193899;
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span
                                class="text-warning">dato.</span><span class="text-warning">toFixed</span>()<span class="text-danger">)</span>; // devolverá 18929174.
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">dato.</span><span class="text-warning">toFixed</span>(3)<span class="text-danger">)</span>; // devolverá 18929173.981
                        </code>
                    </pre>
                    <!-- ES6: String Template -->
                    <h3 id="temp_string" class=" p-2 mt-2 backg">Template String - ES6</h3>
                    <p class="h5">Un template string siempre devuelve en su primera posicion un string vacio</p>
                    <p>Formateo con template string para visualización en una página Web (DOM - HTML)</p>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-info">const</span> <span class="text-warning">producto1</span> = 'Pizza',
                            <span class="text-warning">precio1</span> = 30,
                            <span class="text-warning">producto2</span> = 'Hamburguesa',
                            <span class="text-warning">precio2</span> = 40;
                        </code>
                    </pre>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">                
                            <span class="text-info">let</span> <span class="text-warning">html</span> = `
                                &lt;ul&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Orden: <span class="text-danger">${producto1}</span>&lt;/li&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Precio: <span class="text-danger">${precio1}</span>&lt;/li&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Orden: <span class="text-danger">${producto2}</span>&lt;/li&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Precio: <span class="text-danger">${precio2}</span>&lt;/li&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;Total: <span class="text-danger">${ <span class="text-warning">total</span>(precio1,precio2) }</span>&lt;/li&gt;
                                &lt;/ul&gt; `;
        
                                <span class="text-info">function</span> <span class="text-warning">total</span>( <span class="text-danger">precio1, precio2</span> ){
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">return</span> <span class="text-danger">precio1 + precio2</span>;
                                }
                        </code>
                    </pre>
                    <p>Template string permite crear tags (etiquetas) mediante funciones:</p>          
                    <pre class="px-5 py-0 bg-black border rounded mipre">

                        Nota.- Una función vacía devuelve "undefined"
                        <code class="mipre">
                            <span class="text-info">function</span> <span class="text-danger">etiqueta</span>&#40&#41&#123;
                            &#125
                            
                            <span class="text-danger">console.log</span>(<span class="text-warning">etiqueta</span>);
                        </code>                        
                    </pre>
                </article>
                <article>
                <!-- Valores numéricos en Javascript -->
                <article>
                    <h2 id="numeros" class="p-2 mt-2 backg">Valores numéricos en Javascrip</h2>
                    <!-- Valores numéricos -->
                    <h3 class="p-2 mt-2 backg">Valores numéricos</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">const</span> <span class="text-warning">numero1</span>=300, <span class="text-warning">numero2</span>=200, <span class="text-warning">numero3</span>=500;
                            <span class="text-info">console.log</span><span class="text-danger"><span class="text-warning">(</span>numero1 + numero2 + numero3<span class="text-warning">)</span>;</span> // Retornará 1000.
        
                            //También
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span class="text-warning">(</span><span class="text-danger">numero1 + numero2 + numero3</span><span class="text-warning">)</span>;
                            <span class="text-info">console.log</span><span class="text-warning"><span class="text-warning">(</span>resultado<span class="text-warning">)</span>;</span> // Retornará la SUMA = 1000.
        
                            //RESTA
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-warning">(</span><span class="text-danger">numero3 - numero2</span><span
                                class="text-warning">)</span>;
                            
                            //MULTIPLICACION
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-warning">(</span><span class="text-danger">numero1 * numero2</span><span class="text-warning">)</span>;
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-warning">(</span><span class="text-danger">numero1 * 5</span><span class="text-warning">)</span>;
                            
                            //DIVISION
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-warning">(</span><span class="text-danger">numero1 / numero2</span><span class="text-warning">)</span>;
                            
                            //RESTO
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-warning">(</span><span class="text-danger">numero1 % numero2</span><span class="text-warning">)</span>;
                        </code>
                    </pre>
                    <!-- Funciones con números -->
                    <h3 id="func_numeros" class="p-2 mt-2 backg">Funciones con números</h3>
                    <pre class="px-5 py-0 bg-black rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span class="text-info">Math.PI</span> // Retornará 3.141592653589793
        
                            //Redondeos: .round()
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span class="text-info">Math.round(2.5)</span> // Retornará => 3
        
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.round(4.4)</span> // Retornará => 4
                            
                            //Redondea hacia arriba
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.ceil(2.1)</span> // Retornará => 3
                            
                            //Redondea hacia abajo
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.floor(2.7)</span> // Retornará => 2
                            
                            //Devuelve la raiz cuadrada
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.sqrt(144)</span> // Retornará => 12
                            
                            //Devuelve el valor absoluto
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.abs(-2.7)</span> // Retornará => 2.7 
                            
                            //Devuelve la potencia
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.pow(5,3)</span> // Retornará => 125
                            
                            //Devuelve el número mínimo
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.min(15,30,5)</span> // Retornará => 5
                            
                            //Devuelve el número máximo
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.max(15,30,5)</span> // Retornará => 30
                            
                            //Devuelve un valor aleatorio
                            <span class="text-danger">let</span> <span class="text-warning">resultado</span>=<span
                                class="text-info">Math.random()</span>
                        </code>
                    </pre>
                    <h3 id="objeto-math">Objeto Math</h3>
                    <p>Para uso de operaciones matemáticas más específicas.
                        Es un objeto estático. Por tanto se tiene que usar su nombre para utilizarlo.</p>
                    <h3 id="propiedades">Propiedades</h3>
                    <p>Math.E - Math.PI</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.E);
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.PI);
                    </div></code></pre>
                    
                    <h3 id="math_metodos">Métodos</h3>
                    <ul>
                        <li><strong>Math.abs(x)</strong> : Devuelve el valor absoluto de x</li>
                        <li><strong>Math.ceil(x)</strong> : Devuelve el entero más grande mayor o igual que un número.</li>
                        <li><strong>Math.floor(x)</strong> : Devuelve el entero más pequeño menor o igual que un número.</li>
                        <li><strong>Math.pow(x, y)</strong> : Devuelve la potencia de x elevado a y</li>
                        <li><strong>Math.sqrt(x)</strong> : Devuelve la raiz cuadrada de x</li>
                        <li><strong>Math.random()</strong> : Genera un número pseudoaleatorio entre 0 y 1</li>
                        <li><strong>Math.round(x)</strong> : Devuelve el valor de un número redondeado al entero más cercano.
                        </li>
                        <li><strong>Math.sign(x)</strong> : Devuelve el signo de la x, que indica si x es positivo, negativo o
                            cero.</li>
                    </ul>
                    <pre class="hljs"><code><div>
                    <span class="hljs-keyword">let</span> num = <span class="hljs-number">5.9</span>;
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.abs(num));
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.ceil(num));
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.floor(num));
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.pow(<span class="hljs-number">3</span>,<span class="hljs-number">3</span>));
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.round(<span class="hljs-built_in">Math</span>.random()*<span class="hljs-number">100</span>));
                    
                    <span class="hljs-comment">//console.log(Math.random() * (max - min)+min);</span>
                    
                    =====================================================
                    <span class="hljs-comment">//Generar correctamente numeros enteros aleatorios</span>
                    <span class="hljs-comment">//entre 50 y 100:</span>
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.round(<span class="hljs-built_in">Math</span>.random() * (<span class="hljs-number">100</span> - <span class="hljs-number">50</span>)+<span class="hljs-number">50</span>));
                    =====================================================
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.sign(<span class="hljs-number">0</span>)); <span class="hljs-comment">// -1 | 0 | 1</span>
                    
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Math</span>.sqrt(<span class="hljs-number">2</span>));
                    </div></code></pre>
                    <!-- Aumentos y Decrementos de valores numéricos -->
                    <h3 id="aum_decrement" class="p-2 mt-2 backg">Aumentos y decrementos de valores numéricos</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">let</span> <span class="text-warning">puntaje</span>=<span class="text-info">10</span>
                            ++<span class="text-warning">puntaje</span> //Retornará 11
        
                            <span class="text-danger">let</span> <span class="text-warning">puntaje</span>=<span class="text-info">10</span>
                            <span class="text-warning">puntaje</span>++ //Retornará 10 pero internamente ya valdrá 11
        
                            <span class="text-danger">let</span> <span class="text-warning">puntaje</span>=<span class="text-info">10</span>
                            --<span class="text-warning">puntaje</span> //Retornará 9
                            
                            <span class="text-danger">let</span> <span class="text-warning">puntaje</span>=<span class="text-info">10</span>
                            <span class="text-warning">puntaje</span>-- //Retornará 10 pero internamente ya valdrá 9
                            
                            <span class="text-danger">let</span> <span class="text-warning">puntaje</span>=<span class="text-info">10</span>
                            <span class="text-warning">puntaje</span>+=5 //Retornará 15
                        </code>
                    </pre>
                    <!-- Convertir número a string -->
                    <h3 id="numer_strings" class="p-2 mt-2 backg">Convertir número a string</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-info">let</span> <span class="text-warning">cp</span> = 32950;
                            <span class="text-info">cp</span> = <span class="text-warning">String</span><span class="text-danger">(</span><span class="text-info">cp</span><span class="text-danger">)</span>=32950;
                            console.log(<span class="text-warning">typeof</span> <span class="text-info">cp</span>); //devolverá: string
        
                            //También se puede convertir un array en cadena
                            <span class="text-info">dato</span> = <span class="text-warning">String</span>(<span class="text-danger">[1,2,3]</span>); // Devolerá 1,2,3
        
                            // toString()
                            <span class="text-warning">dato</span> = 20;
                            <span class="text-warning">dato</span> = <span class="text-warning">dato</span>.<span class="text-info">toString()</span>;
                            console.log(<span class="text-warning">dato</span>); // devolverá 20 pero como cadena
                        </code>
                    </pre>
                </article>
                <!-- Tipos de datos -->
                <article>
                    <h3 id="typeof" class="p-2 mt-2 backg">Typeof Tipos de datos</h3>
                    <p class="bg-warning text-dark p-2 border rounded p_destacado">Para saber el tipo de dato que almacena una variable se utiliza <span class="text-primary lead"><b>typeof</b></span></p>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-info">console.log</span><span class="text-warning">(</span>typeof <span
                            class="text-warning">valor</span><span class="text-warning">)</span>;
                        </code>
                    </pre>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            // DATOS PRIMITIVOS
                            <span class="text-danger">let</span> <span class="text-warning">valor</span>;
                            <span class="text-warning">valor</span>= <span class="text-info">'cadena de texto'</span>; //valor => string
                            <span class="text-warning">valor</span> = <span class="text-info">20</span>; //valor => numérico
                            <span class="text-warning">valor</span> = <span class="text-info">true</span>; //valor => booleano
                            <span class="text-warning">valor</span> = <span class="text-info">null</span>; //valor => nulo
                            <span class="text-warning">valor</span> = <span class="text-info">undefined</span>; //valor => no definido
                            <span class="text-warning">valor</span> = <span class="text-info">Symbol</span><span class="text-danger">(</span>'Simbolo'<span class="text-danger">)</span>;
        
                            //DATOS DE REFERENCIA
        
                            //Arrays
                            <span class="text-warning">valor</span> = <span class="text-info">[1,2,3,4]</span>;
        
                            //Objetos
                            <span class="text-warning">valor</span> = <span class="text-info">{
                                nombre:'Juan',
                                profesion:'Desarrollador web'
                            }</span>; //valor => objeto
        
                            //Fechas
                            <span class="text-warning">valor</span> = <span class="text-info">new</span> <span class="text-danger">Date()</span>
                        </code>
                    </pre>                    
                </article>
                <!-- Operadores de comparación -->
                <article>
                    <h3 id="op_comparacion">Operadores de comparación</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-info">const</span> <span class="text-warning">num1</span>=10, <span class="text-warning">num2</span>=20 <span class="text-warning">num3</span>='20';
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num1</span> > <span class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá false
        
                            // == => comparador no estricto
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num2</span> == <span class="text-warning">num3</span><span class="text-danger">)</span>; // devolverá true
        
                            // === => comparador estricto
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num2</span> === <span class="text-warning">num3</span><span class="text-danger">)</span>; // devolverá false
        
                            // != => comparador "es diferente de"
                            <span class="text-info">console.log</span><span class="text-danger">(</span><span class="text-warning">num1</span> != <span class="text-warning">num2</span><span class="text-danger">)</span>; // devolverá true
                        </code>
                    </pre>
                </article>
                <!-- ORDENAR DESDE AQUI -->
                <article>
                    <h3 id="operador-ternario">Operador ternario</h3>
                        <pre class="hljs"><code><div>(condición) ? <span class="hljs-literal">true</span> : <span class="hljs-literal">false</span>
                    
                    (condición) ?
                        (primera sentencia,
                        segunda sentencia)
                        :
                        (primera sentencia,
                        segunda sentencia)
                    </div></code></pre>
                </article>
            </section>
            <!-- Arrays -->
            <section>
                <article>
                    <h2 id="arrays">Arrays</h2>
                    <ul>
                        <li>Son estructuras que nos permiten almacenar varios datos y agruparlos.</li>
                        <li>Se pueden llenar con cualquier tipo de dato válido en JavaScript y deben ir separados por comas</li>
                        <li>Se pueden mezclar tipos de datos, pero no es recomendable.</li>
                        <li>Se declaran con llaves cuadradas o corchetes []</li>
                        <li>Pueden declararse vacíos o con un contenido ya establecido</li>
                        <li>Pueden añadirse o eliminarse elementos en el momento que queramos</li>
                    </ul>
                    <pre class="hljs"><code><div>    <span class="hljs-keyword">let</span> array = [ ] <span class="hljs-comment">//Array vacío</span>
    <span class="hljs-keyword">let</span> numeros = [<span class="hljs-number">1</span>,<span class="hljs-number">2</span>,<span class="hljs-number">3</span>,<span class="hljs-number">4</span>,<span class="hljs-number">5</span>] <span class="hljs-comment">//Array con contenido inicial</span>
    </div></code></pre>
                        <pre class="hljs"><code><div>
    <span class="hljs-keyword">let</span> numbers = [<span class="hljs-number">1</span>,<span class="hljs-number">2</span>,<span class="hljs-number">3</span>,<span class="hljs-number">4</span>,<span class="hljs-number">5</span>,<span class="hljs-number">1</span>];
                    </div></code></pre>

                    <h3 id="array_prop">Propiedad length</h3>
                    <p><strong>.length</strong> : devuelve el número de posiciones que contiene el array</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(numbers.length);
                    </div></code></pre>
            
                    <h3 id="array_met">Arrays y sus métodos</h3>
                    <p><strong>Array.isArray(variable a evaluar)</strong> : Devuelve true si la variable es un array.</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(<span class="hljs-built_in">Array</span>.isArray(numbers));
                    </div></code></pre>
            
                    <p id="push"><strong>push(element1, element2,...)</strong> : Añade uno o más elementos al final del array y devuelve la nueva longitud.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
                    <span class="hljs-keyword">let</span> diasSemanaCompleta = diasLaborables.push(<span class="hljs-string">'sabado'</span>, <span class="hljs-string">'domingo'</span>);
                                        </div></code></pre>
                                
                                        <p id="unshift"><strong>unshift(element1, element2,...)</strong> : Añade uno o más elementos al comienzo del  array y devuelve la nueva longitud.</p>
                                        <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
                    diasLaborables.unshift(<span class="hljs-string">'sabado'</span>, <span class="hljs-string">'domingo'</span>);
                    <span class="hljs-built_in">console</span>.log(diasLaborables);
                                        </div></code></pre>

                                        <p id="foreach"><strong>forEach(callback(currentValue, [index]))</strong> : recorre un array. Ejecuta la función indicada una vez por cada elemento del array.</p>
                                        <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
                    diasLaborables.forEach(<span class="hljs-function">(<span class="hljs-params">elemento, indice, array</span>) =&gt;</span> <span class="hljs-built_in">console</span>.log(elemento, indice));
                    <span class="hljs-comment">//Lo muestra en el orden: elemento, indice.</span>
                    </div></code></pre>
            
                    <p id="pop"><strong>pop()</strong> : Elimina el último elemento de un array y devuelve ese elemento.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
                    <span class="hljs-keyword">let</span> ultimoDiaEliminado = diasLaborables.pop();
                    <span class="hljs-built_in">console</span>.log(ultimoDiaEliminado);
                    <span class="hljs-built_in">console</span>.log(diasLaborables);
                    </div></code></pre>

                    <p id="shift"><strong>shift()</strong> : Elimina el primer elemento del array y devuelve ese elemento.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
diasLaborables.shift();
    <span class="hljs-built_in">console</span>.log(diasLaborables);
                    </div></code></pre>

                    <p id="indexof"><strong>indexOf()</strong> : Devuelve el primer índice del elemento que coincida con el valor especificado, o -1 si ninguno es encontrado.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
    <span class="hljs-built_in">console</span>.log(diasLaborables);
<span class="hljs-keyword">let</span> indiceDia = diasLaborables.indexOf(<span class="hljs-string">'jueves'</span>);
    <span class="hljs-built_in">console</span>.log(indiceDia);
indiceDia = diasLaborables.indexOf(<span class="hljs-string">'sabado'</span>);
    <span class="hljs-built_in">console</span>.log(indiceDia);
                    </div></code></pre>
            
                    <p id="splice"><strong>splice(a,b,items)</strong> : elimina un elemento conociendo su indice. Inserta elementos en su lugar de ser necesario. Devuelve los elementos eliminados.</p>
                    <pre class="hljs"><code><div>sintaxis: splice([a: number], b items)
        
    a - Indice de inicio
    b - Número de elementos (opcional)
    items - Elementos a añadir en el caso de que se añadan. (opcional)
                    </div></code></pre>

                    <pre class="hljs"><code><div><span class="hljs-comment">//1 Ejercicio: Elimina los 2 primeros elementos:</span>        
<span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-keyword">let</span> indiceEliminado = diasLaborables.splice(<span class="hljs-number">2</span>);
    <span class="hljs-built_in">console</span>.log(<span class="hljs-string">`Elementos eliminados: <span class="hljs-subst">${diasLaborables}</span>`</span>);
    <span class="hljs-built_in">console</span>.log(<span class="hljs-string">`Nuevo array: <span class="hljs-subst">${indiceEliminado}</span>`</span>);
                    
<span class="hljs-comment">//2 Ejercicio:</span>
                    
<span class="hljs-comment">//2.1 Elimina desde:  (2) =&gt; indice de miercoles, (1) = un elemento</span>
                    
 <span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
 <span class="hljs-keyword">let</span> eliminaMiercoles = diasLaborables.splice(<span class="hljs-number">2</span>,<span class="hljs-number">1</span>);
    <span class="hljs-built_in">console</span>.log(diasLaborables);
    <span class="hljs-built_in">console</span>.log(eliminaMiercoles);
                    
                    
<span class="hljs-comment">//2.2 Elimina desde:  (2) =&gt; indice de miercoles, (2) = dos elementos</span>
        
<span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-keyword">let</span> eliminaMiercoles = diasLaborables.splice(<span class="hljs-number">2</span>, <span class="hljs-number">2</span>);
    <span class="hljs-built_in">console</span>.log(diasLaborables);
    <span class="hljs-built_in">console</span>.log(eliminaMiercoles);
        
<span class="hljs-comment">//2.3 Elimina desde: (2) =&gt; indice de miercoles, (1) = un elemento, agrega: 'sabado'</span>
                    
<span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-keyword">let</span> eliminaMiercoles = diasLaborables.splice(<span class="hljs-number">2</span>, <span class="hljs-number">1</span>, <span class="hljs-string">'sabado'</span>);
    <span class="hljs-built_in">console</span>.log(diasLaborables);
    <span class="hljs-built_in">console</span>.log(eliminaMiercoles);
                    </div></code></pre>

                    <p id="slice"><strong>slice(a,b)</strong> : Extrae elementos de un array desde el índice a hasta el índice b. Si no existe b lo hace desde a hasta el final, si no existe a ni b hace una copia del original.</p>
<pre class="hljs"><code><div><span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-built_in">console</span>.log(diasLaborables);
<span class="hljs-keyword">let</span> newDiasLaborables = diasLaborables.slice();
<span class="hljs-built_in">console</span>.log(newDiasLaborables);
                    
<span class="hljs-comment">//Extrae elementos de un array desde el índice a hasta el índice b. Si no existe b lo hace desde a hasta el final, si no existe a ni b hace una copia del original.</span>
        
                    <span class="hljs-keyword">let</span> newNumbers = numbers.slice();
                    <span class="hljs-built_in">console</span>.log(numbers);
                    <span class="hljs-built_in">console</span>.log(newNumbers);
                    =======================================
                    <span class="hljs-keyword">let</span> newNumbers = numbers.slice(<span class="hljs-number">2</span>);
                    <span class="hljs-built_in">console</span>.log(numbers);
                    <span class="hljs-built_in">console</span>.log(newNumbers);
                    ======================================
                    <span class="hljs-keyword">let</span> newNumbers = numbers.slice(<span class="hljs-number">2</span>,<span class="hljs-number">4</span>);
                    <span class="hljs-built_in">console</span>.log(numbers);
                    <span class="hljs-built_in">console</span>.log(newNumbers);
                    </div></code></pre>
                        <p><strong>concat()</strong>.- suma o concatena 2 arrays</p>
                <pre class="hljs"><code><div> <span class="hljs-built_in">console</span>.log(diasLaborables);
<span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-keyword">let</span> diasFinSemana = [<span class="hljs-string">'sabado'</span>, <span class="hljs-string">'domingo'</span>];
<span class="hljs-keyword">let</span> semanaCompleta = diasLaborables.concat(diasFinSemana);
<span class="hljs-built_in">console</span>.log(semanaCompleta);
</div></code></pre>
                    
                    <p id="join"><strong>join('separador')</strong> : Devuelve un string con el separador que indiquemos, por defecto son comas.</p>
                    <pre class="hljs"><code><div> <span class="hljs-comment">//Muestra los elementos del array separados por comas</span>
<span class="hljs-keyword">let</span> diasLaborables = [<span class="hljs-string">'lunes'</span>, <span class="hljs-string">'martes'</span>, <span class="hljs-string">'miercoles'</span>, <span class="hljs-string">'jueves'</span>, <span class="hljs-string">'viernes'</span>];
<span class="hljs-built_in">console</span>.log(diasLaborables.join(<span class="hljs-string">','</span>));

<span class="hljs-comment">//Muestra los elementos del array separados por un guion</span>
<span class="hljs-built_in">console</span>.log(diasLaborables.join(<span class="hljs-string">'-'</span>));

<span class="hljs-comment">//Muestra los elementos del array separados por un espacio en blanco</span>
<span class="hljs-built_in">console</span>.log(diasLaborables.join(<span class="hljs-string">' '</span>));
</div></code></pre>

                    <p><strong>reverse()</strong> : Muestra los elementos de array en el orden inverso: del elemento final al elemento inicial.</p>
                    <pre class="hljs"><code><div> <span class="hljs-built_in">console</span>.log(diasLaborables.reverse());
                    </div></code></pre>

                    <p id="filter"><strong>filter()</strong>.- crea un nuevo array con todos los elementos que cumplan la condición implementada por la función dada.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">const</span> words = [<span class="hljs-string">'spray'</span>, <span class="hljs-string">'limit'</span>, <span class="hljs-string">'elite'</span>, <span class="hljs-string">'exuberant'</span>, <span class="hljs-string">'destruction'</span>, <span class="hljs-string">'present'</span>];
<span class="hljs-keyword">const</span> result = words.filter(<span class="hljs-function"><span class="hljs-params">word</span> =&gt;</span> word.length &gt; <span class="hljs-number">6</span>);
<span class="hljs-built_in">console</span>.log(result);
</div></code></pre>

                    <p id="from"><strong>from(iterable)</strong>.- convierte en array un objeto no iterable.</p>
                    <pre class="hljs"><code><div><span class="hljs-comment">//accedemos a los NodeList de los enlaces</span>
                    <span class="hljs-keyword">let</span> links = <span class="hljs-built_in">document</span>.querySelectorAll(<span class="hljs-string">'a'</span>);
                    <span class="hljs-built_in">console</span>.log(links);
        
                    <span class="hljs-comment">//Convertimos NodeList en array</span>
                    <span class="hljs-keyword">let</span> linksIterables = <span class="hljs-built_in">Array</span>.from(links);
                    <span class="hljs-built_in">console</span>.log(linksIterables);
        
                    <span class="hljs-comment">//Recorremos el nuevo array</span>
                    linksIterables.forEach(<span class="hljs-function"><span class="hljs-params">element</span> =&gt;</span> {
                    <span class="hljs-built_in">console</span>.log(element);
                    });
        
                    <span class="hljs-comment">//También se puede acceder a su contenido como texto</span>
                    linksIterables.forEach(<span class="hljs-function"><span class="hljs-params">element</span> =&gt;</span> {
                    <span class="hljs-built_in">console</span>.log(element.innerText);
                    });
        
                    <span class="hljs-comment">//Accedemos al contenido de un elemento en especifico</span>
                    <span class="hljs-built_in">console</span>.log(linksIterables[<span class="hljs-number">3</span>].innerText);
                    </div></code></pre>

                    <p id="sort"><strong>sort([callback])</strong> .- Ordena los elementos de un array alfabéticamente(segun su valor Unicode), si le pasamos un callback los ordena en función del algoritmo que le pasemos.</p>
                    <pre class="hljs"><code><div> <span class="hljs-keyword">const</span> nombres = [<span class="hljs-string">'Juan'</span>, <span class="hljs-string">'Eric'</span>, <span class="hljs-string">'Maria'</span>, <span class="hljs-string">'Kenny'</span>, <span class="hljs-string">'Evangeline'</span>, <span class="hljs-string">'Abdiel'</span>, <span class="hljs-string">'Xareni'</span>]
                    <span class="hljs-built_in">console</span>.log(nombres);
                    <span class="hljs-built_in">console</span>.log(nombres.sort());
        
                    <span class="hljs-comment">//pasando un callback: Ordenacion de numeros de menor a mayor</span>
          
                    <span class="hljs-keyword">const</span> numbers = [<span class="hljs-number">1</span>, <span class="hljs-number">8</span>, <span class="hljs-number">100</span>, <span class="hljs-number">300</span>, <span class="hljs-number">3</span>]
                    <span class="hljs-built_in">console</span>.log(numbers.sort(<span class="hljs-function">(<span class="hljs-params">a, b</span>) =&gt;</span> a - b));
        
                    <span class="hljs-comment">//sort evalua de a pares:</span>
                    <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">menorMayor</span>(<span class="hljs-params">a, b</span>) </span>{
                    <span class="hljs-keyword">if</span> (a - b &lt; <span class="hljs-number">0</span>) <span class="hljs-keyword">return</span> <span class="hljs-number">-1</span>;
                    <span class="hljs-keyword">if</span> (a - b &gt; <span class="hljs-number">0</span>) <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>;
                    <span class="hljs-keyword">if</span> (a == b) <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
                    }
        
                    <span class="hljs-comment">//pasando un callback: Ordenacion de numeros de mayor a menor</span>
                    
                    <span class="hljs-built_in">console</span>.log(numbers.sort(<span class="hljs-function">(<span class="hljs-params">a, b</span>) =&gt;</span> b - a));
        
                    <span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">mayorMenor</span>(<span class="hljs-params">a, b</span>) </span>{
                    <span class="hljs-keyword">if</span> (b - a &lt; <span class="hljs-number">0</span>) <span class="hljs-keyword">return</span> <span class="hljs-number">-1</span>;
                    <span class="hljs-keyword">if</span> (b - a &gt; <span class="hljs-number">0</span>) <span class="hljs-keyword">return</span> <span class="hljs-number">1</span>;
                    <span class="hljs-keyword">if</span> (b == a) <span class="hljs-keyword">return</span> <span class="hljs-number">0</span>;
                    }
                    </div></code></pre>

                    <p id="some"><strong>some(callback)</strong> .-Comprueba si al menos un elemento del array cumple la condición. Devuelve un boolean.</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(diasLaborables.some(<span class="hljs-function">(<span class="hljs-params">diaLaborable</span>) =&gt;</span> diaLaborable.length &gt; <span class="hljs-number">2</span>));
                    </div></code></pre>

                    <p id="every"><strong>every(callback)</strong> .-Comprueba si todos los elementos del array cumplen la condición. Devuelve un boolean.</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(diasLaborables.every(<span class="hljs-function">(<span class="hljs-params">diaLaborable</span>) =&gt;</span> diaLaborable.length &gt; <span class="hljs-number">8</span>));
                    </div></code></pre>

                    <p id="map"><strong>map(callback)</strong> - Transforma todos los elementos del array y devuelve un nuevo array.</p>
                    <pre class="hljs"><code><div><span class="hljs-comment">//Multiplica cada elemento de un arrray x 2</span>
                    <span class="hljs-keyword">const</span> numbers = [<span class="hljs-number">1</span>, <span class="hljs-number">8</span>, <span class="hljs-number">100</span>, <span class="hljs-number">300</span>, <span class="hljs-number">3</span>]
                    <span class="hljs-keyword">const</span> numbers2 = numbers.map(<span class="hljs-function">(<span class="hljs-params">number</span>) =&gt;</span> number *<span class="hljs-number">2</span>);
                    <span class="hljs-built_in">console</span>.log(numbers);
                    <span class="hljs-built_in">console</span>.log(numbers2);
                    </div></code></pre>

                    <p id="filter"><strong>filter(callback)</strong> .- Filtra todos los elementos del array que cumplan la condición y devuelve un nuevo array.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">const</span> numbers = [<span class="hljs-number">1</span>, <span class="hljs-number">8</span>, <span class="hljs-number">100</span>, <span class="hljs-number">300</span>, <span class="hljs-number">3</span>];
<span class="hljs-keyword">const</span> numbersCondicion = numbers.filter(<span class="hljs-function">(<span class="hljs-params">number</span>) =&gt;</span> number &gt;<span class="hljs-number">20</span>);
<span class="hljs-built_in">console</span>.log(numbers);
<span class="hljs-built_in">console</span>.log(numbersCondicion);
                    </div></code></pre>

                    <p id="reduce"><strong>reduce(callback)</strong> - Reduce todos los elementos del array a un único valor.</p>
                    <pre class="hljs"><code><div><span class="hljs-keyword">const</span> numbers = [<span class="hljs-number">1</span>, <span class="hljs-number">8</span>, <span class="hljs-number">100</span>, <span class="hljs-number">300</span>, <span class="hljs-number">3</span>];
                    <span class="hljs-built_in">console</span>.log(numbers.reduce(<span class="hljs-function">(<span class="hljs-params">a, b</span>) =&gt;</span> a-b));
        
                    <span class="hljs-keyword">const</span> usersOnline = users.reduce(<span class="hljs-function">(<span class="hljs-params">cont, user</span>) =&gt;</span> {
                    <span class="hljs-keyword">if</span> (user.online) cont++
                    <span class="hljs-keyword">return</span> cont
                    }, <span class="hljs-number">0</span>)
        
                    <span class="hljs-built_in">console</span>.log(<span class="hljs-string">`Hay <span class="hljs-subst">${usersOnline}</span> usuarios conectados`</span>);
                    
                    <span class="hljs-keyword">const</span> users = [
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 1'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">true</span>
                    },
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 2'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">true</span>
                    },
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 3'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">false</span>
                    },
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 4'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">false</span>
                    },
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 5'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">false</span>
                    },
                    {
                        <span class="hljs-attr">name</span>: <span class="hljs-string">'user 6'</span>,
                        <span class="hljs-attr">online</span>: <span class="hljs-literal">true</span>
                    }
                    ]
                    </div></code></pre>

                    <p id="lastindexof"><strong>lastIndexOf()</strong> : Devuelve el último índice del elemento que coincida con el valor especificado, o -1 si ninguno es encontrado.</p>
                    <pre class="hljs"><code><div><span class="hljs-built_in">console</span>.log(numbers.lastIndexOf(<span class="hljs-number">1</span>));
                    </div></code></pre>


                    <!-- Arrays y sus métodos -->
                    <h3 id="array_ejemp" class="p-2 mt-2 backg">Arrays - ejemplos</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            //Formas de declarar un array
        
                            <span class="text-danger">const</span> <span class="text-warning">numeros</span> = [10,20,30,40,50];
        
                            <span class="text-danger">const</span> <span class="text-warning">meses</span> = <span class="text-info">new Array</span>('Enero', 'Febrero', 'Marzo', 'Abril');
        
                            <span class="text-danger">const</span> <span class="text-warning">mezclados</span> = ['hola', 20, true, null, false, undefined];
        
                            //Métodos para trabajar con arrays
                            
                            //length()
                            <span class="text-danger">console.log</span>(<span class="text-warning">meses</span>.<span class="text-info">length</span>); // devolverá 4
        
                            //Comprobar si un array es un array
                            <span class="text-danger">console.log</span>(<span class="text-skyblue">Array</span>.<span
                                class="text-success">isArray</span>(<span class="text-warning">meses</span>)); // devolverá true
                            
                            //Acceder a un elemento del array
                            <span class="text-danger">console.log</span>(<span class="text-warning">meses</span>[2]); // Devolverá Marzo
        
                            //Adicionar un elemento a un array
                            <span class="text-warning">meses</span>[4] = <span class="text-info">'Mayo'</span>;
        
                            //Adicionar usando el método push() => Agrega al final
                            <span class="text-warning">meses</span>.<span class="text-success">push</span>('Junio');
        
                            //Adicionar usando el método unshift() => Agrega al inicio
                            <span class="text-warning">meses</span>.<span class="text-success">unshift</span>('Julio');
        
                            //Encontrar la posición de un elemento en un array
                            <span class="text-danger">console.log</span>(<span class="text-warning">meses</span>.<span class="text-info">indexof</span>('Febrero')); //devolverá 1
        
                            //Eliminar el último elemento del array con el método pop()                     
                            <span class="text-warning">meses</span>.<span class="text-success">pop</span>();
        
                            //Eliminar el primer elemento del array con el método shift()
                            <span class="text-warning">meses</span>.<span class="text-success">shift</span>();
        
                            //Eliminar un elemento de cualquier posición del array con el método splice()
                            <span class="text-warning">meses</span>.<span class="text-success">splice</span>(<span class="text-info">2</span>,<span class="text-danger">1</span>);// Elimina <span class="text-danger">1</span> elemento a partir del indice <span class="text-info">2</span>.
        
                            //Método reverse() => Invierte la posición de los elementos del array
                            <span class="text-warning">meses</span>.<span class="text-success">reverse</span>();
        
                            //concat() => Une 2 arreglos
                            <span class="text-danger">let</span> <span class="text-warning">arr1</span> = [1,2,3], <span class="text-warning">arr2</span> = [9,8,7];
                            <span class="text-danger">console.log</span>(<span class="text-warning">arr1</span>.<span class="text-info">concat</span>(<span class="text-warning">arr2</span>));
        
                            //Método sort() => Ordena un array alfabeticamente
                            <span class="text-danger">const</span> <span class="text-warning">frutas</span> = ['Plátano', 'Manzana', 'Fresa', 'Naranja'];
                            <span class="text-warning">frutas</span>.<span class="text-info">sort</span>();
        
                            //Ordenar un array de números en forma ascendente
                            <span class="text-warning">arr1</span>.<span class="text-info">sort</span>(<span class="text-skyblue">function</span>(x, y){
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">return</span> x-y;
                            });
        
                            //Ordenar un array de números en forma descendente
                            <span class="text-warning">arr1</span>.<span class="text-info">sort</span>(<span class="text-skyblue">function</span>(x, y){
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">return</span> y-x;
                            });
                        </code>
                    </pre>
                    <!-- Utilizando const en arrays -->
                    <h3 id="const_arrays" class="p-2 mt-2 backg">Utilizando const en arrays</h3>
                    <pre class="px-5 py-0 bg-black border rounded mipre">
                        <code class="mipre">
                            <span class="text-danger">const</span> <span class="text-warning">numeros</span> = [1,2,3];
                            <span class="text-warning">numeros</span> = [9,8,7]; //Devolverá error. No se permite la modificación total del array.
        
                            //Pero si se puede modificar un elemento de forma independiente
                            <span class="text-warning">numeros</span>[0] = 9;
        
                            //También se puede utilizar push()
                            <span class="text-warning">numeros</span>.<span class="text-info">push</span>(8);
                        </code>                
                    </pre>
                    <p class="bg-warning text-dark p-2 rounded p_destacado">Si un array se declara con <span class="text-danger lead"><b>let</b></span>, entonces si se podrá reescribir el array totalmente.</p>
                </article>
                </article>
            </section>
        </div>

    </div>
</div>
    
<?php 
    include "./templates_js/footer.php";
?>
    