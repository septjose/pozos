import { PruebaService } from "./../services/prueba.services";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Prueba } from "./../interfaces/Iprueba";
import { ref } from "vue";

interface Pruebas {
    data: Prueba[];
    last_page: number;
}


export const usePruebaStore = defineStore("prueba", () => {
     const prueba: Pruebas  = reactive<Pruebas>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchPruebas = async (currentP: number = 1) => {
        const { data, last_page } = await PruebaService.getAllPruebas(currentP);

        console.log("last page", data, last_page);

        prueba.data = data;
        prueba.last_page = last_page;
//        lastPage.value = last_page;
        return prueba;
    };

    const createPrueba = async (data: Prueba) => {
        await PruebaService.createPrueba(data);
        // Luego de crear la prueba, vuelves a cargar las pruebas para reflejar el cambio
        await fetchPruebas();
    };

    const updatePrueba = async (data: Prueba) => {
        //Mostrar_modal
        await PruebaService.updatePrueba(data);
        // Luego de actualizar la prueba, vuelves a cargar las pruebas para reflejar el cambio
        await fetchPruebas();
    };

    const deletePrueba = async (data: Prueba) => {
        await PruebaService.deletePrueba(data);
        // Luego de eliminar la prueba, vuelves a cargar las pruebas para reflejar el cambio
        await fetchPruebas();

    };

    return {
        prueba,
        currentPage,
        fetchPruebas,
        createPrueba,
        updatePrueba,
        deletePrueba,
    };
});

/*const objExample={
caracteristicas:[
    {nombre:"color",valor:"rojo"},
    {nombre:"tamaño",valor:"grande"},
    {nombre:"peso",valor:"medio"}
],

atributos:[
    {nombre:"color",valor:"rojo"},
    {nombre:"tamaño",valor:"grande"},
    {nombre:"peso",valor:"medio"}
],
total:100,
nombre:"prueba"

}

const dataObjeto=objExample;

console.log("dataObjeto",dataObjeto);

const {caracteristicas,atributos,total,nombre}=dataObjeto;

console.log("caracteristicas",caracteristicas);
console.log("atributos",atributos);
console.log("total",total);
console.log("nombre",nombre);*/
