<?php include "../../templates/head.php";?>
<link rel="stylesheet" href="./css/git-css.css">
<title>GIT</title>
<?php include "../../templates/nav-ini.php";?>
<?php include "./nav-git.php";?>
<h1>GIT</h1>

<!-- Fundamentos de Git -->
<section>
    <div class="container">
        <article>
            <h2>Fundamentos de git</h2>
            <div class="row">
                <!-- Verificar la versión actual -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Obtener la versión instalada</b></h3>
                    <pre class="pre-content">
                        $ <span class="text-warning">git</span> <span class="text-lila">--version</span>
                    </pre>
                </div>        
                <!-- Actualizar a la ultima version -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Actualizar a la última versión</b></h3>
                    <pre class="pre-content">
                        <span class="comentario">Para las versiones de 2.14.2 a 2.16.1</span>
                        $ <span class="text-warning">git</span> <span class="text-lila">update</span>
        
                        <span class="comentario">Para las versiones posteriores a 2.16.1</span>
                        $ <span class="text-warning">git</span> <span class="text-lila">update-git-for-windows</span>
                    </pre>
                </div>
                <!-- Primeras configuraciones -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Primeras configuraciones</b></h3>
                    <pre class="pre-content">
                        <span class="comentario">Verificar configuraciones por defecto</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config</span> <span class="text-lila">--list</span>

                        <span class="comentario">Definir usuario</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">user.name</span> "Jesus Ch."
                        
                        <span class="comentario">Establecer el email que será usado en Git Hub</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">user.email</span> jesusch@gmail.com

                        <span class="comentario">Activación de colores en la terminal</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">user.ui</span> true
                    </pre>
                </div>
                <!-- Usando el archivo de configuracion -->
                <div class="row mt-5">
                    <h3 class="h5"><b>El archivo de configuración de Git</b></h3>
                    <p class="destacado">Las configuraciones anteriores se guardan en un archivo de configuracion al cual se puede acceder. Para ello se debe configurar el editor de código que se empleará, en este caso VSCode.</p>
                    <pre class="pre-content">
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">core.editor</span> "code --wait"

                        <span class="comentario">Para editar dicho archivo de configuraciones</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">-e</span>

                        <span class="comentario">En este momento la terminal quedará bloqueada hasta que se termine de editar el archivo de configuracion y se cierre el editor.</span>
                    </pre>                    
                </div>
                <!-- Estandarizar saltos de linea de los distintos sist. operativos -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Estandarizar los saltos de línea de los distintos Sistemas Operativos.</b></h3>
                    <p class="destacado">Distintos usuarios pueden usar distintos sistemas operativos lo que significa que al momento de subir y unir los distintos archivos(versiones) puede ocurrir algún tipo de error.</p>
                    <pre class="pre-content">
                        <span class="comentario">Para estandarizar los saltos de línea en windows</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">core.autocrlf</span> true

                        <span class="comentario">Para estandarizar los saltos de línea en linux/mac</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config --global</span> <span class="text-lila">core.autocrlf</span> input
                    </pre>
                </div>
                <!-- Obtener ayuda de los comandos git en la terminal -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Obtener ayuda de los comandos de GIT usados en la terminal</b></h3>
                    <pre class="pre-content">
                        <span class="comentario">Obtener la ayuda en la misma terminal</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">config</span> <span class="text-lila">-h</span>

                        <span class="comentario">Obtener la ayuda en el navegador</span>
                        $ <span class="text-warning">git</span> <span class="text-danger">help</span> <span class="text-lila">config</span>
                    </pre>
                </div>
                <!-- Inicializar git en un directorio local -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Inicializar git en un directorio local</b></h3>
                    <pre class="pre-content">
                        <span class="comentario">Crear la carpeta o nombre de directorio del proyecto</span>
                        $ <span class="text-warning">mkdir</span> nombre_de_la_carpeta
                        <span class="comentario">Ingresar al directorio del proyecto</span>
                        $ <span class="text-warning">cd</span> nombre_de_la_carpeta
                        <span class="comentario">Crear el archivo README.md</span>
                        $ <span class="text-warning">touch</span> README.md
                        <span class="comentario">Crear el archivo .gitignore</span>
                        $ <span class="text-warning">touch</span> .gitignore
                        <span class="comentario">Inicializar git</span>
                        $ <span class="text-warning">git</span> init
                        <span class="comentario">Abrir el proyecto en VSCode</span>
                        $ <span class="text-warning">code .</span>
                    </pre>
                </div>
            </div>
        </article>        
    </div>
</section>
<!-- Flujo básico de Git y GitHub -->
<section>
    <div class="container">
        <!-- flujo basico -->
        <article>
            <h2>Flujo básico de Git y GitHub</h2>
            <div class="row">
                <!-- flujo basico -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Flujo básico</b></h3>
                    <p class="destacado">
                        El flujo de Git, consta de tres estados locales, es decir en la computadora donde se esta trabajando y uno más de forma remota cuando accedemos al codigo centralizado en plataformas como GitHub, Gitlab, Bitbucket, etc.
                        <br />
                        Dichos estados son <b>modified</b>, <b>staged</b>, <b>committed</b> y <b>remote</b>. A cada uno de ellos le corresponde un área de trabajo:
                    </p>
                    <figure>
                        <img src="/items/git/img/git-flow.jpg" alt="git-flow" />
                    </figure>
                    <ol>
                        <li><strong>Working Directory</strong>
                            Es el área correspondiente al estado <strong>modified</strong> y es la carpeta local de tu computadora donde almacenas los archivos de tu proyecto.
                        </li>
                        <li><strong>Stagin Area</strong>
                            Es el área correspondiente al estado <strong>staged</strong> también se le llama index por que es el área donde git indexa y agrega los cambios realizados en los archivos previos a comprometerlos en su registro.
                        </li>
                        <li><strong>Local Repository</strong>
                            Es el área correspondiente al estado <strong>committed</strong>, donde los cambios ya se han registrado en el repositorio de git también se le llama HEAD por que indica en qué cambio se encuentra el puntero del repositorio.
                        </li>
                        <li><strong>Remote Repository</strong>
                            Es el área correspondiente al estado <strong>remote</strong> y es el directorio remoto donde almacenamos los archivos del proyecto en alguna plataforma web como GitHub, GitLab, BitBucket. Git denomina origin al repositorio remoto.
                        </li>
                    </ol>
                </div>
                <!-- Secuencia básica -->
                <div class="row mt-5">
                    <h3 class="h5"><b>Secuencia básica</b></h3>
                    <p class="destacado">En este punto ya debe haberse creado un repositorio en <b>github</b> con el email ingresado en la configuración inicial.</p>
                    <pre class="pre-content">
                        <span class="comentario">agregar los cambios de un archivo al staged</span>
                        $ <span class="text-warning">git add</span> nombre_de_archivo/directorio

                        <span class="comentario">agregar todos los cambios de todos los archivos al staged</span>
                        $ <span class="text-warning">git add .</span>

                        <span class="comentario">los cambios son comprometidos en el repositorio</span>
                        <span class="comentario">se debe escribir una descripción como mensaje del cambio</span>
                        <span class="comentario">los cambios surtirán efecto al guardar y cerrar el archivo de configuracion</span>
                        $ <span class="text-warning">git</span> commit

                        <span class="comentario">shortcut del comando anterior</span>
                        <span class="comentario">orden y mensaje en una sola línea</span>
                        $ <span class="text-warning">git</span> commit -m <span class="text-green"> "mensaje descriptivo del cambio"</span>

                        <span class="comentario">se agrega el origen remoto<b>(origin)</b> de tu repositorio de GitHub</span>
                        <span class="comentario">se pueden agregar distintos <b>origin</b>, se verá más adelante</span>
                        $ <span class="text-warning">git</span> remote <span class="text-warning">add</span> <span class="text-lila">origin</span> <span class="text-green">https://github.com/usuario/repositorio.git</span>

                        <span class="comentario">la primera vez que vinculamos el repositorio remoto con el local</span>
                        $ <span class="text-warning">git</span> push -u <span class="text-lila">origin master</span>

                        <span class="comentario">para las subsecuentes actualizaciones, sino cambias de rama</span>
                        $ <span class="text-warning">git</span> push


                        <span class="comentario">para descargar los cambios del repositorio remoto (github) al local. Normalmente usado en procesos de colaboración (adicion de código a nuestra rama master) de otros usuarios a nuestro proyecto</span>
                        $ <span class="text-warning">git</span> pull
                    </pre>                
                </div>
            </div>
        </article>
        <!-- de master a main -->
        <article>
            <h2>Pasar de la Rama Master a la Rama main</h2>
            <div class="row">
                <div class="row mt-5">
                    <h3 class="h5"><b>Motivo del cambio</b></h3>
                    <p class="destacado">
                        Principalmente se debe a un tema de discriminación (Caso George Floyd) que se vive en EEUU por lo que Microsoft (dueño de github) decidio cambiar estos términos.
                    </p>
                </div>                   
                <div class="row mt-5">
                    <p class="parrafo">La nueva secuencia para trabajar con git sería la siguiente</p>
                    <h3 class="h5"><b>Para repositorios nuevos</b></h3>
                    <pre class="pre-content">
                        $ <span class="text-warning">git</span> init
                        $ <span class="text-warning">git add .</span>
                        $ <span class="text-warning">git</span> commit -m <span class="text-green"> "Primer Commit"</span>
                        $ <span class="text-warning">git</span> <span class="text-lila">branch</span> -M main
                        $ <span class="text-warning">git</span> remote <span class="text-warning">add</span> origin <span class="text-green">https://github.com/usuario/repositorio.git</span>
                        $ <span class="text-warning">git</span> push -u origin <span class="text-lila">main</span>
                    </pre>
                </div>
                <div class="row mt-5">
                    <h3 class="h5"><b>Para repositorios existentes (en local)</b></h3>
                    <pre class="pre-content">
                        $ <span class="text-warning">git</span> <span class="text-lila">branch</span> -M main
                        $ <span class="text-warning">git</span> remote <span class="text-warning">add</span> origin <span class="text-green">https://github.com/usuario/repositorio.git</span>
                        $ <span class="text-warning">git</span> push -u origin <span class="text-lila">main</span>
                    </pre>
                </div>
                <div class="row mt-5">
                    <h3 class="h5"><b>Para reemplazar Master por main en GitHub</b></h3>
                    <pre class="pre-content">
                        <span class="comentario">Paso 1</span>
                        <span class="comentario">Crear la rama local main y pasarle el historial de la rama master</span>
                        $ <span class="text-warning">git</span> <span class="text-lila">branch</span> -m master <span class="text-green">main</span>

                        <span class="comentario">Paso 2</span>
                        <span class="comentario">Hacer un <b>push</b> de la nueva rama local main en el repositorio remoto de GitHub</span>
                        $ <span class="text-warning">git</span> push -u origin  <span class="text-green">main</span> 

                        <span class="comentario">Paso 3</span>
                        <span class="comentario">Cambia el <b>HEAD</b> actual a la rama main</span>
                        $ <span class="text-warning">git</span> symbolic-ref <span class="text-lila">refs/remotes/origin/HEAD</span> <span class="text-green">refs/remotes/origin/main</span>
                    </pre>
                </div>
            </div>
        </article>

    </div>
</section>
<!-- plantilla -->
<!-- 
    <section>
        <div class="container">
            <h2></h2>
            <article>
                <h2></h2>
                <div class="row">
                    <div class="row mt-5">
                        <h3 class="h5"></h3>
                        <p class="destacado"></p>
                        <pre class="pre-content></pre>
                    </div>                    
                </div>
            </article>
        </div>
    </section>
 -->
<?php include "../../templates/footer.php"?>

