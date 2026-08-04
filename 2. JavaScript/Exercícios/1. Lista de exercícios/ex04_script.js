/*Exercício 04*/
let saldo = 500;
let saque = 1;

while (saque != 0 && saldo >= 0){
    saque = Number(prompt("Saldo: R$ "+ saldo +"\nDigite o valor do saque \n(0 para Sair):"));

    if (saque == 0){
        alert("Operação encerrada.");
    } else if (saque > saldo) {
        alert("Erro! Saldo insuficiente.");
    } else {
        saldo = saldo - saque;
        alert("Saque realizado com sucesso!\nSaldo restante: R$ "+ saldo);
    }
}