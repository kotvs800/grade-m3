<template>
  <div class="gallery">
    <div
        v-for="(src, index) in images"
        :key="index"
        class="pic"
        @click="() => showImg(index)"
    >
      <img :src="src"  alt=""/>
    </div>
    <vue-easy-lightbox
        escDisabled
        moveDisabled
        :visible="visible"
        :imgs="images"
        :index="index"
        @hide="handleHide"
    ></vue-easy-lightbox>
  </div>
  <div class="description">{{description}}</div>
</template>

<script>
import VueEasyLightbox from 'vue-easy-lightbox'

export default {
  name: "Bulletin",
  data() {
    return {
      images: [],
      visible: false,
      index: 0
    }
  },
  props: {
    car: {
      brand: String,
      model: String,
      year: Number,
      hp: Number
    },
    description: String,
    photos: [],
  },
  created() {
    this.images.push(...this.photos);
  },
  components: {
    VueEasyLightbox
  },
  methods: {
    show() {
      this.visible = true
    },
    handleHide() {
      this.visible = false
    },
    showImg(index) {
      this.index = index
      this.visible = true
    }
  }
}
</script>

<style scoped>
.description {
  width: 1100px;
  margin-left: auto;
  margin-right: auto;
}
.gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
}
.gallery .pic {
  flex-basis: 240px;
}
.gallery .pic img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  vertical-align: middle;
  border-radius: 5px;
}
</style>