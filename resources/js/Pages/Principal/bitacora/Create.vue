<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Crear bitacora pozo</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Datos</a></li>
                            <li class="breadcrumb-item active">Crear bitacora pozo</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <form class="needs-validation" novalidate="" id="invoice_form" autocomplete="off">
                    <div class="card overflow-hidden">
                        <div class="invoice-effect-top position-absolute start-0">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 764 182" width="764" height="182">
                                <title>&lt;Group&gt;</title>
                                <g id="&lt;Group&gt;">
                                    <g id="&lt;Group&gt;">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-light);" d="m-6.6 177.4c17.5 0.1 35.1 0 52.8-0.4 286.8-6.6 537.6-77.8 700.3-184.6h-753.1z">
                                    </path></g>
                                    <g id="&lt;Group&gt;">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-secondary);" d="m-6.6 132.8c43.5 2.1 87.9 2.7 132.9 1.7 246.9-5.6 467.1-59.2 627.4-142.1h-760.3z">
                                    </path></g>
                                    <g id="&lt;Group&gt;" style="opacity: .5">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-primary);" d="m-6.6 87.2c73.2 7.4 149.3 10.6 227.3 8.8 206.2-4.7 393.8-42.8 543.5-103.6h-770.8z">
                                    </path></g>
                                </g>
                            </svg>
                        </div>
                        <div class="card-body card-body z-1 position-relative">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mx-auto mb-3">
                                        <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 40px; width: 150px;">
                                            <img src="/logo_abg.png" class="card-logo card-logo-image img-fluid" alt="logo light" height="80px" width="80px">
                                        </span>
                                    </div>
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                            <div class="mt-4">
                                <div class="row g-3">
                                    <div class="col-lg-3 col-sm-6">
                                        <label class="form-label" for="choices-payment-status">Elige el pozo</label>
                                        <select class="form-control" data-choices="" data-choices-search-false="" id="choices-payment-status" required="">
                                            <option value="Paid">Pozo1</option>
                                            <option value="Pending">Pozo2</option>
                                            <option value="Unpaid">Pozo3</option>
                                        </select>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>

                            <!--end row-->
                            <div class="table-responsive mt-4">
                                <table class="invoice-table table table-borderless table-nowrap mb-0">
                                    <thead class="align-middle">
                                        <tr class="table-light">
                                            <th scope="col" style="width: 50px;">FECHA</th>
                                            <th scope="col" style="width: 50px;">HORA</th>
                                            <th scope="col" style="width: 50px;">R.P.P.BOMBA </th>
                                            <th scope="col" style="width: 50px;">PIEZOMETRO PULGADA </th>
                                            <th scope="col" style="width: 50px;">GASTO L.P.S</th>
                                            <th scope="col" style="width: 50px;">NIVEL DINAMICO</th>
                                            <th scope="col" style="width: 50px;">OBSERVACIONES</th>
                                            <th scope="col" style="width: 50px;">ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody id="newlink">
                                        <tr id="1" class="product-elem">
                                            <td class="text-end">
                                                <div>
                                                    <input type="date" class="form-control invoice-product-line-price" id="productPrice-1" placeholder="fecha">
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div>
                                                    <input type="text" class="form-control " placeholder="hora">
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div>
                                                    <input type="text" class="form-control "  placeholder="rpm bomba">
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div>
                                                    <input type="text" class="form-control "  placeholder="piezometro pulgada">
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div>
                                                    <input type="text" class="form-control "  placeholder="gasto">
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div>
                                                    <input type="text" class="form-control " id="productPrice-1" placeholder="nivel dinamico">
                                                </div>
                                            </td>

                                            <td class="text-end">
                                                <div>
                                                    <textarea class="form-control" id="productDetails-1" rows="2" placeholder="Observación"></textarea>
                                                </div>
                                            </td>
                                            <td class="product-removal">
                                                <a href="javascript:void(0)" class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr id="newForm" style="display: none;">
                                            <td class="d-none" colspan="5">
                                                <p>Add New Form</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <a href="javascript:new_link()" id="add-item" class="btn btn-subtle-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Añadir</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>

                            <!--end row-->

                        </div>
                        <div class="invoice-effect-top position-absolute end-0" style="transform: rotate(180deg); bottom: -80px;">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 764 182" width="764" height="182">
                                <title>&lt;Group&gt;</title>
                                <g id="&lt;Group&gt;">
                                    <g id="&lt;Group&gt;">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-light);" d="m-6.6 177.4c17.5 0.1 35.1 0 52.8-0.4 286.8-6.6 537.6-77.8 700.3-184.6h-753.1z">
                                    </path></g>
                                    <g id="&lt;Group&gt;">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-secondary);" d="m-6.6 132.8c43.5 2.1 87.9 2.7 132.9 1.7 246.9-5.6 467.1-59.2 627.4-142.1h-760.3z">
                                    </path></g>
                                    <g id="&lt;Group&gt;" style="opacity: .5">
                                        <path id="&lt;Path&gt;" style="fill: var(--tb-primary);" d="m-6.6 87.2c73.2 7.4 149.3 10.6 227.3 8.8 206.2-4.7 393.8-42.8 543.5-103.6h-770.8z">
                                    </path></g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="hstack gap-2 flex-wrap justify-content-end d-print-none my-4">
                        <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Guardar</button>

                    </div>
                </form>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

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