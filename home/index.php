<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <script src="\node_modules\jquery\dist\jquery.min.js"></script>
    <link rel="stylesheet" href="css/template.css">
    <title>Web Portfolio - Henrique Moraes</title>
</head>
<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="contato" class="cores esconderEscopo d-flex justify-content-center">
                        <a class="d-flex align-items-center justify-content-between" href="https://wa.me/5519984323300">
                            <img src="\img\whatsapp-symbol.svg" alt="Contato">
                            <span class="contato text-light display-5 ms-4">Fale comigo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row position-relative vh-100 align-items-center justify-content-center">
                <div id="titulo" class="col-6 text-center">
                    <h1 class="display-1">Portfolio dev</h1>
                    <p>Henrique Moraes</p>
                </div>
                    <div class="col-12 cores escopo esconderEscopo display-6 text-light py-3" id="aws">AWS</div>
                    <div class="col-12 cores escopo esconderEscopo display-6 text-light py-3" id="pureCode">Pure Code</div>
                    <div class="col-12 cores escopo esconderEscopo display-6 text-light py-3" id="wordPress">Wordpress</div>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center pb-4">
                    <button id="itens" class="cores" onclick="exibirEscopo()"></button>
                </div>
            </div>
        </div>
        <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
        <script src="js/recursos.js"></script>
    </footer>
</body>
</html>