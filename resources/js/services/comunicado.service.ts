import axios from 'axios';
import { Comunicado } from './../interfaces/comunicado.interface';

export class ComunicadoService {

public static async  getAllComunicados(currentPage: number): Promise<Comunicado[] | any> {
    try {
      const response = await axios.get('/comunicado/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createComunicado(comunicado: Comunicado) {
    try {
      const response = await axios.post('/comunicado/create', comunicado);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updateComunicado(comunicado: Comunicado) {
    try {

      const response = await axios.post('/comunicado_editar', comunicado);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deleteComunicado(comunicado: Comunicado) {
    try {
      console.log('Imprimo comunicado en el servicio',comunicado);
      const response = await axios.post('/comunicado_eliminar',comunicado);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
