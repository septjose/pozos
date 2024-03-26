<template>
            <div class="card-body mt-3">
                <div class="table-responsive table-card">
                    <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                        <thead class="table-light">
                            <tr v-for="(item, index) in props.columnas" :key="index">
                                <th>{{ item }}</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all" id="invoice-list-data">
                            <tr v-for="(item,index) in props.filas" :key="index">
                                <td>{{ item }}</td>
                            </tr>

                            <!-- <td>
                                    <div class="d-flex gap-2">
                                        <div class="ver">
                                            <button class="btn btn-sm btn-primary edit-item-btn" data-bs-toggle="modal" data-bs-target="#verModal"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg></i></button>
                                        </div>
                                        <div class="edit">
                                            <button class="btn btn-sm btn-warning edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal"><i class="ph-pencil fs-5"></i></button>
                                        </div>
                                        <div class="remove">
                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"><i class="ph-trash fs-5"></i></button>
                                        </div>
                                    </div>
                            </td> -->

                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                    <div class="noresult" style="display: none">
                        <div class="text-center py-4">
                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                            <h5 class="mt-2">Lo sentimos!</h5>
                            <p class="text-muted mb-0"> No encontramos ningún dato.</p>.
                        </div>
                    </div>
                </div>
                    <Pagination :paginas="paginas" :currentPage="currentPage" />
            </div>
</template>
<script setup lang="ts">
import { defineProps } from 'vue'
import Pagination from './Pagination.vue'

const props= defineProps({
    columnas: Array,
    filas: Array,
    paginas: Number,
    currentPage: Number
})

const paginas= props.paginas

const currentPage= props.currentPage
</script>
