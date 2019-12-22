  
<template>
    <div id="user-list" class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h1 class="text-center">Lista de Usuarios</h1>
          <table class="table">
            <tr v-for="(usuario) in usuarios" v-bind:key="usuario.id" v-bind:name="usuario.name">
              <td class="text-left">{{usuario.name}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</template>

<script>
export default {

  data() {
    return {
      titulo: "Controle de usuários",
        usuarios: []
    };
  },

  created(){
    this.getUsers();
  },

  methods: {

    getUsers () {
     let promise = this.$http.get('http://127.0.0.1:8000/api/usuarios');
      promise.then(res => {

        res.json().then(usuarios => this.usuarios = usuarios.data);
      
      })
    },

    addNewTask () {
    },

    editTask () {
    },

    updateTask () {
      
    },

    deleteTask (id) {
     
    }
  }

};

</script>

<style lang="scss">

.table{
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}

.container {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    align-items: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
