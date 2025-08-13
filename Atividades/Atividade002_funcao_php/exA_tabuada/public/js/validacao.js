document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('formulario')

    form.addEventListener('submit', function(event){

        const um = document.getElementById('entrada').value

        if(um === ""){
            alert("Não se faz conta sem um número, adicione um valor e tente novamente");
            event.preventDefault();
            return;
        }
        else if(isNaN(um)){
            alert("Esses caracteres não são calculaveis, adicione um valor valido e tente novamente");
            event.preventDefault();
            return;
        }
        else if(!/^\d+$/.test(um)){
            alert("Por mais que calculos com letras sejam existam essa é uma calculadora simples, adicione um número e tente novamente");
            event.preventDefault();
            return;
        }

    })
})