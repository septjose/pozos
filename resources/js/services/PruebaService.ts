import { Ref,ref } from "vue";
import IPrueba from "@/interfaces/Iprueba";
class PruebaService{

    private pruebas : Ref <Array<IPrueba>>;
    private prueba : Ref <IPrueba>;
private eliminado: Ref<string>

    constructor(){
        this.pruebas = ref<Array<IPrueba>>([]);
        this.prueba = ref<IPrueba>({});
        this.eliminado=ref('');
    }

    getPruebas(): Ref<Array<IPrueba>>{
        return this.pruebas;
    }

    getPrueba(): Ref<IPrueba>{
        return this.prueba;
    }

    //OBTENER TODOS LOS DATOS
    async fetchAll(): Promise<void>{
        try {

            const response = await fetch('/prueba2/getData?page=' + 1);

            const json = await response.json();

            this.pruebas.value = await json;

            console.log('contenido json',this.pruebas.value);


          } catch (error) {
            //console.error('Error fetching data:', error);
            console.log('Error fetching data:', error);
          }
    }

    async fetchById(id : string | string[]): Promise<void>{
        try{
            const response = await fetch(`/getp/${id}`);
            const json = await response.json();
            this.prueba.value = await json;

        } catch (error){
            console.log('Error fetching data:', error);
        }
    }

     async deletePrueba(prueba: IPrueba) {
        try {
            console.log('Imprimo prueba en el servicio', prueba);

            // Crear un objeto con los datos a enviar en el cuerpo de la solicitud


            // Convertir el objeto a formato JSON
            const requestBody = JSON.stringify(prueba);

            await fetch(`/prueba_eliminar`, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json', // Indicar que se acepta una respuesta en formato JSON
                    'Content-Type': 'application/json', // Especificar el tipo de contenido como JSON

                },
                body: JSON.stringify({
                    id_prueba: prueba.id_prueba
                }) // Agregar el cuerpo de la solicitud
            });

            // No es necesario devolver nada si la eliminación se realiza con éxito
        } catch (error) {
            console.error('Error al eliminar la prueba:', error);
            // Puedes manejar el error según tus necesidades, como lanzar una excepción o devolver un mensaje de error
        }
    }


}

export default PruebaService;
