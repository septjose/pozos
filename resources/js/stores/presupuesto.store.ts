import { PresupuestoService } from "./../services/presupuesto.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Presupuesto } from "./../interfaces/presupuesto.interface";
import { ref } from "vue";

interface Presupuestos {
    data: Presupuesto[];
    last_page: number;
}

export const usePresupuestoStore = defineStore("presupuesto", () => {
     const presupuesto: Presupuestos  = reactive<Presupuestos>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchPresupuestos = async (currentP: number = 1) => {
        const { data, last_page } = await PresupuestoService.getAllPresupuestos(currentP);

        console.log("last page", data, last_page);

        presupuesto.data = data;
        presupuesto.last_page = last_page;
//        lastPage.value = last_page;
        return presupuesto;
    };

    const createPresupuesto = async (data: Presupuesto) => {
        await PresupuestoService.createPresupuesto(data);
        // Luego de crear la presupuesto, vuelves a cargar las presupuestos para reflejar el cambio
        await fetchPresupuestos();
    };

    const updatePresupuesto = async (data: Presupuesto) => {
        //Mostrar_modal
        await PresupuestoService.updatePresupuesto(data);
        // Luego de actualizar la presupuesto, vuelves a cargar las presupuestos para reflejar el cambio
        await fetchPresupuestos();
    };

    const deletePresupuesto = async (data: Presupuesto) => {
        await PresupuestoService.deletePresupuesto(data);
        // Luego de eliminar la presupuesto, vuelves a cargar las presupuestos para reflejar el cambio
        await fetchPresupuestos();

    };

    return {
        presupuesto,
        currentPage,
        fetchPresupuestos,
        createPresupuesto,
        updatePresupuesto,
        deletePresupuesto,
    };
});

