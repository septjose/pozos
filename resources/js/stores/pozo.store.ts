import { PozoService } from "./../services/pozo.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Pozo } from "./../interfaces/pozo.interface";
import { ref } from "vue";

interface Pozos {
    data: Pozo[];
    last_page: number;
}

export const usePozoStore = defineStore("pozo", () => {
     const pozo: Pozos  = reactive<Pozos>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchPozos = async (currentP: number = 1) => {
        const { data, last_page } = await PozoService.getAllPozos(currentP);

        console.log("last page", data, last_page);

        pozo.data = data;
        pozo.last_page = last_page;
//        lastPage.value = last_page;
        return pozo;
    };

    const createPozo = async (data: Pozo) => {
        await PozoService.createPozo(data);
        // Luego de crear la pozo, vuelves a cargar las pozos para reflejar el cambio
        await fetchPozos();
    };

    const updatePozo = async (data: Pozo) => {
        //Mostrar_modal
        await PozoService.updatePozo(data);
        // Luego de actualizar la pozo, vuelves a cargar las pozos para reflejar el cambio
        await fetchPozos();
    };

    const deletePozo = async (data: Pozo) => {
        await PozoService.deletePozo(data);
        // Luego de eliminar la pozo, vuelves a cargar las pozos para reflejar el cambio
        await fetchPozos();

    };

    return {
        pozo,
        currentPage,
        fetchPozos,
        createPozo,
        updatePozo,
        deletePozo,
    };
});

