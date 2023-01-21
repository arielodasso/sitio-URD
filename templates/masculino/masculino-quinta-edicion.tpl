{include file = "componentes/headerAdmin.tpl"}

<section class="cont-admin">
    <div class="banner-presentacion">
        <h2>Tablas de <span>Quinta Masculino</span></h2>
    </div>   
    
    <div class="cont-tabla-edicion col-md-12 d-flex">
        <div class="tablaA col-md-5">
            <h4>Categoría A</h4>
            <form method="POST" action="agregarEquipoQuintaA" enctype="multipart/form-data" class="my-4 form-desarrollo">
                <input class="equipoA" type="text" required name="equipoA" id="equipoA" placeholder="Ingrese equipo Zona A">
                <button type="submit" class="btn btn-primary m-2">Agregar</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Club</th>
                    <th scope="col">PJ</th>
                    <th scope="col">DG</th>
                    <th scope="col">Pts.</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$equiposA item=$equipoA}
                    <tr>
                    <td class="td-escudo"><img src="img/{$equipoA->escudo}" alt=""></td>
                    <td>{$equipoA->equipo}</td>
                    <td>{$equipoA->pj}</td>
                    <td>{$equipoA->dg}</td>
                    <td>{$equipoA->puntos}</td>
                    <td>
                        <a href="borrarEquipoQuintaA/{$equipoA->id}"><button type="button" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button></a>
                    </td>
                    <td>
                        <a href="editarEquipoQuintaA/{$equipoA->id}"><button type="button" class="btn btn-success">
                            <i class="fas fa-edit"></i>
                        </button></a>
                    </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div class="tablaB col-md-5">
            <h4>Categoría B</h4>
            <form method="POST" action="agregarEquipoQuintaB" enctype="multipart/form-data" class="my-4 form-desarrollo">
                <input class="equipoB" type="text" required name="equipoB" id="equipoB" placeholder="Ingrese equipo Zona B">
                <button type="submit" class="btn btn-primary m-2">Agregar</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Club</th>
                    <th scope="col">PJ</th>
                    <th scope="col">DG</th>
                    <th scope="col">Pts.</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$equiposB item=$equipoB}
                    <tr>
                    <td class="td-escudo"><img src="img/{$equipoB->escudo}" alt=""></td>
                    <td>{$equipoB->equipo}</td>
                    <td>{$equipoB->pj}</td>
                    <td>{$equipoB->dg}</td>
                    <td>{$equipoB->puntos}</td>
                    <td>
                        <a href="borrarEquipoQuintaB/{$equipoB->id}"><button type="button" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button></a>
                    </td>
                    <td>
                        <a href="editarEquipoQuintaB/{$equipoB->id}"><button type="button" class="btn btn-success">
                            <i class="fas fa-edit"></i>
                        </button></a>
                    </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>   
        
</section>

{include file = "componentes/footer.tpl"}