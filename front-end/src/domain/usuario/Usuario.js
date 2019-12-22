export default class Usuario{

    constructor(name='', cpf='', dataNascimento='', email='', telefone='', endereco='', cidade='', estado='', cep=''){
        
        this.name = name;
        this.cpf = cpf;
        this.dataNascimento = dataNascimento;
        this.email = email;
        this.telefone = telefone;
        this.endereco = endereco;
        this.cidade = cidade;
        this.estado = estado;
        this.cep = cep;

    }
}

let usuario = new Usuario();