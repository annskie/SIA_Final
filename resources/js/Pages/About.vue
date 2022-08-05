<template>
    <h1><strong>About Us</strong> </h1>
    <hr>
    <p class="text mt-5">
        A ship is a large watercraft that travels the world's oceans and other sufficiently deep waterways, carrying cargo or passengers, or in support of specialized missions, such as defense, research, and fishing
        Ships are generally distinguished from boats, based on size, shape, load capacity, and purpose.
        Ships have supported exploration, trade, warfare, migration, colonization, imperialism, and science. After the 15th century, new crops that had come from and to the Americas via the European seafarers significantly contributed to world population growth.
        Ship transport is responsible for the largest portion of world commerce.
    </p>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>
<style>
p.text{
    font-size: 30px;
    color: rgb(4, 66, 66);
}
</style>
