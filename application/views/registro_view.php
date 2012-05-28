<html>

<head>
	<meta charset="utf-8">
	<title>WAYRA - REGÍSTRATE Y ASISTE</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<script language="javascript">

	function habilita(form)

	{
	form.facultad.disabled = false;
	form.universidad.disabled = true;
	}

	function deshabilita(form)
	{
	form.facultad.disabled = true;
	form.universidad.disabled = false;
	}
	</script>
	<script type='text/javascript' src=<?php echo base_url().'assets/js/nacimiento.js'?>></script>

</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			    <ul class="nav">
    				<?php echo '<li><a href="'.base_url().'">Inicio</a></li>';?>
    				<?php echo '<li><a href="'.base_url().'who">¿Quiénes somos?</a></li>';?>
    				<?php echo '<li><a href="'.base_url().'team">Conoce a los ponentes</a></li>';?>
    				<?php echo '<li class="active"><a href="'.base_url().'registro">REGÍSTRATE Y ASISTE</a></li>';?>
    			</ul>
			</div>
		</div>
	</div>

	<div class="row">
	<div class="span2">asdasd</div>
	<div class="span6">
		
		<br /><br /><br /><h1>Registro de asistencia</h1><br />
		<legend>Por favor llenar los campos mostrados:</legend>
		<?php 
			$atributos = array('class'	=>	'form-horizontal');
			$boton = 'class="btn btn-primary"';
			$lista = 'class="span4"';

			echo form_open(base_url().'registro',$atributos);
			$nombre = array(
					'name'	=>	'nombre',
					'id'	=>	'nombre',
					'class'	=>	'input-xlarge',
					'value'	=>	''
				);

			$ap_paterno = array(
					'name'	=>	'ap_paterno',
					'id'	=>	'ap_paterno',
					'class'	=>	'input-xlarge',
					'value'	=>	''
				);

			$ap_materno = array(
					'name'	=>	'ap_materno',
					'id'	=>	'ap_materno',
					'class'	=>	'input-xlarge',
					'value'	=>	''
				);

			$codigo = array(
					'name'	=>	'codigo',
					'id'	=>	'codigo',
					'class'	=>	'input-small',
					'value'	=>	''
				);

			$edad = array(
					'name'	=>	'edad',
					'id'	=>	'edad',
					'class'	=>	'input-mini',
					'value'	=>	''
				);

			$especialidad = array(
					'name'	=>	'especialidad',
					'id'	=>	'especialidad',
					'class'	=>	'span3',
					'value'	=>	''
				);

			$mail = array(
					'name'	=>	'mail',
					'id'	=>	'mail',
					'class'	=>	'input-xlarge',
					'value'	=>	''
				);

			$telefono = array(
					'name'	=>	'telefono',
					'id'	=>	'telefono',
					'class'	=>	'input-small',
					'value'	=>	''
				);

			$facultad = array(
					'name'	=>	'facultad',
					'id'	=>	'facultad',
					'class'	=>	'span3',
					'value'	=>	''
				);

			$universidad = array(
					'name'	=>	'universidad',
					'id'	=>	'universidad',
					'class'	=>	'input-xlarge',
					'value'	=>	'',
					'disabled' => 'disabled'
				);

			$lista_facs = array(
					'none'	=>	'--Selecciona una facultad--',
	                'faua'	=> 	'Facultad de Arquitectura, Urbanismo y Artes',
	                'fc'    => 	'Facultad de Ciencias',
	                'fia'   => 	'Facultad de Ingeniería Ambiental',
	                'fiecs' => 	'Facultad de Ingeniería Económica y Ciencias Sociales',
	                'fiee'	=> 	'Facultad de Ingeniería Eléctrica y Electrónica',
	                'figmm' => 	'Facultad de Ingeniería Geológica, Minera y Metalúrgica',
	                'fic'	=>	'Facultad de Ingeniería Civil',
	                'fiis'	=> 	'Facultad de Ingeniería Industrial y de Sistemas',
	                'fim'	=> 	'Facultad de Ingeniería Mecánica',
	                'fip'	=> 	'Facultad de Ingeniería de Petroleo',
	                'fiqt'	=> 	'Facultad de Ingeniería Química y Textil'
	            );

			$lista_espec = array(
					'none'	=>	'--Selecciona una especialidad--',
	                'i1'	=> 	'Ingeniería Industrial',
	                'i2'    => 	'Ingeniería de Sistemas'
	            );

			$lista_anho = array(
					'none'	=>	'--Selecciona el año--',
	                '2000'	=> 	'2000',
	                '2001'	=> 	'2001',
	                '2002'	=> 	'2002',
	                '2003'	=> 	'2003',
	                '2004'	=> 	'2004',
	                '2005'	=> 	'2005',
	                '2006'	=> 	'2006',
	                '2007'	=> 	'2007',
	                '2008'	=> 	'2008',
	                '2009'	=> 	'2009',
	                '2010'	=> 	'2010',
	                '2011'	=> 	'2011',
	                '2012'	=> 	'2012',
	                'notyet'    => 	'Aún no soy miembro'
	            );

				$uni_si = array(
				    'name'        => 'uni',
				    'value'       => 'si',
				    'checked'     => TRUE,
				    'onClick'	  => 'habilita(this.form)'
	    		);

				$uni_no = array(
				    'name'        => 'uni',
				    'value'       => 'no',
				    'checked'     => FALSE,
				    'onClick'	  => 'deshabilita(this.form)'
	    		);
		?>

		<fieldset>
		<div class="control-group">
			<label class="control-label" for="nombre">Nombres</label>
			<div class="controls">
				<?php echo form_input($nombre); ?>
				<p class="help-block"><?php echo form_error('nombre'); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="ap_paterno">Apellido Paterno</label>
			<div class="controls">
				<?php echo form_input($ap_paterno); ?>
				<p class="help-block"><?php echo form_error('ap_paterno'); ?></p>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="ap_materno">Apellido Materno</label>
			<div class="controls">
				<?php echo form_input($ap_materno); ?>
				<p class="help-block"><?php echo form_error('ap_materno'); ?></p>
			</div>
		</div>
			
		<div class="control-group">
			<label class="control-label" for="codigo">Código UNI</label>
			<div class="controls">
				<?php echo form_input($codigo); ?>
				<p class="help-block"><?php echo form_error('codigo'); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="especialidad">Especialidad:</label>
			<div class="controls">
				<?php echo form_dropdown('especialidad', $lista_espec, 'none', $lista); ?>
				<p class="help-block"><?php echo form_error('especialidad'); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="especialidad">Fecha de nacimiento:</label>
			<div class="controls">
				<select id="anhoNac" onchange="ponerDias()" class="span1">
				<script>ponerAnho();</script>
				</select>
				<select id="mesNac" onchange="ponerDias()" class="span2">
				<script>ponerMes();</script>
				</select>
				<select id="diaNac" class="span1">
				<script>ponerDias();</script>
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="telefono">Teléfono</label>
			<div class="controls">
				<?php echo form_input($telefono); ?>
				<p class="help-block"><?php echo form_error('telefono'); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="mail">E-mail</label>
			<div class="controls">
				<?php echo form_input($mail); ?>
				<p class="help-block"><?php echo form_error('mail'); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="edad">¿En qué año ingresaste al CC Núcleo?</label>
			<div class="controls">
				<?php echo form_dropdown('anhoingreso', $lista_anho, 'none', $lista); ?>
				<p class="help-block"><?php echo form_error('anhoingreso'); ?></p>
			</div>
		</div>
			
		<!--<div class="control-group">
			<label class="control-label">¿Es usted estudiante de la UNI?</label>
			<div class="controls">
				<label class="radio"><?php //echo form_radio($uni_si);?> SI, soy estudiante de la UNI.</label>
				<label class="radio"><?php //echo form_radio($uni_no);	?> NO.</label>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="facultad">Selecione su facultad:</label>
			<div class="controls">
				<?php //echo form_dropdown('facultad', $lista_facs, 'none', $lista); ?>
				<p class="help-block"><?php //echo form_error('facultad'); ?></p>
			</div>
		</div>-->
			
		<div class="control-group">
			<label class="control-label" for="universidad">Universidad</label>
			<div class="controls">
				<?php echo form_input($universidad); ?>
				<p class="help-block"><?php echo form_error('universidad'); ?></p>
			</div>
		</div>

		<!--<div><?php //echo validation_errors(); ?></div>-->
		
		<div class="form-actions">
			<?php echo form_submit('enviar','Enviar',$boton); ?>
		</div>
			
		<?php echo form_close();?>
		</fieldset>
	</div>
	<br /><br /><br />
	<div class="span4">
		<h3>Nota importante</h3>
		<p>Las 200 primeras personas inscritas podrán participar de los talleres vivenciales a realizarse en la Facultad de Ingeniería Industrial y de Sistemas - FIIS. Los mantendremos al tanto de las inscripciones.</p>
	</div>
	<!--</div>-->
	</div>

</body>

</html>