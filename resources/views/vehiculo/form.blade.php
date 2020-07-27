<div id="btn-example" class="tab-content clearfix" style="display: block;">
    <h6>Creacion de un nuevo propietario</h6>
    <hr/>
    <div class="notice error" ng-if="error">
        <i class="icon-remove-sign icon-large"></i>&nbsp;<%error%> 
        <a href="#close" class="icon-remove"></a>
    </div>
    <form id="formVehiculo">
        <div class="col_6">
            <span><b>Informacion del propietario</b></span><br/><br/>
            <div class="col_12">
                <label for="tipo_identificacion">Tipo de identificaci&oacute;n</label><br/>
                <select ng-model="propietario.tipo_identificacion_id" id="tipo_identificacion" name="Propietario[tipo_identificacion_id]" required>
                    <option value="">-- Seleccione --</option>
                    <option ng-repeat="identificacion in identificaciones" value="<%identificacion.id%>"><%identificacion.nombre%></option>
                </select>
            </div>
            <div class="col_12">
                <label for="numero_documento">N&uacute;mero de identificaci&oacute;n</label><br/>
                <input id="nombres" ng-model="propietario.numero_documento" name="Propietario[numero_documento]" type="number" required />
            </div>
            <div class="col_12">
                <label for="nombres">Nombres</label><br/>
                <input id="nombres" ng-model="propietario.nombres" name="Propietario[nombres]" type="text" required/>
            </div>
            <div class="col_12">
                <label for="apellidos">Apellidos</label><br/>
                <input id="apellidos" ng-model="propietario.apellidos" name="Propietario[apellidos]" type="text" required/>
            </div>
            <div class="col_12">
                <label for="correo_electronico">Correo electr&oacute;nico</label><br/>
                <input id="correo_electronico" ng-model="propietario.correo_electronico" name="Propietario[correo_electronico]" type="email" required/>
            </div>
            <div class="col_12">
                <label for="numero_telefono">N&uacute;mero de telefono</label><br/>
                <input id="numero_telefono" ng-model="propietario.numero_telefono" name="Propietario[numero_telefono]" type="number" required/>
            </div>
        </div>
        <div class="col_6">
            <span><b>Informacion del vehiculo</b></span><br/><br/>
            <div class="col_12">
                <label for="marca">Marca</label><br/>
                <select id="marca" ng-model="vehiculo.marca_id" name="Vehiculo[marca_id]" ng-model="marca" ng-change="cargarModelos()" required>
                    <option value="">-- Seleccione --</option>
                    <option ng-repeat="marca in marcas" value="<%marca.id%>" ><%marca.nombre%></option>
                </select>
            </div>
            <div class="col_12">
                <label for="modelo">Modelo</label><br/>
                <select id="modelo" ng-model="vehiculo.modelo_marca_id" name="Vehiculo[modelo_marca_id]" required>
                    <option value="">-- Seleccione --</option>
                    <option ng-repeat="modelo in modelos" value="<%modelo.id%>" ><%modelo.nombre%></option>
                </select>
            </div>
            <div class="col_12">
                <label for="placa">Placa</label><br/>
                <input id="placa" ng-model="vehiculo.placa" name="Vehiculo[placa]" maxlength="6" type="text" required/>
            </div>
        </div>
    </form>
    <hr/>
    <a href="#!/" class="button small yellow"><i class="fa fa-arrow-left"></i>&nbsp;Volver</a>
    <button class="small green" ng-click="guardarVehiculo()"><i class="fa fa-save"></i>&nbsp;Guardar</a>
</div>