import { Presupuesto } from "./presupuesto.interface";
export interface Detalle_presupuesto{
id:number;
id_presupuesto:Presupuesto;
cantidad:number;
unidad: string;
descripcion:string;
precio_unitario:number;
importe: number;
observacion:string;
enabled: boolean;
created_at: string;
updated_at: string;
}
