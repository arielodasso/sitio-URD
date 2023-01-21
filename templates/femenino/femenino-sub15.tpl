{include file="componentes/header.tpl"}
<div class="banner-presentacion">
    <h2>Sub-15 <span>Femenino</span></h2>
</div>

<div class="cont-general">
<section class="col-md-7">
    <div class="cont-noticias">
        <div class="noticias">

                   {foreach from=$noticias item=$noticia}

                   <div class="card mb-3" style="max-width: 90%;">
                     <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/{$noticia->imagen}" class="img-fluid rounded-start" alt="{$noticia->titulo}">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{$noticia->titulo}</h5>
                            <p class="card-text">{$noticia->descripcion|truncate:100}</p>
                            <p class="card-text"><small class="text-muted">{$noticia->fecha}</small></p>
                            <a href="noticia/{$noticia->id}" class="btn">Ver +</a>
                        </div>
                        </div>
                     </div>
                    </div>
                    {/foreach}
        </div>
    </div>
</section>

<section class="cont-tablas col-md-5">
<h2>Posiciones</h2>

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
</section>
</div>


{include file="banner-mas.tpl"}

{include file="componentes/footer.tpl"}
