let mes = prompt("Digite o mês: ").toLowerCase();

switch (mes){
    case "dezembro":
    case "janeiro":
    case "fevereiro":
        alert("Verão.");
        break;
    case "março":
    case "abril":
    case "maio":
        alert("Outono.");
        break;
    case "junho":
    case "julho":
    case "agosto":
        alert("Inverno.");
        break;
    case "setembro":
    case "outubro":
    case "novembro":
        alert("Primavera.");
        break;
    default:
        alert("Mês inválido.");
}