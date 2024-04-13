
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

for (x of allBars) {
    console.log(x.textContent, " good");
}





window.addEventListener('resize', displayScreenWidth); 

function displayScreenWidth() { 
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
displayScreenWidth();