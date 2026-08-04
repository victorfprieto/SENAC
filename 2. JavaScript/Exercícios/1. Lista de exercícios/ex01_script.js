/*Exercícios 01*/
let senha = "";
let tentativas = 3;

while (tentativas > 0) {
    senha = prompt("Digite a senha:\nTentativas restantes: "+ tentativas);

    if (senha == "1234") {
        alert("Senha correta!");

        for (let i = 1; i <= 5; i++) {
            alert("Bem-vindo ao sistema!");
        }
        break;
    } else {
        tentativas--;

        if (tentativas > 0) {
            alert("Senha incorreta!");
        }
    }
}

if (senha != "1234") {
    alert("Número máximo de tentativas atingido.");
}