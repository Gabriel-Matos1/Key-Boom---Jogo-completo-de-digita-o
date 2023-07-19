var timer; // variável para armazenar o intervalo do cronômetro
var milliseconds = 0, seconds = 60; // variáveis para armazenar o tempo

function comecar() {
  timer = setInterval(updateTimer, 10); // inicia o intervalo para atualizar o cronômetro a cada 10 milissegundos (0.01 segundo)
  document.getElementById("startButton").disabled = true; // desabilita o botão de iniciar

}

//Função para parar tempo
function parar() {
  clearInterval(timer); // para o intervalo do cronômetro
  document.getElementById("entrada").disabled = true; // habilita o botão de iniciar
  window.location.href = "explosao.php";
  window.open('explosao.php', '_self');
}


function updateTimer() {
  milliseconds--;
  
  if (milliseconds === -1) {
    milliseconds = 99;
    seconds--;
  }

  if (seconds === -1) {
      parar(); // para o cronômetro quando chegar a zero
         }
  
  atualizar();
}

function atualizar() {
  var timeString = addzero(Math.floor(seconds / 60)) + ":" + addzero(seconds % 60) + "." + addzero(milliseconds);
  document.getElementById("timer").innerHTML = timeString;
}

function addzero(value) {
  return value < 10 ? "0" + value : value; // adiciona um zero à esquerda se o valor for menor que 10
}


const palavras = [
	"ABISSAL", "ACELERADO", "ACOMPANHAMENTO", "AGILIDADE", "ALEGORICAMENTE", "ALFACE", "ALQUIMIA", "ANEDOTA", "ANESTESISTA", 
  "APAIXONADAMENTE", "APRENDIZADO", "ARQUEOLOGIA", "ARREPENDENDO", "ASSOMBROSO", "ATROZ", "AVERIGUAR", "AXIOMA", 
  "BENEFICIAMENTO", "BRONQUITE", "BUCOLISMO", "CLANDESTINO", "COGITAR", "COGNITIVO", "COMPARTILHADO", "COMPETITIVO", 
  "COMPLEMENTAR", "COMPREENSIVAMENTE", "COMPROMETIMENTO", "COMPUTADOR", "CONJUNTIVITE", "CONSCIENTEMENTE", 
  "CONTRADITORIAMENTE", "CONTUNDENTE", "CRIPTOGRAFIA", "DELINQUENTE", "DESAFIO", "DESBRAVAR", "DESCONECTAR", "DESEMPENHO", 
  "DESENVOLVIMENTO", "DESLUMBRANTE", "DESNORTEADO", "DESTREZA", "DETERMINADA", "DICOTOMIA", "DIFICULDADE", "DILEMA", 
  "DISCIPLINAR", "ELEGANTE", "ELETROCARDIOGRAMA", "ELOQUENTE", "EMPATIA", "EMPOLGANTES", "EMPREENDIMENTO", "ENCANTADOR", 
  "ENCORAJAMENTO", "ENLOUQUECIDO", "ENTOMOLOGIA", "ENTORPECIDO", "EPIDEMIOLOGIA", "ESCLARECIMENTO", "ESCULACHO", "ESGOTANTE", 
  "ESPECIFICIDADE", "ESPETACULAR", "ESQUECIMENTO", "ESSENCIAIS", "ESTABELECIMENTO", "ESTATUETAS", "ESTENOGRAFIA", 
  "ESTIMULANTE", "ESTUPEFATO", "ETIMOLOGIA", "EUFEMISMO", "EUFORIA", "EXACERBADO", "EXCLUDENTE", "EXORBITANTE", 
  "EXPERIMENTAL", "EXPONENCIAL", "FENOMENOLOGIA", "FERROELETRICIDADE", "FISIOTERAPEUTA", "FLUIDEZ", "FORTALECIMENTO", 
  "FRUGAL", "FURTIVO", "GALANTEIO", "GENOMA", "GRACIOSO", "HABILIDADE", "HIPNOSE", "HIPOGLICEMIA", "HIPOTENUSA", "ILUDIR", 
  "IMPRENSA", "INCENTIVADO", "INCONSTITUCIONAL", "INEVITAVELMENTE", "INSTITUCIONAL", "INTEGRAR", "INTENSIVAMENTE", 
  "INTERMITENTE", "INTERNACIONAL", "INUSITADO", "LABIRINTO", "LACRAIA", "LAPIDAR", "LUDIBRIAR", "MAGNETIZADORA", 
  "MALANDRAMENTE", "MALEABILIDADE", "MALEVOLENTE", "MALHAR", "MARAVILHOSO", "MARSUPIAL", "MEGALOMANIA", "MELANCOLIA", 
  "METAMORFOSE", "MICROBIOLOGIA", "MINUCIOSAMENTE", "MIRABOLANTE", "MONITOR", "MONOTONIA", "NEBULOSO", "NECESSIDADE", 
  "OBSEQUIOSO", "OBSTINADO", "OFTALMOLOGISTA", "ORNITORRINCO", "OSTEOARTROSE", "PALAVRA", "PALEONTOLOGIA", "PARADOXAL", 
  "PARTICIPATIVO", "PEREGRINO", "PERPLEXIDADE", "PERSPECTIVA", "PERSPICAZ", "PLANEJAMENTO", "PLEONASMO", "POTENCIALIZAR", 
  "PROCRASTINAR", "PROEMINENTE", "QUIMERA", "QUIXOTESCO", "RADAR", "RAPIDEZ", "REALISTICAMENTE", "RECONHECIMENTO", 
  "REFRESCANTE", "REINVENTANDO", "RELACIONADO", "RESPLANDECER", "RESPONSABILIDADE", "RESSALVA", "RESSURGIMENTO", 
  "REVEZAMENTO", "REVOGAR", "SARCASMO", "SATISFATORIAMENTE", "SIBILANTE", "SIMPLIFICANDO", "SIMULTANEAMENTE", "SINCERAMENTE", 
  "SINCRONIZAR", "SINTAGMA", "SOBERANIA", "SOBERBO", "SOBREVIVEREMOS", "SOFISMA", "SOLIDARIEDADE", "SOTURNO", "SUBLIME", 
  "SUBVERSIVO", "SUPERAR", "SUPERFICIALIDADE", "SUPLANTAR", "SUSTENTABILIDADE", "TACITURNO", "TECLADO", "TESTE", 
  "TRANQUILIZANTE", "TRANSFORMADOR", "TRANSMITIR", "TRAVESSIA", "TREINAMENTO", "TRICOTILOMANIA", "TRIGONOMETRIA", 
  "ULTRAJANTE", "VELOCIDADE", "VENTILADOR", "VERSATILIDADE", "VISCERAL", "VIVENCIAR", "XADREZ", "XILOGRAVURA", "ZOMBARIA", 
  "ZOOLOGIA", "ZUMBIFICADO", 
  ];//as palavras que podem aparecer para o usuário digitar

let PontPartida = 0;
let vez;


function aleatorio() {
	
	let num =  Math.floor(Math.random()*100);
  document.getElementById("entrada").value="";
  document.getElementById("entrada").focus();
  aparecer(num)
	}//gera um número aleatório


function aparecer(numAle){
  let sorteado = document.getElementById ("aparece");
  let t1 = palavras[numAle];
	sorteado.innerHTML = t1;	
  return vez = numAle;
}

function descontar(){
  let entrada = document.getElementById("entrada").value;
  entrada = entrada.toUpperCase(); 
  let cert = document.getElementById("certo");
  let atual = document.getElementById("ATUAL");
  
   if(entrada != palavras[vez]){
 
  PontPartida = PontPartida-10;     

  atual.innerHTML="Pontuação Atual: "+ PontPartida;
   }}

function verificar(){
    let entrada = document.getElementById("entrada").value;
    entrada = entrada.toUpperCase(); 
    let cert = document.getElementById("certo");
    let atual = document.getElementById("ATUAL");
    
 	  if(entrada == palavras[vez]){
        aleatorio();
    
      PontPartida = PontPartida+1000;     
      	cert.innerHTML="Certo!";
        atual.innerHTML="Pontuação Atual: "+ PontPartida;
        document.getElementById("entrada").value="";
        document.getElementById("entrada").focus();
    
    }else{
      cert.innerHTML="Errado! Tente mais um pouco.";
    }
  localStorage.setItem('pontua', PontPartida);

  return PontPartida;
}

 var caixaTexto = document.getElementById("entrada");

 caixaTexto.addEventListener("keypress", descontar);
 caixaTexto.addEventListener("keydown", function(event) {
  if (event.keyCode === 13) {
    verificar();
  }
});