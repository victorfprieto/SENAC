let numero1 = Number(prompt("Digite o primeiro número: "));
let numero2 = Number(prompt("Digite o segundo número: "));
let operador = prompt("Qual operação quer fazer:\n- Adição (+)\n- Subtração (-)\n- Multiplicação(*)\n- Divisão (/)\n\n OBS: Digite o sinal (+, -, * ou /).");

switch (operador){
    case "+":
        alert(numero1 +" + "+ numero2 +" = "+ (numero1 + numero2));
        break;
    case "-":
        alert(numero1 +" - "+ numero2 +" = "+ (numero1 - numero2));
        break;
    case "*":
        alert(numero1 +" * "+ numero2 +" = "+ (numero1 * numero2));
        break;
    case "/":
        alert(numero1 +" / "+ numero2 +" = "+ (numero1 / numero2));
        break;
    default:
        alert("Operação inválida.");
}