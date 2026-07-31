/* Exercício 04: */
    let minutosConsumidos = parseInt(prompt("Digite a quantidade de minutos:"));
    let valorTotal = 50.00;

    if (minutosConsumidos > 100) {
        let minutosExcedentes = minutosConsumidos - 100;
        valorTotal += minutosExcedentes * 2.00;
    }

    alert("Valor a pagar: R$ "+ valorTotal.toFixed(2));