<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <script src="\node_modules\jquery\dist\jquery.min.js"></script>
    <link rel="stylesheet" href="css/template.css">
    <script src="js/recursosBefore.js"></script>
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
            <div class="row position-relative vh-100 align-items-center justify-content-center" id="home">
                <div id="titulo" class="col-10 col-sm-8 text-center">
                    <h1 class="display-1">Portfólio dev</h1>
                    <p>Henrique Moraes</p>
                </div>
                <button class="col-12 text-start cores escopo esconderEscopo text-light py-1" id="AWS" onclick="exibirConteudo(this);">AWS</button>
                <button class="col-12 text-end cores escopo esconderEscopo text-light py-1" id="Purecode" onclick="exibirConteudo(this);">Pure Code</button>
                <button class="col-12 text-start cores escopo esconderEscopo text-light py-1" id="Wordpress" onclick="exibirConteudo(this);">Wordpress</butt>
            </div>
        </div>
    </main>
    <footer class="fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button id="itens" class="cores" onclick="exibirContato()"></button>
                </div>
            </div>
        </div>
        <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
        <script src="js/recursosAfter.js"></script>
    </footer>
</body>
</html>