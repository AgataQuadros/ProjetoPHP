document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('formulario')

    form.addEventListener('submit', function(){

        const um = document.getElementById('val-um').value
        const dois = document.getElementById('val-dois').value

        if(um === "" || dois === ""){
            alert("Não se faz conta sem um número, adicione um valor e tente novamente");
            return;
        }
        else if(isNaN(um) || isNaN(dois)){
            alert("Esses caracteres não são calculaveis, adicione um valor valido e tente novamente");
            return;
        }
        else if(!/^\d+$/.test(um) || !/^\d+$/.test(dois)){
            alert("Por mais que calculos com letras sejam existam essa é uma calculadora simples, adicione um número e tente novamente");
            return;
        }

    })
})