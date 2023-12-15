let error = document.querySelector(".error"), cancle2 = document.querySelector(".error span");

cancle2.onclick = function(){
    error.style.top = "-150%";
}

setTimeout(()=>{
    error.style.top = "-150%";
},4000)