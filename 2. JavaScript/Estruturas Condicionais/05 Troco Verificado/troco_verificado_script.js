/* Exercício 05: */
    let precoUnitario = parseFloat(prompt("Preço unitário do produto:"));
    let quantidadeComprada = parseInt(prompt("Quantidade comprada:"));
    let dinheiroRecebido = parseFloat(prompt("Dinheiro recebido:"));

    let valorTotal = precoUnitario * quantidadeComprada;

    if (dinheiroRecebido >= valorTotal) {
        let troco = dinheiroRecebido - valorTotal;
        alert("Troco = "+ troco.toFixed(2));
    } else {
        let falta = valorTotal - dinheiroRecebido;
        alert("Dinheiro insuficiente. Faltam: "+ falta.toFixed(2)+ " reais.");
    }