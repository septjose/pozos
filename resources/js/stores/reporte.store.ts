import { ReporteService } from "./../services/reporte.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Reporte } from "./../interfaces/reporte.interface";
import { ref } from "vue";

interface Reportes {
    data: Reporte[];
    last_page: number;
}

export const useReporteStore = defineStore("reporte", () => {
     const reporte: Reportes  = reactive<Reportes>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchReportes = async (currentP: number = 1) => {
        const { data, last_page } = await ReporteService.getAllReportes(currentP);

        console.log("last page", data, last_page);

        reporte.data = data;
        reporte.last_page = last_page;
//        lastPage.value = last_page;
        return reporte;
    };

    const createReporte = async (data: Reporte) => {
        await ReporteService.createReporte(data);
        // Luego de crear la reporte, vuelves a cargar las reportes para reflejar el cambio
        await fetchReportes();
    };

    const updateReporte = async (data: Reporte) => {
        //Mostrar_modal
        await ReporteService.updateReporte(data);
        // Luego de actualizar la reporte, vuelves a cargar las reportes para reflejar el cambio
        await fetchReportes();
    };

    const deleteReporte = async (data: Reporte) => {
        await ReporteService.deleteReporte(data);
        // Luego de eliminar la reporte, vuelves a cargar las reportes para reflejar el cambio
        await fetchReportes();

    };

    return {
        reporte,
        currentPage,
        fetchReportes,
        createReporte,
        updateReporte,
        deleteReporte,
    };
});

