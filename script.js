const card = document.getElementById("card");



for(let i = 1; i <= 50; i++){

  const dynamicImage = document.createElement("img");
  const dynamicSpan = document.createElement("span"); 


  var img_no = i*2
  var val;
  if(img_no < 10){
    val = "000"+img_no.toString() 
  }
  else if( img_no >= 10 && img_no < 100){
    val = "00"+img_no.toString() 
  }
  else if( img_no >= 100){
    val = "0"+img_no.toString() 
  }

  dynamicSpan.style = "--i:"+i.toString()+";"

  dynamicImage.src = "./assets/addroom_modular_3030_door_dwarf_panel_"+val+".jpg"
  card.appendChild(dynamicSpan)
  card.appendChild(dynamicImage)

}


function getImages(){


  
}

