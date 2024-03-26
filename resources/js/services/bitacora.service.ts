import axios from 'axios';
import { Bitacora } from './../interfaces/bitacora.interface';

export class BitacoraService {

public static async  getAllBitacoras(currentPage: number): Promise<Bitacora[] | any> {
    try {
      const response = await axios.get('/bitacora/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createBitacora(bitacora: Bitacora) {
    try {
      const response = await axios.post('/bitacora/create', bitacora);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updateBitacora(bitacora: Bitacora) {
    try {

      const response = await axios.post('/bitacora_editar', bitacora);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deleteBitacora(bitacora: Bitacora) {
    try {
      console.log('Imprimo bitacora en el servicio',bitacora);
      const response = await axios.post('/bitacora_eliminar',bitacora);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
