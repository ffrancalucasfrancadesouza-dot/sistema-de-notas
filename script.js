let pecas=[];

function adicionarPeca(){

let nome=document.getElementById("nomePeca").value;

let valor=parseFloat(document.getElementById("valorPeca").value);

if(nome=="" || isNaN(valor)){

return;

}

pecas.push({

nome,

valor

});
document.getElementById("nomePeca").value = "";
document.getElementById("valorPeca").value = "";

document.getElementById("nomePeca").focus();

mostrarPecas();
let totalPecas = 0;

}

function mostrarPecas(){

let lista=document.getElementById("listaPecas");

lista.innerHTML="";

let total=0;

pecas.forEach(p=>{

lista.innerHTML+=`

<div class="item">

<span>${p.nome}</span>

<span>R$ ${p.valor.toFixed(2)}</span>

</div>

`;

total+=p.valor;
document.getElementById("totalPecas").innerHTML =
    totalPecas.toFixed(2);

});

let mao=parseFloat(document.getElementById("maoObra").value)||0;

total+=mao;

document.getElementById("total").innerHTML=total.toFixed(2);

document.getElementById("totalHidden").value=total;

document.getElementById("pecas").value=JSON.stringify(pecas);

}

function calcularTotal(){

mostrarPecas();

}