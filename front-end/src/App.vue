  
<template>
    <div class="body">      
      <b-navbar alignt="center" toggleable="lg" type="dark" variant="info">
        <b-navbar-brand href="#">Controle de usuários</b-navbar-brand>
      </b-navbar>
      <b-card id="card-container" class="card-container" header-border-variant="secondary">
         <meu-menu :rotas="routes"/>
        <router-view></router-view>
       </b-card>
    </div>
</template>

<script>

import { routes } from './routes';
import Menu from './components/menu/Menu.vue';

export default {

  components: {
    'meu-menu': Menu
  },

  data(){

    return{
      routes
    }
  }
};

</script>

<style lang="scss">

  .body{
    background-color:darkgrey;
    align-content: center;
    align-items: center;
    text-align: center;
    align-self: center;
    height: 100%;
  }

  .card-container{
    height: 1080px;
    width: 900px;
  }

</style>
