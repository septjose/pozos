import { PruebaRepository } from "../../domain/repository/prueba/prueba.repository";

export class PruebaModel extends PruebaRepository {


    getAllPruebas(): Promise<string> {
        return new Promise((resolve, reject) => {
            resolve('PruebaModel: getPruebas');
        });
    }


    getPruebaById(id: number): Promise<string> {
        return new Promise((resolve, reject) => {
            resolve('PruebaModel: getPruebaById');
        });
    }

    createPrueba(data: any): Promise<string> {
        return new Promise((resolve, reject) => {
            resolve('PruebaModel: createPrueba');
        });
    }

    updatePrueba(id: number, data: any): Promise<string> {
        return new Promise((resolve, reject) => {
            resolve('PruebaModel: updatePrueba');
        });
    }

    deletePrueba(id: number): Promise<string> {
        return new Promise((resolve, reject) => {
            resolve('PruebaModel: deletePrueba');
        });
    }

}


