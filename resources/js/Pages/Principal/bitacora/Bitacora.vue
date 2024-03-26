<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center">
                        <i class="ph-clipboard-text fs-1 me-2"></i> <!-- Agrega un margen a la derecha -->
                        <h4 class="mb-0 text-muted fw-bold">Bitacora</h4> <!-- Quita el margen inferior -->
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Datos</a></li>
                            <li class="breadcrumb-item active">Bitacora</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row" id="invoiceList">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center g-2">
                            <div class="col-lg-3 me-auto">
                                <h6 class="card-title mb-0"><i>Lista de bitacora</i></h6>
                            </div><!--end col-->
                            <div class="col-xl-2 col-md-3">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Buscar Bitacora.">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-auto">
                                <div class="hstack gap-2">
                                    <a href="/crear_bitacora"  type="button" class="btn btn-success add-btn" ><i class="bi bi-plus-circle align-baseline me-1"></i> Agregar</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="card-body mt-3">
                        <div class="table-responsive table-card">
                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>

                                        <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">Fecha</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Hora</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Rpm bomba</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="create_date">Piezometro pulgada</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="due_date">Gasto LPS</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Nivel dinámico</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Observaciones</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Información pozo</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all" id="invoice-list-data">
                                    <tr>
                                       <td>15/08/2023</td>
                                       <td>14:00</td>
                                       <td>1250</td>
                                       <td>INICIO</td>
                                       <td>DESARROLLO</td>
                                       <td>CON</td>
                                       <td>Paris</td>
                                       <td>AGUA TURBIA</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <!--<div class="ver">
                                                    <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                                </div>-->
                                                <div class="edit">
                                                    <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                                </div>
                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15/08/2023</td>
                                        <td>15:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.20</td>
                                        <td>Paris</td>
                                        <td>AGUA TURBIA</td>
                                         <td>
                                             <div class="d-flex gap-2">
                                                 <!--<div class="ver">
                                                     <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                                 </div>-->
                                                 <div class="edit">
                                                     <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                                 </div>
                                                 <div class="remove">
                                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                        <td>15/08/2023</td>
                                        <td>16:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.80</td>
                                        <td>Paris</td>
                                        <td>AGUA TURBIA</td>
                                         <td>
                                             <div class="d-flex gap-2">
                                                 <!--<div class="ver">
                                                     <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                                 </div>-->
                                                 <div class="edit">
                                                     <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                                 </div>
                                                 <div class="remove">
                                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                        <td>15/08/2023</td>
                                        <td>17:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>154.20</td>
                                        <td>Paris</td>
                                        <td>AGUA TURBIA</td>
                                         <td>
                                             <div class="d-flex gap-2">
                                                 <!--<div class="ver">
                                                     <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                                 </div>-->
                                                 <div class="edit">
                                                     <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                                 </div>
                                                 <div class="remove">
                                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>
                                     <tr>
                                        <td>15/08/2023</td>
                                        <td>18:00</td>
                                        <td>1350</td>
                                        <td>45.00cm</td>
                                        <td>45.52</td>
                                        <td>163.90</td>
                                        <td>Paris</td>
                                        <td>AGUA TURBIA</td>
                                         <td>
                                             <div class="d-flex gap-2">
                                                 <!--<div class="ver">
                                                     <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                                 </div>-->
                                                 <div class="edit">
                                                     <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                                 </div>
                                                 <div class="remove">
                                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                 </div>
                                             </div>
                                         </td>
                                     </tr>

                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                            <div class="noresult" style="display: none">
                                <div class="text-center py-4">
                                    <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                    <h5 class="mt-2">Lo sentimos!</h5>
                                    <p class="text-muted mb-0"> No encontramos ningún dato en la bitácora.</p>.
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                            <div class="col-sm">
                                <div class="text-muted text-center text-sm-start">
                                    Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                </div>
                            </div><!--end col-->
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <div class="pagination-wrap hstack justify-content-center gap-2">
                                    <a class="page-item pagination-prev disabled" href="#">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="#">
                                        Next
                                    </a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Editar dato de la bitácora</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="date-field" class="form-label">Pozo</label>
                                <select class="form-control" data-trigger="" name="status-field" id="status-field">
                                    <option value="Active">Pozo1</option>
                                    <option value="Block">Pozo2</option>
                                </select>
                            </div>
                            <div class="mb-3" id="modal-id" style="display: none;">
                                <label for="id-field" class="form-label">Fecha</label>
                                <input type="date" id="id-field" class="form-control" placeholder="" readonly="">
                            </div>

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Hora</label>
                                <input type="text" id="customername-field" class="form-control" placeholder="Hora" required="">
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Rpm bomba</label>
                                <input type="text" id="email-field" class="form-control" placeholder="Rpm bomba" required="">
                            </div>

                            <div class="mb-3">
                                <label for="phone-field" class="form-label">Piezometro pulgada</label>
                                <input type="text" id="phone-field" class="form-control" placeholder="Piezometro pulgada." required="">
                            </div>

                            <div class="mb-3">
                                <label for="date-field" class="form-label">Gasto LPS</label>
                                <input type="text" id="date-field" class="form-control" placeholder="Gasto LPS" required="">
                            </div>

                            <div class="mb-3">
                                <label for="date-field" class="form-label">Nivel dinámico</label>
                                <input type="text" id="date-field" class="form-control" placeholder="Nivel dinámico" required="">
                            </div>

                            <div class="mb-3">
                                <label for="date-field" class="form-label">Observaciones</label>
                                <textarea id="date-field" class="form-control" placeholder="Observaciones" required=""></textarea>
                            </div>




                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar </button>
                                <button type="submit" class="btn btn-success" id="add-btn">Editar</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <i class="bi bi-trash3 display-5 text-danger"></i>
                            <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                <h4>Eliminar información de la bitacora</h4>
                                <p class="text-muted mx-4 mb-0">Esta seguro de eliminar la información de la bitacora ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerra</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal -->



    </BaseComponent>
               
</template>

<script>
import BaseComponent from '/resources/js/Pages/Welcome.vue';

export default {
components: {
BaseComponent,
},
};
</script>