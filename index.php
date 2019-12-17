<html>
<head>
	<meta charset="UTF-8">
	<title>PsicoSafe</title>
	
	<!-- Importação de materiais fundamentais -->
		<!-- Importa e implementa JQuery, uma biblioteca de funções JavaScript -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Importa todo o framework CSS (feito a mão) complementar à página -->
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<!-- Importa fontes personalizadas diretamente da API do Google -->
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<!-- Importa todo o framework JS (feito a mão) para dar funcionalidade à página,
		além de	todo o script necessário para fazer todas as funções dos quizes funcionarem -->
		<script src="./js/index.js"></script>
		<script src="./js/quiz.js"></script>
	<!-- Fim das importações -->
	
</head>
<body>

	<!-- Introdução ao site, com uma caixa de imagem e texto -->
		<figure class="backimage" id="imgBackground"></figure>
		<figure class="backimage gradient"></figure>
		<div class="panelwrapper">
			<div class="panel fBorder bShadow">
				<img class="logo" src="img/logo.png">
				<div class="buttons">
					<div id="b1" class="transition active"></div>
					<div id="b2" class="transition"></div>
					<div id="b3" class="transition"></div>
				</div>
				<img class="transition active" src="img/txt1.png" id="txt1">
				<img class="transition" src="img/txt2.png" id="txt2">
				<img class="transition" src="img/txt3.png" id="txt3">
				<figure class="presentation" id="presentBg1"></figure>
				<article class="gradient">
					<div>				
						<h1>Como podemos<br>ajudar você?</h1><p style="line-height: 10px;"><br></p>
						Esse site foi desenvolvido por alunos da ETEC Pedro Badran com o auxílio de profissionais da saúde em busca de conscientizar jovens sobre saúde mental.<br><p style="line-height: 10px;"><br></p>
						Se você tem acima de 14 anos, clique no botão abaixo para podermos investigar indícios de qualquer transtorno psicológico e oferecer as devidas instruções do que pode ser feito.<p style="line-height: 15px;"><br></p>
						<p class="tcenter"><input class="button tcenter bshadow" type="button" value="Comece o teste" onclick="window.location='#titlebox'"></p>
						<footer>
							Imagens retiradas: Shutterstock.<br>
							<i><span style="word-break: break-all;">Disponível em: &lthttps://www.shutterstock.com&gt.</span>
							Acesso em: 17 maio 2019.</i><br><p style="line-height: 10px;"><br></p>
							Dados retirados: FOLHA informativa - Saúde mental dos adolescentes. 2018.<br>
							<i>Disponível em: <span style="word-break: break-all;">&lthttps://www.paho.org/bra/index.php?option=com_content&view=article&id=5779:folha-informativa-saude-mental-dos-adolescentes&Itemid=839&gt.</span>
							Acesso em: 17 maio 2019.</i>
						</footer>
					</div>
				</article>
			</div>
		</div>
	<!-- Fim da introdução ao site -->

	<!-- Barra de navegação -->
		<header class="titlebox center fBorder bShadow" id="titlebox">
			<nav>
				<div class="option active" id="bgeral">
					<h1><img src="img/heartsymbol.png">
					<div><span>TESTE</span><br>GERAL</div></h1>
				</div>
				<div class="option" id="bansiedade">
					<h1><span>TESTE DE</span><br>ANSIEDADE</h1>
				</div>
				<div class="option" id="bdepressao">
					<h1><span>TESTE DE</span><br>DEPRESSÃO</h1>
				</div>
				<div class="option" id="binformacao">
					<h1><span>VENHA SE</span><br>INFORMAR</h1>
				</div>
				<div class="option" id="bresultados">
					<h1><span>TESTE ANTERIOR</span><br>RESULTADO</h1>
				</div>
			</nav>
		</header>
	<!-- Fim da barra de navegação -->

	<main class="content center border bShadow justify stylize">

		<!-- Conteúdo fixo, demonstrado como uma caixa expnadível,
		contendo avisos gerais e declarações técnicas informativas. -->
			<section class="textbox mini">
				<div class="minimize transition">+</div>
				<h1>Você agora está no PsicoSafe, bem-vindo.</h1>
				<article>
					<h2>Entenda nossa proposta</h2>
					<p>Esse é um projeto desenvolvido por estudantes do ensino médio integrado ao técnico da ETEC de São Joaquim da Barra – SP. Nós buscamos a conscientização de jovens como nós sobre saúde mental, um tema que frequentemente não é tratado com devida atenção.</p>
					<p>Na realidade, até mesmo mais do que para adultos, entender sobre a própria saúde mental é extremamente importante. A adolescência é assombrada pelo risco do desenvolvimento de transtornos mentais, e pior ainda, pelo risco de não serem tratadas – e na maioria das vezes, nem mesmo diagnosticadas. As consequências da não abordagem do tema são graves.</p>
					<p><span style="font-size: 13px;"><i>Entenda: os transtornos mentais que nos referimos são patologias que afetam o psicológico, como ansiedade, depressão ou esquizofrenia.</i></span></p>
					<p>Diante de um mundo onde tantas pessoas são prejudicadas por juventudes que não puderam receber atenção sobre questões tão delicadas, nem tratamentos fundamentais para o bem-estar e para a saúde, nós propomos a PsicoSafe.</p>
					<b>Nossa missão não é a de tratar patologias, nem de entregar diagnósticos confiáveis</b>
					(confiamos essas tarefas aos profissionais da área da saúde), mas a de conscientizar sobre como transtornos mentais estão tão presentes entre a gente, além de incentivar a procura por assistência médica para qualquer um que demonstre sinais de algum problema, ou mesmo só para quem suspeita de alguma coisa.</p>
					<p>Realize qualquer um de nossos testes para que possamos começar a te ajudar! Você também pode pular a parte do teste e consultar nossa 
					<a>PLANILHA INFORMATIVA</a>
					para ter informações sobre os mais frequentes transtornos mentais e como começar a procurar ajuda.</p>
					<h2>Nós te avisamos!</h2>
					<p>Os questionários que disponibilizamos entregam ao usuário, no final, um ou mais resultados. Os resultados vêm de cálculos realizados pelos nossos algoritmos com base em suas respostas que identificam características comportamentais comuns de pessoa afetada pelo(s) transtorno(s) em questão.</p>
					<p>Por isso, 
					<b>nossos resultados não devem ser tratados como diagnósticos </b>
					reais. É a função de profissionais da saúde analisar cada caso individualmente e diagnosticar, ou não, a ocorrência de transtornos. Recomendamos que os testes sejam realizados pela diversão e que sirvam de incentivo para a procura de ajuda médica.</p>
					<p style="margin-bottom: 15px;">Transtornos mentais não são brincadeira. Dê a eles a atenção que merecem.</p>
				</article>
			</section>
		<!-- Fim do conteúdo fixo -->

		<!-- Conteúdo da página -->
			<section class="page" id="bgeralp">
				<!-- Texto de conteúdo -->
					<p class="tcenter"><input class="button tcenter bshadow" type="button" value="Pular ao teste" onclick="window.location='#tgeral'"></p>
					<h3 class="tcenter">Sintomas comuns da ansiedade:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Inquietação, Náuseas, Fadiga,
						Palpitações, Irritabilidade, Falta de ar,
						Taquicardia, Dor de cabeça, Aumento de pressão,
						Sudorese excessiva, Dores musculares, Tensão muscular
					</p>
					<h3 class="tcenter">Sintomas comuns da depressão:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Estado deprimido, Anedonia, Ideias suicidas,
						Culpa excessiva, Problemas motores, Fadiga,
						Fraqueza, Baixa autoestima, Dificuldade em concentrar,
						Alteração de peso, Insônia, Alteração da líbido
					</p>
					<h3 class="tcenter">Sintomas comuns da síndrome do pânico:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Vertigem, Calafrios, Adormecimentos,
						Estremecimentos, Taquicardia, Falta de ar,
						Sudorese, Náusea, Medo de morrer,
						Despersonalização, Desrealização, Sinais de infarto
					</p>
					<p>O teste que você está para realizar analisará, com base nas suas respostas de zero a dez para cada uma das perguntas, indícios que você apresente os sintomas acima. Seu resultado final será baseado na quantidade de sintomas que você aparenta apresentar. Mais instruções serão oferecidas ao final do teste.</p>
				<!-- Fim do conteúdo -->
				
				<!-- Teste psicológico -->
					<div class="textbox"><h1 class="tcenter"><b>TESTE PSICOLÓGICO</b></h1></div>
					<article id="tgeral" class="tcenter">
						<h2>De 0 a 10, diga quanto você se identifica com as seguintes afirmações,<br>
						com 0 sendo <b>"não concordo"</b> e 10 sendo <b>"concordo fortemente"</b>:</h2>
						<hr>
						<div class="questions">
						
							<!-- Questões sobre ansiedade -->
								<div class="questionsection" id="geralsection1">
									<p>Costumo sentir dores ou apertos no peito.</p>
									<!-- Toda class 'numberbuttons' gera em JS uma lista de números selecionáveis -->
									<div class="numberbuttons"></div>
									<p>De vez em quando, sinto falta de ar, fico com a respiração ofegante.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, minhas mãos (ou outras partes do corpo) tremem.</p>
									<div class="numberbuttons"></div>
									<p>Ultimamente, tenho tido bastante insônia.</p>
									<div class="numberbuttons"></div>
									<p>Me sinto inseguro em várias situações.</p>
									<div class="numberbuttons"></div>
								</div>
								<div class="questionsection" id="geralsection2">
									<p>Às vezes tenho tonturas e vertigens.</p>
									<div class="numberbuttons"></div>
									<p>Sinto, do nada, uma sensação de morte, como se estivesse acontecendo.</p>
									<div class="numberbuttons"></div>
									<p>Tenho problemas gastrointestinais de vez em quando.</p>
									<div class="numberbuttons"></div>
									<p>Em certas situações, tenho uma sensação forte de nervosismo.</p>
									<div class="numberbuttons"></div>	
									<p>Nervosismo de mais pode me levar a um certo pânico intenso.</p>
									<div class="numberbuttons"></div>	
								</div>
							<!-- Fim das questões -->
						
							<!-- Questões sobre depressão -->
								<div class="questionsection" id="geralsection3">
									<p>Me sinto deprimido com frequência.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, me sinto inútil, meio desamparado.</p>
									<div class="numberbuttons"></div>
									<p>Tenho tido dificuldade para dormir.</p>
									<div class="numberbuttons"></div>
									<p>Me sinto sem energia, sem ânimo para fazer certas coisas.</p>
									<div class="numberbuttons"></div>
									<p>Perdi o interesse ou prazer por hobbies e atividades.</p>
									<div class="numberbuttons"></div>
								</div>
								<div class="questionsection" id="geralsection4">
									<p>Às vezes me sinto triste, "vazio" de certa forma.</p>
									<div class="numberbuttons"></div>
									<p>Fico ansioso por coisa simples, às vezes sem entender direito o motivo.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, penso em me machucar, ou coisa pior.</p>
									<div class="numberbuttons"></div>
									<p>Tenho ficado irritado com facilidade.</p>
									<div class="numberbuttons"></div>	
									<p>Tenho dificuldade em tomar decisões simples.</p>
									<div class="numberbuttons"></div>	
								</div>
							<!-- Fim das questões -->
							
							<!-- Questões sobre síndrome do pânico -->			
								<div class="questionsection" id="geralsection5">
									<p>Às vezes, vem uma sensação de perigo imininente.</p>
									<div class="numberbuttons"></div>
									<p>Tenho medo da morte, medo de que uma tragédia aconteça.</p>
									<div class="numberbuttons"></div>
									<p>De vez em quando, me sinto fora da realidade.</p>
									<div class="numberbuttons"></div>
									<p>Em momentos de tensão, partes do meu corpo ficam dormentes, formigando.</p>
									<div class="numberbuttons"></div>
									<p>Em tensão, meu coração palpita, bate acelerado, mais do que o normal.</p>
									<div class="numberbuttons"></div>
								</div>
								<div class="questionsection" id="geralsection6">
									<p>Tenho momentos que sinto pânico/desespero ao extremo.</p>
									<div class="numberbuttons"></div>
									<p>Se entro em pânico, tenho dificuldades pra respirar.</p>
									<div class="numberbuttons"></div>
									<p>Se fico desesperado, sinto náuseas, enjoo.</p>
									<div class="numberbuttons"></div>
									<p>Quando entro em pânico, começo a suar e tremer muito.</p>
									<div class="numberbuttons"></div>
									<p>Se sinto pânico de mais, posso chegar até a desmaiar.</p>
									<div class="numberbuttons"></div>
								</div>
							<!-- Fim das questões -->
							
						</div>
					</article>
				<!-- Fim do teste -->
			</section>
			<section class="page hidden" id="bansiedadep">
				<!-- Texto de conteúdo -->
					<h3 class="citation">“O transtorno de ansiedade generalizada (TAG) é um distúrbio caracterizado pela “preocupação excessiva ou expectativa apreensiva”, persistente e de difícil controle, que perdura por seis meses no mínimo. “</h3>
					<p class="tcenter"><input class="button tcenter bshadow" type="button" value="Pular ao teste" onclick="window.location='#tansiedade'"></p>
					<p>A ansiedade é uma reação normal diante de situações que podem provocar medo, dúvida ou expectativa. Mas, na TAG, o nível de ansiedade é desproporcional aos acontecimentos geradores do transtorno, causa muito sofrimento e interfere na qualidade de vida e no desempenho familiar, social e profissional.</p>
					<h3 class="tcenter">Sintomas comuns da ansiedade:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Inquietação, Náuseas, Fadiga,
						Palpitações, Irritabilidade, Falta de ar,
						Taquicardia, Dor de cabeça, Aumento de pressão,
						Sudorese excessiva, Dores musculares, Tensão muscular
					</p>
					<p>O teste que você está para realizar analisará, com base nas suas respostas de zero a dez para cada uma das perguntas, indícios que você apresente os sintomas acima. Seu resultado final será baseado na quantidade de sintomas que você aparenta apresentar. Mais instruções serão oferecidas ao final do teste.</p>
					<p>Esse é um distúrbio que pode afetar qualquer pessoa de qualquer faixa etária, desde crianças até idosos. É comum que os sintomas venham acompanhados de várias condições clínicas diferentes que exigem tratamentos específicos, como por exemplo: depressão, TOC, síndrome do pânico ou fobia social.</p>
					<p class="reference">Dados retirados: BRUNA, Maria Helena Varella. Doenças e Sintomas: Ansiedade (TAG). [S. l.], [20--]. Acesso: 26 jun. 2019.<br>
					Disponível: https://drauziovarella.uol.com.br/doencas-e-sintomas/ansiedade-transtorno-de-ansiedade-generalizada/.</p>
				<!-- Fim do conteúdo -->

				<!-- Teste psicológico -->
					<div class="textbox"><h1 class="tcenter"><b>TESTE DE ANSIEDADE</b></h1></div>
					<article id="tansiedade" class="tcenter">
						<h2>De 0 a 10, diga quanto você se identifica com as seguintes afirmações,<br>
						com 0 sendo <b>"não concordo"</b> e 10 sendo <b>"concordo fortemente"</b>:</h2>
						<hr>
						<div class="questions">
							
							<!-- Questões sobre ansiedade -->
								<div class="questionsection" id="ansiedadesection1">
									<p>Costumo sentir dores ou apertos no peito.</p>
									<!-- Toda class 'numberbuttons' gera em JS uma lista de números selecionáveis -->
									<div class="numberbuttons"></div>
									<p>De vez em quando, sinto falta de ar, fico com a respiração ofegante.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, minhas mãos (ou outras partes do corpo) tremem.</p>
									<div class="numberbuttons"></div>
									<p>Ultimamente, tenho tido bastante insônia.</p>
									<div class="numberbuttons"></div>
									<p>Me sinto inseguro em várias situações.</p>
									<div class="numberbuttons"></div>
								</div>
								<div class="questionsection" id="ansiedadesection2">
									<p>Às vezes tenho tonturas e vertigens.</p>
									<div class="numberbuttons"></div>
									<p>Sinto, do nada, uma sensação de morte, como se estivesse acontecendo.</p>
									<div class="numberbuttons"></div>
									<p>Tenho problemas gastrointestinais de vez em quando.</p>
									<div class="numberbuttons"></div>
									<p>Em certas situações, tenho uma sensação forte de nervosismo.</p>
									<div class="numberbuttons"></div>	
									<p>Nervosismo de mais pode me levar a um certo pânico intenso.</p>
									<div class="numberbuttons"></div>	
								</div>
							<!-- Fim das questões -->
							
						</div>	
					</article>
				<!-- Fim do teste -->
			</section>
			<section class="page hidden" id="bdepressaop">
				<!-- Texto de conteúdo -->
					<h3 class="citation">“Depressão é uma doença psiquiátrica crônica e recorrente que produz uma alteração do humor caracterizada por uma tristeza profunda, sem fim, associada a sentimentos de dor, amargura, desencanto, desesperança, baixa autoestima e culpa, assim como a distúrbios do sono e do apetite. “</h3>
					<p class="tcenter"><input class="button tcenter bshadow" type="button" value="Pular ao teste" onclick="window.location='#tdepressao'"></p>
					<p><i>“A depressão é uma doença incapacitante que atinge por volta de 350 milhões de pessoas no mundo”</i>. No início, pode ser difícil reconhecer os sintomas, mas quanto mais grave o caso, mais evidentes eles serão. Nenhum sinal de nenhum dos sintomas deve passar despercebido, referências a ideais suicidas ou de autodestruição devem ser sempre tratadas com seriedade.</p>
					<h3 class="tcenter">Sintomas comuns da depressão:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Estado deprimido, Anedonia, Ideias suicidas,
						Culpa excessiva, Problemas motores, Fadiga,
						Fraqueza, Baixa autoestima, Dificuldade em concentrar,
						Alteração de peso, Insônia, Alteração da líbido
					</p>
					<p>O teste que você está para realizar analisará, com base nas suas respostas de zero a dez para cada uma das perguntas, indícios que você apresente os sintomas acima. Seu resultado final será baseado na quantidade de sintomas que você aparenta apresentar. Mais instruções serão oferecidas ao final do teste.</p>
					<p>A depressão é uma doença cruel, provocada por uma disfunção bioquímica no cérebro. Pode haver predisposição genética, mas sempre existem gatilhos que podem despertar crises, como acontecimentos traumáticos (especialmente na infância), estresse físico e psicológico, algumas doenças sistêmicas, consumo de drogas lícitas e ilícitas, além de certos medicamentos.</p>
					<p class="reference">Dados retirados: BRUNA, Maria Helena Varella. Doenças e Sintomas: Depressão. [S. l.], [20--].<br>
					Disponível em: https://drauziovarella.uol.com.br/doencas-e-sintomas/depressao/. Acesso em: 10 jun. 2019.</p>
				<!-- Fim do conteúdo -->

				<!-- Teste psicológico -->
					<div class="textbox"><h1 class="tcenter"><b>TESTE DE DEPRESSÃO</b></h1></div>
					<article id="tdepressao" class="tcenter">
						<h2>De 0 a 10, diga quanto você se identifica com as seguintes afirmações,<br>
						com 0 sendo <b>"não concordo"</b> e 10 sendo <b>"concordo fortemente"</b>:</h2>
						<hr>
						<div class="questions">
						
							<!-- Questões sobre depressão -->
								<div class="questionsection" id="depressaosection1">
									<p>Me sinto deprimido com frequência.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, me sinto inútil, meio desamparado.</p>
									<div class="numberbuttons"></div>
									<p>Tenho tido dificuldade para dormir.</p>
									<div class="numberbuttons"></div>
									<p>Me sinto sem energia, sem ânimo para fazer certas coisas.</p>
									<div class="numberbuttons"></div>
									<p>Perdi o interesse ou prazer por hobbies e atividades.</p>
									<div class="numberbuttons"></div>
								</div>
								<div class="questionsection" id="depressaosection2">
									<p>Às vezes me sinto triste, "vazio" de certa forma.</p>
									<div class="numberbuttons"></div>
									<p>Fico ansioso por coisa simples, às vezes sem entender direito o motivo.</p>
									<div class="numberbuttons"></div>
									<p>Às vezes, penso em me machucar, ou coisa pior.</p>
									<div class="numberbuttons"></div>
									<p>Tenho ficado irritado com facilidade.</p>
									<div class="numberbuttons"></div>	
									<p>Tenho dificuldade em tomar decisões simples.</p>
									<div class="numberbuttons"></div>	
								</div>
							<!-- Fim das questões -->
							
						</div>
					</article>
				<!-- Fim do teste -->
			</section>
			<section class="page hidden" id="binformacaop">
				<!-- Conteúdo sobre síndrome do pânico -->
					<h1 class="tcenter"><b>SÍDNROME DO PÂNICO</b></h1>
					<h3 class="citation">“A síndrome ou transtorno do pânico (ansiedade paroxística episódica) é uma condição associada a crises repentinas de ansiedade aguda, marcadas por muito medo e desespero, associadas a sintomas físicos e emocionais aterrorizantes. “</h3>
					<p>A síndrome é caracterizada pelo acontecimento repentino de crises de ansiedade fortes e sérias que envolvem medo e desespero, com sintomas físicos e emocionais aterrorizantes, que chegam a durar até dez minutos, variando de intensidade durante o período. Cada uma das crises é intensa e grave.</p>
					<h3 class="tcenter">Sintomas comuns da síndrome do pânico:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Vertigem,
						Calafrios,
						Adormecimentos,
						Estremecimentos,
						Taquicardia,
						Falta de ar,
						Sudorese,
						Náusea,
						Medo de morrer,
						Despersonalização,
						Desrealização,
						Sinais de infarto
					</p>
					<p>O ataque costuma durar pouco tempo, mas a pessoa experimenta durante cada segundo a sensação de que vai enlouquecer ou até mesmo morrer. O episódio pode se repetir aleatoriamente: várias vezes no mesmo dia ou demorar semanas, meses ou até anos para aparecer mais uma vez.</p>
					<p>O indivíduo que já passou por um dos horrendos ataques dessa síndrome sente constante medo por não fazer ideia de quando, ou se, a crise vai acontecer, gerando tensão e ansiedade que podem levar ao desenvolvimento de outras fobias, como a ansiedade ou a agorafobia.</p>
					<h3 class="tcenter">Para saber mais, recomendamos que acesse:</h3>
					<!-- A classe 'links' estiliza botões clicáveis com links diferentes -->
					<p class="links tcenter">
						Dráuzio, https://drauziovarella.uol.com.br/doencas-e-sintomas/sindrome-do-panico-2/,
						Minha vida, https://www.minhavida.com.br/saude/temas/sindrome-do-panico,
						Pfizer, https://www.pfizer.com.br/noticias/Diferenca-entre-ansiedade-e-sindrome-do-panico
					</p>
					<hr>
				<!-- Fim do conteúdo -->

				<!-- Conteúdo sobre borderline -->
					<h1 class="tcenter"><b>BORDERLINE</b></h1>
					<h3 class="citation">“Síndrome de borderline (transtorno de personalidade borderline, TPB) é um transtorno mental grave caracterizado por um padrão de instabilidade contínua no humor, no comportamento, autoimagem e funcionamento. “</h3>
					<p>Os mais comuns sintomas da síndrome <i>que também pode ser chamada de transtorno de personalidade limítrofe</i> envolvem instabilidade emocional, sensação de inutilidade, insegurança e impulsividade que prejudicam as relações sociais. Como consequência, podem vir ações impulsivas e relacionamentos instáveis.</p>
					<h3 class="tcenter">Sintomas comuns da síndrome de borderline:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Medo do abandono,
						Impulsividade,
						Baixa autoestima,
						Irracionalidade,
						Humor variável,
						Solidão,
						Raiva intensa,
						Paranoia,
						Relações instáveis,
						Atitudes perigosas,
						Ações autodestrutivas,
						Ideias suicidas
					</p>
					<p>O nome do transtorno reflete como os afetados possuem suas personalidades no limite. Suas mentes são impulsivas ao extremo, tornando o convívio social quase impossível: relações não possuem estabilidade nenhuma, podendo passar de paixão para ódio num piscar de olho, sem justificativa alguma.</p>
					<p>Uma pessoa com borderline pode experimentar episódios intensos de raiva, depressão e ansiedade que podem durar apenas algumas horas ou mesmo dias. São altas as taxas de ocorrências em conjunto de outros transtornos mentais, como distúrbios de humor, ansiedade e distúrbios alimentares.</p>
					<h3 class="tcenter">Para saber mais, recomendamos que acesse:</h3>
					<!-- A classe 'links' estiliza botões clicáveis com links diferentes -->
					<p class="links tcenter">
						Vittude, https://www.vittude.com/blog/sindrome-de-borderline/,
						Abril, https://saude.abril.com.br/mente-saudavel/transtorno-de-personalidade-borderline-o-que-e-e-como-controlar/,
						Minha Vida, https://www.minhavida.com.br/saude/temas/transtorno-de-personalidade-borderline
					</p>
					<hr>
				<!-- Fim do conteúdo -->

				<!-- Conteúdo sobre esquizofrenia -->
					<h1 class="tcenter"><b>ESQUIZOFRENIA</b></h1>
					<h3 class="citation">“A esquizofrenia é um transtorno psiquiátrico em que uma alteração cerebral dificulta o correto julgamento sobre a realidade, a produção de pensamentos simbólicos e abstratos e a elaboração de respostas emocionais complexas. ”</h3>
					<p>Uma doença crônica e complexa que exige tratamento por toda a vida, afetando aproximadamente 1% do mundo todo, evidenciando seus sintomas no final da adolescência. Existem diversos tipos diferentes de esquizofrenia: a paranoide, a desorganizada, a catatônica e a simples. Ela é causada por fatores genéticos.</p>
					<h3 class="tcenter">Sintomas comuns da esquizofrenia:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Delírios,
						Alucinações,
						Desmotivação,
						Irritabilidade,
						Não sentir prazer,
						Pouca socialização,
						Problemas de sono,
						Prejuízo da linguagem,
						Pensamento desorganizado,
						Hab. motora desorganizada,
						Negligencias na higiene,
						Perda de interesse	
					</p>
					<p>Apesar de ambiente e fatores externos não influenciarem no desenvolvimento do transtorno, existem certos gatilhos que são posteriores ao aparecimento dos sintomas, tais como tabagismo, uso de maconha, problemas no parto, exposição a toxinas no útero da mãe, ou histórico familiar de esquizofrenia.</p>
					<h3 class="tcenter">Para saber mais, recomendamos que acesse:</h3>
					<!-- A classe 'links' estiliza botões clicáveis com links diferentes -->
					<p class="links tcenter">
						Minha Vida, https://www.minhavida.com.br/saude/temas/esquizofrenia,
						Abril, https://saude.abril.com.br/mente-saudavel/o-que-e-esquizofrenia-sintomas-diagnostico-e-tratamento/,
						Dráuzio, https://drauziovarella.uol.com.br/entrevistas-2/esquizofrenia-entrevista/
					</p>
					<hr>
				<!-- Fim do conteúdo -->

				<!-- Conteúdo sobre distúrbios alimentares -->
					<h1 class="tcenter"><b>DISTÚRBIOS ALIMENTARES</b></h1>
					<h3 class="citation">“Distúrbios alimentares podem ser originados de hábitos alimentares que causam danos à saúde como a redução extrema ou consumo em excesso de alimentos. ”</h3>
					<p>Distúrbios nos hábitos alimentares são comuns na adolescência, relacionados a uma série de consequências psicológicas. 1% de toda a população mundial sofre com transtornos do tipo, cujas causas envolvem fatores psicológicos (distúrbios emocionais), socioculturais (culto excessivo ao corpo), biológicos (maus hábitos alimentares) e genéticos (questões hormonais).</p>
					<h3 class="tcenter">Os principais tipos de distúrbios alimentares:</h3>
					<!-- A classe 'symptonlist' estiliza o conteúdo das linhas como uma lista -->
					<p class="symptonlist">
						Anorexia,
						Bulimia,
						TCA ou TCAP,
						Anemia,
						Hipergrafia,
						Ortorexia,
						Alotriofagia,
						Vigorexia
					</p>
					<p>Os mais famosos distúrbios são anorexia e bulimia. Pacientes com anorexia nervosa se auto avaliam com excesso de peso, até mesmo se estiverem com o peso ideal, e recorrem a exercícios físicos exagerados, uso indevido de laxantes, diuréticos, entre outros.</p>
					<p>Pacientes com bulimia nervosa comem em grande quantidade e chegam a recorrer a vômitos forçados, uso de laxantes e diuréticos, jejum e exercícios excessivos. Tanto bulimia quanto anorexia quanto a maioria dos distúrbios alimentares vem acompanhados de enorme sentimento de culpa e de vergonha.</p>
					<h3 class="tcenter">Para saber mais, recomendamos que acesse:</h3>
					<!-- A classe 'links' estiliza botões clicáveis com links diferentes -->
					<p class="links tcenter">
						Vittude, https://www.vittude.com/blog/disturbios-alimentares-causas-sintomas-tratamentos/,
						Minha Vida, https://www.minhavida.com.br/alimentacao/materias/17136-conheca-os-outros-disturbios-alimentares-que-podem-ameacar-sua-saude,
						Tua Saúde, https://www.tuasaude.com/principais-transtornos-alimentares/
					</p>
				<!-- Fim do conteúdo -->
			</section>
			<section class="page hidden" id="bresultadosp">
				<!-- Textos informativos fixos -->
					<h3 class="tcenter" style="font-weight: normal">Nós, criadores da PsicoSafe e alunos da ETEC Pedro Badran,<br>
					estamos muito gratos por você conseguir se abrir com a gente nesse teste.</h3>
					<h3 class="tcenter" style="margin: 10px">Você não está sozinho.</h3>
					<h3 class="tcenter" style="font-weight: normal">De acordo com as suas respostas, esses são os resultados...</h3>
				<!-- Fim dos textos -->

				<!-- Texto para caso nenhum teste tenha sido realizado -->
					<div id="realizar" class="tcenter">
						<h2>Parece que você ainda não realizou nenhum teste!</h2>
						<h3 style="font-weight: normal">Por favor, visite as outras páginas para fazer algum.<br>
						Estamos ansiosos para te ajudar.<br><br>
						Caso já tenha realizado algum teste e mesmo assim ele não estiver aparecendo,
						isso quer dizer que você atualizou a página. Por favor faça o teste mais uma vez.</h3>		
					</div>
				<!-- Fim do texto -->

				<!-- Resultado de depressão -->
					<div id="rdepressao" class="tcenter hidden">
						<h2>Suspeitamos que apresente sinais de...</h2>
						<h1 style="font-size: 2em; margin: 0;">DEPRESSÃO</h1>
						<p>Um distúrbio mental caracterizado no humor por tristeza, desesperança, perda de prazer nas atividades, solidão, tédio ou sofrimento emocional.
						Agitação, automutilação, choro, irritabilidade, isolamento, problemas de sono, pensamentos suicidas, fadiga persistente, são todos sintomas físicos ainda mais evidentes desse transtorno maligno.</p>
						<input class="button tcenter bshadow" type="button" value="Navegue para saber mais" onclick="window.location='#titlebox'">
						<p>São muitos sintomas, mas uma pessoa com depressão não precisa demonstrar nem a maioria,<br>
						qualquer sinal já é sinal suficiente. <b>Você não precisa passar por isso sozinho.</b></p>
						<hr>
					</div>
				<!-- Fim do resultado -->

				<!-- Resultado de ansiedade -->
					<div id="ransiedade" class="tcenter hidden">
						<h2>Suspeitamos que apresente sinais de...</h2>
						<h1 style="font-size: 2em; margin: 0;">ANSIEDADE</h1>
						<p>A ansiedade pode ser normal e é um indicador de doenças somente quando os sintomas se tornam excessivos e começam a interferir na vida cotidiana. Sentir ansiedade significa ter preocupação intensa, excessiva e persistente – praticamente um medo de situações cotidianas.</p>
						<input class="button tcenter bshadow" type="button" value="Navegue para saber mais" onclick="window.location='#titlebox'">
						<p>Se isso está começando a atrapalhar seu dia a dia, mesmo que só um pouco, pode ser a hora para ir atrás de procurar ajuda. <b>Você não precisa sofrer por causa de ansiedade.</b></p>
						<hr>
					</div>
				<!-- Fim do resultado -->

				<!-- Resultado de síndrome do pânico -->
					<div id="rpanico" class="tcenter hidden">
						<h2>Suspeitamos que apresente sinais de...</h2>
						<h1 style="font-size: 2em; margin: 0;">SÍNDROME DO PÂNICO</h1>
						<p>Essa síndrome surge quando a preocupação com ataques de pânico atrapalha sua vida. Esse tipo de ataque costuma se proveniente de transtornos de ansiedade, são episódios súbitos de medo e ansiedade intensos, de sintomas físicos e psicológicos fortíssimos.</p>
						<input class="button tcenter bshadow" type="button" value="Navegue para saber mais" onclick="window.location='#titlebox'">
						<p>Ataques de pânico são horríveis, e piores ainda quando se tornam frequentes, mas existem meios para lidar com esses eventos. <b>Com ajuda, você não precisa continuar sofrendo.</b></p>
						<hr>
					</div>
				<!-- Fim do resultado -->

				<!-- Resultado geral fixo caso haja sinais -->
					<div id="rajuda" class="tcenter hidden">
						<h3 style="font-weight: normal">Suas respostas indicam que você pode estar precisando de ajuda.</h3>
						<h3>Procure já ajuda psicológica. Consulte um psicólogo.</h3>
					</div>
				<!-- Fim do resultado -->

				<!-- Resultado geral fixo caso não haja sinais -->
					<div id="rgeral" class="tcenter hidden">
						<h3 style="font-weight: normal">Você apresenta nenhum ou poucos sinais dos sintomas pelos quais investigamos. Isso é muito bom, mas não é perfeito.</h3>
						<h3>Nosso site não faz diagnósticos, você pode precisar de ajuda mesmo assim.<br>
						Se seu emocional tem te atrapalhado, conte o que sente para um psicólogo.</h3>
					</div>
				<!-- Fim do resultado -->

				<!-- Textos informativos fixos -->
					<section class="textbox" style="padding-top:10px; padding-bottom:5px;">
						<h3 class="tcenter" style="font-weight: normal">Pelo <a href="https://www.cvv.org.br/">CVV</a>, você pode obter auxílio psicológico gratuito e anônimo. <i>Ligue 144.</i></h3></div>
						<article class="citation">
							<h1>LIGUE 144</h1>
							<h2>CVV - Centro de Valorização da vida</h2>
							<h3><a href="https://www.cvv.org.br/">CONSULTE O SITE OFICIAL</a></h3>
							<hr>
							<h1 style="font-size: 1.7em">ATENDIMENTO PSICOLÓGICO GRATUITO</h1>
							<h2>CAPS - Centro de Atenção Psicossocial</h2>
							<h3><a href="http://www.saude.gov.br/noticias/693-acoes-e-programas/41146-centro-de-atencao-psicossocial-caps">CONSULTE O SITE GOVERNAMENTAL</a></h3><br>
							<h3 style="font-style: normal;">Conheça o CAPS de São Joaquim da Barra:</h3>
							<div class="map1">
								<iframe width="590" height="440" src="https://maps.google.com/maps?width=590&amp;height=440&amp;hl=en&amp;q=CAPS%20I%20-%20Centro%20de%20Aten%C3%A7%C3%A3o%20Psicossocial%20Professor%20Alexandre%20Dezem+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							</div><br>
						</article>
					</section>
				<!-- Fim do texto -->
			</section>
		<!-- Fim da declaração de conteúdo -->
		
	</main>
</body>
</html>