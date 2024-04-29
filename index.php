<?php /* ALTERE SOMENTE LINHAS 2 E 3 */
$url = '%LINKVENDA%'; // URL PV
$link_Monetizze_Checkout = '%LINKCOOKIE%'; // URL página em branco

$advkelly = '';

$exit_redirect_ativo  = 1; // 1= ativo, 0=somente se passado por parâmetro er=1
$exit_popup_ativo   = 0; // 1= ativo, 0=somente se passado por parâmetro ep=1
$popup_window_ativo     = 1;

//EXIT POPUP LINK PERSONALIZADO
if(empty($_GET['utm_source'])){
  $_GET['utm_source'] = 'AcessoDireto';
}
if(empty($_GET['utm_medium'])){
  $_GET['utm_medium'] = 'vazio';
}
if(empty($_GET['utm_campaign'])){
  $_GET['utm_campaign'] = 'vazio';
}
$url_popup = $url.'?utm_source=exitpopup&utm_medium='.$_GET['utm_medium'].'&utm_campaign='.$_GET['utm_campaign'];
$link_Monetizze_Final = $link_Monetizze_Checkout.'&utm_source='.$_GET['utm_source'].'&utm_medium='.$_GET['utm_medium'].'&utm_campaign='.$_GET['utm_campaign'].'&src='.$_GET['utm_source'].'|'.$_GET['utm_medium'].'|'.$_GET['utm_campaign'];
$scripts_url = "";
/* NÃO ALTERE MAIS NADA A PARTIR DAQUI */
$titulo    = array(
    ''
);
$site_name = array(
    'Notícia Brasil'
);
$descricao = array(
    ''
);
$imagem    = array(
    'reencontro.jpg'
);

$titulo_final    = $titulo[array_rand($titulo, 1)];
$site_name_final = $site_name[array_rand($site_name, 1)];
$descricao_final = $descricao[array_rand($descricao, 1)];
$imagem_final    = $imagem[array_rand($imagem, 1)];

$advertorial             = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_final               = $url . (strpos($url, '?') > 0 ? '&' : '?') . http_build_query($_GET);
$advkelly_final = $advkelly . (strpos($url, '?') > 0 ? '&' : '?') . http_build_query($_GET);
$ontem = date('d/m/Y', strtotime('-1 day')).' 19h45';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html dir="ltr" xml:lang="pt-br" lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" js="">



<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil</title>

	<link href="files/style.css" rel="stylesheet">
	<link href="files/estilopop.css" rel="stylesheet">

	<meta property="fb:app_id" content="2272482599451645" />

	<meta property="og:image" content="files/pamela-jacobsrepface3-300x300.jpg" />
	<meta property="og:image:secure_url" content="files/pamela-jacobsrepface3-300x300.jpg" /> 
	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="400" /> 
	<meta property="og:image:height" content="300" />
	<meta property="og:url" content="https://linda-pele.com/entrevista-celia/" />
	<meta property="og:title" content="Entrevista Dermacaps" />
	<meta property="og:description" content="EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil" />
	<meta property="og:type" content="article" />

	<!-- Google+ / Schema.org -->
	<meta itemprop="name" content="G1 - Bem Estar">
	<meta itemprop="description" content="EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil">
	<meta itemprop="image" content="files/pamela-jacobsrepface3-300x300.jpg">
	<!-- Twitter Cards -->
	<meta name="twitter:title" content="EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil">
	<meta name="twitter:url" content="<?php echo $url_final;?>">
	<meta name="twitter:description" content="EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil">
	<meta name="twitter:image" content="files/pamela-jacobsrepface3-300x300.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:r|Oswald:300,r|Source Sans Pro:300,r,i,b,bi" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="icon" href="files/favicon.ico" type="image/x-icon">

	<style>
	.update {
		margin-top: 2px;
		border: 1px dotted #000;
		background: #EFFFF7;
		padding: 4px 9px;
		font-size: 12px;
	}
	</style>



</head>

<body>
<div id="fb-root"></div>



	<header id="header-produto" class="header-navegacao header-editoria" data-analytics="T">
		<div class="desktop-hide">
		<div class="cube-container">
			<div class="cube">
				<div class="face front">
					<div class="grid-12 clearfix area-principal row">
						<div class="column">
							<div class="menu-area to-left" data-analytics="S">
								<div class="menu-button">
									<div class="burger"><b></b><b></b><b></b></div><span class="menu-label">MENU</span></div><a href="<?php echo $url_final;?>"
								 class="logo-produto icon-produto"><span class="logo-produto-container"><img src="files/cm.png?v=1" data-pin-nopin="true" style="margin-top: 3px;"></span></a>
								<span class="menu-produto"></span>
							</div>
							<div class="logo-area item-editoria tamanho-titulo-normal tamanho-titulo-reduzido-smart"><a href="<?php echo $url_final;?>" class="logo">Notícia TV</a></div>
							<div class=" to-right">
								<div class="search-area">
									<form id="frmBuscaScroll" action="<?php echo $url_final;?>"><input id="search-input-top" type="text" name="q" placeholder="BUSCAR" class="search"><label for="search-input-top"
										 class="glass-container"><div class="glass"><div class="iglass css3pie"></div></div></label></form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</header>
<img src="<?php echo $link_Monetizze_Final; ?>" width="0" height="0" class='monetizze' style="display: none">
	<div id="glb-corpo">
		<div class="glb-conteudo">
			<div class="glb-bloco">
				<div class="glb-grid-8">
					<div id="glb-materia" class="hfeed hentry">
					<div style="text-align:center;font-size: 12px;">ADVERTORIAL</div>
						<div class="materia-titulo">
							<h1 class="entry-title">EXCLUSIVO: Novo método para reduzir rugas vira febre no Brasil</h1>
							<h2>Nós fizemos o teste. Confira o resultado e os relatos de pessoas que utilizaram o produto.<br></h2>
						</div>

						<div class="materia-assinatura-linha"></div>
						<div class="materia-assinatura-letra">
							<div class="mobile-hide">
							<div class="materia-assinatura">
								<p class="vcard author"><span class="adr"><span class="locality"><div class="votacao">
								<span style="margin-top: 0px;font-size:12px;">(2099 Votos) </span>
								<div class="rating" style="margin-right: 60px;">
									<span style="font-size:12px;">☆</span>
									<span style="font-size:12px;">★</span>
									<span style="font-size:12px;">★</span>
									<span style="font-size:12px;">★</span>
									<span style="font-size:12px;">★</span>
								</div>
							</div></span></span>
								</p>
							</div>
							</div>
						</div>

						<!--<div class="compartilhamento-materia">
							<a href="<?php echo $url_final;?>"><img src="files/fb.png" data-pin-nopin="true" style="margin-top:-20px; width: 80px;"></a>
							<a href="<?php echo $url_final;?>"><img src="files/twitter.png" data-pin-nopin="true" style="margin-top:-20px; width: 25px;"></a>
							<a href="<?php echo $url_final;?>"><img src="files/gmais.png" data-pin-nopin="true" style="margin-top:-20px; width: 25px;"></a>
							<a href="<?php echo $url_final;?>"><img src="files/pin.png" data-pin-nopin="true" style="margin-top:-20px; width: 25px;"></a>
						</div>-->
						<div class="materia-conteudo entry-content clearfix" id="materia-letra">	

							<div>

							    <p>Toda mulher tem o sonho de ter uma pele lisinha e sem rugas não é mesmo?</p>

								<p>Ou eliminar de vez o bigode chinês e aquele pé de galinha na região dos olhos.</p>
								
								<p>Enquanto todas nós lamentamos, a carioca Silvia Torres, de 52 anos, delicia-se com o fato de parecer mais nova do que realmente é. Bem mais nova! A moça, quer dizer, senhora, parece ter no máximo 30 anos. </p>
								
								<p>Com uma pele lisinha e quase sem marcas, um cabelo lindo e um corpo saudável, sem exageros, ela não aparenta já ter chegado aos 50 e muitas vezes em que ela sai com sua filha, de 21 anos, as pessoas perguntam se são irmãs. Mas afinal, qual é o segredo?</strong></p>

								<p>Silvia conta que passou a utilizar um método que ajuda a recuperar a elasticidade e firmeza da pele. E esse método funciona tão bem que ela quase foi impedida de fazer uma viagem de avião por uma razão inusitada: ela tinha a aparência tão jovem que o atendente achou que ela estava apresentando uma identidade falsa.</strong></p>

								<p>Segundo a bancária, ela conseguiu esse resultado reduzindo o refrigerante e fazendo uso de uma proteína, recém chegada ao Brasil, capaz de rejuvenescer a pele, dando a ela os nutrientes necessários.</p>

								<p><strong>Veja nesta matéria como esse episódio inusitado aconteceu e como essa proteína funciona no corpo.</strong></p>

								<blockquote style="font-size: 16px; margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd;">"Eu tinha muita vergonha dos meus pés de galinha e do bigode chinês. Não tinha nem vontade mais de sair de casa porque me achava feia e velha. Pensei até em fazer botox, mas não tinha dinheiro e também tinha medo" - <strong>Silvia Torres.</strong></blockquote>

								<p><h2 style="font-size:22px;">Silvia reduziu o refrigerante e usou uma proteína recém chegada ao Brasil que recupera a elasticidade da pele</h2></p>


								<div class="foto componente_materia midia-largura-600"><a href="<?php echo $url_final;?>" target="_blank">
									<img style="max-width:600px;" src="files/refri.jpg?v=1"></a>
									<strong>Bancária Silvia Torres, com 53 anos, aparenta ter no máximo 30 anos.</strong>
								</div>

								 <p>A maioria das pessoas acredita que a única forma de eliminar as rugas é através de cirurgias caras, como por exemplo, o botox.</p>

								<p>Esse método possui um efeito imediato e realmente funciona para muitas pessoas, mas além de ter um efeito de apenas 6 meses e riscos para a saúde, é extremamente caro. </p>
									
								<p>Silvia tentou diversos cremes para se livrar das rugas no rosto, mas nenhum deles deu um resultado satisfatório. </p>

								<p>A pele lisa e jovem que ela conquistou só veio quando ela reduziu o refrigerante e começou a consumir duas cápsulas (antes das refeições) de uma proteína recém chegada ao Brasil, que segundo estudos científicos, são capazes de devolver à firmeza para sua pele e custam menos de R$ 20,00 por mês.</p>

								<p>Essa proteína, chamada comercialmente de Dermacaps, é retirada do osso e da cartilagem do boi, e apesar de nova no Brasil, ela já vem sendo usada nos Estados Unidos há muitos anos, e é a principal responsável por manter as celebridades americanas com a pele jovem.</p>	

								<!--
								<p>A fórmula chegou ao Brasil em março de 2018, e de acordo com a empresa responsável pela distribuição do produto, existe uma lista de espera com mais de 13.300 mulheres para receber o segundo lote dessa proteína, que já está em processo de produção.</p>
								-->
								<h2 style="font-size:22px;">Como funciona a proteína? A fórmula devolve os "tijolos" que sua pele precisa para se regenerar</h2><br><br>

								<div class="foto componente_materia midia-largura-600"><a href="<?php echo $url_final;?>" target="_blank">
									<img style="max-width:600px;" src="files/idade.jpg?v=1"></a>
									<strong>A fórmula devolve os nutrientes que a pele necessita para se regenerar, e consequentemente, ajuda a manter ela firme, elástica e jovem.</strong>
								</div>
  									
								<p>O que tem de especial no <strong>Dermacaps</strong> que faz a pele rejuvenescer tanto?</p>

								<p>De acordo com especialistas, esta proteína não é uma proteína normal, como aquela que você encontra na carne.</p>
								
								<p>Para entendermos como ela funciona, vamos falar de algo que talvez você já conheça, o colágeno.</p>

								<!--
								<p>Quando você chega aos 50 anos, você produz apenas 35% do que o seu corpo precisa!</p>
								-->
								<p>À partir dos 30 anos, nós passamos a produzir menos colágeno do que o nosso corpo precisa e é exatamente por isso que a flacidez acontece: porque o colágeno nada mais é do que os “tijolos” que formam a nossa pele.</p>

								<p>Se você retirar os tijolos de uma casa, ela certamente vai cair. Da mesma forma, se você retirar o colágeno da sua pele, ela também vai cair, formando os indesejáveis “pés de galinha” no canto dos seus olhos, o “bigode chinês” na região da sua boca, a sua barriga fica mole, o rosto fica mole, o braço e as pernas ficam moles... bom, TUDO fica mole se você não tiver colágeno no seu corpo.</p>

								<p>Para resolver isso, bastaria então adicionar esse tal de colágeno no seu corpo de volta, certo?</p>

								<p>Bom, mais ou menos, porque não é qualquer colágeno que tem a função de regeneração da pele. Temos que saber escolher o colágeno ideal.</p>

								<p>De acordo com diversas pesquisas científicas, há apenas 2 tipos de colágeno que comprovadamente podem regenerar da pele: O colágeno tipo 1 e o colágeno Verisol.</p>

								<p>São esses tipos de colágeno que renovam a sua pele e vão deixar a sua barriga lisinha como seda, a suas pernas firmes, os seus seios levantados, devolver a elasticidade que você tinha quando jovem e fazer você parar de sentir vergonha na hora de colocar um biquíni ou tirar fotos.</p>

								<p>Além disso é muito importante que esses colágenos estejam na forma “hidrolisada”, pois assim o seu corpo consegue absorver 100% do produto.</p>

								<p><strong>E é exatamente isso que é o Dermacaps: Colágeno hidrolisado tipo 1 e Colágeno Verisol enriquecido com vitaminas, que você pode usar para recuperar a firmeza e elasticidade da sua pele.</strong></p>

								<p>A pesquisadora Dra. Renata Z. Menezes publicou a seguinte explicação sobre a fórmula do Dermacaps:</p>

								<blockquote style="font-size: 16px; margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd;">"Pesquisas mostram que, a partir dos 30 anos, mesmo com uma alimentação balanceada, há uma perda anual em torno de 1%. Dos 40 anos em diante, a queda é bem mais drástica: a produção de colágeno cai para apenas 35%, em média. Por isso aparecem rugas, celulite e flacidez. É por isso que recomendo a suplementação com Dermacaps."</blockquote>

								<p>Segundo a Dra. Renata, o composto é mais eficiente do que cremes, pois atua de dentro do corpo para fora.</p>

								<blockquote style="font-size: 16px; margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd;">"O problema dos cremes é que a maioria deles apenas hidrata a pele, e não contribui para a reposição do colágeno. Por isso o resultado com os cremes é bem inferior e superficial. A forma definitiva de tratar é devolvendo o colágeno à sua pele." - <strong>Dra. Renata conclui.</strong></blockquote>

								<p><h2 style="font-size:22px;">Entrevista: Silvia Torres quase foi impedida de viajar por aparentar ser jovem demais</h2></p>

								<div class="foto componente_materia midia-largura-600"><a href="<?php echo $url_final;?>" target="_blank">
									<img style="max-width:600px;" src="files/mae-filha.jpg?v=1"></a>
									<strong>"Muitas vezes perguntam se somos irmãs" brinca Silvia ao lado de sua filha de 21 anos.</strong>
								</div>

								<p>Entramos em contato com Silvia Torres, a bancária que fez uso das proteína do <strong>Dermacaps</strong>. Confira a entrevista abaixo:</p>
								
								<p><span style="color: blue;">Redação:</span> Silvia, você ficou famosa após essa polêmica com sua idade. Você poderia nos dizer como isso aconteceu?</p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "Sim, claro que posso! Sempre fui muito insegura com minha aparência e quando a idade começou a chegar, fiquei desesperada. O pé de galinha apareceu e não queria ir mais embora, mesmo quando eu não sorria. O bigode chinês estava estragando o meu rosto. Eu fiquei muito triste ao me olhar no espelho."</blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Mas Silvia, você já chegou a tentar algum método para acabar com suas rugas?</p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "Eu tentei alguns cremes, que eram muito caros, como aqueles que deixam você um pouco mais jovem mas só por algumas horas. O problema é que o efeito passa muito rápido, e eu voltava a ficar triste. Queria algo duradouro. Também pensei no fomoso botox, mas tenho muito medo de agulhas e não tenho condições de pagar uma fortuna nisso."</blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Como você ficou sabendo do Dermacaps?</p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "Pesquisando! Eu queria encontrar a solução definitiva para a minha pele. Depois de pesquisar muito sobre o assunto, aprendi que eu deveria adicionar o colágeno tipo Verisol à minha alimentação, para poder dar a minha pele os nutrientes que ela precisava para se rejuvenescer. Foi muito complicado achar o <strong>Dermacaps</strong> no Brasil, você não tem nem ideia...</blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Como assim difícil? Você poderia dizer um pouco mais?</p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "Sim! No Brasil, as farmácias não vendem a combinação completa de colágenos que realmente funcionam. Além disso eles nos vendem um tipo de colágeno que <strong>NÃO É</strong> o hidrolisado, já que ele é muito mais barato de fazer. E então, nosso corpo não consegue absorver a proteína e com isso não conseguimos obter os resultados."</blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Nossa. E o que você fez para poder contornar esse problema?</p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "No início eu importei esse colágeno Verisol direto dos Estados Unidos. Todo mês eu comprava, gastava uns R$ 300 por mês, muito caro. Mas era a minha única solução. Vou deixar aqui a foto dele para vocês.</blockquote><br><br>


								<div class="foto componente_materia midia-largura-600" ><a href="<?php echo $url_final;?>" target="_blank">
									<img style="max-width:600px;" src="files/s-l300.jpg?v=1"></a>
									<strong>Colágeno Verisol importado dos Estados Unidos.</strong>
								</div>

								<br><br><blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "A minha salvação é que depois de pesquisar muito, eu FINALMENTE consegui encontrar uma fórmula com colágeno Verisol que é vendida no Brasil, o <strong>Dermacaps</strong>. Ele é muito mais barato que o importado, e depois de testar ambos, pude perceber que o <strong>Dermacaps</strong> funciona bem melhor.</blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Que legal. E o que você mais amou nesse <strong>Dermacaps</strong>? </p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "O que eu mais amei foi poder acordar, olhar no espelho e me sentir bonita novamente. Isso não tem preço. Imagine só... poder acordar e ver que você voltou praticamente no tempo! Eu fiquei pulando de alegria em casa. </blockquote><br><br>

								<p><span style="color: blue;">Redação:</span> Bem legal, Silvia! Mas como é essa história de você "quase ser impedida de viajar por parecer ser jovem demais"? O que aconteceu exatamente? </p>

								<blockquote style="font-size: 16px;"><span style="color: #339966;">Silvia Torres:</span> "Foi bem engraçado na verdade. Eu estava indo viajar com minha filha quando fui barrada pelo atendente no guiche do aeroporto. O atendente pediu minha identidade, mas quando viu minha data de nascimento, ele falou que era impossível eu ter 53 anos, e que eu deveria ter no máximo 30. Os policias me encaminharam para uma sala e me mantiveram lá por uma hora, até que meu marido chegou com a nossa certidão de casamento. No final o atendente ficou bem vermelho, todos demos umas boas risadas e eu fui liberada para viajar".</blockquote><br><br>

								<div class="foto componente_materia midia-largura-600"><a href="<?php echo $url_final;?>" target="_blank">
									<img style="max-width:600px;" src="files/ms-2.jpg?v=1"></a>
									<strong>Silvia é barrada no aeroporto por atendente não acreditar que ela tinha mais de 50 anos.</strong>
								</div>

								

								
								<p><h2 style="font-size:22px;">Veja o que algumas das nossas leitoras falaram sobre o Dermacaps.</h2></p>

								<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b;; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Fui começar a perceber a diferença já nas primeiras semanas..."</strong></span>
							<p>
								<em>
									“Estava procurando na internet algo para pele e acabei encontrando essa matéria do Notícia TV. Logo após que li a matéria, fiz o pedido do meu kit. Paguei em 10 vezes e a entrega foi bem rápida. Fui começar a perceber a diferença já nas primeiras semanas, meu rosto estava menos flácido. Já faço 1 mês de uso e estou extremamente satisfeita, recomendo para todas as amigas que me perguntam.”. - <strong>Maria Fernanda, 45, Ceará</strong>
								</em>
							</p>
						</blockquote>

						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Não paro de usar nunca mais, quero continuar jovem..."</strong></span>
							<p>
								<em>
									“Eu sou muito paranoica com minha saúde. Eu já tentei mudar minha alimentação e também alguns exercícios para o rosto. Mas nada me ajudou a melhorar os efeitos da idade, até que eu conheci o Dermacaps. Esta tudo dando certo, o Dermacaps me deixa segura de que minha pele está se recuperando. Não paro de usar nunca mais, quero continuar jovem...”. - <strong>Rosi Marinho, 56, Brasília.</strong>
								</em>
							</p>
						</blockquote>

						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"O Dermacaps salvou o meu casamento..."</strong></span>
							<p>
								<em>
									“O Dermacaps salvou o meu casamento… meu marido não me queria mais, não me desejava mais. Começei a usar o Dermacaps e agora ele me olha diferente, como se fôssemos jovens ainda… usei por 3 meses e estou me sentindo com 25 anos novamente rs. ”. - <strong>Depoimento Anônimo.</strong>
								</em>
							</p>
						</blockquote>

						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Se não der certo, você ganha seu dinheiro de volta. E se der certo, você ganha sua juventude de volta."</strong></span>
							<p>
								<em>
									“Testei o produto por 1 mês, consegui comprar antecipado. Infelizmente ele não mudou o que eu queria… meu pé de galinha foi embora, fiquei muito feliz, mas eu queria mesmo era diminuir o bigode chinês, o que todas as minhas amigas conseguiram com o produto. Eles me oferecem garantia de 100% satisfação, o que eu não esperava, eu mandei um email e eles me devolveram todo o dinheiro gasto na hora, e ainda deixaram eu ficar com os potes para mim. Eu resolvi dar para minha irmã e ela está adorando. Eu recomendo que todo mundo experimente. Se não der certo, você ganha seu dinheiro de volta. E se der certo, você ganha sua juventude de volta.”. - <strong>Carla Alves, 49, São Paulo.</strong>
								</em>
							</p>
						</blockquote>


						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Falavam que eu parecia ter 50 apesar de ter 39... hoje elas morrem de inveja de mim"</strong></span>
							<p>
								<em>
									“O pessoal do trabalho viva dizendo que eu parecia ter 50 por causa da minha aparência. Entrei de férias e resolvi usar o Dermacaps! Quando voltei ficaram surpresos, agora eu que sou a mais jovem da empresa haha”. - <strong>Luciana Silva, 39, Rio de Janeiro</strong>
								</em>
							</p>
						</blockquote>

						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Minha barriga ficou muito lisa, as estrias e celulites foram embora e o rosto melhorou muito."</strong></span>
							<p>
								<em>
									“Depois que eu tive meu filho, comecei a engordar. Cheguei a pesar 98kg e meu médico me recomendou o femproporex. Usei por algum tempo e emagreci bastante… mas fiquei com a pelanca. A minha barriga ficou muito flácida, e a minha autoestima foi lá no chão. Comecei a usar o Dermacaps e o resultado foi espetacular. Minha barriga ficou muito lisa, as estrias e celulites foram embora e o rosto melhorou muito. Super recomendo o Dermacaps”. - <strong>Flávia Cardoso, 41, Minas Gerais</strong>
								</em>
							</p>
						</blockquote>

						<blockquote style="margin: 0 0 20px; padding: 9px 20px 0 19px; border-left: 1px solid #ddd; color: #888888 !important;">
							<span style="color: #8a309b; font-style: italic; font-size: 18px; font-weight: normal; margin-bottom: 6px; display: block;">
								<strong>"Antes meu cabelo caía o tempo todo, mas depois de menos de 1 mês usando, ele parou completamente de cair."</strong></span>
							<p>
								<em>
									“Meu cabelo era bem grande mas começou a cair quando começei a pintar. Eu adoro ser loira e o Dermacaps acabou com a queda do meu cabelo. Antes meu cabelo caía o tempo todo, mas depois de menos de 1 mês usando, ele parou completamente de cair. ”. - <strong>Marcele Silveira, 45, Goiás</strong>
								</em>
							</p>
						</blockquote>

						<p><h2 style="font-size:22px;">Como experimentar o Dermacaps? Leitoras da revista Linda Pele tem vantagens exclusivas.</h2></p>
								

								<p>Dificilmente recomendamos algum produto no nosso site ou na revista, mas com as evidências de que esse produto realmente funciona e a satisfação garantida, sentimos que nossos leitores iriam gostar da dica.</p>
								<p>Além disso, a empresa responsável pela venda do <a href="<?php echo $url_final;?>" target="_blank"><strong>Dermacaps</strong></a> no Brasil confia tanto no seu produto, que <strong>oferece uma garantia de 100% de satisfação, basta entrar em contato com a empresa caso não estiver satisfeito com o produto e eles devolvem 100% do dinheiro pago.</strong></p>

								<p><strong>Importante: Segundo o fabricante, <a href="<?php echo $url_final;?>" target="_blank"><strong>Dermacaps</strong></a> só está disponível para compra através do seu SITE OFICIAL <a href="<?php echo $url_final;?>" target="_blank">www.dermacaps.com.br</a>, portanto não é vendido em farmácias e lojas especializadas. </strong></p>

								<p>De acordo com a empresa, isso é porque a demanda pelo produto está tão alta, que o pouco estoque que eles têm é vendido em poucas horas através do site oficial, <a href="<?php echo $url_final;?>" target="_blank">www.dermacaps.com.br</a>.</strong></p>

								<p><span style="color: red;">ATUALIZAÇÃO (em 14/01/2019): Devido ao grande sucesso do <a href="<?php echo $url_final;?>" target="_blank"><strong>Dermacaps</strong></a>, estão surgindo diversos produtos falsificados no Mercado Livre, na Americanas.com e em outros sites da Internet usando indevidamente a marca <a href="<?php echo $url_final;?>" target="_blank"><strong>Dermacaps</strong></a>. Tomem cuidado com esses produtos, pois são falsos e além de não sutirem efeito podem causar danos à saúde. O verdadeiro <a href="<?php echo $url_final;?>" target="_blank"><strong>Dermacaps</strong></a>, que é aprovado pela Anvisa e tem a eficiência comprovada em testes de laboratório, é vendido apenas no site oficial: <a href="<?php echo $url_final;?>" target="_blank">www.dermacaps.com.br</a>.</span></p>

							</div>
						</div>

						<div class="lista-de-entidades" align="center">
							<strong></strong>
							<blockquote style="background-color:#eee; padding: 10px 10px 0 10px;">
								<br>
								<div id="cta" align="center">
									<h2 style="font-size:20px; margin: 0px 0 10px 0;">Descontos de até 63% para leitores do Linda Pele
										<br>
									</h2>
									<br>
									<div style="font-size:16px;margin-bottom:10px;">
										<a href="<?php echo $url_final;?>" class="btn-compra" title="WhiteMax">
											<span style="color:#248807">à partir de agora 
											<span id="data2"></span>
											</span>
										</a>
									</div>
									<div style="text-align:center;">

										<a href="<?php echo $url_final;?>" class="btn-compra" title="WhiteMax">
											<img src="files/dermapote.png?v=1" width="25%" align="middle">
										</a>
										<br>
										<br>
										<!--<center>Autorização Anvisa: 25351.067298/2018-16</center>-->
										<!-- <center>Registro Ministério da Saúde: 25023.150766/2006-09</center> -->
										<p style="color:red; font-size:16px; margin:10px 0;">Atenção: Tenha vantagem com nosso link exclusivo e ganhe 63% de desconto e parcelamento em 12x, clicando
											no botão abaixo:</p>
										<div class="pulse">
											<div align="center">
												<a href="<?php echo $url_final;?>" class="btn-compra" title="Dermacaps">
													<img src="files/bt_experimente.png?12" class="pulse">
												</a>
											</div>
										</div>
										<p>
											<a href="<?php echo $url_final;?>" class="btn-compra pulse"
												title="Dermacaps">
												<span style="color:red; font-size: 13px; font-weight: bold">Clique AQUI Para Experimentar o Dermacaps</span>
											</a>
										</p>
									</div>
								</div>
								<br>
							</blockquote>
						</div>
<!-- 						
						<div class="lista-de-entidades">
							
							<div id="cta">
								<h2 style="font-size:24px;margin-top: -10px; margin-bottom: -20px;">Exclusivo para leitores do Notícia Hoje:</h2>

								<div style="text-align:center;">
									<a href="<?php //echo $url_final;?>" target="_blank">
										<img src="files/banner1.png" style="max-height:300px;"><br>
										<img src="files/bt_experimente.png" align="center" style="max-width:350px;">
									</a>
									<img src="files/anvisa.png" />
								</div>
							</div>
						</div> -->


 <!--               <div class="widget-comentarios">
                    <div id="boxComentarios" class="glbComentarios">
                        <div class="glbComentarios-header">
                            <div class="fb-comments" data-href="https://noticia-tv.com/entrevista-dermacaps/" data-numposts="10"></div>
                        </div>
                    </div>
                </div>-->

                
				<!-- COMENTARIOS 2020 -->
				<link href="https://noticia-tv.com/comentarios/estiloscomentarios.css?v2" rel="stylesheet">
				<div class="commentwrapper">
					<div id="load_testm_div" class="">

						<div class="message_box" style="font-size: 13px; font-weight: bold; padding: 10px 0; border-top: 1px solid #cccccc; border-bottom: 1px solid #cccccc; ">
						<div style="float: right; color: #3b5998; text-decoration: none; cursor: pointer;"></div>Comentários mais relevantes ▼</div>

					</div>
				</div>
				<!-- FIM COMENTARIOS -->


					</div>
					
		</div>

		<div class="glb-grid-4" style="position: fixed;">

									<div class="widget widget-primeira-pagina">
						<!-- div class="widget-titulo"><a href="<?php echo $url_final;?>" target="_blank"><strong class="titulo">
		primeira página
	</strong></a></div -->
						<!-- ul class="lista-chamadas">
							<li class="widget-primeira-pagina-materia-2">

								<div class="conteudo"><a href="<?php echo $advkelly_final ?>" rel="bookmark" class="titulo entry-title">
									<span class="foto esquerda l60"><span class="borda-arredondada pie"></span><img width="68" height="90" src="files/kelly.jpg" class="borda-arredondada pie"></span><span class="chamada alinhamento gui-color-primary-link">Kelly Key revela segredo sobre seus dentes</span></a></div>
							</li>
								
							
						</ul -->
						<!-- ul class="chamada chamada-rodape">
							<li><a href="<?php echo $url_final;?>" title="Veja todos os destaques do G1"><span class="gui-color-primary-link">veja todos os destaques ›</span></a></li>
						</ul -->

                       <div id="rola-pagina" class="glb-grid-4 q2w3-fixed-widget-container" style="display: block; top: 10px; width: 300px;">
                            <div class="widget widget-primeira-pagina">
                                <p class="update">
									<img src="files/checkmark-green-sm.png?1">Atualização:
									<span style="color:red;"> Descontos de 63% ainda disponíveis.</span>
									Promoção válida a partir de agora: <br>
									<span id="data"></span>
								</p>
                                
                                <div class="widget-titulo">
                                    <a href="<?php echo $url_final;?>">
                                        <strong class="titulo">63% DE DESCONTO!</strong>
                                    </a>
                                </div>
                                <ul class="lista-chamadas-2 pulse">
                                    <li>
                                        <center>
                                            <a href="<?php echo $url_final;?>">
                                                <img src="files/dermapote.png?v=1" class="img-responsive" width="160px">
                                                <img src="files/bt_experimente.png" class="img-responsive " width="280px">
                                            </a>
                                        </center>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

</div>
<div class="glb-bloco shopping-horizontal">
                <div class="glb-grid-12"></div>
            </div>
        </div>
    </div>
     <div id="glb-rodape" class="widget_rodape_container">
        <div class="footer product-color" data-ga-area="footer">
            <div class="grid-12 container clearfix" data-ga-marker="links">
                <!--<ul class="first-line">
                    <li class="ib middle"><a class="logo" href="<?php echo $url_final;?>">Globo.com</a></li>
                    <li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">g1</a></li>
                    <li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">globoesporte</a></li>
                    <li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">gshow</a></li>
                    <li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">famosos &amp; etc</a></li>
                    <li class= "ib middle"><a href="<?php echo $url_final;?>" target="_blank">vídeos</a></li>
                    <li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">todos os sites</a></li>
                    <li class="pushed ib middle"><span>Globo Notícias</span></li>
                </ul>--><span class="pull-left">© Copyright 2018 NOTÍCIA TV - O SEU PORTAL DE NOTÍCIAS</span>
                <ul class="footer-menu">
                    <li>Contato: contato@noticia-tv.com</li>
                    <li class="ib middle"><a href="privacidade.php" target="_blank">Política de Privacidade</a></li>
                    <li class="ib middle"><a href="https://dermacaps.com.br/pesquisas/" target="_blank">Pesquisas Científicas</a></li>
                    <!--<li class="ib middle"><a href="<?php echo $url_final;?>" target="_blank">assine</a></li>
                    <li class="last ib middle"><a href="<?php echo $url_final;?>" target="_blank">anuncie conosco</a></li> -->
                </ul>
            </div>
        </div>
    </div>


    <script>
	
    function ObterParametroUrl(parametro) {
        var parametros = window.location.search.substring(1).split("&");
        for (var i = 0; i < parametros.length; i++) {
            var splitParametro = parametros[i].split("=");
            if (splitParametro[0] == parametro) {
                return splitParametro[1];
            }
        }
    }

    //pego os parametros utm que vem na URL
    var source = ObterParametroUrl("utm_source");
    var medium = ObterParametroUrl("utm_medium");
    var content = ObterParametroUrl("utm_content");
    var campaign = ObterParametroUrl("utm_campaign");

		//////////VOLTAR SOURCE////////
		var voltarsource = ObterParametroUrl("utm_source");

		if(!voltarsource){
			voltarsource = "back";
		} else{
			voltarsource = voltarsource+"-back";
		}

		if(voltarsource.indexOf("back") === -1){
			voltarsource = voltarsource+"back"
		}

		if(voltarsource.indexOf("adv") === -1){
			voltarsource = voltarsource+"-adv-pv"
		}
		///////////////////////////////

		var urlnova = '';

    if (source) urlnova = urlnova + '?utm_source=' + source;
    if (medium) urlnova = urlnova + '&utm_medium=' + medium;
    if (campaign) urlnova = urlnova + '&utm_campaign=' + campaign;
    if (content) urlnova = urlnova + '&utm_content=' + content;
    var exitutm = "<?php echo $url; ?>?utm_source=exitpopup&utm_medium="+medium+"&utm_campaign="+campaign+"";
		
		if (!medium && campaign){
			var back_redirect_back_link = "<?php echo $url; ?>?utm_source="+voltarsource+"&utm_campaign="+campaign+"";
		}	else if (!campaign && medium){
			var back_redirect_back_link = "<?php echo $url; ?>?utm_source="+voltarsource+"&utm_medium="+medium+"";
		}	else if (!campaign && !medium){
			var back_redirect_back_link = "<?php echo $url; ?>?utm_source="+voltarsource+"";
		}else{
			var back_redirect_back_link = "<?php echo $url; ?>?utm_source="+voltarsource+"&utm_medium="+medium+"&utm_campaign="+campaign+"";
		}

    history.pushState({}, "", location.href);
    history.pushState({}, "", location.href);

    window.onpopstate = function() {
        setTimeout(function() {
            location.href = back_redirect_back_link;
        }, 1);
    };
    var Nomes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    var NomesSemana = ["Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado","Domingo"];

    var date = new Date();
    var n = date.getDay();
    var m = date.getMonth();
    var dia = date.getDate();
    var ano = date.getFullYear();

    var Texto = dia+" de "+Nomes[m]+" "+ano+""
    document.getElementById("data").innerHTML = Texto; 
    document.getElementById("data2").innerHTML = Texto; 
</script>

<script async src="https://noticia-tv.com/comentarios/dermacaps/comentarios.js"></script>        
</body>

</html>