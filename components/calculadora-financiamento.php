<section class="js-center al-center column p0-50">
  <div class="js-center form-calc w100 column">
    <form method="post">
      <h2>Simule o seu financiamento</h2>
      <p>Preencha os campos a baixo e simule as parcelas do seu imóvel:</p>
      <div class="w100 js-btw al-end mbl-column">
        <div class="inputCalc w25">
          <label>Valor do imóvel:</label><span>Taxa de 7.9% sobre o imóvel</span>
          <input type="text" name="valor" placeholder="R$ 000.000,000" inputmode="numeric" id="valor">
        </div>
        <div class="inputCalc w25">
          <label>Valor de entrada:</label>
          <input type="text" name="entrada" placeholder="R$ 000.000,000" inputmode="numeric" id="entrada">
        </div>
        <div class="inputCalc w25">
          <label>Tempo do financiamento:</label>
          <select name="numParcelas" id="numParcelas">
            <option value="">Selecione uma opção</option>
            <option value="120">10 anos</option>
            <option value="240">20 anos</option>
            <option value="360">30 anos</option>
          </select>
        </div>
        <button class="btn-calc w25" type="button" name="calcular" value="calular" id="calular" onclick="calcularFin();">Calcular</button>
      </div>
    </form>
    </div>
    <div class="js-center al-center w100">
      <canvas id="myChart"></canvas>
    </div>
</section>