<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Busca de Marcas</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id-help="idHelp"
                                    texto-ajuda="Opcional. Informe o ID da Marca">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp"
                                        placeholder="ID">
                                </input-container-component>
                            </div>
                            <div class="col mb-3">
                                <input-container-component titulo="Nome" id-help="nomeHelp"
                                    texto-ajuda="Opcional. Informe o nome da Marca">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp"
                                        placeholder="Nome">
                                </input-container-component>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm float-right">Buscar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>

</script>
    