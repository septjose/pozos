import axios from 'axios';
import IPrueba from './../interfaces/Iprueba';
export class pruebaS {


public static async  getAllPruebas(currentPage: number): Promise<IPrueba[] | any> {
    try {

console.log("valor del servicio", currentPage);
      const response = await axios.get('/prueba/getData?page=' + currentPage);

      console.log('service .data', response.data);
    return response.data;
    } catch (error) {
      //console.error('Error fetching data:', error);
      return {'Error fetching data': error};
    }
}



public static async  createPrueba(prueba: IPrueba) {
    try {
      console.log("IMPRIMO DESDE EL SERVICIO DATA",prueba._rawValue
      );
      const response = await axios.post('/prueba_crear', prueba._rawValue
      );
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async  updatePrueba(prueba: IPrueba) {
    try {
      console.log('Imprimo prueba en el servicio', prueba._rawValue);

    const oPrueba={
id_prueba:24,
input1:prueba._rawValue.input1,
input2:prueba._rawValue.input2,
input3:prueba._rawValue.input3
    };
    console.log('Imprimo Oprueba en el servicio', oPrueba);
      const response = await axios.post('/prueba_editar',  oPrueba);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};
    }
}

public static async deletePrueba(prueba: IPrueba) {
    try {
      console.log('Imprimo prueba en el servicio', prueba);
      const response = await axios.post('/prueba_eliminar', prueba);
      return response.data;
    } catch (error) {
      return {'Error fetching data': error};

    }
}
};
