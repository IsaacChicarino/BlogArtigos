@extends('navbarMinhaConta')
    @section('conteudo')
    <html>
    <head>
    <style>

.center{
    display: flex;
    flex-wrap: wrap;
    max-width: 1280px;
    margin:0 auto;
    padding:0 2%;
}

html,body{
    height:100%;
    background-color:black;
    overflow-y: hidden;
    overflow-x:hidden;
}

.texto-sobre h2{
    letter-spacing: 1;
    color:white;
}
    .texto-sobre p{
        letter-spacing: 1;
    }

section.sobre{
    height: calc(100% - 200px);
    bottom: -40px;
    position: relative;
}

section.sobre img{
  max-width: 300px;
}


.extras{
    padding: 100px;
    padding-top: 40px;
    position: absolute;
    bottom:-500px;
    right:-500px;
    width: 900px;
    height:800px;
    border-radius:50%;
    background-color: red;
}

.social-media{
    position: absolute;
    right: 510px;
    top:180px;
}

.social-media img{
    display: block;
    width:30px;
    margin:30px 0;
}

.texto-sobre{
    margin-top:20px;
    padding: -5px

}

.texto-sobre h2{
    font-size: 50px;
}

.texto-sobre p{

    color:white;
    font-size: 20px;
    font-weight: bold;
    max-width: 600px;
}

.texto-sobre button{
    border:0;
    background-color: red;
    color:white;
    border-radius:10px;
    width:100px;
    height:30px;
    cursor: pointer;
}

.imagem-direita{
    float: right;

}
    </style>
    </head>
    <body>
        <section class="sobre">
            <div class="extras">
                <img src="https://o.remove.bg/downloads/06748aee-9809-44e3-b76d-68b31e7c1087/images__8_-removebg-preview.png" style="max-width: -50px; top:80px; position: relative;" alt="imagem"/>
                <div class="social-media">
                </div>
            </div><!--extras-->
            <div class="container">
                <img src="https://o.remove.bg/downloads/93c6d69f-8f22-4274-8a79-18f90bf9ee55/transferir__1_-removebg-preview.png" alt=".." class="imagem-direita">
            </div>
            <div class="center">
                <div class="texto-sobre">
                    <h2><span>Entre neste incrivel mundo<br/>dos<span style="color:red;" > gamers! </span>e faça parte desta<br>emocionante <span style="color:red;" >jornada!<sp/><br></h2>
                    <p>Seria cansativo se fosse doutrina, mas é apenas uma observação sobre a natureza da realidade. Dizer que nada é verdade é perceber que os fundamentos da sociedade são frágeis e que devemos ser os pastores de nossa própria civilização. Dizer que tudo é permitido é entender que somos os arquitetos de nossas ações e que devemos viver com nossas consequências, sejam gloriosas ou trágicas.</p>
                    <button>Leia mais</button>
                </div>
            </div>
            </div>
        </section>
    </body>
</html>
@endsection
