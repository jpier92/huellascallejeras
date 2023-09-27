import axios from "axios"

export const  getAdopciones = async () => {
    let data = '';
    await axios.get('/api/adopcion').then(response => {
        data = response.data.data;
    });
    return data;
}
export async function adopta(dataPersona){
    let data=null;
    await axios.post('/api/adopta', dataPersona).then(response =>{
       data = response.data;
    });
    return data;
}
