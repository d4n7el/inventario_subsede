<div class="row">
    <div class="formulario col m6 offset-m3">
    	<form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/sessions/new_session.php" id="submit_session">
	        <div class="input-field col s12 m12">
	            <i class="material-icons prefix">credit_card</i>
	            <input id="cedula_user" type="text" class="validate align-center " name="cedula" autocomplete="off"  required>
	            <label for="cedula_user" class="">Cedula cliente</label>
	        </div>	
	        <div class="input-field col s12 m12">
	            <i class="material-icons prefix">fingerprint</i>
	            <input id="pass_user" type="password" class="validate align-center " name="pass" autocomplete="off"  required>
	            <label for="pass_user" class="">Contraseña cliente</label>
	        </div>		
	        <div class="action col m12 centrar">
	        	<button class="waves-effect waves-light btn btn-primary">
	        		<i class="material-icons left">near_me</i>Iniciar
	        	</button>
	        </div>	
		</form>
    </div>
</div>