fact=[]
nome=""


function nomeCompra(valor) {
  nome=valor
}
function adVector(valor){
    fact.push(valor)
}
function factura(){
    
    left= (window.innerWidth-400)/2
    Hora=new Date()
    a=window.open("","","height=400, width=400, left="+left+"")
    a.document.write("<style>label{margin-bottom:10px}")
    a.document.write("</style>")
    
    a.document.write("<div style=' border:1px solid black;  width: 220px;margin:auto'>")
    a.document.write("<h1 style='width:100%;text-align:center;font-size: 12pt'> VILA NOVA <br>")
    //xa.document.write("<label style='width=100%;text-align:center'>nº: 14789</label></h1>")
   
    a.document.write("<section style='margin-top:50px; margin-bottom: 50px'>")
    a.document.write("<label style='display:block'>Localização:    ZANGO 2</label>")
    a.document.write("<label style='display:block'>Hora:"+Hora.getHours()+":"+Hora.getMinutes())
    a.document.write("</label>")
    a.document.write("<label style='display:block'>Data:"+Hora.getDate()+"/"+(Hora.getMonth()+1)+"/"+(Hora.getFullYear()) );
    a.document.write("</label>")
    a.document.write("</section>")
   
    total=0
    cont=0
    while(cont<fact.length){
        a.document.write("<label style='display:block'> "+fact[cont]+" "+fact[cont+1]+"x "+fact[cont+2]+"kz</label>")
        total+=parseInt(fact[cont+2])
        cont+=3
    }
    a.document.write("<label style='display:block'> Total: "+total +"kz</label>")
    a.document.write("<label style='display:block'> Nome do cliente: "+nome +"</label>")
    a.document.write("</div>")
    a.print()
    a.close()
    window.location="../homePage.php"

    
  //  +":"+(Hora.getMonth())+":"+Hora.a.getFullYear()

}