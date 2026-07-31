/* Exercício 02: */
    let coeficienteA = Number.parseFloat(prompt("Digite o Coeficiente A: "));
    let coeficienteB = Number.parseFloat(prompt("Digite o Coeficiente B: "));
    let coeficienteC = Number.parseFloat(prompt("Digite o Coeficiente C: "));

    let delta = (coeficienteB * coeficienteB) - (4 * coeficienteA * coeficienteC);

    if (delta < 0 || coeficienteA === 0){
        alert("Esta equação não possui raízes reais");
    } else {
        let x1 = (-coeficienteB + Math.sqrt(delta)) / (2 * coeficienteA);
        let x2 = (-coeficienteB - Math.sqrt(delta)) / (2 * coeficienteA);

        alert("X1 = "+ x1.toFixed(4)+ "\nX2 = "+ x2.toFixed(4));
    }
