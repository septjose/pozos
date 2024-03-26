import axios from 'axios';
import { Usuario } from './../interfaces/usuario.interface';

export class UsuarioService {

public static async  getAllUsuarios(currentPage: number): Promise<Usuario[] | any> {
    try {
      const response = await axios.get('/usuario/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}

public static async  createUsuario(usuario: Usuario) {
    try {
      const response = await axios.post('/usuario/create', usuario);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updateUsuario(usuario: Usuario) {
    try {

      const response = await axios.post('/usuario_editar', usuario);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deleteUsuario(usuario: Usuario) {
    try {
      console.log('Imprimo usuario en el servicio',usuario);
      const response = await axios.post('/usuario_eliminar',usuario);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
