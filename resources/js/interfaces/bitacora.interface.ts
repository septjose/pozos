import { Pozo } from "./pozo.interface";
import { Usuario } from "./usuario.interface";

export interface Bitacora {
    id: number;
    fecha: string;
    hora: string;
    rpm_bomba: string;
    piezometro_pulgadas: string;
    gasto_lps: string;
    nivel_dinamico: string;
    observaciones: string;
    id_pozo: Pozo;
    id_usuario: Usuario;
    enabled: boolean;
    created_at: string;
    updated_at: string;
}
