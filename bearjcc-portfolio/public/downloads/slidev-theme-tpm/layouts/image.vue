<script setup lang="ts">
import { computed } from 'vue'
import { resolveAssetUrl } from '../layoutHelper'

const props = defineProps({
  image: {
    type: String,
  },
  height: {
    type: String,
  },
  width: {
    type: String,
  },
  alt: {
    type: String,
  },
})


</script>

<template>
  <div class="slidev-layout image w-full h-full">
    <slot />
    <img
      v-if="image"
      :src="resolveAssetUrl(image)"
      class="prop-image"
      :height="height"
      :width="width"
      :alt="alt"
    />
  </div>
</template>
