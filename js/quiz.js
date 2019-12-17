var realizado = [false, false, false];

$(window).bind("load", function () {
    /* Configura todas as funções para os botões de navegação por seção do site
    Fazem com que realizem ações personalizadas ao serem clicados, e também
    que determinado conteúdo seja exibido enquanto o resto é oculto */
    var optionPrevented = false;
    $(".option h1").click(function() {
        var t = $(this).parent();
        var tp = t.parent();
        if(!t.hasClass("active") && !optionPrevented) {
            optionPrevented = true;
            if(t.attr('id') == "bgeral") {
                var leftval = "0px";
            } else {
                var leftval = "10px";
            };
            var ta = tp.find(".active");
            var x = t.position();
            if(tp.children().first().attr('id') == t.attr('id')) {
                var tclone = t.clone().prependTo(tp).css("opacity", "0");
            } else {
                var tclone = t.clone().insertAfter(t.prev()).css("opacity", "0");
            };
            var taclone = ta.clone();
            var exc = t.attr('id') + "p";
            window.location="#titlebox";

			// Faz a mudança no conteúdo da página de acordo cada opção selecionada
            $("main section").not(".textbox").not(exc).each(function() {
                if($(this).attr('id') == exc) {
                    $(this).removeClass('hidden');
					if(realizado[0] == true || realizado[1] == true || realizado[2] == true) {
						if(realizado[0] == true && exc == 'bgeralp') {
							$('#tgeral').removeClass('hidden');
							var tc = $('#tgeral').children('.questions');
							restart(tc);
						} else if(realizado[1] == true && exc == 'bansiedadep') {
							$('#tansiedade').removeClass('hidden');
							var tc = $('#tansiedade').children('.questions');
							restart(tc);
						} else if(realizado[2] == true && exc == 'bdepressaop') {
							$('#tdepressao').removeClass('hidden');
							var tc = $('#tdepressao').children('.questions');
							restart(tc);
						};
					};
				} else {
					$(this).addClass('hidden');
				};
            });

            ta.animate({
                "top": "-50px"
            }, 0300);
            t.css({
                "position": "absolute",
                "top": "50%",
                "left": x.left,
                "transform": "translateY(-50%)"
            }).animate({
                "position": "absolute",
                "left": leftval
            }, 0600);
            setTimeout(function() {
                ta.insertAfter(t.prev());
                ta.css({
                    "left": x.left,
                }).animate({
                    "top": "35px"
                }, 0400);
                setTimeout(function() {
                    tclone.remove();
                    t.removeAttr("style");
                    ta.removeAttr("style");
                    ta.removeClass("active");
                    t.addClass("active");
                    optionPrevented = false;
                }, 0450);
            }, 0300);
        };
		
		/* Reinicia os elementos visíveis na página para que ela apareça
		como se estivesse sendo acessada pela primeira vez */
		function restart(t){
			t.children('.questionsection').last().addClass('hidden');
			t.children('.questionsection').first().removeClass('hidden');
			t.children('.questionsection').each(function() {
				$(this).children('.updownmargin').children('.stylize').remove();
			});
		};
    });
	
	/* Para todo elemento '.questions', essa função vai atribuir os botões,
	separando o teste em várias partes, com a final recebendo o botão de conclusão
	e as outras partes recebendo o botão de avançar pra próxima parte */
	$(".questions").each(function() {
		var t = $(this);
		t.children(".questionsection").each(function(index, element) {
			if(!index == 0) {
				$(this).addClass('hidden');
			};
			if(t.children(".questionsection").length == index + 1) {
				$(this).append("<div class='updownmargin'><input class='button results' type='button' value='calcular resultado'></div>");
			} else {
				$(this).append("<div class='updownmargin'><input class='button next' type='button' value='próximas perguntas'></div>");
			};			
		});
	});
	
	/* Toda vez que um botão de classe '.next' é clicado,
	esse código realizará uma verificação, exigindo que o botão seja clicado novamente,
	depois ele irá exibir a próxima seção de perguntas, ocultando a anterior */	
	var confirmation = false;
	$('.next').click(function() {
		if(!confirmation) {
			$(this).parent().prepend("<h4 class='stylize'>Você tem certeza?</h4>")
			confirmation = true;
		} else {
			$(this).closest('.questionsection').addClass('hidden');
			$(this).closest('.questionsection').next().removeClass('hidden');
			confirmation = false;
		};
	});
	
	/* Toda vez que um botão de classe '.results' é clicado,
	primeiro, será realizada uma verificação, exigindo que o botão seja clicado novamente
    depois, esse código irá pegar o valor marcado de todos os '.numberbuttons'
    dentro da div '.questions' que ele estiver dentro e chamar pela função de exibição dos resultados */
    $(".results").click(function() {		
		var teste = '';
		if(!confirmation) {
			$(this).parent().prepend("<h4 class='stylize'>Você tem certeza?</h4>")
			confirmation = true;
		} else {
			var answers = [];
			$(this).closest('.questions').children('.questionsection').each(function(index, element) {
				$(this).children('.numberbuttons').each(function() {
					answers.push(parseInt($(this).find('.active').text()));
				});
			});
			$(this).closest('article').addClass('hidden');
			$('.resultados').removeClass('hidden');
			confirmation = false;
			teste = $(this).closest('article').attr('id');
			resultados(answers, teste);
			$(this).closest('section').addClass('hidden');
			window.scrollTo(0, $(this).closest('main').offset().top);
		};		
		
		/* Chama por uma função de calcular a média das respostas de cada teste
		e depois exibe o resultado que esteja de acordo com o teste */
		function resultados(respostas, teste) {
			if(realizado[0] == true || realizado[1] == true || realizado[2] == true) {
				$('#ransiedade').addClass('hidden');
				$('#rdepressao').addClass('hidden');
				$('#rpanico').addClass('hidden');
				$('#rajuda').addClass('hidden');
				$('#rgeral').addClass('hidden');
				$('#bresultadosp').addClass('hidden');
				realizado[0] = false;
				realizado[1] = false;
				realizado[2] = false;
			};
			$('#realizar').addClass('hidden');
			var positivo = false;
			var media = [];
			switch(teste){
				case 'tgeral':
					var testes = [respostas.slice(0, 10), respostas.slice(10, 20), respostas.slice(20, 30)];
					for(var i = 0; i < 3; i++){
						media.push(calcMedia(testes[i]));
						if(media[i] >= (testes[i].length / 2)){
							switch(i) {
								case 0:
									$('#ransiedade').removeClass('hidden');
									break;
								case 1:
									$('#rdepressao').removeClass('hidden');
									break;
								case 2:
									$('#rpanico').removeClass('hidden');
									break;
							};
							positivo = true;
						};
					};
					realizado[0] = true;
					break;
				case 'tansiedade':
					media = calcMedia(respostas);
					if(media >= (respostas.length / 2)){
						$('#ransiedade').removeClass('hidden');
						positivo = true;
					};
					realizado[1] = true;
					break;
				case 'tdepressao':
					media = calcMedia(respostas);
					if(media >= (respostas.length / 2)){
						$('#rdepressao').removeClass('hidden');
						positivo = true;
					};
					realizado[2] = true;
					break;
			};
			if(positivo) {
				$('#rajuda').removeClass('hidden');
			} else {
				$('#rgeral').removeClass('hidden');
			};
			$('#bresultadosp').removeClass('hidden');
			
			// Calcula a média das arrays
			function calcMedia(item) {
				var i = 0;
				var soma = 0;
				for(i = 0; i < item.length; i++){
					soma += item[i];
				};
				var media = soma / item.length;
				return media;
			};
		}
    });	
});