<template>
    <BaseComponent>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Crear comunicado</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Documentos</a></li>
                            <li class="breadcrumb-item active">Crear comunicado</li>
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

                                    <!--end col-->
                                    <div class="col-lg-3 col-sm-6">
                                        <div>
                                            <label class="form-label" for="due-date-field">Fecha del comunicado</label>
                                            <input type="date" class="form-control" id="due-date-field" >
                                        </div>
                                    </div>

                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>

                            <!--end row-->

                            <!--end row-->
                            <div>
                                <div class="pt-2">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">Comunicado</h4>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                               {{-- Acomodo donde hara el comunicado --}}
                                               <div class="ckeditor-classic"></div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                </div>

                                <div class="invoice-signature text-center">
                                    <div class="mb-3 mt-4">
                                        <input id="sign-img-file-input" type="file" class="sign-img-file-input d-none">
                                        <label for="sign-img-file-input" class="d-block" tabindex="0">
                                            <span class="overflow-hidden mx-auto border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 40px; width: 150px;">
                                                <img src="/logo_abg.png" class="card-logo card-sign-image img-fluid" alt="logo light">
                                            </span>
                                        </label>
                                    </div>
                                    <h6 class="mb-0 mt-3">Atentamente</h6>
                                </div>
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
                        <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Generar comunicado</button>

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