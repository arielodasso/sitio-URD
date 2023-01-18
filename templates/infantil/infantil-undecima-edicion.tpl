{include file = "componentes/headerAdmin.tpl"}

<section class="cont-admin">
    <div class="banner-presentacion">
        <h2>Tablas de <span>11ma. Infantil</span></h2>
    </div>   
        
    <div class="cont-tabla-edicion col-md-12 d-flex">
        <div class="tablaA col-md-5">
            <h4>Categoría A</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Club</th>
                    <th scope="col">PJ</th>
                    <th scope="col">DG</th>
                    <th scope="col">Pts.</th>
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
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        <div class="tablaB col-md-5">
            <h4>Categoría B</h4>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">Club</th>
                    <th scope="col">PJ</th>
                    <th scope="col">DG</th>
                    <th scope="col">Pts.</th>
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
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>   
        
</section>

{include file = "componentes/footer.tpl"}