function exibirEscopo(){
    document.querySelectorAll('.escopo').forEach(escopo =>{
        escopo.classList.remove('esconderEscopo');
        escopo.classList.add('exibirEscopo');

    })
}

function esconderEscopo(){
    document.querySelectorAll('.escopo').forEach(escopo =>{
        escopo.classList.remove('exibirEscopo');
        escopo.classList.add('esconderEscopo');

    })
}

function esconderTitulo(){
    document.getElementById('titulo').classList.remove('esconderEscopo');
    document.getElementById('titulo').classList.add('exibirEscopo');
}

function exibirTitulo(){
    document.getElementById('titulo').classList.remove('exibirEscopo');        
    document.getElementById('titulo').classList.add('esconderEscopo');
}

function exibirContato(){
    document.getElementById('contato').classList.remove('esconderEscopo');
    document.getElementById('contato').classList.add('exibirEscopo');
    exibirEscopo();
    exibirTitulo();
    document.getElementById('itens').onclick = function() {esconderContato()};
}

function esconderContato(){
    document.getElementById('contato').classList.remove('exibirEscopo');
    document.getElementById('contato').classList.add('esconderEscopo'); 
    esconderEscopo();
    esconderTitulo();
    document.getElementById('itens').onclick = function() {exibirContato()};    
}

function exibirConteudo(conteudo){
    const Conteudo = document.getElementById('pg' + conteudo.id);
    Conteudo.style.zIndex=2;    
    document.querySelector('#' + Conteudo.id + ' button').dataset.id = Conteudo.id;
    esconderEscopo();    
    Conteudo.classList.remove('esconderConteudo');
    Conteudo.classList.add('exibirConteudo');
    document.getElementById('itens').disabled = true;
    document.querySelectorAll('.pgs button').forEach(b=>{
        b.disabled = false;
    });
}

function esconderConteudo(conteudo){
    const Conteudo = conteudo.dataset.id;
    document.querySelector('#' + Conteudo).classList.remove('exibirConteudo');
    document.querySelector('#' + Conteudo).classList.add('esconderConteudo');
    document.querySelector('#' + Conteudo).style.zIndex= -2;
    esconderContato();
    esconderEscopo();
    document.getElementById('itens').disabled = false;
    document.querySelectorAll('.pgs button').forEach(b=>{
        b.disabled = true;
    });
}