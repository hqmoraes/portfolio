function exibirEscopo(){
    document.querySelectorAll('.escopo').forEach(escopo =>{
        escopo.classList.remove('esconderEscopo');
        escopo.classList.add('exibirEscopo');
        document.getElementById('contato').classList.remove('esconderEscopo');
        document.getElementById('contato').classList.add('exibirEscopo');
        document.getElementById('titulo').classList.remove('exibirEscopo');        
        document.getElementById('titulo').classList.add('esconderEscopo');
    })
    document.getElementById('itens').onclick = function() {esconderEscopo()};
}

function esconderEscopo(){
    document.querySelectorAll('.escopo').forEach(escopo =>{
        escopo.classList.remove('exibirEscopo');
        escopo.classList.add('esconderEscopo');
        document.getElementById('contato').classList.remove('exibirEscopo');
        document.getElementById('contato').classList.add('esconderEscopo');        
        document.getElementById('titulo').classList.add('exibirEscopo');
        document.getElementById('titulo').classList.remove('esconderEscopo');
    })
    document.getElementById('itens').onclick = function() {exibirEscopo()};
}