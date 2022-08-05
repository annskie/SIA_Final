<template>
    <h1><strong>Contact Us</strong> </h1>
    <hr>
    <p class="cnct mt-5" >
        mob: +48 609 858 219<br>
        Email: office@ship-service.pl <br>
    </p>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
}
</script>
<style>
p.cnct{
    font-size: 30px;
    color: rgb(4, 66, 66);
}
</style>
