

function valid(){
    var nome = document.f.nome_produto.value;
    var valor = document.f.valor_produto.value;
    var data = document.f.data_cadastro.value;
    
    if(nome === ""){
     alert('Nome  vazio');
     return false;
    }if(valor === ""){
        alert('Valor vazio');
        return false;
    }if(data === ""){
        alert('data vazio');
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
     var ok = confirm("deseja realmente deletar??");
     if (ok) {
         return true;   
     } else {
         return false;
     }

}