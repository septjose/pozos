import axios from 'axios';
import { Presupuesto } from './../interfaces/presupuesto.interface';

export class PresupuestoService {

public static async  getAllPresupuestos(currentPage: number): Promise<Presupuesto[] | any> {
    try {
      const response = await axios.get('/presupuesto/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createPresupuesto(presupuesto: Presupuesto) {
    try {
      const response = await axios.post('/presupuesto/create', presupuesto);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updatePresupuesto(presupuesto: Presupuesto) {
    try {

      const response = await axios.post('/presupuesto_editar', presupuesto);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deletePresupuesto(presupuesto: Presupuesto) {
    try {
      console.log('Imprimo presupuesto en el servicio',presupuesto);
      const response = await axios.post('/presupuesto_eliminar',presupuesto);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
