
	<?php if ($error): ?>
		<div class="error">
			<i class="fas fa-bomb"></i>
			<p class="errorTitulo">¡Hay un error en los datos introducidos!</p>
			<p class="errorTexto">Aségurate de rellenar todos los campos.
				Ten en cuenta las siguientes limitaciones:<br>
				<span>Edad:</span> mayor de 12 años y menor de 100 años. | <span>Altura:</span> mayor de 140cm. y menor de 200cm. | <span>Peso:</span> mayor de 35kg. y menor de 150kg.
			</p>
		</div>
	<?php endif; ?>

	<div class="contenedorFormulario">
		<form name="formCalorias" action="" method="post">
      <div class="primeraLineaFormulario">
        <div class="datosFormulario">
					<div class="tituloDatosFormulario">
						Sexo
					</div>
					<div class="imagenDatosFormulario">
						<img src="assets/icono1_sexo.png" alt="sexo - hombre mujer">
					</div>
					<div class="botonSexoDatosFormulario">
						<label class="content-input">
							<input type="radio" name="botonSexo" value="hombre">Hombre
								<i></i>
						</label>
						<label class="content-input">
							<input type="radio" name="botonSexo" value="mujer">Mujer
								<i></i>
						</label>
					</div>
        </div>
        <div class="datosFormulario">
					<div class="tituloDatosFormulario">
						Edad
					</div>
					<div class="imagenDatosFormulario">
						<img src="assets/icono2_edad.png" alt="edad">
					</div>
					<div class="botonDatosFormulario">
						<input type="text" name="edad" value="" placeholder="30"><span>&nbsp;&nbsp;años</span>
					</div>
        </div>
        <div class="datosFormulario">
					<div class="tituloDatosFormulario">
						Altura
					</div>
					<div class="imagenDatosFormulario">
						<img src="assets/icono3_altura.png" alt="altura">
					</div>
					<div class="botonDatosFormulario">
						<input type="text" name="altura" value="" placeholder="170"><span>&nbsp;&nbsp;cm.</span>
					</div>
        </div>
        <div class="datosFormulario">
					<div class="tituloDatosFormulario">
						Peso
					</div>
					<div class="imagenDatosFormulario">
						<img src="assets/icono4_peso.png" alt="peso">
					</div>
					<div class="botonDatosFormulario">
						<input type="text" name="peso" value="" placeholder="57"><span>&nbsp;&nbsp;kg.</span>
					</div>
        </div>
      </div>
      <div class="segundaLineaFormulario">
				<div class="tituloDatosFactor">
					Factor de Actividad
				</div>
				<div class="datosFactorActividad">
					<div class="datosFactor">
						<div class="imagenDatosFactor">
							<img src="assets/iconoFA-1.png" alt="sedentario">
						</div>
						<div class="botonDatosFactor">
							<label class="content-input">
								<input type="radio" name="botonDF" value="1.2">Sedentario
									<i></i>
							</label>
						</div>
					</div>
					<div class="datosFactor">
						<div class="imagenDatosFactor">
							<img src="assets/iconoFA-2.png" alt="ligera actividad">
						</div>
						<div class="botonDatosFactor">
							<label class="content-input">
								<input type="radio" name="botonDF" value="1.4">Ligera actividad física
									<i></i>
							</label>
						</div>
					</div>
					<div class="datosFactor">
						<div class="imagenDatosFactor">
							<img src="assets/iconoFA-3.png" alt="3 veces por semana">
						</div>
						<div class="botonDatosFactor">
							<label class="content-input">
								<input type="radio" name="botonDF" value="1.6">3 veces por semana
									<i></i>
							</label>
						</div>
					</div>
					<div class="datosFactor">
						<div class="imagenDatosFactor">
							<img src="assets/iconoFA-4.png" alt="4-5 veces por semana">
						</div>
						<div class="botonDatosFactor">
							<label class="content-input">
								<input type="radio" name="botonDF" value="1.8">4 o 5 veces por semana
									<i></i>
							</label>
						</div>
					</div>
					<div class="datosFactor">
						<div class="imagenDatosFactor">
							<img src="assets/iconoFA-5.png" alt="Actividad diaria">
						</div>
						<div class="botonDatosFactor">
							<label class="content-input">
								<input type="radio" name="botonDF" value="2">Actividad física diaria
									<i></i>
							</label>
						</div>
					</div>
				</div>
      </div>
      <div class="botonesFormulario">
					<input type="submit" name="botonCalcular" class="botonCalcular" value="Calcular" onclick="envioFormulario();">
      </div>
    </form>
	</div>
