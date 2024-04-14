
const compNameInp = document.getElementById('compNameInp');
const compSlugger = document.getElementById("compSlugger");
const addForm = document.getElementById("addForm");
const subButton = document.getElementById('subButton');
const myInput = document.querySelectorAll(".myInput");

addForm.addEventListener('submit', function(event) {                          
    event.preventDefault();
});

compNameInp.addEventListener("input", updateSlug);
subButton.addEventListener("click", validateInputs);


function updateSlug() {
    let changedName = this;
    let slugBefore = changedName.value;
    let slugArray = [];

for (let i = 0; i < slugBefore.length; i++) {
    if (/[!@#$%'^"=:<>&,;*()_+]/.test(slugBefore[i])) {
        slugArray.push("_");
    }else {
    slugBefore[i] === " " ? slugArray.push("-") :
     slugBefore[i] === "é" ? slugArray.push("e") :
      slugBefore[i] === "è" ? slugArray.push("e") :
       slugBefore[i] === "à" ? slugArray.push("a") :
        slugBefore[i] === "À" ? slugArray.push("a") :
         slugBefore[i] === "ç" ? slugArray.push("c") :
          slugBefore[i] === "Ç" ? slugArray.push("c") :
           slugBefore[i] === "?" ? slugArray.push("_qm_") :
            slugBefore[i] === "/" ? slugArray.push("_slash_") :
             slugBefore[i] === "ù" ? slugArray.push("u") :
              slugBefore[i] === "." ? slugArray.push("_fs_") : slugArray.push(slugBefore[i].toLowerCase());
    }
    let slugAfter = slugArray.join("");
    compSlugger.value = slugAfter;
// console.log(slugAfter);
}
}


function validateInputs() {
    
    for (x of myInput) {
        if (!x.value || /[a-z]/.test(x.value) || /[A-Z]/.test(x.value) || /[!@#$%^"/=:'?<>&,;*()_+]/.test(x.value)){
            x.style.backgroundColor = "red";
            x.placeholder = "Remplissez correctement ce champ";
            return false;
        }else if (!compNameInp.value) {
            compNameInp.style.backgroundColor = "red";
            return false;
        }else {
            x.style.backgroundColor = "white";
            compNameInp.style.backgroundColor = "white";
        }
    }
    addForm.submit();

}

