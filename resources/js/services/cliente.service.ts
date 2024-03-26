import axios from 'axios';
import { Cliente } from './../interfaces/cliente.interface';

export class ClientesService {

public static async  getAllClientes(currentPage: number): Promise<Cliente[] | any> {
    try {
      const response = await axios.get('/cliente/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createCliente(cliente: Cliente) {
    try {
      const response = await axios.post('/cliente/create', cliente);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updateCliente(cliente: Cliente) {
    try {

      const response = await axios.post('/cliente_editar', cliente);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deleteCliente(cliente: Cliente) {
    try {
      console.log('Imprimo cliente en el servicio',cliente);
      const response = await axios.post('/cliente_eliminar',cliente);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
