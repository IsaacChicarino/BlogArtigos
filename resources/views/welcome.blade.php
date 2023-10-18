<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>TecBlog - O seu blog de tecnologia</title>
	<meta charset="UTF-8">
	<style>
        /*Limpar formatações padrão*/
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-size: 1em;
	overflow-x: hidden;
}
/*
**** Layout ****
*/

.bi-cup-hot{
	position: absolute;
	top: 10px;
	left: 770px;
}

.bi-cup-hot2{
	position: absolute;
	top: 10px;
	right: 770px;
}

.form-inline{
	width: 500px;
	padding: 10px;
}

.bg-dark{
	border-radius: 20px;
}

#area-cabecalho {
	background-color: black;
	padding: 5px;
	text-align: center;
}

#area-logo{
	color: aqua;
	padding: 20px;
}

#area-principal {
	width: 1400px;
	margin: 0 auto;
}

#area-postagens {
	background-color:#4e4e4e;
	width: 640px;
	float: left;
}

.postagem{
	padding: 20px;
	margin-bottom: 10px;
	box-sizing:content-box;
}

.postagem p{
	color: #FFF;
	font-size: 20px;
}

.postagem h2{
	text-decoration: none;
	text-align: center;
	background-color: aqua;
	border-radius: 10px;
	letter-spacing: 2px;
}

/*
**** Formatação do menu ****
*/

a {
	text-decoration: none;
}

a:link, a:visited {
	color:cyan;
}

#area-cabecalho a:link, #area-cabecalho a:visited {
	color: #FFF;
	font-size: 20px;
	border-radius: 10px;
	padding: 8px 8px;
	text-decoration: none;
}

#area-cabecalho a:hover {
	width: 10px;
	margin: 10px;
	color: black;
	background: #FFF;
	text-decoration: none;
}

/*
**** Formatações em geral ****
*/

h1 {
	color: #4e4e4e;
	font-size: 2.5em;
}

h2 {
	color: #f7b600;
}

.branco{
	color: white;
}

/*Entre em contato*/


section.contato{
	padding: 40px 0;
	letter-spacing: 5px;
	background-color: #4e4e4e;
	margin: 0 auto;
	width: 100%;
}

.contato h1{
	font-size: 50px;
	padding-left: 400px;
	color: #FFF;
	max-width: 700px;
	color: cyan;
	border-radius: 100px;

}


section.contato form{
    width: 62%;
}


.contato input[type=text],
.contato input[type=email]
{

    width:160%;
    height:50px;
    margin:10px 0;
    border-radius:10px;
    background:darkgray;
    border: 1px solid #C3CCE8;
    padding-left: 10px;
}

.contato textarea
{
    width:160%;
    height:120px;
    margin:20px 0;
    border-radius:10px;
    background:darkgray;
    border: 1px solid #C3CCE8;
    padding: 10px;
    resize: vertical;
}

.contato input[type=submit]{
    width:160%;
    height:50px;
    display: block;
    cursor: pointer;
    border: 0;
    background: cyan;
    color:black;
    font-size: 18px;
    border-radius:10px;
}
.center h1{
	padding-left: 200px;
	width: 100px;
}
    </style>

	<link rel="preconnect" href="https://font.gstatic.com">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm.js/3.3.2/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm.js/3.3.2/jquery-confirm.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-sclale=1, shrink-to-fit=no" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
<body style="zoom: 90%;">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">

                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="/img/download.png" alt="" width="30" height="24" class="d-inline-block align-text">
                                Tblog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Procurar postagens</a>
                        </li>
                        <li class="nav-item"  style="margin-left: 95%; margin-top: -2.6rem;">
                            <div class="nav-link">
                                @if (Route::has('login'))
                                        @auth
                                            <a href="{{ url('/dashboard') }}" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                                </svg>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Entrar na minha conta</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Criar nova conta</a>
                                            @endif
                                        @endauth
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container ">
        <img alt="Lista Instaset" class="text-center mx-auto my-4" height="138px; " id="Header1_headerimg" src="http://4.bp.blogspot.com/-_cWo_SzcQjI/WCdQlU4p6LI/AAAAAAAABdQ/aP1-vEajWHclxLkiqtweFd6ynh-7hJlMACK4B/s1600/instaset.png" style="display: block" width="372px;">
    </div>
    <div id="area-principal" class="container-fluid" style="zoom: 80%;">

		<div id="area-postagens">

			<!-- abertura postagem -->
			<div class="postagem">
				<h2>Informação</h2>
				<img width="600px" src="imagens/imagem2.jpg">
				<p>
					Informação é a reunião ou o conjunto de dados e conhecimentos organizados, que possam constituir referências sobre um determinado acontecimento, fato ou fenômeno.  Em um contexto geral, este conjunto de dados tem como objetivo reduzir a incerteza ou aprofundar os conhecimentos sobre um assunto de interesse.
				</p>
				<a href="#">Leia mais</a>
			</div><!--// fechamento postagem -->


			<!-- abertura postagem -->
			<div class="postagem">
				<h2>Redes</h2>
				<img width="600px" src="imagens/imagem3.jpeg">
				<p>
					Uma rede é a combinação de dois ou mais computadores e seus elos de conexão. Uma rede física é o hardware (equipamentos como adaptadores, cabos e linhas telefônicas) que compõe a rede. O software e o modelo conceitual compõem a rede lógica . Diferentes tipos de redes e emuladores fornecem funções diferentes.
				</p>
				<a href="#">Leia mais</a>
			</div><!--// fechamento postagem -->

		</div>


			<div id="area-postagens">

				<!-- abertura postagem -->
				<div class="postagem">
					<h2>Tecnologia</h2>
					<img width="600px" src="imagens/imagem1.jpg">
					<p>
						Tecnologia é o conjunto de técnicas, habilidades, métodos e processos usados na produção de bens ou serviços, ou na realização de objetivos, como em investigações científicas, e criminais, pode ser o conhecimento de técnicas, entretanto o avanço tecnológico é algo do nosso dia a dia e nos auxilia na comunicação, produção e evolução de nossa sociedade.
					</p>
					<a href="#">Leia mais</a>
				</div>

				<div class="postagem">
					<h2>Virtualização</h2>
					<img width="600px" src="imagens/imagem4.jpg">
					<p>
						Virtualização é a tecnologia que você pode usar para criar representações virtuais de servidores, armazenamento, redes e outras máquinas físicas. O software virtual imita as funções do hardware físico para executar várias máquinas virtuais simultaneamente em uma única máquina física.
					</p>
					<a href="#">Leia mais</a>
				</div>

			</div>

		</div>

		<section class="contato">
            <h1>Entre em Contato</h1>
                <form method="post">
                    <input type="text" placeholder="Seu Nome..." />
                    <input type="email" placeholder="Seu e-mail" />
                    <textarea placeholder="Sua Mensagem..."></textarea>
                    <input type="submit" id="botao" name="acao" value="Enviar!">
                </form>
            </div>
        </section>
	</div>
</body>
</html>

<!--boas vindas!-->

<div class="center" >
	<h1> de JavaScript</h1>

<!-- Um botão HTML -->
<button id="meuBotao">Clique em mim</button>

<!-- JavaScript para exibir uma mensagem pop-up quando o botão é clicado -->
<script>
    // Selecionar o botão pelo seu ID
    var botao = document.getElementById("meuBotao");

    // Adicionar um evento de clique ao botão
    botao.addEventListener("click", function() {
        // Exibir uma mensagem pop-up
        alert("Você clicou no botão!");
    });
</script>
</body>
</html>

