const CLASS_DATA = [
    { name: 'Warrior', cssClass: 'class-warrior', roles: ['tank', 'melee-dps'] },
    { name: 'Paladin', cssClass: 'class-paladin', roles: ['tank', 'healer', 'melee-dps'] },
    { name: 'Hunter', cssClass: 'class-hunter', roles: ['ranged-dps'] },
    { name: 'Rogue', cssClass: 'class-rogue', roles: ['melee-dps'] },
    { name: 'Priest', cssClass: 'class-priest', roles: ['healer', 'ranged-dps'] },
    { name: 'Shaman', cssClass: 'class-shaman', roles: ['healer', 'melee-dps', 'ranged-dps'] },
    { name: 'Mage', cssClass: 'class-mage', roles: ['ranged-dps'] },
    { name: 'Warlock', cssClass: 'class-warlock', roles: ['ranged-dps'] },
    { name: 'Druid', cssClass: 'class-druid', roles: ['tank', 'healer', 'melee-dps', 'ranged-dps'] }
];

const wheelSvg = document.getElementById('wheelSvg');
const wheelContainer = document.getElementById('wheelContainer');
const spinBtn = document.getElementById('spinBtn');
const filterBtns = document.querySelectorAll('.filter-btn');
const skullBtn = document.getElementById('skullModeBtn');
const pointer = document.querySelector('.pointer');
const resultContainer = document.getElementById('resultContainer');
const resultLabel = document.getElementById('resultLabel');
const resultClass = document.getElementById('resultClass');
const eliminatedContainer = document.getElementById('eliminatedContainer');
const eliminatedList = document.getElementById('eliminatedList');

let currentFilter = 'all';
let isSkullMode = false;
let activeClasses = [];
let eliminatedClasses = [];
let isSpinning = false;
let currentRotation = 0;

function getFilteredClasses() {
    if (currentFilter === 'all') return [...CLASS_DATA];
    return CLASS_DATA.filter(cls => cls.roles.includes(currentFilter));
}

function resetGame() {
    activeClasses = getFilteredClasses();
    eliminatedClasses = [];
    eliminatedList.innerHTML = '';
    
    if (isSkullMode) {
        eliminatedContainer.classList.remove('hidden');
    } else {
        eliminatedContainer.classList.add('hidden');
    }

    drawWheel();
}

function drawWheel() {
    wheelSvg.innerHTML = '';
    
    currentRotation = 0;
    wheelContainer.style.transition = 'none';
    wheelContainer.style.transform = 'rotate(0deg)';
    resultContainer.classList.remove('visible');

    const numSlices = activeClasses.length;
    
    // Se sobrar apenas 1 classe no modo eliminação
    if (numSlices === 1 && isSkullMode) {
        drawWinnerCap(activeClasses[0]);
        return;
    }

    const sliceAngle = 360 / numSlices;
    const center = 250;
    const radius = 240;

    let fontSize = 22;
    if (numSlices > 6) fontSize = 18;
    if (numSlices > 8) fontSize = 16;

    activeClasses.forEach((cls, index) => {
        const startAngle = index * sliceAngle;
        const endAngle = startAngle + sliceAngle;

        const startRad = (startAngle - 90) * Math.PI / 180;
        const endRad = (endAngle - 90) * Math.PI / 180;

        const x1 = center + radius * Math.cos(startRad);
        const y1 = center + radius * Math.sin(startRad);
        const x2 = center + radius * Math.cos(endRad);
        const y2 = center + radius * Math.sin(endRad);

        const largeArcFlag = sliceAngle > 180 ? 1 : 0;
        const pathData = `M ${center} ${center} L ${x1} ${y1} A ${radius} ${radius} 0 ${largeArcFlag} 1 ${x2} ${y2} Z`;

        const sliceBg = index % 2 === 0 ? 'var(--wheel-bg-1)' : 'var(--wheel-bg-2)';

        const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path.setAttribute('d', pathData);
        path.setAttribute('fill', sliceBg);
        path.setAttribute('class', 'slice');
        wheelSvg.appendChild(path);

        const midAngle = startAngle + sliceAngle / 2;
        const textGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
        
        textGroup.setAttribute('transform', `rotate(${midAngle - 90}, ${center}, ${center})`);

        const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
        text.setAttribute('x', center + radius - 18);
        text.setAttribute('y', center);
        text.setAttribute('class', `slice-text ${cls.cssClass}`);
        text.setAttribute('font-size', `${fontSize}px`);
        text.textContent = cls.name;

        textGroup.appendChild(text);
        wheelSvg.appendChild(textGroup);
    });
}

// Renderiza a roleta cheia com a vencedora final do modo caveira
function drawWinnerCap(winnerClass) {
    const center = 250;
    const radius = 240;

    const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
    circle.setAttribute('cx', center);
    circle.setAttribute('cy', center);
    circle.setAttribute('r', radius);
    circle.setAttribute('fill', 'var(--wheel-bg-1)');
    circle.setAttribute('class', 'slice');
    wheelSvg.appendChild(circle);

    const text = document.createElementNS('http://www.w3.org/2000/svg', 'text');
    text.setAttribute('x', center);
    text.setAttribute('y', center);
    text.setAttribute('text-anchor', 'middle');
    text.setAttribute('dominant-baseline', 'middle');
    text.setAttribute('class', `slice-text ${winnerClass.cssClass}`);
    text.setAttribute('font-size', '32px');
    text.textContent = `👑 ${winnerClass.name}`;
    wheelSvg.appendChild(text);
}

function spin() {
    if (isSpinning) return;

    if (activeClasses.length <= 1 && isSkullMode) {
        resetGame();
        return;
    }

    isSpinning = true;
    spinBtn.disabled = true;
    resultContainer.classList.remove('visible');

    const numSlices = activeClasses.length;
    const sliceAngle = 360 / numSlices;

    const selectedIndex = Math.floor(Math.random() * numSlices);
    const selectedClass = activeClasses[selectedIndex];

    const sliceCenterAngle = (selectedIndex * sliceAngle) + (sliceAngle / 2);
    const extraSpins = 360 * 5;
    const targetAngle = extraSpins + (360 - sliceCenterAngle);

    currentRotation += targetAngle + (360 - (currentRotation % 360));

    const duration = 4;
    wheelContainer.style.transition = `transform ${duration}s cubic-bezier(0.15, 0.9, 0.2, 1)`;
    wheelContainer.style.transform = `rotate(${currentRotation}deg)`;

    setTimeout(() => {
        isSpinning = false;
        spinBtn.disabled = false;

        if (isSkullMode) {
            // Elimina a classe sorteada
            activeClasses.splice(selectedIndex, 1);
            eliminatedClasses.push(selectedClass);

            // Adiciona na lista visual de eliminadas
            const tag = document.createElement('span');
            tag.className = `eliminated-tag ${selectedClass.cssClass}`;
            tag.textContent = selectedClass.name;
            eliminatedList.appendChild(tag);

            resultLabel.textContent = 'Classe eliminada 💀:';
            resultClass.textContent = selectedClass.name;
            resultClass.className = `result-class ${selectedClass.cssClass}`;
            resultContainer.classList.add('visible');

            // Se sobrar apenas 1, ela é a grande campeã
            if (activeClasses.length === 1) {
                const winner = activeClasses[0];
                setTimeout(() => {
                    resultLabel.textContent = '🏆 A Grande Vencedora é:';
                    resultClass.textContent = winner.name;
                    resultClass.className = `result-class ${winner.cssClass}`;
                    spinBtn.textContent = 'Reiniciar Modo 💀';
                    drawWheel();
                }, 1200);
            } else {
                drawWheel();
            }
        } else {
            // Modo Normal
            resultLabel.textContent = 'Sua classe é:';
            resultClass.textContent = selectedClass.name;
            resultClass.className = `result-class ${selectedClass.cssClass}`;
            resultContainer.classList.add('visible');
        }
    }, duration * 1000);
}

// Event Listeners dos Filtros
filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        if (isSpinning) return;

        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        if (btn.id === 'skullModeBtn') {
            isSkullMode = true;
            pointer.classList.add('skull-mode');
            spinBtn.classList.add('skull-mode');
            spinBtn.textContent = 'Eliminar Uma Classe';
        } else {
            isSkullMode = false;
            pointer.classList.remove('skull-mode');
            spinBtn.classList.remove('skull-mode');
            spinBtn.textContent = 'Girar Roleta';
            currentFilter = btn.dataset.filter;
        }

        resetGame();
    });
});

spinBtn.addEventListener('click', spin);

// Inicialização
resetGame();