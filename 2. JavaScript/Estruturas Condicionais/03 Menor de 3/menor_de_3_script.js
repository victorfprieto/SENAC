/* Exercício 03: */
    let primeiroValor = Number(prompt("Digite o primeiro valor: "));
    let segundoValor = Number(prompt("Digite o segundo valor: "));
    let terceiroValor = Number(prompt("Digite o terceiro valor: "));

    let menorValor;

    if (primeiroValor < segundoValor && primeiroValor < terceiroValor){
        menorValor = primeiroValor;
    } else if (segundoValor < terceiroValor){
        menorValor = segundoValor;
    } else {
        menorValor = terceiroValor;
    }

    alert("MENOR= "+ menorValor);