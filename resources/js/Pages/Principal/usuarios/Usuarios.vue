<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center">
                        <i class="ph-identification-badge fs-1 me-2"></i> <!-- Agrega un margen a la derecha -->
                        <h4 class="mb-0 text-muted fw-bold">Usuarios</h4> <!-- Quita el margen inferior -->
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Datos</a></li>
                            <li class="breadcrumb-item active">Usuarios</li>
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
                                <h6 class="card-title mb-0"><i>Lista de Usuarios</i></h6>
                            </div><!--end col-->
                            <div class="col-xl-2 col-md-3">
                                <div class="search-box">
                                    <input type="text" class="form-control search" placeholder="Buscar Usuarios.">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div><!--end col-->
                            <div class="col-md-auto">
                                <div class="hstack gap-2">
                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="bi bi-plus-circle align-baseline me-1"></i> Agregar</button>
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
                                        <th scope="col" class="sort cursor-pointer" data-sort="customer_name">Nombre</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Teléfono</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="create_date">Email</th>
                                        <th scope="col" class="sort cursor-pointer" data-sort="due_date">Rol</th>

                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all" id="invoice-list-data">
                                    <tr>
                                        <td>1</td>
                                        <td>Juan jesus</td>
                                        <td>4641124092</td>
                                        <td>juanjesus@gmail.com</td>
                                        <td>Administrador</td>
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
                                        <td>2</td>
                                        <td>Jose alberto</td>
                                        <td>461345987</td>
                                        <td>jose@gmail.com</td>
                                        <td>Trabajador</td>
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
                                        <td>3</td>
                                        <td>Benjamin otoniel</td>
                                        <td>464345987</td>
                                        <td>benjamin@gmail.com</td>
                                        <td>Trabjador</td>
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
                                        <td>4</td>
                                        <td>Rodrigo</td>
                                        <td>6548973</td>
                                        <td>rodrigo@gmail.com</td>
                                        <td>Administrador</td>
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
                                        <td>5</td>
                                        <td>rebeca</td>
                                        <td>461345987</td>
                                        <td>rebeca@gmail.com</td>
                                        <td>Administrador</td>
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
                                    <p class="text-muted mb-0"> No encontramos ningún usuario.</p>.
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
        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form">
                        <div class="modal-body">

                            <div class="mb-3" id="modal-id" style="display: none;">
                                <label for="id-field" class="form-label">Nombre completo</label>
                                <input type="text" id="id-field" class="form-control" placeholder="Nombre completo" readonly="">
                            </div>

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Teléfono</label>
                                <input type="text" id="customername-field" class="form-control" placeholder="Teléfono" required="">
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Email</label>
                                <input type="email" id="email-field" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">Contraseña</label>
                                <input type="password" id="email-field" class="form-control" placeholder="Contraseña" required="">
                            </div>

                            <div>
                                <label for="status-field" class="form-label">Rol</label>
                                <select class="form-control" data-trigger="" name="status-field" id="status-field">
                                    <option value="Active">Administrador</option>
                                    <option value="Block">Trabajador</option>
                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar </button>
                                <button type="submit" class="btn btn-success" id="add-btn">Agregar</button>
                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    </div>
                    <form class="tablelist-form">
                        <div class="modal-body">

                            <div class="mb-3" id="modal-id" style="display: none;">
                                <label for="id-field" class="form-label">Nombre completo</label>
                                <input type="text" id="id-field" class="form-control" placeholder="Nombre completo" readonly="">
                            </div>

                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Teléfono</label>
                                <input type="text" id="customername-field" class="form-control" placeholder="Teléfono" required="">
                            </div>

                            <div class="mb-3">
                                <label for="email-field" class="form-label">Email</label>
                                <input type="email" id="email-field" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="mb-3">
                                <label for="email-field" class="form-label">Contraseña</label>
                                <input type="password" id="email-field" class="form-control" placeholder="Contraseña" required="">
                            </div>

                            <div>
                                <label for="status-field" class="form-label">Rol</label>
                                <select class="form-control" data-trigger="" name="status-field" id="status-field">
                                    <option value="Active">Administrador</option>
                                    <option value="Block">Trabajador</option>
                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar </button>
                                <button type="submit" class="btn btn-success" id="add-btn">Agregar</button>
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
                                <h4>Eliminar el usuario</h4>
                                <p class="text-muted mx-4 mb-0">Esta seguro de eliminar el usuario?</p>
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