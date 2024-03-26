import { Cliente } from "./cliente.interface";
export interface Pozo {
    id: number;
    id_cliente: Cliente;
    localizacion_pozo: string;
    municipio: string;
    ciudad: string;
    direccion: string;
    motor: string;
    diametro_de_bomba: string;
    logintud_columna: string;
    profundidad_pozo: string;
    tipo_bomba: string;
    no_pasos: string;
    diametro_ademe: string;
    nivel_estatico: string;
    temperatura_agua: string;
    orificio_utilizado: string;
    enabled: boolean;
    created_at: string;
    updated_at: string;
}
