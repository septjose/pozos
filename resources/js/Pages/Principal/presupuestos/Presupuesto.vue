<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center">
                        <i class="ph-receipt fs-1 me-2"></i> <!-- Agrega un margen a la derecha -->
                        <h4 class="mb-0 text-muted fw-bold">Presupuestos</h4> <!-- Quita el margen inferior -->
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Documentos</a></li>
                            <li class="breadcrumb-item active">Presupuestos</li>
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
                                <h6 class="card-title mb-0"><i>Lista de presupuestos</i></h6>
                            </div><!--end col-->
                            <div class="col-xl-2 col-md-3">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Buscar clientes.">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-auto">
                                <div class="hstack gap-2">
                                    <a href="/crear_presupuestos" type="button" class="btn btn-success add-btn" ><i class="bi bi-plus-circle align-baseline me-1"></i> Agregar</a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <div class="card-body mt-3">
                        <div class="table-responsive table-card">
                            <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>

                                        <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">ID</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Información del cliente</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Fecha</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="create_date">Número</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="due_date">Subtotal</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="due_date">IVA</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="amount">Total</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all" id="invoice-list-data">
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Jesus</td>
                                        <td>2011/04/25</td>
                                        <td>001</td>
                                        <td>$300,000</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Jesus</td>
                                        <td>2011/04/25</td>
                                        <td>001</td>
                                        <td>$300,000</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Juan Jesus</td>
                                        <td>2011/04/25</td>
                                        <td>001</td>
                                        <td>$300,000</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jose alberto</td>
                                        <td>2013/02/02</td>
                                        <td>002</td>
                                        <td>$400,000</td>
                                        <td>$420,800</td>
                                        <td>$420,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Benjamin otoniel</td>
                                        <td>2021/05/23</td>
                                        <td>003</td>
                                        <td>$500,000</td>
                                        <td>$520,800</td>
                                        <td>$520,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Juan Jesus</td>
                                        <td>2022/08/19</td>
                                        <td>004</td>
                                        <td>$700,000</td>
                                        <td>$720,800</td>
                                        <td>$720,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
                                                </div>

                                                <div class="remove">
                                                    <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Rodrigo</td>
                                        <td>2019/08/16</td>
                                        <td>005</td>
                                        <td>$300,000</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="ver">
                                                    <a href="" class="btn btn-sm btn-primary edit-item-btn" ><i class="ph-eye fs-5"></i></a>
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
                                    <p class="text-muted mb-0"> No encontramos ningún reporte.</p>.
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
            <h4>Eliminar el presupuesto</h4>
            <p class="text-muted mx-4 mb-0">Esta seguro de eliminar el presupuesto ?</p>
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