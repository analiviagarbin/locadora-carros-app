<template>
    <div :class="estilo" role="alert">
        {{titulo}}
        <hr />
        {{detalhes.data.message}}
    </div>
</template>

<script>
    export default {
        computed: {
            estilo(){
                return 'alert alert-'+this.tipo
            }
        },
        props: [
            'tipo',
            'detalhes',
            'titulo'
        ]
    }
</script>
