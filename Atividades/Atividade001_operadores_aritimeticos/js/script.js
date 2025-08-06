document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('formulario')

    form.addEventListener('submit', function(){

        const um = document.getElementById('val-um')
        const dois = document.getElementById('val-dois')

        if(um === "" || dois === ""){
            alert("Não se faz conta sem um número, adicione um valor e tente novamente");
            return;
        }
    })
})