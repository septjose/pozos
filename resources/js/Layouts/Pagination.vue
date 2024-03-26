<template>
 <!-- Pagination -->
 <div  class="join">
        <input v-for="(pagina, index) in paginas "
            class="join-item btn btn-square"
            type="radio"
            name="options"
            :aria-label="(index + 1).toString()"
            v-bind:checked="currentPage === (index + 1)"
            :href="(index + 1).toString()"
            :value="(index + 1)"
            @change="updateCurrentPage"
                    />
<pre>{{current_page}}</pre>
    </div>
</template>

<script setup lang="ts">

import { onMounted,defineProps, ref, defineEmits } from 'vue';
import axios from 'axios';


const current_page = ref(1);
//const paginas = ref([]);


const props = defineProps({
    paginas:{
        type: Number,
        required: true
    },
    currentPage:{
        type: Number,
        required: true
    },
});

const updateCurrentPage = (event:any) => {
  current_page.value = parseInt(event.target.value);

};

const emit = defineEmits(['updatePage']);

const handleClick = () => {
        emit("updatePage", current_page.value);
    };


</script>

<style scoped>

</style>
