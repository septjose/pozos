import {defineStore} from"pinia";
import{reactive, ref} from "vue";

export const useModalStore=defineStore("modal",()=>{

enum ModalType{
    "Editar",
    "Eliminar",
    "Nuevo"
}

const modalVue=reactive({

open: false,
modal: ModalType.Editar,
});

const openModal=()=>{
modalVue.open=true;
}

const closeModal=()=>{
modalVue.open=false;
}

return {modalVue,openModal,closeModal}
});

