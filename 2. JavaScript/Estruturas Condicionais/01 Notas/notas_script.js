/* Exercício 01:*/
    let nota1 = Number.parseFloat(prompt("Digite a primeira nota"));
    let nota2 = Number.parseFloat(prompt("Digite a segunda nota"));

    let soma = nota1 + nota2;
    if (soma < 60){
        alert('Nota Final '+ soma +'.\n\nReprovado!');
    } else {
        alert('Nota Final '+ soma +'.\n\nAprovado!');
    }