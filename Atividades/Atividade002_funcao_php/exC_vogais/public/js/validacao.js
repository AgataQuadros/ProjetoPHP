document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('formulario')

    form.addEventListener('submit', function(event){

        const um = document.getElementById('entrada').value;

        if(um === ""){
            alert("Não da pra fazer a contagem com uma entrada vazia");
            event.preventDefault();
            return;
        }

        // else if(isNaN(um)){
        //     alert("Esses caracteres não são calculaveis, adicione ");
        //     event.preventDefault();
        //     return;
        // }

        else if(!/^[A-Za-zÀ-ÿ\s]+$/.test(um)){
            alert("Por mais que calculos com letras sejam existam essa é uma calculadora simples, adicione um número e tente novamente");
            event.preventDefault();
            return;
        }

    })
});