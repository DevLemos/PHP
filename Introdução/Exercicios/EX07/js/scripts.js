document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('txtTelefone').addEventListener('input', function (e) {
        let telefone = e.target.value;

        // Remove todos os caracteres que não são números
        telefone = telefone.replace(/\D/g, '');

        // Adiciona a formatação do telefone
        if (telefone.length > 10) {
            telefone = telefone.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
        } else if (telefone.length > 5) {
            telefone = telefone.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
        } else if (telefone.length > 2) {
            telefone = telefone.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
        } else {
            telefone = telefone.replace(/^(\d*)/, '($1');
        }

        // Define o valor do campo com a formatação aplicada
        e.target.value = telefone;
    });

    document.getElementById('txtNumero').addEventListener('input', function (e) {
        let numero = e.target.value;

        // Remove todos os caracteres que não são números
        numero = numero.replace(/\D/g, '');

        // Define o valor do campo com a formatação aplicada
        e.target.value = numero;
    });

    document.getElementById('formularioId').addEventListener('submit', function(event){
        event.preventDefault();
    
        let dadosForm = new FormData(this);
    
        let obj = new XMLHttpRequest();
    
        obj.open('POST','processa_formulario.php', true);
        obj.onload = () =>{
            if(obj.status === 200){
                document.getElementById('formularioId').classList.add('hidden');
                document.getElementById('agradecimentoId').classList.remove('hidden');
            } else{
                alert('Ocorreu um erro. Tente novamente.')
            }
        };
        obj.send(dadosForm);
    
    });
});


