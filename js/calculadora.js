function calcularFin() {

  var valor = $('#valor').maskMoney('unmasked')[0];
  var entrada = $('#entrada').maskMoney('unmasked')[0];
  var numParcelas = parseFloat($('#numParcelas').val());

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

    console.log(jurosPeriodo);

    var parcelas = amortizacao + jurosPeriodo;
    saldoDevedor -= amortizacao;

    console.log(parcelas);

    amortizacoes.push(amortizacao.toFixed(2));
    juros.push(jurosPeriodo.toFixed(2));
    saldosDevedores.push(saldoDevedor.toFixed(2));

    valorParcela.push(parseFloat(parcelas.toFixed(2))); // Converter para número novamente

    var data = new Date(); // Use a data correta aqui
    data.setMonth(data.getMonth() + i);
    var dataFormatada = data.toLocaleDateString('pt-BR', { month: 'numeric', year: 'numeric' });
    datas.push(dataFormatada);
  }

  renderizarGrafico(datas, valorParcela);
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
  },
  });
}