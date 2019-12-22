<template>
     <nav>
          <span v-for="(rota) in rotas" v-bind:key="rota.titulo">
            <b-button class="button" variant="info" :to="rota.path ? rota.path : '/'">
              {{ rota.titulo }}
            </b-button>
          </span>
      </nav>
</template>

<script>

export default {
    
    props: {
        rotas:{
            type: Array,
            require: true
        }
    }
}
</script>

<style>
    .button{
        margin: 2px;
    }
</style>