<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Chassi</label>
      <input type="text" class="form-control" name="chassi">
    </div>

    <div class="form-group">
      <label>Marca</label>
      <input type="text" class="form-control" name="marca">
    </div>

    <div class="form-group">
      <label>Modelo</label>
      <input type="text" class="form-control" name="modelo">
    </div>

    <div class="form-group">
      <label>Ano</label>
      <input type="text" class="form-control" name="ano">
    </div>

    <div class="form-group">
      <label>Placa</label>
      <input type="text" class="form-control" name="placa">
    </div>

    <div class="form-group">
      <label>Caractrísticas</label>

      <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="esportivo" checked> Esportivo
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="clássico" checked> Clássico
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="economico" checked> Econômico
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="turbo" checked> Turbo
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="para cidade" checked> Para Cidade
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="estilo" value="para viagens" checked> Para Viagens
            </label>
          </div>

      
      </div>

    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>