/*Exercício 09*/
let idade;
let maiores = 0;

for (let i = 1; i <= 5; i++) {
    
    idade = Number(prompt("Digite a idade do " + i + "° aluno: "));

    while (idade < 0 || idade > 120) {
        idade = Number(prompt("Idade inválida!\nDigite novamente: "));
    }

    if (idade >= 18) {
        maiores++;
    }
}

alert("Quantidade de alunos maiores de idade: " + maiores);