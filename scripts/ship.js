let ham = query('.ham');
let sidemenu = query('.sidemenu');
let cancle = query('.cancle');
let proceed = queryAll(".proceed");
let back_btn = queryAll('.back-btn');
let sender_name = queryAll('.sender-name');
let sender_add = queryAll('.sender-add');
let sender_num = queryAll('.sender-num');
let receiver_name = queryAll('.receiver-name');
let receiver_add = queryAll('.receiver-add');
let receiver_num = queryAll('.receiver-num');
let item_name = queryAll('.item-name');
let item_weight = queryAll('.item-weight');
let item_val = queryAll('.item-val');









listener(ham,'click',show)
listener(cancle,'click',hide)
proceedListener(proceed,'click',flip);
proceedListener(back_btn,'click',reverse);
proceedListener(sender_name,'input',fillSenderName);
proceedListener(sender_add,'input',fillSenderAdd);
proceedListener(sender_num,'input',fillSenderNum);
proceedListener(receiver_name,'input',fillReceiverName);
proceedListener(receiver_add,'input',fillReceiverAdd);
proceedListener(receiver_num,'input',fillReceiverNum);
proceedListener(item_name,'input',fillItemName);
proceedListener(item_weight,'input',fillItemWeight);
proceedListener(item_val,'input',fillItemVal);
getValues();






function show(){
    sidemenu.style.top = "0%";
}


function fillSenderName(e,val){
    for(let i =0;i<sender_name.length;i++){
        sender_name[i].value =  !val ? this.value :val;
    }
    localStorage.setItem("sender-name",this.value);
}

function fillSenderAdd(e,val){
    for(let i =0;i<sender_add.length;i++){
        sender_add[i].value =  !val ? this.value :val;
    }
    localStorage.setItem("sender-add",this.value);
}

function fillSenderNum(e,val){
    for(let i =0;i<sender_num.length;i++){
        sender_num[i].value =  !val ? this.value :val;
    }
    localStorage.setItem("sender-num",this.value);
}


function fillReceiverName(e,val){
    for(let i =0;i<receiver_name.length;i++){
        receiver_name[i].value = !val ? this.value :val;
    }
    localStorage.setItem("receiver-name",this.value);
}


function fillReceiverAdd(e,val){
    for(let i =0;i<receiver_add.length;i++){
        receiver_add[i].value = !val ? this.value :val;
    }
    localStorage.setItem("receiver-add",this.value);
}


function fillReceiverNum(e,val){
    for(let i =0;i<receiver_num.length;i++){
        receiver_num[i].value = !val ? this.value :val;
    }
    localStorage.setItem("receiver-num",this.value);
}


function fillItemName(e,val){
    for(let i =0;i<item_name.length;i++){
        item_name[i].value = !val ? this.value :val;
    }
    localStorage.setItem("item-name",this.value);
}

function fillItemWeight(e,val){
    for(let i =0;i<item_weight.length;i++){
        item_weight[i].value = !val ? this.value :val;
    }
    localStorage.setItem("item-weight",this.value);
}

function fillItemVal(e,val){
    for(let i =0;i<item_val.length;i++){
        item_val[i].value = !val ? this.value :val;
    }
    localStorage.setItem("item-val",this.value);
}

function flip(){
    if(this.classList.contains("f1")){
        proceed[1].parentNode.style.zIndex = "5";
        proceed[0].parentNode.style.zIndex = '3';
        proceed[2].parentNode.style.zIndex = '2';
    }else if(this.classList.contains("s1")){
        proceed[1].parentNode.style.zIndex = "3";
        proceed[0].parentNode.style.zIndex = '2';
        proceed[2].parentNode.style.zIndex = '5';
    }
}


function reverse(){

    if(this.classList.contains("b3")){
        proceed[1].parentNode.style.zIndex = "5";
        proceed[0].parentNode.style.zIndex = '3';
        proceed[2].parentNode.style.zIndex = '2';
    }else if(this.classList.contains("b2")){
        proceed[1].parentNode.style.zIndex = "3";
        proceed[0].parentNode.style.zIndex = '5';
        proceed[2].parentNode.style.zIndex = '2';
    }else{
        return
    }


}


function proceedListener(item,action,callback){

    for(let i = 0;i<item.length;i++){
        listener(item[i],action,callback);
    }

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


function getValues(){
    let Sender_name = localStorage.getItem('sender-name')||'';
    let Sender_add = localStorage.getItem('sender-add')||'';
    let Sender_num = localStorage.getItem('sender-num')||'';
    let Receiver_name = localStorage.getItem('receiver-name')||'';
    let Receiver_add = localStorage.getItem('receiver-add')||'';
    let Receiver_num = localStorage.getItem('receiver-num')||'';
    let Item_name = localStorage.getItem('item-name')||'';
    let Item_weight = localStorage.getItem('item-weight')||'';
    let Item_val = localStorage.getItem('item-val')||'';

    for(let i =0;i<sender_name.length;i++){
        sender_name[i].value = Sender_name;
        sender_add[i].value = Sender_add;
        sender_num[i].value = Sender_num;
        receiver_name[i].value = Receiver_name;
        receiver_add[i].value = Receiver_add;
        receiver_num[i].value = Receiver_num;
        item_name[i].value = Item_name;
        item_weight[i].value = Item_weight;
        item_val[i].value = Item_val;
    }

}