import { ClienteService } from "./../services/cliente.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Cliente } from "./../interfaces/cliente.interface";
import { ref } from "vue";

interface Clientes {
    data: Cliente[];
    last_page: number;
}

export const useClienteStore = defineStore("cliente", () => {
     const cliente: Clientes  = reactive<Clientes>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchClientes = async (currentP: number = 1) => {
        const { data, last_page } = await ClienteService.getAllClientes(currentP);

        console.log("last page", data, last_page);

        cliente.data = data;
        cliente.last_page = last_page;
//        lastPage.value = last_page;
        return cliente;
    };

    const createCliente = async (data: Cliente) => {
        await ClienteService.createCliente(data);
        // Luego de crear la cliente, vuelves a cargar las clientes para reflejar el cambio
        await fetchClientes();
    };

    const updateCliente = async (data: Cliente) => {
        //Mostrar_modal
        await ClienteService.updateCliente(data);
        // Luego de actualizar la cliente, vuelves a cargar las clientes para reflejar el cambio
        await fetchClientes();
    };

    const deleteCliente = async (data: Cliente) => {
        await ClienteService.deleteCliente(data);
        // Luego de eliminar la cliente, vuelves a cargar las clientes para reflejar el cambio
        await fetchClientes();

    };

    return {
        cliente,
        currentPage,
        fetchClientes,
        createCliente,
        updateCliente,
        deleteCliente,
    };
});

