
<template>

    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Ships</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Ships'}"  href="/ship">Ships</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Services'}"  href="/service">Services</Link>
        </li>
         <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Contact'}" href="/contact">Contact</Link>
        </li>

      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-5 rounded-5 mt-5 bg-opacity-50" style="min-height: 700px">
    <slot />
</section>
<footer class="text-center mt-5" style="color:white">
    Copyright &copy; 2022. All rights reserved.
</footer>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: rgb(180, 199, 199);
    opacity: 0.7;
}

.selected{
    color: rgb(11, 28, 51);
    font-weight: bold;
}
</style>
