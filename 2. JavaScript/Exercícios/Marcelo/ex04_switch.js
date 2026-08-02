let codigoProduto = Number(prompt("Digite o código do produto adquirido: "));
let quantidadeProduto = Number(prompt("Digite a quantidade: "));
let total = 0;

switch (codigoProduto){
    case 100:
        total = quantidadeProduto * 1.70;
        break;
    case 101:
        total = quantidadeProduto * 2.30;
        break;
    case 102:
        total = quantidadeProduto * 2.60;
        break;
    case 103:
        total = quantidadeProduto * 2.40;
        break;
    case 104:
        total = quantidadeProduto * 2.50;
        break;
    case 105:
        total = quantidadeProduto * 1.00;
        break;
    default:
        alert("Código inválido.");
}

if (total > 0) {
    alert("Valor a pagar: R$"+ total.toFixed(2));
}