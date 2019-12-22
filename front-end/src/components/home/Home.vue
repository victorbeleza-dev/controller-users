  
<template>
    <div id="user-list" class="container">
            <b-table striped responsive="sm" :fields="fields" :items="usuarios">
                <template v-slot:cell(Ações)="row">
                    <b-button-group>
                        <b-dropdown right text="Menu">
                            <b-dropdown-item v-b-modal="'modal-edit-user'" @click="openView(row.item)" v-b-tooltip.hover title="Visualizar usuário">Visualizar</b-dropdown-item>
                            <b-dropdown-item v-b-modal="'modal-edit-user'" @click="openModal(row.item)" v-b-tooltip.hover title="Editar usuário">Editar</b-dropdown-item>
                            <b-dropdown-item @click="deleteUser(row.item)" variant="danger" v-b-tooltip.hover title="Deletar usuário">Deletar</b-dropdown-item>
                        </b-dropdown>
                    </b-button-group>
                </template>
            </b-table>

            <b-modal id="modal-edit-user" hide-footer>
                <b-form>

                <b-form-group label="Nome:">

                    <b-form-input
                    v-model="usuario.name"
                    required
                    placeholder="Insira seu nome:">
                    </b-form-input>

                    </b-form-group>

                    </b-form>

                <b-form-group label="Cpf:">

                    <b-form-input
                    v-model="usuario.cpf"
                    required
                    type="varchar"
                    placeholder="Insira seu cpf:">
                    </b-form-input>

                </b-form-group>

                    <b-form-group label="Data de Nascimento">

                    <b-form-input
                    v-model="usuario.dataNascimento"
                    required
                    type="date"
                    placeholder="Insira sua data de nascimento:">
                    </b-form-input>

                </b-form-group>  

                <b-form-group
                label="Email">

                    <b-form-input
                    v-model="usuario.email"
                    type="email"
                    required
                    placeholder="Insira seu E-mail:">
                    </b-form-input>

                </b-form-group>

                <b-form-group label="Telefone">

                    <b-form-input
                    v-model="usuario.telefone"
                    required
                    type="char"
                    placeholder="Insira seu telefone:">
                </b-form-input>

                <b-form-group label="Cep">

                    <b-form-input 
                    v-model="usuario.cep"
                    required
                    type="char"
                    placeholder="Insira seu cep:">
                    </b-form-input>

                </b-form-group>

                </b-form-group>
                
                    <b-form-group label="Endereço">

                    <b-form-input
                    v-model="usuario.endereco"
                    required
                    placeholder="Insira seu endereço:">
                    </b-form-input>

                </b-form-group>

                
                    <b-form-group label="Cidade">

                    <b-form-input
                    v-model="usuario.cidade"
                    required
                    placeholder="Insira sua cidade:">
                    </b-form-input>

                </b-form-group>

                
                    <b-form-group label="Estado" label-for="input-1">

                    <b-form-input
                    v-model="usuario.estado"
                    required
                    placeholder="Insira o estado:">
                    </b-form-input>

                </b-form-group>         
                
                <b-button variant="success" v-b-tooltip.hover title="Atualizar Usuário" v-if="viewUser" @click="updateUser()">Atualizar</b-button>
                <b-button class="mt-3" v-b-tooltip.hover title="Fechar a janela" block @click="$bvModal.hide('modal-edit-user')">Fechar</b-button>
            </b-modal>

    </div>
</template>

<script>
import Usuario from '../../domain/usuario/Usuario';
export default {

  data() {

    return {
        viewUser: false,
        usuario: new Usuario(),
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
    },

    openView(usuario){
        this.usuario = usuario;
    },

    openModal (usuario){
        this.usuario = usuario;
        this.viewUser = true;
    },

    updateUser(evt) {

        this.$http
        .put('http://127.0.0.1:8000/api/usuarios/' + this.usuario.id, this.usuario)
        .then(() => alert('Usuário atualizado com sucesso!'), err => console.log(err));
          
    },
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
