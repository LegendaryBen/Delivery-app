let ham = query('.ham')
let sidemenu = query('.sidemenu')
let cancle = query('.cancle')
let card = Array.from(queryAll('.card'));
let video1 = Array.from(queryAll('.video1'));
let section2 = query('.section2');
let section4 = query('.section4');
let section5 = query('.section5');
let section7 = query('.section7');







listener(ham,'click',show)
listener(cancle,'click',hide)
listener(window,'scroll',move)



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


function move(e){
    let scrollvalue = scrollY;
    let section2Pos = section2.getBoundingClientRect().top
    let section5Pos = section5.getBoundingClientRect().top
    let tran;
    let tran2;
    
    if(scrollvalue < section2Pos-300){
        tran = 1
        for(let i=0;i<card.length;i++){
            card[i].style.transition = `${tran}s`;
            card[i].style.transform = "translateY(350%)"
            tran += 0.5;
        }

    }else{
        tran = 1
        for(let i=0;i<card.length;i++){
            card[i].style.transition = `${tran}s`;
            card[i].style.transform = "translateY(0%)"
            tran += 0.5;
        }

    }


    if(scrollvalue < section5Pos+800){
        tran2 = 1
        for(let i=0;i<video1.length;i++){
            video1[i].style.transition = `${tran2}s`;
            video1[i].style.transform = "translateY(350%)"
            tran2 += 0.5;
        }

    }else{
        tran2 = 1
        for(let i=0;i<video1.length;i++){
            video1[i].style.transition = `${tran2}s`;
            video1[i].style.transform = "translateY(0%)"
            tran2 += 0.5;
        }

    }


}


function load(){

    let str = '';
    let str2 = '';
    for(let i = 0;i<20;i++){
        str += `
            <div class="image-slider">
                <img src="images/Apple.jpg" alt="">
                <img src="images/Hermes.jpg" alt="">
                <img src="images/Adidas.jpg" alt="">
                <img src="images/Nvidia.jpg" alt="">
                <img src="images/Nike.jpg" alt="">
                <img src="images/Kelloggs.jpg" alt="">
                <img src="images/Red_Bull.jpg" alt="">
                <img src="images/Unilever.jpg" alt="">
                <img src="images/Sony.jpg" alt="">
                <img src="images/Shell.jpg" alt="">
            </div>
        `

        str2 += `
                <div class="people-slider">
                <div class="people-card">
                    <div class="people1">
                        <img src="images/darell.png" alt="">
                        <div>
                            Darrell Anthony
                        </div>
                    </div>
                    <div class="speech">
                        "Our business relies heavily on timely shipments,<br/>
                        and surelink express has consistently exceeded our<br/>
                        expectations. Their attention to detail and<br/>
                        commitment to meeting delivery deadlines make<br/>
                        them our go-to partner. Highly recommended."
                    </div>
                </div>
                <div class="people-card">
                    <div class="people1">
                        <img src="images/rohan.png" alt="">
                        <div>
                            Rohan Patel
                        </div>
                    </div>
                    <div class="speech">
                        "I have been working with surelink express for<br/>
                        several years now, and they have proven to be a<br/>
                        reliable and efficient partner for our global logistics<br/>
                        needs. Their communication is excellent, and we<br/>
                        appreciate the transparency throughout the<br/>
                        shipping process."
                    </div>
                </div>
                <div class="people-card">
                    <div class="people1">
                        <img src="images/gitua.png" alt="">
                        <div>
                            Nyambura Githua
                        </div>
                    </div>
                    <div class="speech">
                        "The professionalism displayed by this freight<br/>
                        company is truly commendable. From the moment<br/>
                        we engage them to the delivery of our goods,<br/>
                        every step is handled with precision and care. It's<br/>
                        reassuring to work with a team that takes pride in<br/>
                        their work."
                    </div>
                </div>
                <div class="people-card">
                    <div class="people1">
                        <img src="images/rodri.png" alt="">
                        <div>
                            Isabella Rodríguez
                        </div>
                    </div>
                    <div class="speech">
                        "What sets this surelink express apart<br/>
                        is their ability to provide flexible<br/>
                        solutions tailored to our unique<br/>
                        shipping challenges. Whether it's a<br/>
                        small parcel or a large shipment, they<br/>
                        always find the most cost-effective and<br/>
                        efficient way to get our goods where<br/>
                        they need to be."
                    </div>
                </div>

            </div>
        
        `
    }

    section4.innerHTML = str;
    section7.innerHTML = str2;
}

load()