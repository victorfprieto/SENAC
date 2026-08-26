// Botão Dark Mode
const darkMode = () => {
    var element = document.body;
    element.classList.toggle("dark-mode");

}

// Mostrar a Data
const displayDate = () => {
    const dataFormatada = new Date().toLocaleDateString('pt-BR', { dateStyle: 'full' });
    return document.getElementById('data').innerHTML = dataFormatada;
}

// Conversor de temperatura
const temperatureConverter = (valNum) => {
    const num = parseFloat(valNum);
    const outputElement = document.getElementById("outputCelsius");

    if (isNaN(num)) {
        outputElement.innerHTML = "";
        outputElement.style.color = "";
        return;
    }

    const celsius = Math.round((num - 32) / 1.8);
    outputElement.innerHTML = celsius + "°C";

    if (celsius > 30) {
        outputElement.style.color = "#f75a68";
    } else if (celsius < 15) {
        outputElement.style.color = "#3294f8";
    } else {
        outputElement.style.color = "#00875f";
    }
}
// Botão de Reset
const resetConverter = () => {
    document.getElementById("inputFahrenheit").value = "";
    document.getElementById("outputCelsius").innerHTML = "";
}