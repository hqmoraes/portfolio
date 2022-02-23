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
            <div class="row pgs esconderConteudo" id="pgWordpress">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="px-4">                                
                                <div class="d-flex justify-content-between">
                                <h1>Wordpress</h1><button onclick="esconderConteudo(this);" class="d-flex align-items-start"><img src="img\close-322.svg" alt="Fechar"></button>
                        </div>
                                <p>
                                    Minha experiência com o principal CMS do mercado abrange a criação de sites institucionais,
                                    relatórios de sustentabilidade dinâmicos, lojas virtuais e portais de relacionamento com clientes.
                                    Trabalho com o Elementor Builder quando o cliente pede, mas dou preferência para a criação de temas
                                    à partir do zero, utilizando codex do Wordpress e seguindo as diretivas e boas práticas estipuladas por sua
                                    equipe de desenvolvimento.
                                    Os trabalhos que apresento a seguir são ficticios e foram criados com o único propósito de compor este portfólio.
                                    Estou reiniciando minha carreira com o foco em desenvolvimento web rápido, seguro e barato. Minha experiência anterior
                                    me trouxe até aqui. Agora, almejo novas oportunidades e desafios, empenhado e comprometido a criar e
                                    manter uma carteira de relacionamentos de longo prazo.
                                    </p>
                                    <p class="text-end">
                                        <strong>Obrigado pela oportunidade.</strong>
                                    </p>
                            </div>
                            <div>
                                <ul class="container">
                                    <li>Acesse os sites clicando nas imagens</li>
                                    <li class="row">
                                        <div class="col-3 d-flex align-items-center">
                                        <a href="https://esmalteria.hospedar.net">
                                            <img src="img\EsmalteriaPadrão.png" alt="Esmlateria Padrão">
                                        </a>
                                        </div>
                                        <div class="col-9">
                                            <p>Site criado com base no <a href="https://esmalterianacional.com.br">esmalterianacional.com.br</a>,
                                            buscando reproduzir os recursos técnicos e o layout. Responsivo, foi criado como tema preservando
                                            as características nativas do wordpress, permitindo atualizações e expansões sem qualquer surpresa ou
                                            incompatibilidade de plugins.</p>
                                        </div>

                                    </li>
                                    <li class="row">
                                        <div class="col-3 d-flex align-items-center">
                                            <a href="https://imobiliaria.hospedar.net">
                                                <img src="img\imobiliaria.png" alt="Imobiliária">
                                            </a>
                                        </div>
                                        <div class="col-9">
                                        <p>
                                            Esta proposta foi realizada utilizando como referência o site <a href="https://www.remaxportalimoveis.com.br/">www.remaxportalimoveis.com.br/</a>.
                                            Responsivo, o site possui um layout atrativo e uma boa trilha de navegação, oferecendo ao visitante, as informações
                                            disponíveis com a relevância necessária, além de oferecer uma ferramenta de pesquisa que filtra os resultados e classifica para
                                            exibição, de acordo com o modelo de negócio.
                                        </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pgs esconderConteudo" id="pgPurecode">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="px-4">
                                <div class="d-flex justify-content-between">
                                <h1>Pure Code</h1><button onclick="esconderConteudo(this);" class="d-flex align-items-start"><img src="img\close-322.svg" alt="Fechar"></button>
                                </div>
                                <p>
                                    O desenvolvimento de páginas utilizando código HTML, CSS e Javascript puros, consiste na construção do site
                                    sem a utilização de um CMS ou framework de mercado.
                                    É o modelo sugerido para sites estáticos, ou aplicativos com grandes camadas exclusivas, que encapsulem regras de negócio
                                    complexas e restritas. Sites e aplicações construídos através de Pure Code tendem a ser mais caros, levam mais tempo para
                                    serem desenvolvidos e permitem um nível de customização praticamente infinito.
                                    Tem uma demanda para esse modelo de desenvolvimento?
                                </p>
                                <p class="text-end"><strong><a href="https://wa.me/5519984323300">Vamos conversar!</a></strong></p>
                            </div>
                            <div>
                                <ul class="container">
                                    <li>Acesse os sites clicando nas imagens</li>
                                    <li class="row">
                                        <div class="col-3 d-flex align-items-center">
                                            <a href="https://onepage.hospedar.net"><img src="img\onepage.png" alt="Pure Code"></a>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Criada como um primeiro trabalho onepage Pure Code, esse site tem um layout minimalista, que propõe ao visitante uma 
                                                navegação fluida, transparente e rápida. É responsivo e intuitivo, sugerindo um estilo de navegação infinita que suporta
                                                a inclusão de mais conteúdo, manual ou dinamicamente.
                                                Um trabalho simples, mas que expõe o potencial do desenvolvimento Pure Code.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pgs esconderConteudo" id="pgAWS">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="px-4">
                                <div class="d-flex justify-content-between">
                                <h1>AWS</h1><button  onclick="esconderConteudo(this);" class="d-flex align-items-start"><img src="img\close-322.svg" alt="Fechar"></button>
                                </div>
                                <p>
                                    A Amazon Web Services é uma empresa que faz parte do grupo Amazon Inc, que oferece serviços de computação em nuvem.
                                    É uma excelente opção de hospedagem, entregando estabilidade, segurança e escalabilidade (possibilidade de crescimento vertical, 
                                    em potência de recurso, além da escalabilidade horizontal, que é quantidade de recursos).
                                    Eu tenho mais de 10 anos de experiência com a configuração e operação de ambientes linux na AWS, me posicionando como facilitador e
                                    canal de suporte para aqueles que decidirem hospedar os seu sites e aplicações web com a Amazon.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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