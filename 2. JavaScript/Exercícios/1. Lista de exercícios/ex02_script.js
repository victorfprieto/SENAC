/*Exercício 02*/
let nota;
let soma = 0;
 
for (let i = 1; i <= 4; i++) {
  do {
    nota = Number(prompt("Digite a nota do " + i + "º bimestre (0 a 10): "));
 
    if (isNaN(nota) || nota < 0 || nota > 10) {
      alert("Nota inválida! Digite apenas números entre 0 e 10.");
    }
  } while (isNaN(nota) || nota < 0 || nota > 10);
 
  soma = soma + nota;
}
 
let media = soma / 4;

alert("A média do aluno é: " + media);