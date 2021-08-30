<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite a Placa">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div id="divCmpGridVeiculoVelocidade"></div>
    </div>
</div>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelVeiculoVelocidade().init();
    });
</script>