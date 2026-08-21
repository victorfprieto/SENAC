//variaveis
var diff1 = window.document.getElementsByClassName('facil');
var diff2 = window.document.getElementsByClassName('medio');
var diff3 = window.document.getElementsByClassName('dificil');

var lang1 = window.document.getElementsByClassName('csharp')
var lang2 = window.document.getElementsByClassName('js')
var lang3 = window.document.getElementsByClassName('php')

var filtrar = window.document.getElementById('filtrar');
var btfiltrar = window.document.getElementById('botao-filtrar');

//função filtrar por dificuldade
function filtrardiff(){
    switch(filtrar.value){
        case 'todos':
            for(i = 0; i < diff1.length; i++){
            diff1[i].style.display = 'flex';
            }
            for(o = 0; o < diff2.length; o++){
            diff2[o].style.display = 'flex';
            }
            for(p = 0; p < diff3.length; p++){
            diff3[p].style.display = 'flex';
            }
            break;

        case 'facil':
            for(i = 0; i < diff1.length; i++){
            diff1[i].style.display = 'flex';
            }
            for(o = 0; o < diff2.length; o++){
            diff2[o].style.display = 'none';
            }
            for(p = 0; p < diff3.length; p++){
            diff3[p].style.display = 'none';
            }
            break;

        case 'medio':
            for(i = 0; i < diff1.length; i++){
            diff1[i].style.display = 'none';
            }
            for(o = 0; o < diff2.length; o++){
            diff2[o].style.display = 'flex';
            }
            for(p = 0; p < diff3.length; p++){
            diff3[p].style.display = 'none';
            }
            break;

        case 'dificil':
            for(i = 0; i < diff1.length; i++){
            diff1[i].style.display = 'none';
            }
            for(o = 0; o < diff2.length; o++){
            diff2[o].style.display = 'none';
            }
            for(p = 0; p < diff3.length; p++){
            diff3[p].style.display = 'flex';
            }
            break;

            //linguagem
        case 'csharp':
            for(i = 0; i < lang1.length; i++){
            lang1[i].style.display = 'flex';
            }
            for(o = 0; o < lang2.length; o++){
            lang2[o].style.display = 'none';
            }
            for(p = 0; p < lang3.length; p++){
            lang3[p].style.display = 'none';
            }
            break;

        case 'js':
            for(i = 0; i < lang1.length; i++){
            lang1[i].style.display = 'none';
            }
            for(o = 0; o < lang2.length; o++){
            lang2[o].style.display = 'flex';
            }
            for(p = 0; p < lang3.length; p++){
            lang3[p].style.display = 'none';
            }
            break;

        case 'php':
            for(i = 0; i < lang1.length; i++){
            lang1[i].style.display = 'none';
            }
            for(o = 0; o < lang2.length; o++){
            lang2[o].style.display = 'none';
            }
            for(p = 0; p < lang3.length; p++){
            lang3[p].style.display = 'flex';
            }
            break;
    }
}





