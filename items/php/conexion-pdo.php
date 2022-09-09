<?php include "../templates/head.php";?>
<link rel="stylesheet" href="./css/estilos-php.css">
    <title>PHP intermedio</title>
</head>
<body>
    <?php include "../templates/nav.php";?>
    <?php include "./nav-php.php";?>    

    <h1>PHP Intermedio</h1>
    <section>
        <article>
            <div class="container mt-4">
                <h2>CONEXION PDO</h2>
                <h3 class="display-6">ABELOS: Conexión PDO usando POO</h3>
                <p class="subtitulo bg-light">Archivo de desarrollo: conect-pdo-1.php</p>
                <pre class="pre-content">
                    <span class="text-danger">class</span> <span class="text-lila">Conexion</span> <span class="text-warning">{</span>
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">private</span> <span class="text-warning">$host</span> = "localhost";
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">private</span> <span class="text-warning">$user</span> = "root";
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">private</span> <span class="text-warning">$password</span> = "";
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">private</span> <span class="text-warning">$db</span> = "codigos";
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">private</span> <span class="text-warning">$conect</span>;
        
                        &nbsp;&nbsp;&nbsp;<span class="text-danger">public</span> function <span class="text-success">__construct()</span> <span class="text-lila">{</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-warning">$connectionString</span> = "mysql:host=".<span class="text-info">$this</span>-><span class="text-warning">host</span>.";dbname=".<span class="text-info">$this</span>-><span class="text-warning">db</span>.";charset=utf8";
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">try</span> <span class="text-yellow">{</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">$this</span>-><span class="text-warning">conect</span> = new PDO(<span class="text-warning">$connectionString</span>, <span class="text-info">$this</span>-><span class="text-warning">user</span>, <span class="text-info">$this</span>-><span class="text-warning">password</span>);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">$this</span>-><span class="text-warning">conect</span>->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">echo</span> "Conexión exitosa";    
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">}</span> <span class="text-danger">catch</span> (Exception $e) <span class="text-yellow">{</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-info">$this</span>-><span class="text-warning">conect</span> = "Error de conexión";
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger">echo</span> "ERROR: ".$e-><span class="text-success">getMessage()</span>;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-yellow">}</span>
                        &nbsp;&nbsp;&nbsp;<span class="text-lila">}</span>
                    <span class="text-warning">}</span>
                    <span class="text-warning">$conect</span> = new <span class="text-lila">Conexion()</span>;
                </pre>
                <a href="./desarrollos/conect-pdo-1.php" target="_blank" class="btn btn-outline-primary mt-3">Probar</a>
            </div>
        </article>
    </section>

<?php include "../templates/footer.php"?>