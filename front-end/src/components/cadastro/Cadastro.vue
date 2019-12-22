<template>
  <div>
    <b-form @submit="onSubmit" @reset="onReset">

        <b-form-group label="Nome:">

            <b-form-input
            v-model="usuario.name"
            required
            placeholder="Insira seu nome:">
            </b-form-input>

        </b-form-group>

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
        
             <b-form-group label="Cep">

            <b-form-input
            v-model="usuario.cep"
            required
            type="char"
            placeholder="Insira seu cep:">
            </b-form-input>

        </b-form-group>

      <b-button type="submit" variant="primary">Enviar</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
  </div>
</template>

<script>

import Usuario from '../../domain/usuario/Usuario';

  export default {

    data() {

      return {
        usuario: new Usuario(),
      }
    },
    methods: {
      onSubmit(evt) {

        this.$http
        .post('http://127.0.0.1:8000/api/usuarios', this.usuario)
        .then(() => alert('Usuário cadastrado com sucesso!'), err => console.log(err));
          
      },
      onReset(evt) {
       this.usuario = new Usuario();
      }
    }
  }
</script>