
const incBarJan = document.getElementById("incBarJan");
const incBarFeb = document.getElementById("incBarFeb");
const incBarMar = document.getElementById("incBarMar");
const incBarApr = document.getElementById("incBarApr");
const incBarMay = document.getElementById("incBarMay");
const incBarJun = document.getElementById("incBarJun");
const incBarJul = document.getElementById("incBarJul");
const incBarAug = document.getElementById("incBarAug");
const incBarSep = document.getElementById("incBarSep");
const incBarOct = document.getElementById("incBarOct");
const incBarNov = document.getElementById("incBarNov");
const incBarDec = document.getElementById("incBarDec");
const incGraphJan = document.getElementById('incGraphJan');
const incGraphFeb = document.getElementById('incGraphFeb');
const incGraphMar = document.getElementById('incGraphMar');
const incGraphApr = document.getElementById('incGraphApr');
const incGraphMay = document.getElementById('incGraphMay');
const incGraphJun = document.getElementById('incGraphJun');
const incGraphJul = document.getElementById('incGraphJul');
const incGraphAug = document.getElementById('incGraphAug');
const incGraphSep = document.getElementById('incGraphSep');
const incGraphOct = document.getElementById('incGraphOct');
const incGraphNov = document.getElementById('incGraphNov');
const incGraphDec = document.getElementById('incGraphDec');
const diaporama = document.getElementById("diaporama");

function makeGraphs() {
let allBars = [
    incBarJan,
    incBarFeb,
    incBarMar,
    incBarApr,
    incBarMay,
    incBarJun,
    incBarJul,
    incBarAug,
    incBarSep,
    incBarOct,
    incBarNov,
    incBarDec
];

let allGraphs = [
    incGraphJan,
    incGraphFeb,
    incGraphMar,
    incGraphApr,
    incGraphMay,
    incGraphJun,
    incGraphJul,
    incGraphAug,
    incGraphSep,
    incGraphOct,
    incGraphNov,
    incGraphDec    
];
let aveIncome = 0;
for (let i = 0; i < allBars.length; i++) {
    allGraphs[i].value = allBars[i].textContent
    aveIncome += parseInt(allGraphs[i].value);
}

aveIncome = aveIncome/12;
console.log(aveIncome);
for (x of allGraphs) {
 
if (parseInt(x.value) > aveIncome) {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-success");
    
}else if (parseInt(x.value) > aveIncome*0.75) {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-warning");
}else {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-danger");
}
}
allBars = [];
allGraphs = [];
// console.log(allBars);
}
makeGraphs();
/*
diaporama.addEventListener('transitionend', function (){
    makeGraphs();
});
*/

window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();