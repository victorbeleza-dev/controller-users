  
<template>
    <div id="user-list" class="container">
            <b-table striped responsive="sm" :fields="fields" :items="usuarios">
                <template v-slot:cell(Ações)="row">
                    <b-button-group>
                        <b-dropdown right text="Menu">
                            <b-dropdown-item>Visualizar</b-dropdown-item>
                            <b-dropdown-item>Editar</b-dropdown-item>
                            <b-dropdown-item @click="deleteUser(row.item)" variant="danger">Deletar</b-dropdown-item>
                        </b-dropdown>
                    </b-button-group>
                </template>
            </b-table>
    </div>
</template>

<script>
import Usuario from '../../domain/usuario/Usuario';
export default {

  data() {

    return {

        fields: ['name', 'telefone', 'cpf', 'Ações'],
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

    deleteUser (usuario) {
        this.$http.delete('http://127.0.0.1:8000/api/usuarios/' + usuario.id)
        .then(() => alert('Usuário removido com sucesso!'), err => {
            alert( 'Ocorreu um Erro ao remover o usuário!')})
    }
  }

};

</script>

<style lang="scss">

.text-center{
    align-items: center;
    width: 70%;
}

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
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
