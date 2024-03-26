import axios from 'axios';
import { Pozo } from './../interfaces/pozo.interface';

export class PozoService {

public static async  getAllPozos(currentPage: number): Promise<Pozo[] | any> {
    try {
      const response = await axios.get('/pozo/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createPozo(pozo: Pozo) {
    try {
      const response = await axios.post('/pozo/create', pozo);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updatePozo(pozo: Pozo) {
    try {

      const response = await axios.post('/pozo_editar', pozo);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deletePozo(pozo: Pozo) {
    try {
      console.log('Imprimo pozo en el servicio',pozo);
      const response = await axios.post('/pozo_eliminar',pozo);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
