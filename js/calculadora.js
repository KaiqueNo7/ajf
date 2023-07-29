$(document).ready(function() {
  $('#valor').maskMoney({
    prefix: 'R$ ',
    groupSeparator: '.',
    radixPoint: ',',
    autoGroup: true,
    digits: 2,
    rightAlign: false,
    unmaskAsNumber: true
   });

  $('#entrada').maskMoney({
    prefix: 'R$ ',
    groupSeparator: '.',
    radixPoint: ',',
    autoGroup: true,
    digits: 2,
    rightAlign: false,
    unmaskAsNumber: true
  });

  $('#entrada, #valor').on('keyup change', function() {
    var valor = $('#valor').maskMoney('unmasked')[0];
    var entrada = $('#entrada').maskMoney('unmasked')[0];
    var enviar = $('#calcula'); 
    var mensagem = $('#mensagem');

    if (parseFloat(entrada) >= parseFloat(valor)) {
      $(enviar).attr('disabled', true);
      $(enviar).addClass('desativo');
      $(mensagem).css("opacity", "1");
    } else {
      $(enviar).attr('disabled', false);
      $(enviar).removeClass('desativo');
      $(mensagem).css("opacity", "0");
    }	
  });
});


function nextForm(){

	var form = $('#part-1'); 
	var submit = $('#dados'); 
  const CompletedName = $('#nome').val();

	form.on('submit', function(e) {
		e.preventDefault();
		$.ajax({
			url: 'class/send_dados.php', 
				type: 'POST', 
				dataType: 'html', 
				data: form.serialize(), 
				beforeSend: function() {
				submit.html('Enviando...'); 
				submit.addClass('loading'); 
			},
			success: function(data) {

        $('#name').text(CompletedName);

				var init = document.getElementById('part-1');
				var fim = document.getElementById('part-2');
			
				fim.classList.add('active');
				init.style.display = "none";

			},
			
			error: function(e) {
				console.log(e)
			}
		});
	});
}

function calcularFin() {

  var valor = $('#valor').maskMoney('unmasked')[0];
  var entrada = $('#entrada').maskMoney('unmasked')[0];
  var numParcelas = parseFloat($('#numParcelas').val());
  var submit = $('#dados');

  submit.addClass('calcula'); 
	
  valor = parseFloat(valor);
  entrada = parseFloat(entrada);
  
  var valorParcela = [];
  var juros = [];
  var amortizacoes = [];
  var saldosDevedores = [];
  var datas = [];
  var taxa = 0.75;
  var financiamento = valor - entrada;
  var amortizacao = financiamento / numParcelas;
  var saldoDevedor = financiamento;

  for (var i = 0; i < numParcelas; i++) {
    var jurosPeriodo = ((saldoDevedor * taxa) / 100);

    var parcelas = amortizacao + jurosPeriodo;
    saldoDevedor -= amortizacao;

    amortizacoes.push(amortizacao.toFixed(2));
    juros.push(jurosPeriodo.toFixed(2));
    saldosDevedores.push(saldoDevedor.toFixed(2));

    valorParcela.push(parseFloat(parcelas.toFixed(2)));

    var data = new Date();
    data.setMonth(data.getMonth() + i);
    var dataFormatada = data.toLocaleDateString('pt-BR', { month: 'numeric', year: 'numeric' });
    datas.push(dataFormatada);
  }

  renderizarGrafico(datas, valorParcela);
  scrollGrafico();
}

function renderizarGrafico(datas, valorParcela) {
    var ctx = document.getElementById('myChart');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: datas,
            datasets: [{
                label: 'Parcelas',
                data: valorParcela,
                borderColor: 'rgba(251, 133, 0, 1)',
                backgroundColor: 'rgba(251, 133, 0, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Simulação das parcelas do imóvel *Importante ressaltar que é apenas um exemplo de como pode ficar as parcelas do financiamento.*'
                }
            }
        }
    });

    var canvas = document.querySelector("#myChart");
    canvas.style.backgroundColor = "white";
}


function scrollGrafico() {
	var myChart = document.getElementById('myChart');
	if (myChart) {
		myChart.scrollIntoView({ behavior: 'smooth' });
	}
  }

$('#numero').keyup(function() 
	{
		var tel = $('#numero').val();		  
        tel=tel.replace(/\D/g,"")
		tel=tel.replace(/^(\d)/,"($1")
		tel=tel.replace(/(.{3})(\d)/,"$1) $2")
		if(tel.length == 9) {
			tel=tel.replace(/(.{1})$/,"-$1")
		} else if (tel.length == 10) {
			tel=tel.replace(/(.{2})$/,"-$1")
		} else if (tel.length == 11) {
			tel=tel.replace(/(.{3})$/,"-$1")
		} else if (tel.length == 12) {
			tel=tel.replace(/(.{4})$/,"-$1")
		} else if (tel.length > 12) {
			tel=tel.replace(/(.{4})$/,"-$1")
		}
		$('#numero').val(tel);
	});		
