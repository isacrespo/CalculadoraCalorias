<!-- Empezamos por mostrar los datos con los que hacemos el cálculo -->
<div class="error">
  <p class="errorTitulo">Estos son los datos que nos has proporcionado:</p>
  <p class="errorTexto">
    <span>Sexo:</span> <?php echo $_COOKIE['sexo']; ?> |
    <span>Edad:</span> <?php echo intval($_COOKIE['edad']); ?> años |
    <span>Altura:</span> <?php echo intval($_COOKIE['altura']); ?> cm. |
    <span>Peso:</span> <?php echo intval($_COOKIE['peso']); ?> kg. |
    <span>Factor de Actividad:</span>
    <?php if ($_COOKIE['factor']==1.2): ?> Sedentario
    <?php elseif ($_COOKIE['factor']==1.4): ?> Ligera actividad física
    <?php elseif ($_COOKIE['factor']==1.6): ?> 3 veces por semana
    <?php elseif ($_COOKIE['factor']==1.8): ?> 4 o 5 veces por semana
    <?php else: ?> Actividad física diaria
    <?php endif; ?>
  </p>
</div>

<!-- Cargamos resultados del cálculo de calorías -->
<div class="contenedorFormulario">

  <div class="primeraLineaResultados">
    <div class="tituloResultados">
      Objetivo
    </div>
    <div class="datosFactorActividad">
      <div class="datosResultados">
          Mantenimiento
        <div class="imagenDatosFactor">
          <img src="assets/iconoObjetivo-1.png" alt="mantenimiento">
        </div>
        <div class="textoResultado">
          <?php echo objetivoMantenimiento(); ?> cal.
        </div>
      </div>
      <div class="datosResultados">
          Ganar Masa Muscular
        <div class="imagenDatosFactor">
          <img src="assets/iconoObjetivo-2.png" alt="ganar masa muscular">
        </div>
        <div class="textoResultado">
          <?php echo objetivoGanarMasaMuscular(); ?> cal.
        </div>
      </div>
      <div class="datosResultados">
          Perder Grasa Corporal
        <div class="imagenDatosFactor">
          <img src="assets/iconoObjetivo-3.png" alt="perder grasa corporal">
        </div>
        <div class="textoResultado">
          <?php echo objetivoPerderGrasaCorporal(); ?> cal.
        </div>
      </div>
    </div>
  </div>

  <div class="segundaLineaResultados">
    <div class="tituloResultados">
      Reparto Macronutrientes en Gramos
    </div>
    <div class="gridReparto">
      <div class=""></div>
      <div class="tituloVolDef">
        Volumen
      </div>
      <div class="tituloVolDef">
        Definición
      </div>
      <div class="tituloPGC">
        Proteínas
      </div>
      <div class="rdoReparto">
        <?php echo macroProteinasVol(); ?>
      </div>
      <div class="rdoReparto">
        <?php echo macroProteinasDef(); ?>
      </div>
      <div class="tituloPGC">
        Grasas
      </div>
      <div class="rdoReparto">
        <?php echo intval($_COOKIE['peso']); ?>
      </div>
      <div class="rdoReparto">
        <?php echo macroGrasasDef(); ?>
      </div>
      <div class="tituloPGC">
        Carbos
      </div>
      <div class="rdoReparto">
        <?php echo macroCarbosVol(); ?>
      </div>
      <div class="rdoReparto">
        <?php echo macroCarbosDef(); ?>
      </div>
    </div>
  </div>

  <div class="botonesFormulario">
      <a href="<?php echo SITE_URL; ?>" class="botonCalcular">Volver</a>
  </div>

</div>
