

function valid(){
    var nome = document.f.nome_produto.value;
    var valor = document.f.valor_produto.value;
    var data = document.f.data_cadstro.value;
    
    if(nome === ""){
     alert('Confere se não tem espacio vazio');
     return false;
    }if(valor === ""){
        alert('Confere se não tem espacio vazio');
        return false;
    }if(data === ""){
        alert('Confere se não tem espacio vazio');
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