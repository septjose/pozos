import { Cliente } from "./cliente.interface";
export  interface  Presupuesto {
    id: number;
    id_cliente: Cliente;
    fecha: string;
    numero: string;
    subtotal: number;
    iva: number;
    total: number;
    created_at: string;
    updated_at: string;
    enabled: boolean;
    }
