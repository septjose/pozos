
export abstract class PruebaRepository {
    abstract getAllPruebas(): Promise<string>;
    abstract getPruebaById(id: number): Promise<string>;
    abstract createPrueba(data: any): Promise<string>;
    abstract updatePrueba(id: number, data: any): Promise<string>;
    abstract deletePrueba(id: number): Promise<string>;
}
