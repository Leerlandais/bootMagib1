const incBar = document.querySelectorAll(".incBar");
const incGraph = document.querySelectorAll(".incGraph");
const moyenneTag = document.getElementById('moyenneTag');



let allBars = [];
let allGraphs = [];


function resizeArrays() {
    for (let i = 0; i < incBar.length; i++) {
        allBars[i] = incBar[i].textContent;
        allGraphs[i] = allBars[i];
    }
    const choppedArray = [];
    for (let i = 0; i < allGraphs.length; i += 12) {
        choppedArray.push(allGraphs.slice(i, i + 12));
    }
    console.log(choppedArray);
 //   makeGraphs(choppedArray);
 for (x of choppedArray) {
    getAverageOfArray(x);
 }
}

function getAverageOfArray(aveThis) {
    
    let aveIncome = 0;
    for (x of aveThis) {
        aveIncome += parseInt(x);
    }
    aveIncome = aveIncome/12;
    aveIncome = Math.round(aveIncome * 100) / 100
    moyenneTag.textContent = 'Moyenne : €' + aveIncome + "/mois";
    console.log(aveIncome);
makeGraphs(aveThis, aveIncome);
}


function makeGraphs (allAmounts ,incAve) {
   
    for (let i = 0; i < incGraph.length; i++) {
        let tempAmt = parseInt(allAmounts[i]);
        
        if (tempAmt < (incAve*1.1) && tempAmt > (incAve*0.9)) {
            incGraph[i].classList.remove("bg-transparent");
            incGraph[i].classList.add("bg-info");
        }else if (tempAmt > (incAve*1.1)) {
            incGraph[i].classList.remove("bg-transparent");
            incGraph[i].classList.add("bg-success");
        }else if (tempAmt > (incAve*0.6) && tempAmt < (incAve*0.9)) {
            incGraph[i].classList.remove("bg-transparent");
            incGraph[i].classList.add("bg-warning");
        }else {
            incGraph[i].classList.remove("bg-transparent");
            incGraph[i].classList.add("bg-danger");
        }
    
    }
}

resizeArrays();






/*

const diaporama = document.getElementById("diaporama");
const moyenneTag = document.getElementById("moyenneTag");

function makeGraphs() {


for (let i = 0; i < allBars.length; i++) {
    allGraphs[i].value = allBars[i].textContent
    aveIncome += parseInt(allGraphs[i].value);
}

aveIncome = aveIncome/12;
aveIncome = Math.round(aveIncome * 100) / 100
moyenneTag.textContent = 'Moyenne : €' + aveIncome + "/mois";

console.log(aveIncome);



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

if (parseInt(x) > aveIncome) {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-success");
    
}else if (parseInt(x) > aveIncome*0.75) {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-warning");
}else {
    x.classList.remove("bg-transparent");
    x.classList.add("bg-danger");
}
*/

