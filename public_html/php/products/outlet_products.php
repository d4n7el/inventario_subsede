<div class="row">
    <form action="#" accept-charset="utf-8" id="add_exit_product">
        <div class="formulario col s5" id="">
        	<div class="destino col s12 sombra centrar" style="margin-bottom: 2em">
        		<h6 class="titulo color_letra_secundario col s4"> Destino</h6>
    			<p class="col s4">
    				<input name="destino" type="radio" id="interno" required value="Int" />
    				<label for="interno">Interno</label>
    			</p>
    			<p class="col s4">
    				<input name="destino" type="radio" id="externo" required value="Ext" />
    				<label for="externo">Externo</label>
    			</p>
        	</div>
    		
           	<div class="input-field col s12 m12" id="stock">
            	<?php 
            	$exit_product = true;
            	require_once($_SERVER['DOCUMENT_ROOT'].'/php/cellars/_view_cellar_select.php'); ?>
            </div>

            <div class="input-field col s12 m12" id="mostrar_productos">
    			
            </div>
            <div class="input-field col s12 m12" id="mostrar_lotes">
    			
            </div>
            <div class="input-field col s12 m12" id="cantidad_disponible">
                <i class="material-icons prefix">filter_9_plus</i>
                <input id="cantidad" type="number" class="validate" name="cantidad[]" value="" autocomplete="off" max="" required >
                <label for="cantidad" class="active">Cantidad</label>
            </div>
            <div class="action col s12 centrar">
            	<button class="waves-effect waves-light btn btn-primary" id="">
            		<i class="material-icons left">near_me</i>Agregar
            	</button>
    	    </div>	
    	</div>
    </form>
	<div class="col s7">	
		<form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/stock/new_exit_stock.php" class="create_info"  accept-charset="utf-8">
            <div class="input-field col s12 m12" id="view_add_elements" ruta="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/_partials/_select_quantity.php">
                <h5 class="titulo color_letra_primario center col s12">
                    Listado
                </h5>   
            </div>
            <div class="input-field col s12 m12">
                <i class="material-icons prefix">account_circle</i>
                <input id="receive_user" type="text" class="validate" name="receive_user" autocomplete="off" ruta="<?php $_SERVER['DOCUMENT_ROOT'] ?>/php/request/get_user.php" required>
                <label for="receive_user" class="">Cedula de quien recibe</label>
            </div>
            <div class="input-field col s12 m12" id="name_receive_user">
               
            </div>
			<div class="action col s12 centrar">
	        	<button class="waves-effect waves-light btn btn-primary" id="add_exit">
	        		<i class="material-icons left">near_me</i>Registrar salidas
	        	</button>
		    </div>
        </form> 
    </div>
</div>
