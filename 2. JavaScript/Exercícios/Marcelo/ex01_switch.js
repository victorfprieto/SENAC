let codigo = Number(prompt("Digite o código do produto:"));

switch (codigo) {
    case 1:
        alert("Alimento não-perecível");
        break;
    case 2:
    case 3:
    case 4:
        alert("Alimento perecível");
        break;
    case 5:
    case 6:
        alert("Vestuário");
        break;

    case 7:
        alert("Higiene Pessoal");
        break;
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
        alert("Limpeza e Utensílios Domésticos");
        break;
    default:
        alert("Código inválido");
}