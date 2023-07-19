let resultado = localStorage.getItem('pontua'); //pega a pontuação da página de jogo
console.log(resultado); 

let campo = document.getElementById('AparecePontFinal'); 
campo.innerHTML = "Pontuação Final: "+ resultado;


let inp = document.getElementById("inp");
inp.value = resultado;

;