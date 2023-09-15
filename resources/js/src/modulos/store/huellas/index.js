import state from './state'
import * as mutations from './mutation'
import * as actions from './actions'
import * as getters from './getters'




 const huellasStore = {
    namespaced: true,
    //el state es paracido a la data() por ende es reactivo
    state: state,
    //basicamente son metodos que van a servir para hacer los cambios en el state
    mutations: mutations,
    //son metodos que pueden ser async. Disparamos una accion para comprabar algo de un backend entonces cuando recibimos la respuesta diapramos un 
    //commit de una mutation por ende las acciones son despachadas
    actions: actions,
    getters: getters
 }


 export default huellasStore;