import {getAdopciones, adopta} from '../../huellas/helpers/adopciones';

        //el context tiene la informacion sobre el contexto del store o del modulo en el cual nos encontramos

 export const getAnimalesAdopcion = async ({commit}) => {
    const animalesAdopcion =  await  getAdopciones();             
    // en el caso de querer llamar a un mutacion hago lo siguiente
    commit('getAnimalesAdopcion',animalesAdopcion);
}

 export const adoptaAnimal = async({commit}, dataPersona) => {
    let response = await adopta(dataPersona); 
    console.log(response);  
    if(response.error === false){
      commit('registroAdopcion', true);
    }
 }

