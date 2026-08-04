/*Exercício 03*/
let opcao;

do {
    opcao = Number(prompt("MENU\n\n"+ "1 - Mostrar tabuada\n"+ "2 - Contagem regressiva\n"+ "0 - Sair"));

    if (opcao == 1) {
 
    let numero = Number(prompt("Digite um número:"));
    let tabuada = "";
 
    for (let i = 1; i <= 10; i++) {
        tabuada += numero + " x " + i + " = " + (numero * i) + "\n";
    }
 
    alert(tabuada);
    
    } else if (opcao == 2) {
        for (let i = 10; i >= 0; i--) {
            console.log(i);
        }

    } else if (opcao == 0) {
        alert("Programa encerrado.");
    } else {
        alert("Opção inválida!");
    }
} while (opcao != 0);