let togg1 = document.getElementById("button_experience");
let togg2 = document.getElementById("button_formation");
let d1 = document.getElementById("experience");
let d2 = document.getElementById("formation");

console.log(d1);
console.log(d2);
console.log(togg1);
console.log(togg1);

togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})

function togg(){
  if(getComputedStyle(d2).display != "none"){
        d1.style.display = "none";
    } else {
        d1.style.display = "none";
        d2.style.display = "block";
  }
};
togg2.onclick = togg();