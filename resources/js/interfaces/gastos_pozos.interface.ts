import { Diametros_bomba } from "./diametros_bomba.interface";
export interface Gastos_pozos{
    id_gasto_pozo:number;
    id_diametro_bomba:Diametros_bomba;
    piezometro_pulgada:string;
    gasto_lps: string;
    enabled: boolean;
    created_at: string;
    updated_at: string;
    }
