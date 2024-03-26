<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Crear reporte</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Documentos</a></li>
                            <li class="breadcrumb-item active">Crear reporte</li>
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
                                        <label class="form-label" for="invoicenoInput">Elige el pozo</label>
                                        <select class="form-control" data-choices="" data-choices-search-false="" id="choices-payment-status" required="">

                                            <option value="Paid">Pozo1</option>
                                            <option value="Pending">Pozo2</option>
                                            <option value="Unpaid">Pozo3</option>

                                        </select>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div>
                                            <label class="form-label" for="due-date-field">Fecha inicial</label>
                                            <input type="date" class="form-control" id="due-date-field" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div>
                                            <label class="form-label" for="due-date-field">Fecha final</label>
                                            <input type="date" class="form-control" id="due-date-field" >
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6" style="
                                    margin-top: 40px;
                                ">

                                            <button type="submit" class="btn btn-success" ><i class="ri-printer-line align-bottom me-1"></i> Generar</button>

                                    </div>
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

                                        </tr>
                                    </thead>
                                    <tbody id="newlink">
                                        <tr id="1" class="product-elem">
                                            <td>15/08/2023</td>
                                            <td>14:00</td>
                                            <td>1250</td>
                                            <td>INICIO</td>
                                            <td>DESARROLLO</td>
                                            <td>CON</td>
                                            <td>AGUA TURBIA</td>
                                        </tr>
                                        <tr>
                                        <td>15/08/2023</td>
                                        <td>15:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.20</td>
                                        <td>AGUA TURBIA</td>
                                    </tr>
                                    <tr>
                                        <td>15/08/2023</td>
                                        <td>16:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.20</td>
                                        <td>AGUA TURBIA</td>
                                    </tr>
                                    <tr>
                                        <td>15/08/2023</td>
                                        <td>17:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.20</td>
                                        <td>AGUA TURBIA</td>
                                    </tr>
                                    <tr>
                                        <td>15/08/2023</td>
                                        <td>18:00</td>
                                        <td>1250</td>
                                        <td>25.00cm</td>
                                        <td>31.70</td>
                                        <td>152.20</td>
                                        <td>AGUA TURBIA</td>
                                    </tr>
                                    </tbody>

                                </table>
                                <!--end table-->
                            </div>

                            <!--end row-->
                            <div class="mt-4 mb-4">
                                <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">Nota</label>
                                <textarea class="form-control alert alert-success" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required="">Escriba la nota.</textarea>
                            </div>
                            <div>
                                <div class="pt-2">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Gráfico</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div id="line_chart_basic" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                </div>
                                <div  class="pt-2">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap mb-0">
                                            <thead class="table-warning">
                                                <tr>

                                                    <th scope="col">R.P.M</th>
                                                    <th scope="col">GASTO</th>
                                                    <th scope="col">N.DINAMICO</th>
                                                    <th scope="col">ABATIMIENTO</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$24.05</td>
                                                    <td>$24.05</td>
                                                    <td>$24.05</td>
                                                    <td>$24.05</td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="mt-4 mb-4">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">Conclusión</label>
                                    <textarea class="form-control alert alert-success" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required="">Escriba la conclusión del reporte.</textarea>
                                </div>
                                {{-- <div class="invoice-signature text-center">
                                    <div class="mb-3 mt-4">
                                        <input id="sign-img-file-input" type="file" class="sign-img-file-input d-none">
                                        <label for="sign-img-file-input" class="d-block" tabindex="0">
                                            <span class="overflow-hidden mx-auto border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 40px; width: 150px;">
                                                <img src="assets/images/invoice-signature.svg" class="card-logo card-sign-image img-fluid" alt="logo light">
                                            </span>
                                        </label>
                                    </div>
                                    <h6 class="mb-0 mt-3">Authorized Sign</h6>
                                </div>--}}
                            </div>
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
                        <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Generar reporte</button>

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