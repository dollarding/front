function tabmenu(buttonObject){ 
    var value = buttonObject.value;
    var target = document.getElementById(value);
    if(target) {
       var siblings = target.parentNode.getElementsByTagName("div");
       for(i=0;i<siblings.length;i++){
          siblings[i].style.display = "none";
       }
       target.style.display = "block";
    }

    segunTarguet(value);
}

function segunTarguet(valor){
  console.log('este es el valor que paso '+valor);

  switch (valor) {
    case 'celular':
      console.log('celular');
      document.getElementById('celular1').className = "flecha1";
      break;
    case 'tableta':
      console.log('tableta');
     document.getElementById('celular1').className = "flecha2";
      break;
    case 'compu':
      console.log('compu');
    document.getElementById('celular1').className = "flecha3";
      break;

    default:
      // statements_def
      break;
  }

}

function Comprobar(datos){
console.log('Enviando datos'+ datos);

return datos;

}


function pongoTexto(usr){

	console.log(usr);
	document.getElementById("parrafo").innerHTML=usr;
	document.getElementById("parrafo2").innerHTML=usr;
	document.getElementById("parrafo3").innerHTML=usr;
}


