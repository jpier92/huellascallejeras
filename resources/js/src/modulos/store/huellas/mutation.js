

export const getAnimalesAdopcion = (state,data) => {
    state.adopciones = data;
}

export const getAnimalIdAdopcion = (state,id) => {
    state.adopcionId = state.adopciones[id];
}
export const isLoading = (state,val) => {
    state.isLoading = val;
}
export const registroAdopcion = (state,val) => {
    state.registroAdopcion = val;
}