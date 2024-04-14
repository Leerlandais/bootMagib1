const incBar = document.querySelectorAll(".incBar");
const incGraph = document.querySelectorAll(".incGraph");

console.log(incBar.length, incGraph.length);

// AH OK. The problem is because it is taking ALL companies info (i.e. 12months*12companies = 144)














/*
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
const moyenneTag = document.getElementById("moyenneTag");

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
aveIncome = Math.round(aveIncome * 100) / 100
moyenneTag.textContent = 'Moyenne : €' + aveIncome + "/mois";

console.log(aveIncome);

for (x of allGraphs) {
    if (x.value < (aveIncome*1.1) && x.value > (aveIncome*0.9)) {
        x.classList.remove("bg-transparent");
        x.classList.add("bg-info");
    }else if (x.value > (aveIncome*1.1)) {
        x.classList.remove("bg-transparent");
        x.classList.add("bg-success");
    }else if (x.value > (aveIncome*0.6) && x.value < (aveIncome*0.9)) {
        x.classList.remove("bg-transparent");
        x.classList.add("bg-warning");
    }else {
        x.classList.remove("bg-transparent");
        x.classList.add("bg-danger");
    }

}

}
makeGraphs();

diaporama.addEventListener('transitionend', function (){
    allBars = [];
    allGraphs = [];
    console.log(allGraphs);
        makeGraphs();
});

/*
window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();

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
*/

