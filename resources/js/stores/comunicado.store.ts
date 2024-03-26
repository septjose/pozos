import { ComunicadoService } from "./../services/comunicado.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Comunicado } from "./../interfaces/comunicado.interface";
import { ref } from "vue";

interface Comunicados {
    data: Comunicado[];
    last_page: number;
}

export const useComunicadoStore = defineStore("comunicado", () => {
     const comunicado: Comunicados  = reactive<Comunicados>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchComunicados = async (currentP: number = 1) => {
        const { data, last_page } = await ComunicadoService.getAllComunicados(currentP);

        console.log("last page", data, last_page);

        comunicado.data = data;
        comunicado.last_page = last_page;
//        lastPage.value = last_page;
        return comunicado;
    };

    const createComunicado = async (data: Comunicado) => {
        await ComunicadoService.createComunicado(data);
        // Luego de crear la comunicado, vuelves a cargar las comunicados para reflejar el cambio
        await fetchComunicados();
    };

    const updateComunicado = async (data: Comunicado) => {
        //Mostrar_modal
        await ComunicadoService.updateComunicado(data);
        // Luego de actualizar la comunicado, vuelves a cargar las comunicados para reflejar el cambio
        await fetchComunicados();
    };

    const deleteComunicado = async (data: Comunicado) => {
        await ComunicadoService.deleteComunicado(data);
        // Luego de eliminar la comunicado, vuelves a cargar las comunicados para reflejar el cambio
        await fetchComunicados();

    };

    return {
        comunicado,
        currentPage,
        fetchComunicados,
        createComunicado,
        updateComunicado,
        deleteComunicado,
    };
});

