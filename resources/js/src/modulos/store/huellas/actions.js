import {getAdopciones, adopta} from '../../huellas/helpers/adopciones';
import {envioEmail} from '../../huellas/helpers/envioNotificacion'

        //el context tiene la informacion sobre el contexto del store o del modulo en el cual nos encontramos

 export const getAnimalesAdopcion = async ({commit}) => {
    const animalesAdopcion =  await  getAdopciones();             
    // en el caso de querer llamar a un mutacion hago lo siguiente
    commit('getAnimalesAdopcion',animalesAdopcion);
}

 export const adoptaAnimal = async({commit}, dataPersonaAdopta) => {
    let response = await adopta(dataPersonaAdopta);
    commit('isLoading', false);
    if(response.error === false){
      commit('registroAdopcion', true);
      commit('borrarCacheAnimal', dataPersonaAdopta.idAnimal)
    }else{
      commit('registroAdopcion', false);
    }
 }

 export const enviarMensaje = async ({commit}, dataMensaje) => {
  const response =  await  envioEmail(dataMensaje);
  commit('isLoading', false);
  if(response.error === false){
    commit('registroAdopcion', true);
  }else{
    commit('registroAdopcion', false);
  }
}

