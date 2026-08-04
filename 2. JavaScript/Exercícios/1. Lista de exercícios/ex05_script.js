/*Exercício 05*/
let quantidade;

do {
    quantidade = Number(prompt("Quantos números você deseja somar?"));

    if (quantidade <= 0) {
        alert("Digite um número maior que 0.");
    }
} while (quantidade <= 0);

let soma = 0;

for (let i = 1; i <= quantidade; i++) {
    let numero = Number(prompt("Digite o "+ i +"° número: "));

    soma = soma + numero;
}

alert("A soma dos números é: "+ soma);