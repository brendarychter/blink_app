<div class="col-lg-12 col-sm-12 col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading"></div>
		<div class="panel-body">
			<div class="form-group col-md-12 box-section col-sm-12 " style="border-right: none; padding-left: 0;">
				<label class="section-name">Nombre de la p&aacute;gina</label> 

				<div class="portion portion-spanish">
					<label class="lan" style="margin-right:20px">Espa&ntilde;ol</label>
					<span class="editable-text section-spanish-1" realvalue="section_section_1" language="spanish"></span>
				</div>
				<div class="portion portion-english">
					<label class="lan" style="margin-right:20px">Ingl&eacute;s</label>
					<span class="editable-text section-english-1" realvalue="section_section_1" language="english"></span>
				</div>
			</div>		
			<form role="form" class="form-section" id="form-section-1" method="post" enctype="multipart/form-data" data-toggle="validator">
				<label class="section-name">Secci&oacute;n 1</label>
				<div class="col-md-9 col-sm-12 line-sections">
									
					<div class="form-group col-md-4 box-section first-section col-sm-12 ">
						<div class="title-box">
							<span class="global-title">t&iacute;tulo</span>
						</div>
						<div class="portion portion-spanish">
							<label class="lan">Espa&ntilde;ol</label>
							<span class="editable-text titulo-spanish-1" realvalue="title_section_1" language="spanish"></span>
						</div>
						<div class="portion portion-english">
							<label class="lan">Ingl&eacute;s</label>
							<span class="editable-text titulo-english-1" realvalue="title_section_1" language="english"></span>
						</div>
					</div>						
					<div class="form-group col-md-4 box-section col-sm-12">
						<div class="title-box">
							<span class="global-title">subt&iacute;tulo</span>
						</div>
						<div class="portion portion-spanish">
							<label class="lan">Espa&ntilde;ol</label>
							<span class="editable-text subtitle-spanish-1" realvalue="subtitle_section_1" language="spanish"></span>
						</div>
						<div class="portion portion-english">
							<label class="lan">Ingl&eacute;s</label>
							<span class="editable-text subtitle-english-1" realvalue="subtitle_section_1" language="english"></span>
						</div>
					</div>
					<div class="form-group col-md-4 box-section col-sm-12">
						<div class="title-box">
							<span class="global-title">bot&oacute;n</span>
						</div>
						<div class="portion portion-spanish">
							<label class="lan">Espa&ntilde;ol</label>
							<span class="editable-text button-spanish-1" realvalue="button_section_1" language="spanish"></span>
						</div>
						<div class="portion portion-english">
							<label class="lan">Ingl&eacute;s</label>
							<span class="editable-text button-english-1" realvalue="button_section_1" language="english"></span>
						</div>
					</div>
					<div class="abm-buttons form-section-1">
						<button class="btn btn-danger edit-section" id="delete-section-1" data-section="1" data-action="delete">Ocultar secci&oacute;n 1</button>
						<button class="btn btn-info edit-section" id="edit-section-1" data-section="1" data-action="edit">Mostrar secci&oacute;n 1</button>
					</div>
				</div>
				
			</form>	
			<form method="post" enctype="multipart/form-data" id="imageUploadForm" data-form="">
				<div class="col-md-3 col-sm-12 line-sections">
					<div class="form-group col-md-12 box-section col-sm-12" style="border-right: none">
						<div class="title-box">
							<span class="img-titles" style="float: right; font-weight: bold;">imagen de fondo</span>
						</div>
						<input type="file" class="imagen-img" data-img="img-1" name="imagen" data-id="" data-section="1" data-url="" required/>
						<input class="titulo-img" data-title="title-1" type="text" placeholder="T&iacute;tulo" name="titulo" required/>
						<button class="save-photo btn btn-primary btn-md" type="submit" name="submit" data-section="1" data-table="home"/>Guardar foto</button>
						<p class="help-block"></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
