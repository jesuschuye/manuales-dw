</head>
<body>
    <?php const BASE_URL = "http://codigos/items/"?>
<div class="container-fluid row position-nav">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">Principal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Frontend</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=BASE_URL?>html/index.php">HTML</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>css/index.php">CSS</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>javascript/index.php">Javascript</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>jquery/index.php">JQuery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Backend</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=BASE_URL?>node/index.php">Node</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>php/index.php">PHP</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>java/index.php">JAVA</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>c-char/index.php">C#</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Frameworks Frontend</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=BASE_URL?>react/index.php">React</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>angular/index.php">Angular</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>python/index.php">Python</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>ajax/index.php">Ajax</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>mysql/index.php">MySql</a>
                    </li>                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mobiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=BASE_URL?>mobiles/r-native/index.php">React Native</a></li>
                            <li><a class="dropdown-item" href="<?=BASE_URL?>mobiles/flutter/index.php">Flutter</a></li>                            
                            <li><a class="dropdown-item" href="<?=BASE_URL?>mobiles/dart/index.php">Dart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>git/index.php">Git</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.htmlquick.com/es/reference/character-entity-reference.html">Entidades HTML</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
</div>