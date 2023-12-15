let ham = query('.ham')
let sidemenu = query('.sidemenu')
let cancle = query('.cancle')





listener(ham,'click',show)
listener(cancle,'click',hide)



function show(){
    sidemenu.style.top = "0%";
}


function hide(){
    sidemenu.style.top = "-200%";
}



function query(a){
    return document.querySelector(a);
}


function queryAll(a){
    return document.querySelectorAll(a);
}


function listener(item,action,callback){
    return item.addEventListener(action,callback);
}