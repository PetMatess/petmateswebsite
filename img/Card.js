
 console.log("calıstı");


//section oluşturma işlemi

function selectedAnimal(animalType) {
console.log("calıstı");
    var main = document.getElementById("Cards");
    main.innerHTML = "";
   
    console.log(animalType.childNodes[2].nodeValue[0]);
    if (animalType.childNodes[2].nodeValue[0] == "D") {
        aminals = '{"aminals":[' +
           '{"animalId":"809559","animlName":"karabaş","animalImg":"img/64f81c3e66cef2bad398eea6eb9231a6.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"},' +
           '{"animalId":"809559","animlName":"köpek","animalImg":"img/641e8c6487905187ecb0d237b328f5ce.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"}]}';
    } else if (animalType.childNodes[2].nodeValue[0] == "C") {
        aminals = '{"aminals":[' +
        '{"animalId":"809559","animlName":"cady","animalImg":"img/En-Cok-Tercih-Edilen-Kedi-Cinsleri-.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"},' +
        '{"animalId":"809559","animlName":"cin","animalImg":"img/a46c4eb0625bb9c85003c2a756391a58.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"}]}';
    } else if (animalType.childNodes[2].nodeValue[0] == "B") {
        aminals = '{"aminals":[' +
        
        '{"animalId":"809559","animlName":"kouş","animalImg":"img/Eopsaltria_australis_-_Mogo_Campground.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"}]}';
    }else if (animalType.childNodes[2].nodeValue[0] == "F") {
        aminals = '{"aminals":[' +
        
        '{"animalId":"809559","animlName":"balığ","animalImg":"img/Discus_fish.jpg","animlCity":"İstanbul","animlDate":"01.02.2018","animlCender":"male"}]}';

    }

    var jsonAnimals = JSON.parse(aminals);

    //section oluşturma işlemi
    var i;
    for (i = 0; i < jsonAnimals.aminals.length; i++) {
        main.innerHTML += 

            '<div class="col-md-3 ">'+
            '<div class="card mb-3 " style="border-radius: 50px 50px 0px 0px; background-color: #F9F9F9;" onclick="selectedId(this)" >'+
            '<img class="card-img-top  cardimg" src="'+jsonAnimals.aminals[i].animalImg +'" alt="Card image cap">'+
            '<div class="card-body">'+
            '<div class="d-flex justify-content-between align-items-center">'+
            '<div>'+
            '<h5 class="cardtitle">'+ jsonAnimals.aminals[i].animlName +'</h5>'+
            '<p class="cardcity">'+ jsonAnimals.aminals[i].animlCity +'</p>'+
            '<p id="animalId">'+ jsonAnimals.aminals[i].animalId +'</p>'+
            '</div>'+
            '<div>'+
            '<i onclick=" like(this)" class="fa fa-heart-o"></i>'+
            '</div>'+
            '</div>'+
                
            '<div class="d-flex align-items-center " > '+ 
            '<div class="d-flex align-items-center " style="font-size: 14px; padding: 10px;"><img style="width: 20px; height: 20px;"  src="img/88e42073f15a94a24e4ae7e56f70503c.png" alt="">'+ jsonAnimals.aminals[i].animlCender +'</div>'+
            '<div class="d-flex align-items-center " style="font-size: 14px; padding: 10px;"><img  style="width: 20px; height: 20px;" src="img/5e07484fa0adae51e26d5d8fe3c09253.png" alt="">'+ jsonAnimals.aminals[i].animlDate +'</div>'+
                  
            '</div> '+         
                 
            '</div>'+
            '</div>'+
            '</div>';

    }
}