import { http } from './config';

export default {

    list:(cep) => {
        return http.get(cep)
    }

}