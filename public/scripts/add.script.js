
const compNameInp = document.getElementById('compNameInp');
const compSlugger = document.getElementById("compSlugger");

    compNameInp.addEventListener("input", updateSlug);


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