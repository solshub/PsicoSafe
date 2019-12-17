var changePreventedBg = false;
var changePreventedMin = false;

/* Caso a variável de verificação seja falsa,
o background, o botão, e o texto atuais vão ser ocultos
e os próximos serão exibidos, continuando a apresentação */
function changeBackground() {
    if(!changePreventedBg) {
        if($("#b1").hasClass("active")) {
            $("#b1, #txt1").removeClass("active");
            $("#b2, #txt2").addClass("active");
            $('.presentation').attr('id','presentBg2');
        } else if($("#b2").hasClass("active")) {
            $("#b2, #txt2").removeClass("active");
            $("#b3, #txt3").addClass("active");
            $('.presentation').attr('id','presentBg3');
        } else {
            $("#b3, #txt3").removeClass("active");
            $("#b1, #txt1").addClass("active");
            $('.presentation').attr('id','presentBg1');
        };
    };
};

$(window).bind("load", function () {
	/* Para cada elemento ".numberbuttons", se criam 10 botões númericos
	Só pode haver um botão marcado de cada vez, com a classe ".active"
	O marcado é estilizado de forma diferente dos outros botões. */
    $(".numberbuttons").each(function() {
        $(this).html(
            '<hr>'+
            '<div class="number">0</div>'+
            '<div class="number">1</div>'+
            '<div class="number">2</div>'+
            '<div class="number">3</div>'+
            '<div class="number">4</div>'+
            '<div class="number active">5</div>'+
            '<div class="number">6</div>'+
            '<div class="number">7</div>'+
            '<div class="number">8</div>'+
            '<div class="number">9</div>'+
            '<div class="number">10</div>'
        );
    });
	
	/* Quando um botão numerico for clicado, automaticamente
    ele receberá a classe '.active', a menos que já a possua */
    $('.number').click(function() {
        var p = $(this).parent();
        if(!$(this).hasClass('active')) {
            p.find('.active').removeClass('active');
            $(this).addClass('active');
        };
    });

    /* Para cada elemento ".symptonlist", se põe cada palavra em um array
    Caso hajam 12, ou 8 ou 4 palavras no elemento, elas são separadas */
    $(".symptonlist").each(function() {
        var t = $(this);
        t.addClass('tcenter');
        var html = t.text().replace(/\n/g,'').replace(/\t/g,'').split(',');
        // Organiza palavras na array de menores para maiores
        html.sort(function(a, b) {
            return a.length - b.length ||
            a.localeCompare(b);
        });
        var i = 0;
        var text = "";
        text += '<div class="tcenter">\n'+
                '<ul>\n';
        for(i = 0; i < html.length; i++) {
            text += '<li>' + html[i] + '</li>\n'
            if((i + 1) % 4 == 0 && i !== html.length && i !== 0) {
                text += '</ul>\n'+
                        '<ul>';
            };
        };
        text += '</ul>\n'+
                '</div>\n';
        t.html(text);
    });

    /* Para cada elemento ".links", se põe cada palavra em um array
    Separando assim a 1ª e a 2ª palavras de cada linha
    A 1ª aparece escrita no botão, e a 2ª se torna o link do botão */
    $(".links").each(function() {
        var i = 0;
        var t = $(this);
        var html = t.text().replace(/\n/g,'').replace(/\t/g,'').split(',');
        if(html.length % 2 == 0) {
            for(i = 0; i < html.length; i+=2) {
                var name = "'" + html[i] + "'";
                var link = "location.href='" + html[i+1] + "'";
                if(i == 0) {
                    t.html(
                        '<input class="button tcenter bshadow" type="button" value='+name+'onclick="'+link+'">'
                    );
                } else {	
                    t.append(
                        '<input class="button tcenter bshadow" type="button" value='+name+'onclick="'+link+'">'
                    );
                };
            };
        };
    });
	
    /* Verifica se o mouse está sobre "b1", "b2" ou "b3"
    Caso esteja, a mudança automática de fundos é desativada
    Além disso, o fundo respectivo se torna o atualmente ativo
    Ao sair do mouse, a mudança automática é reativada */
    var t = [$("#b1, #txt1"), $("#b2, #txt2"), $("#b3, #txt3")];
    $('#b1').bind('mouseenter', function() {
        changePreventedBg = true;
        $("#b2, #txt2").removeClass("active");
        $("#b3, #txt3").removeClass("active");
        $("#b1, #txt1").addClass("active");
        $('.presentation').attr('id','presentBg1');
    }).bind('mouseleave', function() {	  
        changePreventedBg = false;
    });
    $('#b2').bind('mouseenter', function() {
        changePreventedBg = true;
        $("#b1, #txt1").removeClass("active");
        $("#b3, #txt3").removeClass("active");
        $("#b2, #txt2").addClass("active");
        $('.presentation').attr('id','presentBg2');
    }).bind('mouseleave', function() {	  
        changePreventedBg = false;
    });
    $('#b3').bind('mouseenter', function() {
        changePreventedBg = true;
        $("#b1, #txt1").removeClass("active");
        $("#b2, #txt2").removeClass("active");
        $("#b3, #txt3").addClass("active");
        $('.presentation').attr('id','presentBg3');
    }).bind('mouseleave', function() {	  
        changePreventedBg = false;
    });
	
    /* Configura o botão que minimizará ou maximizará elementos '.textbox'
    Assim que clicado, ele definirá o display do conteúdo */
    $('.minimize').click(function() {
		if(!changePreventedMin) {
			changePreventedMin = true;
			var t = $(this);
			var a = t.parent().find('article');
			if(a.css('display') == 'none') {
				t.html('-');
				a.css('display', 'block');
			} else {
				t.html('+');
				a.css('display', 'none');
			}
			setTimeout(function() {
				changePreventedMin = false;
			}, 0300);
		};
    });
});

// Código a ser executado imediatamente após a página ser carregada
$(document).ready(function() {		
    // Chama pela função "changeBackground" a cada (aprox.) 3 segundos
    setInterval(changeBackground, 3000);
});