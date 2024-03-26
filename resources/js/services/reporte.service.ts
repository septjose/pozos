import axios from 'axios';
import { Reporte } from './../interfaces/reporte.interface';

export class ReporteService {

public static async  getAllReportes(currentPage: number): Promise<Reporte[] | any> {
    try {
      const response = await axios.get('/reporte/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createReporte(reporte: Reporte) {
    try {
      const response = await axios.post('/reporte/create', reporte);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updateReporte(reporte: Reporte) {
    try {

      const response = await axios.post('/reporte_editar', reporte);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deleteReporte(reporte: Reporte) {
    try {
      console.log('Imprimo reporte en el servicio',reporte);
      const response = await axios.post('/reporte_eliminar',reporte);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
