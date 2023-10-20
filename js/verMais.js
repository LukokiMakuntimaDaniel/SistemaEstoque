vector=[]
quantidadeDeProduto=0
precoTotal=0
function vermais(){
    cont=1
    pai=document.getElementsByClassName("card")[0]
    osfilhos=document.querySelectorAll("fieldset")
    index=0
    for ( index = 0; index < osfilhos.length; index++) {
      if(osfilhos[index].style.display=="block" || osfilhos[index].style.display ==''){
        pai.removeChild(osfilhos[index])
      }else{
            if(cont<=6){
              atributo=osfilhos[index].getAttribute("id")
              elemento=$("#"+atributo)
              elemento.delay(1000).fadeIn()
              //osfilhos[index].style.display="block"
              cont++
          }
      }
    }
    if(osfilhos=document.querySelectorAll("fieldset").length==0){
      window.location="./homePage.php"
    }



}

function aumentar(botao){
  bloquear=0
 
  objecto={nome:"",quantidade:0,totalPago:0}
  texto=botao.parentNode.textContent
  preco=texto.substring(0,texto.length-2)
 
  nomeProduto=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.firstChild.textContent
  saber=0

  idFieLdSet=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
  numeroA=idFieLdSet.substring(1,idFieLdSet.length)
  diminui="D"+numeroA
  document.getElementById(diminui).disabled=false

  idFieLdSet=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
  numeroA=idFieLdSet.substring(1,idFieLdSet.length)
  quantidadeReal=parseInt(document.getElementById("Q"+numeroA).textContent)   


  if(quantidadeReal!=0){
    vector.forEach((item) => {
      if(item.nome==nomeProduto){
        if(item.quantidade<quantidadeReal){
          item.quantidade+=1
          item.totalPago+=parseInt(preco)
        }else{
          botao.disabled=true
          bloquear++
        }
        saber++
      }
      
    });
    if(saber==0){
      objecto.nome=nomeProduto
      objecto.quantidade=1
      objecto.totalPago=parseInt(preco)
      vector.push(objecto)
    }
    if(bloquear==0){
      quantidadeDeProduto++
      precoTotal+=parseInt(preco)
       document.getElementById("valorQ").textContent=quantidadeDeProduto
    document.getElementById("valorD").textContent=precoTotal+" Kz"
    }
    apagarInput()
    adInput()
  } 
}

function diminuir(botao) {
  bloquear=0
  texto=botao.parentNode.textContent
  preco=texto.substring(0,texto.length-2)
  nomeProduto=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.firstChild.textContent
  
  idFieLdSet=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
  numeroA=idFieLdSet.substring(1,idFieLdSet.length)
  aumentara="A"+numeroA
  console.log(aumentara)
  document.getElementById(aumentara).disabled=false

  vector.forEach((item) => {
    if(item.nome==nomeProduto){
      if(item.quantidade>0){
        item.quantidade-=1
        item.totalPago-=parseInt(preco)
      }else{
        idFieLdSet=botao.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.getAttribute("id")
        numeroA=idFieLdSet.substring(1,idFieLdSet.length)
        diminui="D"+numeroA
        document.getElementById(diminui).disabled=true
        bloquear++;
      }
    }
    
  });
  if(quantidadeDeProduto>0 && bloquear==0){
    quantidadeDeProduto--
    precoTotal-=parseInt(preco)
    document.getElementById("valorQ").textContent=quantidadeDeProduto
    document.getElementById("valorD").textContent=precoTotal+" Kz"
  }
  apagarInput()
  adInput()
}

function apagarInput() {
  pai=document.getElementById("form")
  forms=document.querySelectorAll(".forms")
  for (let index = 0; index < forms.length; index++) {
    pai.removeChild(forms[index])
  }
}

function adInput() {
  pai=document.getElementById("form")
  vector.forEach((item) => {
    input =document.createElement("input")
    input.className="forms"
    input.name="valores[]"
    input.type="text"
    input.value=item.nome
    input.style.display="none"
    pai.appendChild(input)
    input =document.createElement("input")
    input.className="forms"
    input.name="valores[]"
    input.type="text"
    input.value=item.quantidade
    input.style.display="none"
    pai.appendChild(input)
    input =document.createElement("input")
    input.className="forms"
    input.name="valores[]"
    input.type="text"
    input.value=item.totalPago
    input.style.display="none"
    pai.appendChild(input)
  });
}

function habilita(){
  if(document.querySelectorAll(".forms").length!=0 && document.getElementById("escreve").value!=""){
    document.getElementById("comprar").disabled=false
  }else{
    document.getElementById("comprar").disabled=true
  }
}

function verificar(){

 a= document.querySelectorAll(".dicas")
 for (let index = 0; index < a.length; index++) {
    if(a[index].value==""){
      document.getElementById("aperta").disabled=true
      return true
    }
 }

 document.getElementById("aperta").disabled=false
}