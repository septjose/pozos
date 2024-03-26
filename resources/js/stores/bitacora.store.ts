import { BitacoraService } from "./../services/bitacora.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Bitacora } from "./../interfaces/bitacora.interface";
import { ref } from "vue";

interface Bitacoras {
    data: Bitacora[];
    last_page: number;
}

export const useBitacoraStore = defineStore("bitacora", () => {
     const bitacora: Bitacoras  = reactive<Bitacoras>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchBitacoras = async (currentP: number = 1) => {
        const { data, last_page } = await BitacoraService.getAllBitacoras(currentP);

        console.log("last page", data, last_page);

        bitacora.data = data;
        bitacora.last_page = last_page;
//        lastPage.value = last_page;
        return bitacora;
    };

    const createBitacora = async (data: Bitacora) => {
        await BitacoraService.createBitacora(data);
        // Luego de crear la bitacora, vuelves a cargar las bitacoras para reflejar el cambio
        await fetchBitacoras();
    };

    const updateBitacora = async (data: Bitacora) => {
        //Mostrar_modal
        await BitacoraService.updateBitacora(data);
        // Luego de actualizar la bitacora, vuelves a cargar las bitacoras para reflejar el cambio
        await fetchBitacoras();
    };

    const deleteBitacora = async (data: Bitacora) => {
        await BitacoraService.deleteBitacora(data);
        // Luego de eliminar la bitacora, vuelves a cargar las bitacoras para reflejar el cambio
        await fetchBitacoras();

    };

    return {
        bitacora,
        currentPage,
        fetchBitacoras,
        createBitacora,
        updateBitacora,
        deleteBitacora,
    };
});

