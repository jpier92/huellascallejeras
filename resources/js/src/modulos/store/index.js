import { createStore } from 'vuex'
import huellasStore from './huellas'

//para utilizar esto debemos hacer un plugin en el main js

export default createStore({

    modules:{
        huellas: huellasStore
    }

});