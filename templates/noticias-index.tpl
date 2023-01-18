    <section class="noticias-index">
        <div class="titulo">Últimas <span>noticias</span></div>


            <div class="cont-noticias-index">


                <div class="card mb-3 col-md-6">
                {foreach from=$ultimaNoticia item=noticia}
                <img src="img/{$noticia->imagen}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$noticia->titulo}</h5>
                    <p class="card-text">{$noticia->descripcion}</p>
                    <a class="btn" href="noticia/{$noticia->id}" role="button">Ver +</a>
                </div>
                {/foreach} 
                </div>
            

            

                
            <div class="col-md-6 cont-noticias-horizontal">
                <div class="card mb-3 noticia-horizontal" style="max-width: 540px;">
                {foreach from=$ultimasNoticia item=ultimas}
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="img/{$ultimas->imagen}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{$ultimas->titulo}</h5>
                        <p class="card-text">{$ultimas->descripcion|truncate:40}</p>
                        <a class="btn" href="noticia/{$ultimas->id}" role="button">Ver +</a>
                    </div>
                    </div>
                </div>
                {/foreach} 
                </div>
                
            </div>
            </div>            

        </div>
        </div>
    </section>