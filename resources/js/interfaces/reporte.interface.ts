import { Pozo } from "./pozo.interface";
export interface Reporte {
    id: number;
    id_pozo: Pozo;
    nota: string;
    conclusion: string;
    fecha_inicio: string;
    fecha_fin: string;
    enabled: boolean;
    created_at: string;
    updated_at: string;
}
