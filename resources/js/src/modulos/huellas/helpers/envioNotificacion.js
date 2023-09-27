import axios from "axios"

export async function envioEmail(dataMesanje){
    let data = null;
    await axios.post('/api/envio-email',dataMesanje).then(response =>{
       data = response.data;
    });
    return data;
}