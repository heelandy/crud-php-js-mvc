

function valid(){

    var nome = document.f.nome_produto.value;
    var valor = document.f.valor_produto.value;
    var data = document.f.data_cadstro.value;
    var id  = document.f.idcat.value;
    
   

    if(nome === '' || valor === '' || data == ''|| id == '' || id < 0){
     alert('Confere se não tem espacio vazio o ID Cadastro menor que O');
     return false;
    }else{
        return true;
    }
    

}


function cat(){
    var nomecat = document.f.nomecat.value;

    if (nomecat === "") {
        alert('Não deixe vazio');
        return false;
    } else {
        return true;
    }
}



function deletar(){
     var ok = confirm("desja realmente deletar??");
     if (ok) {
         return true;   
     } else {
         return false;
     }

}