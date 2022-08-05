<template>
    <h1><strong> My Ships </strong></h1>
    <hr>
    <div class="d-flex justify-content-between mt-5">
    <div class="card border-primary mb-3" v-for="ships in ships" :key="ships.id">
        <div class="card-header bg-info text-dark text-center">
            <h3>{{ships.name}}</h3>
        </div>
        <div class="card-body bg-primary bg-opacity-50">
            <ul>
            <h5><li>{{ships.model}}</li></h5>
            <h5><li>{{ships.types}}</li></h5>
            <h5><li>{{ships.speed}}</li></h5>
            <h5><li>{{ships.description}}</li></h5>
            </ul>
        </div>
    </div>
</div>
</template>
<script setup>
import Layout from '../Shared/Layout.vue'
</script>
<script>
export default{
    layout: Layout,
    props: {
        ships: Array
    }
}
</script>

<style scoped>
.card {
    width: 375px;
}
</style>

