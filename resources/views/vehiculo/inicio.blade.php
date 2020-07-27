<div id="btn-example" class="tab-content clearfix" style="display: block;">
    <h6>Cantidad de vehiculos por marca</h6>
    <hr/>
    <table class="striped">
        <thead>
            <tr>
                <th>Marca vehiculo</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="vehiculo in vehiculoslist">
                <td><% vehiculo.nombre.charAt(0).toUpperCase() + vehiculo.nombre.toLowerCase().slice(1); %></td>
                <td><% vehiculo.cantidad%></td>
            </tr>
        </tbody>
    </table>
    <hr/>
    <a href="#!/crear-propietario" class="button small green"><i class="fa fa-plus-circle"></i>&nbsp;Crear propietario</a>
</div>