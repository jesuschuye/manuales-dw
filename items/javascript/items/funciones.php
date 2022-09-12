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
        <div class="col-md-3">
            <?php include "./templates/aside-js.php";?>
        </div>
        <div class="col-md-9 bg-light">
            <h1>Funciones</h1>
            <p class="destacado">Existen 3 tipos de funciones</p>
            <ul>
                <li><i class="bi bi-back"></i>Funciones Declaradas</li>
                <li><i class="bi bi-back"></i>Funciones expresadas</li>
                <li><i class="bi bi-back"></i>Funciones Flecha o Arrow Functions</li>
            </ul>

            <h2 id="f_declaradas">Funciones Declaradas</h2>
            <p>Requieren un identificador y son <span class="text-primary"><a href="#">alzables</a></span>. Pueden ser llamadas (invocadas) desde cualquier parte del código.</p>
            <pre class="pre-content">

            </pre>            

            <h2 id="f_expresadas">Funciones Expresadas</h2>
            <p>Pueden tener nombre o ser <b>anónimas</b>. Lo que se <span class="text-primary"><a href="#">alza</a></span> es la declaración, no la asignación. Sólo pueden ser llamadas después de ser asignadas.</p>
            <pre class="pre-content">

            </pre>            

            <h2 id="f_flecha">Funciones Flecha</h2>
            <ul class="mb-5 listado">
                <li><i class="bi bi-caret-right-fill"></i>No disponen de contexto propio de <b><em>this</em></b>.</li>
                <li><i class="bi bi-caret-right-fill"></i>Disponen de <b><em>Retorno implícito</em></b>, delimitadores opcionales. </li>
                <li><i class="bi bi-caret-right-fill"></i>No se alzan.</li>
            </ul>
            <pre class="pre-content">

            </pre>
            <p class="destacado">En ocasiones en que el contenido de la <em>función flecha</em> es de una sola línea, se podrán <b>omitir</b> los <b>paréntesis</b> que envuelven a los argumentos, <b>las llaves</b> que envuelven el cuerpo de la función y la palabra <b>return</b></p>
            <pre class="pre-content">

            </pre>
            <a class="btn btn-outline-primary mt-3 mb-3" href="../desarrollo/funciones/funciones.html" target="_blank">Resultado</a>
        </div>
    </div>
</div>

<?php include "../../../templates/footer.php";?>