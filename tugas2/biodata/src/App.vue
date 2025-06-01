<script setup>
import { computed, ref } from 'vue';
import biodataComponent from './components/biodataComponent.vue';

const route = {
  '/biodata': biodataComponent,

}

const currentpath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentpath.value = window.location.hash
})

const currentview = computed(() => {
  return route[currentpath.value.slice(1) || '/']
})

</script>

<template>
  <div id="app">
    <div class="container">
      <a href="#/biodata">Biodata</a>
      <component :is="currentview" />
    </div>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 20px;
}

a {
  font-size: 18px;
}
</style>
