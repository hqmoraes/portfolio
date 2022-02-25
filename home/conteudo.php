<main>
        <div class="container-fluid">
            <div class="row position-relative align-items-center justify-content-center" id="home">
                <div id="titulo" class="col-10 col-sm-8 text-center">
                    <h1 class="display-1">Portfólio dev</h1>
                    <p>Henrique Moraes</p>
                </div>
                <button class="col-12 text-start cores escopo esconderEscopo text-light py-1" id="AWS" onclick="exibirConteudo(this);">AWS</button>
                <button class="col-12 text-end cores escopo esconderEscopo text-light py-1" id="Purecode" onclick="exibirConteudo(this);">Pure Code</button>
                <button class="col-12 text-start cores escopo esconderEscopo text-light py-1" id="Wordpress" onclick="exibirConteudo(this);">Wordpress</butt>
            </div>
        </div>
        <?php include 'aws.php';?>
        <?php include 'purecode.php';?>
        <?php include 'wordpress.php';?>
    </main>