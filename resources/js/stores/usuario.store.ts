import { UsuarioService } from "./../services/usuario.service";
import { defineStore } from "pinia";
import { reactive } from "vue";
import { Usuario } from "./../interfaces/usuario.interface";
import { ref } from "vue";

interface Usuarios {
    data: Usuario[];
    last_page: number;
}

export const useUsuarioStore = defineStore("usuario", () => {
     const usuario: Usuarios  = reactive<Usuarios>(
         {
             data: [],
             last_page: 1,
         }
     );

    const currentPage = ref(1); //3

    const fetchUsuarios = async (currentP: number = 1) => {
        const { data, last_page } = await UsuarioService.getAllUsuarios(currentP);

        console.log("last page", data, last_page);

        usuario.data = data;
        usuario.last_page = last_page;
//        lastPage.value = last_page;
        return usuario;
    };

    const createUsuario = async (data: Usuario) => {
        await UsuarioService.createUsuario(data);
        // Luego de crear la usuario, vuelves a cargar las usuarios para reflejar el cambio
        await fetchUsuarios();
    };

    const updateUsuario = async (data: Usuario) => {
        //Mostrar_modal
        await UsuarioService.updateUsuario(data);
        // Luego de actualizar la usuario, vuelves a cargar las usuarios para reflejar el cambio
        await fetchUsuarios();
    };

    const deleteUsuario = async (data: Usuario) => {
        await UsuarioService.deleteUsuario(data);
        // Luego de eliminar la usuario, vuelves a cargar las usuarios para reflejar el cambio
        await fetchUsuarios();

    };

    return {
        usuario,
        currentPage,
        fetchUsuarios,
        createUsuario,
        updateUsuario,
        deleteUsuario,
    };
});

