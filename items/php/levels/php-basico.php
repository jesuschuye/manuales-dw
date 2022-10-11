<?php include "../../../templates/head.php";?>
    <link rel="stylesheet" href="../css/php-css.css">
    <title>PHP basicos</title>    
    <?php include "../../../templates/nav-ini.php";?>
    <?php include "../nav-php.php";?>
    
    <section>
        <article>
            <!-- Función dirname(__FILE__) -->
            <div class="container mt-4">
                <h2>Función dirname(__FILE__)</h2>
                <h3 class="h5">cursosdesarrolloweb.es: Obtener la ruta de un directorio</h3>
                <p class="subtitulo">Archivo de desarrollo: ruta-de-archivo.php</p>
                <pre class="pre-content">
                    &lt;?php 
                        &nbsp;&nbsp;&nbsp;define('URL', dirname(__FILE__));
                        &nbsp;&nbsp;&nbsp;echo URL;
                    ?&gt;
                </pre>
                <a href="../desarrollos/ruta-de-archivo.php" target="_blank" class="btn btn-outline-primary mt-3">Probar</a>                
            </div>
        </article>            
        <article>
            <!-- Funcion fopen de PHP -->
            <div class="container mt-4">
                <h2>Función fopen.</h2>
                <h3 class="h5">Desarrolloweb.com: Verificar la existencia y validez de una URL</h3>
                <p class="subtitulo bg-light">Archivo de desarrollo: </p>
                <p> Este tipo de script puede ser utilizado para múltiples propósitos: Detectar si los enlaces están rotos, verificar una etapa de inscripción en un formulario...</p>
        
                <p>En este caso, hemos simplificado al máximo su contenido de manera a poner evidencia su funcionamiento. Otro tipo de     mejoras tales como la verificación de la extensión del archivo (.asp, .php, ...) o del protocolo de transferencia (http, ftp...) pueden ser introducidas afín de personalizar su uso para distintas aplicaciones. </p>
        
                <pre class="pre-content">
                    &lt;?php
                        &nbsp;&nbsp;&nbsp;function verificar_url($url)
                        &nbsp;&nbsp;&nbsp;{
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">//abrimos el archivo en lectura</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$id = @fopen($url,"r");
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">//hacemos las comprobaciones</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($id) $abierto = true;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else $abierto = false;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">//devolvemos el valor</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $abierto;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comentario">//cerramos el archivo</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fclose($id);
                        &nbsp;&nbsp;&nbsp;}
                    ?&gt;
        
                    &lt;html&gt;
                        &nbsp;&nbsp;&nbsp;&lt;head&gt;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;Verificacion de URL&lt;/title&gt;
                        &nbsp;&nbsp;&nbsp;&lt;/head&gt;
                        &lt;body&gt;
                            &nbsp;&nbsp;&nbsp;&lt;?php
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!isset($_POST["url"])){
                            &nbsp;&nbsp;&nbsp;?&gt;
                                &nbsp;&nbsp;&nbsp;&lt;form action="enlace.php" method="post"&gt;Indica tu URL:&lt;br&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="Text" size="25" maxlength="100" name="url" value="http://"&gt;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input type="Submit" value="Verificar!"
                                &nbsp;&nbsp;&nbsp;&lt;/form&gt;
        
                            &nbsp;&nbsp;&nbsp;&lt;?php
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
        
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$url = $_POST["url"];
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$abierto = verificar_url($url);
                                    
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($abierto) {
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "La URL existe!";
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "La URL no existe o es inaccesible...";
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
                            &nbsp;&nbsp;&nbsp;?&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                </pre>
                <a href="#" target="_blank" class="btn btn-outline-primary mt-3">Probar</a> 
            </div>
        </article>
    </section>

<?php include "../../../templates/footer.php"?>
