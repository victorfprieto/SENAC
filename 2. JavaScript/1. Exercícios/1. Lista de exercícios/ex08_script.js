/*Exercício 08*/
let numero;

do {
    numero = Number(prompt("Digite um número para vermos a tabuada: \nDigite 0 para sair"));
        
    if (numero != 0){
        let tabuada = "";
        for (let i = 1; i <= 10; i++){
            tabuada += numero + " x " + i + " = " + (numero * i) + "\n";
        }

        alert(tabuada)
    }
} while (numero != 0);

alert("Programa finalizado.");