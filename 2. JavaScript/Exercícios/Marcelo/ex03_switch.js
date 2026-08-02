let numero1 = Number(prompt("Digite o primeiro número: "));
let numero2 = Number(prompt("Digite o segundo número: "));
let opcao = Number(prompt("Escolha uma opção:\n1 - Média entre os números digitados\n2 - Diferença entre os númeroa\n3 - Produto entre os números digitados\n4 - Divisão do primeiro pelo segundo"));

switch (opcao){
    case 1:
        alert((numero1 + numero2) / 2);
        break;
    case 2:
        alert(numero1 - numero2);
        break;
    case 3:
        alert(numero1 * numero2);
        break;
    case 4:
        alert(numero1 / numero2);
    default:
        alert("Opção inválida.")
}