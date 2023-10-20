produtosV=[]
function produtos(id,nc,np,qt,pr,data) { 
    produto={id:id,nomeComprador:nc,nomeProduto:np,quantidade:qt,precoTotal:pr,dataC:data}
    produtosV.push(produto)
}




function produtosVendidoHoje(valor) 
{
    valor=valor.replaceAll("-","/")
    cont=1;
    val=""
    dia=""
    mes=""
    ano=""
    for (let index = 0; index <valor.length ;index++) {
      if(valor.charAt(index)=="/"){
        if(cont==1){
            ano=val
        }else if(cont==2){
            mes=val
        }
        val=""
        cont++
      }else{
        val+=valor.charAt(index)
      }
     
    }
    linhas=document.querySelectorAll(".linhas")
    linhas.forEach((item) => {
        item.remove()
      
    });
    nomesVerificados=[]
    quantidades=0
    quantidadeG=0
    data=val+"/"+mes+"/"+ano
    cont=1
    escreve=document.getElementById("valor")
   
    produtosV.forEach((item,index) => {
        nome=item.nomeProduto
        if(!jaTem(nome, nomesVerificados) && item.dataC==data){
            nomesVerificados.push(nome)
            produtosV.forEach((iten,indexs) => {
                if(cont==1) {
                    quantidades=parseInt(item.quantidade)
                    quantidadeG=parseInt(item.precoTotal)
                    cont++}
                if(indexs!=index && nome==iten.nomeProduto && iten.dataC==data ){
                    quantidades+=parseInt(iten.quantidade)
                    quantidadeG+=parseInt(iten.precoTotal)
                }
            });
            table=document.getElementById("table")
            linha= document.createElement("tr")
            linha.className="linhas"
            celulaId=document.createElement("td")
            celulaId.textContent=item.id
            celulaNP=document.createElement("td")
            celulaNP.textContent=item.nomeProduto
            celulaQ=document.createElement("td")
            if(quantidades==0){
                celulaQ.textContent=item.quantidade
            }else{
                 celulaQ.textContent=quantidades
            }
            celulaD=document.createElement("td")
            if(quantidadeG==0){
                 celulaD.textContent=item.precoTotal
            }else{
                celulaD.textContent=quantidadeG+" kz"
            }
            
            celulaDa=document.createElement("td")
            celulaDa.textContent=data
            linha.appendChild(celulaId)
            linha.appendChild(celulaNP)
            linha.appendChild(celulaQ)
            linha.appendChild(celulaD)
            linha.appendChild(celulaDa)
            table.appendChild(linha)
            quantidades=0
            quantidadeG=0
            cont=1
        }
       

      
    });






}


function jaTem(nome,lista){
    if(lista.indexOf(nome)>=0){
        return true
    }
    return false
}

