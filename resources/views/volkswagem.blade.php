<html>
    <head>
        <title>Volkswagem</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ral eway:wght@300;400;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link href="style.css" rel="stylesheet" />
        <style>
            *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
}

.center{
    display: flex;
    max-width: 11000px;
    padding:0 2%;
    margin:0 auto;
    flex-wrap: wrap;
}

section.main{
    background-image: url('images/bg.svg');
    background-position: center;
    background-size: cover;
    min-height: 700px;
    padding: 20px 0 80px 0;
}

.menu{display: flex;width:100%;}

.logo-menu{width:50%;}

.items-menu{
    width:50%;
    text-align: right;
}

.items-menu a{
    font-weight: bold;
    color:white;
    text-decoration: none;
    display: inline-block;
    margin:0 10px;
}

.items-menu a:hover{
    border-bottom:2px solid #FFDD33;
}


.items-menu a.contact-btn{
    background-color:#0F3FD3;
    padding:10px 10px;
    border-radius:10px;
}
.items-menu a.contact-btn:hover{
    border:0;
}

.mockup{display: block;width:100%;color:white;text-align:center;padding-top:100px;}

.mockup h1{
    font-size: 100px;
}

.mockup img{max-width: 100%;}

section.marcas{
    padding:100px 0;
}

section.marcas img{
    width: calc(100% / 5);
}

section.porque-nos{
    padding:40px 0;
    background-color:  #FBFCFE;

}

section.porque-nos > .center > h2{
    font-size: 64px;
    text-align: center;
    width:100%;
}

section.porque-nos > .center{
    max-width: 1280px;
}

section.porque-nos > .center > p{
    font-size: 14px;
    color:#ccc;
    text-align: center;
    width:100%;
}

.diferenciais{
    display: flex;
    margin-top:50px;
}

.box-diferenciais{
    box-shadow: 0px 20px 40px #2426721C;
    width:31%;
    margin-right: 2%;
    padding:10px 20px;
    border-radius:10px;
}

.box-diferenciais h3{
    font-size: 28px;
    color:black;
    margin:20px 0;
}

.box-diferenciais p{
    font-size: 13px;
    color: #7E92AC;
    margin-bottom: 20px;
}

section.cta{
    background-image: url('images/banner_meio.svg');
    background-size: cover;
    background-position: center;
    padding:20px 10px;
    min-height: 200px;
    color:white;
    text-align: center;
}

section.cta h2,
section.cta h4{
    font-weight: normal;
    margin:10px 0;
}

section.cta h2{
    font-size: 40px;
}

section.cta a{
    display: inline-block;
    padding:8px 15px;
    border-radius:7px;
    font-weight: bold;
    font-size: 17px;
    background: #FFDD33;
    text-decoration: none;
    color: #000000;
}

section.beneficios{
    padding:40px 0;
}

.lista-beneficios{
    width:40%;
    margin-top:30px;
}

.lista-beneficios h1{
    color:black;
    font-size: 100px;
}

.lista-beneficios p{
    color: #7E92AC;
   vertical-align: middle;
   font-size: 14px;
}

.lista-beneficios span{
    display: inline-block;
    width: calc(100% - 70px);
}

.lista-beneficios img{
    display: inline-block;
    vertical-align: middle;
    width:70px;
}
.img-beneficios{
    width: 60%;
}

.img-beneficios img{max-width: 100%;}


section.depoimentos{
    background-color: #FBFCFE;
    padding:40px 0;
}

section.depoimentos > h1{
    text-align: center;
    font-size: 50px;
}

.container-slider{
    overflow:hidden;
    padding:40px 0;
}

.container-slider-single{
    float: left;
    background-color:white;
    text-align: center;
    padding:15px;
    border-radius:10px;
}

.container-slider-single p{
    margin:15px 0;
    color:#7E92AC;
    font-size: 14px;
}

.slick-slide {
    margin-left:27px;

  }

  /* the parent */
  .slick-list {
    margin-left:-27px;

  }

/****SLICK SLIDER****/

.slick-dotted ul{
    display: block;
	list-style-type: none;
	text-align: center;
	position: relative;
	top:30px;
}

.slick-dotted li{
	display: inline-block;
	margin: 0 7px;
}

.slick-dotted button:focus{
	outline: 0;
}

.slick-dotted li button{
	width: 16px;
	height: 16px;
	border-radius: 8px;
	color: #d8d8d8;
	border-width: 0;
	background: #d8d8d8;
	opacity: 1;
	cursor: pointer;
}

li.slick-active button{
	background: #373855;
	color: #373855;
}
.slick-slide:focus { outline: none; }

/*Fim slick slider*/

section.contato{
    padding:40px 0;
    text-align: center;
}

section.contato h1{
    font-size: 50px;
}

section.contato form{
    width:100%;
}


.contato input[type=text],
.contato input[type=email]
{
    width:100%;
    height:50px;
    margin:20px 0;
    border-radius:10px;
    background: #FCFDFF;
    border: 1px solid #C3CCE8;
    padding-left: 10px;
}

.contato textarea
{
    width:100%;
    height:120px;
    margin:20px 0;
    border-radius:10px;
    background: #FCFDFF;
    border: 1px solid #C3CCE8;
    padding: 10px;
    resize: vertical;
}

.contato input[type=submit]{
    width:100%;
    height:50px;
    display: block;
    cursor: pointer;
    border: 0;
    background: #255AFF;
    color:white;
    font-size: 18px;
    border-radius:10px;
}


footer{
    padding:10px 0;
   background: #255AFF;
   color:white;
}

.text-footer{
    width:50%;
    padding:8px 0;
}

.items-menu-mobile{
    width:50%;
    text-align: right;
    display: none;
}

.items-menu-mobile i{
    color:white;
    position: relative;
    top:15px;
    font-size: 23px;
    cursor: pointer;
}

@media screen and (max-width: 768px) {

    .items-menu-mobile{
        display: block;

    }

    .menu-mobile{

        opacity: 0;
        transition: 1s;
        position: absolute;
        left:0;
        top:65px;
        background-color: white;
        width:100%;
        padding:15px 0;
        text-align: center;
    }

    .show{
        opacity: 1;
    }
    .hide{
        opacity: 0;
    }

    .menu-mobile a{
        text-align: center;
        display: block;
        margin:8px 0;
        color:rgb(40,40,40);
        text-decoration: none;
        font-weight: bold;
        border-bottom:1px solid rgb(40,40,40);
        padding:8px 0;
    }




    section.main .items-menu{
        display: none;
    }

    footer .items-menu{
        width:100%;
        text-align: center;
    }
    footer .items-menu a{
        display: block;
        margin:10px 0;
        text-align: center;
    }
    .text-footer{
        width:100%;
        text-align: center;
        padding:8px 0;
    }
    .lista-beneficios,.img-beneficios{
        width:100%;
        margin-bottom: 30px;
    }
    .diferenciais{

        flex-wrap: wrap;

    }
    .box-diferenciais{

        width:100%;
        margin-right: 0;

    }


    section.marcas > .center{
        flex-wrap: nowrap;
        flex-direction: column;
        align-items: center;
    }
    section.marcas img{
        max-width: 300px;
        width:100%;
    }
}
        </style>
    </head>
    <body>
        <section class="main">
            <div class="center">
                <div class="menu">
                    <div class="logo-menu">
                        <a href="/"><img src="images/logoagencia.svg" /></a>
                    </div>
                    <div class="items-menu">
                        <a href="#">Início</a>
                        <a href="#">Por que nós?</a>
                        <a href="#">Depoimentos</a>
                        <a class="contact-btn" href="">Entre em Contato</a>
                    </div>
                    <div class="items-menu-mobile">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                        <div class="menu-mobile">
                            <a href="#">Início</a>
                            <a href="#">Por que nós?</a>
                            <a href="#">Depoimentos</a>
                        </div>
                    </div>
                </div><!--menu-->

                <div class="mockup">
                    <h1>Empresa Volkswagem</h1>
                    <br/>
                    <p>E veja resultados expressivos dia após dia</p>
                    <br/>
                    <img src="https://i.pinimg.com/originals/d4/55/dd/d455dd98345230777f9159e73dabe5b8.png" />
                </div><!--mockup-->

            </div><!--center-->
        </section><!--main-->


        <section class="marcas">
            <div class="center">
                <img src="images/LOGO1.png" />
                <img src="images/LOGO2.png" />
                <img src="images/LOGO3.png" />
                <img src="images/LOGO4.png" />
                <img src="images/LOGO5.png" />

            </div><!--center-->
        </section><!--marcas-->


        <section class="porque-nos">
            <div class="center">
                <h2>Por Que Nós?</h2>
                <p>Uma experiência incrível para seus clientes, resultados espetaculares para sua empresa.</p>

                <div class="diferenciais">
                    <div class="box-diferenciais">
                        <img src="images/icon1.svg" />
                        <h3>Planejamento impecável</h3>
                        <p>Conte com a Agência Bold como sua parceira no planejamento de seus projetos, conteúdos, campanhas, estratégias. Nossos profissionais altamente qualificados estão preparados para qualquer desafio.</p>
                    </div>
                    <div class="box-diferenciais">
                        <img src="images/icon2.svg" />
                        <h3>Planejamento impecável</h3>
                        <p>Conte com a Agência Bold como sua parceira no planejamento de seus projetos, conteúdos, campanhas, estratégias. Nossos profissionais altamente qualificados estão preparados para qualquer desafio.</p>
                    </div>
                    <div class="box-diferenciais">
                        <img src="images/icon3.svg" />
                        <h3>Planejamento impecável</h3>
                        <p>Conte com a Agência Bold como sua parceira no planejamento de seus projetos, conteúdos, campanhas, estratégias. Nossos profissionais altamente qualificados estão preparados para qualquer desafio.</p>
                    </div>
                </div><!--diferenciais-->



            </div><!--center-->
        </section><!--porquenos-->

        <section class="cta">


             <h2>Vamos Começar Seu Projeto?</h2>
             <h4>Fale agora mesmo com um de nossos consultores!</h4>
             <a href="/contato">Entrar em Contato</a>


        </section><!--cta-->

        <section class="beneficios">
            <div style="max-width: 1280px;" class="center">
                <div class="lista-beneficios">
                    <h1>Benefícios Para Você</h1>
                    <br/>
                    <p><img src="images/checklist.svg" /><span>Garantia de resultados, pague de acordo com o desempenho do seu projeto ou campanha.</span></p>
                    <p><img src="images/checklist.svg" /><span>Garantia de resultados, pague de acordo com o desempenho do seu projeto ou campanha.</span></p>
                    <p><img src="images/checklist.svg" /><span>Garantia de resultados, pague de acordo com o desempenho do seu projeto ou campanha.</span></p>
                    <p><img src="images/checklist.svg" /><span>Garantia de resultados, pague de acordo com o desempenho do seu projeto ou campanha.</span></p>
                </div>
                <div class="img-beneficios">
                    <img src="images/mackbook.png" />
                </div>
            </div><!--center-->
        </section><!--beneficios-->


        <section class="depoimentos">
            <h1>Depoimentos</h1>
            <div style="display:block;" class="center">
                <br/>
                <div style="max-width: 1200px;" class="container-slider">

                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>

                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>
                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>
                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>
                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>
                    <div class="container-slider-single">
                        <img src="images/DEPOIMENTO1.png" />
                        <h3>Miriam Souza</h3>
                        <p>O trabalho da Agência Bold foi fundamental para o nosso posicionamento e nossas estratégias de 2021. Juntos tivemos excelentes resultados e nossos clientes ficaram surpresos com a qualidade. Foi um trabalho incrível feito a muitas mãos pela Uber e pelo time da Agência Bold.</p>
                        <img src="images/RATE.svg" />
                    </div>
                </div>

            </div>

        </section>

        <section class="contato">
            <h1>Entre em Contato</h1>
            <div style="max-width: 900px;" class="center">

                <form method="post">
                    <input type="text" placeholder="Seu Nome..." />
                    <input type="email" placeholder="Seu e-mail" />
                    <textarea placeholder="Sua Mensagem..."></textarea>
                    <input type="submit" name="acao" value="Enviar!">
                </form>
            </div>
        </section>

        <footer>
            <div style="max-width: 1280px;" class="center">
                <div class="text-footer">
                    <p>Todos os direitos reservados a Danki Code</p>
                </div>
                <div class="items-menu">
                    <a href="#">Início</a>
                        <a href="#">Por que nós?</a>
                        <a href="#">Depoimentos</a>
                        <a class="contact-btn" href="">Entre em Contato</a>
                </div>
            </div>
        </footer>

        <script src="jquery.js"></script>
        <script src="slick.min.js"></script>
        <script>
                $('.container-slider').slick({
                dots: true,
                arrows:false,
                speed:1000,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover:false,
                responsive: [
                            {
                              breakpoint: 768,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }],
                });
        </script>
        <script>
            var menuBtn = document.querySelector('.items-menu-mobile i');
            menuBtn.addEventListener('click',()=>{
                let itemsMenu = document.querySelector('.menu-mobile');
                if(itemsMenu.classList.contains('show')){
                    itemsMenu.classList.remove('show');
                    itemsMenu.classList.add('hide');
                }else{
                    itemsMenu.classList.remove('hide');
                    itemsMenu.classList.add('show');
                }

            });
        </script>

    </body>
</html>
