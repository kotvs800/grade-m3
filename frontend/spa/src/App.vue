<template>
  <header>
    <Header :car="car"/>
  </header>
  <Bulletin :car="car" :description="description" :photos="photos"/>
  <footer>
    <Footer/>
  </footer>
</template>

<script>
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import Bulletin from "@/components/Bulletin";

export default {
  name: 'App',
  components: {
    Header,
    Footer,
    Bulletin
  },
  data() {
    return {
      car: {
        brand: String,
        model: String,
        year: Number,
        hp: Number
      },
      description: String,
      photos: Array
    }
  },
  created() {
    this.initCar();
    this.initDescription();
    this.initPhotos();
  },
  methods: {
    initCar() {
      console.log(this.car);
      this.car.brand = 'MMC';
      this.car.model = 'Pajero Evolution';
      this.car.year = 1997;
      this.car.hp = 280;
    },
    initDescription() {
      this.description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent cursus, mauris eu consectetur rutrum, massa orci convallis ligula, et imperdiet tellus est efficitur orci. Pellentesque pharetra eros erat, sit amet tristique ante viverra id. Curabitur eget posuere justo, sed pretium libero. Proin commodo ultrices sollicitudin. Nullam tortor lorem, suscipit id vestibulum et, fermentum nec eros. Cras at luctus justo. Maecenas semper congue fringilla. Aliquam at tellus ultricies, lobortis tortor et, imperdiet nisi. Maecenas purus velit, congue nec efficitur a, porta a neque. Quisque pharetra velit in quam consequat lacinia. Proin porta leo urna, sagittis pharetra risus blandit id. Nam libero eros, vestibulum vitae rhoncus non, posuere nec quam. Aenean ac ligula non diam luctus lobortis sed vitae dolor. Donec euismod rhoncus libero ut sollicitudin.\n' +
          '\n' +
          'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer molestie lorem non orci molestie pharetra. Mauris ex tellus, molestie sed varius at, pulvinar ac erat. Suspendisse potenti. Pellentesque aliquam placerat massa, vitae malesuada odio vehicula vitae. Ut bibendum aliquam tellus, molestie scelerisque sapien aliquet non. Praesent dapibus quam nulla, quis tempor augue faucibus id. Sed finibus justo non bibendum iaculis.\n' +
          '\n' +
          'Praesent lacus est, imperdiet gravida mauris facilisis, bibendum rhoncus mauris. Ut id lectus lectus. Duis vel arcu egestas, tincidunt elit quis, vulputate libero. Pellentesque at commodo massa. Donec auctor sed erat in molestie. Pellentesque a mauris mi. Nam aliquam nisi vitae lacus tempus pulvinar.\n' +
          '\n' +
          'Etiam porttitor convallis magna. Maecenas id ante id neque dictum laoreet at quis quam. Sed pellentesque massa id justo faucibus pharetra. Phasellus nec iaculis ante. Sed malesuada neque at nisi maximus egestas. Nunc placerat eros nisi, et mollis justo ultricies quis. Phasellus vel ligula libero.\n';
    },
    initPhotos() {
      this.photos = [
        'https://s.nomerogram.ru/photo/NXA26uJ1C-qTHRyLElfuQDypNdlZKRl8_o742iWWGgwJ9oehLE6wqX8kRxqlnPhSiKC4L7Zm1GLCwdbkLT3gaPafGMhU.jpg',
        'https://s.nomerogram.ru/photo/km5GZVN6xrU52nLBnqJMVn25wXO3Gp3VEojghjvGsOcf3X4H_pEfZ6FOPWzyHMYvrYHYHHTY_09vPAVBh3xx-z-NDg-T.jpg',
        'https://s.nomerogram.ru/photo/vdxrw1bedmuQq1YI1nfKnNcBJGv0bSqg5nk2TlIgQJ3ocEHUTn1Cw4TME01k7Dpx2hAfmNe35kGAQfGQ5oSK1zE01gBU.jpg',
        'https://s.nomerogram.ru/photo/bthYWtT2hO1OkSBZB51p61-Vp9mxaWTAwcacR017EwS0FHEXrzLbZq1o8R37ZBwstayC3YpW8c84rNn2b15Nvaq96klD.jpg',
        'https://s.nomerogram.ru/photo/XNjCmBTqnjbPcMpMapmj5R1JzFkQLMgR83LoKPhSUuvLJ6R6Tyou1-IRp2ifke9vqTpv1G3w7wHBTDO-cIbVqnav.jpg',
        'https://s.nomerogram.ru/photo/o0nTFqecHWqUzAG3roPsWAUaCEFJYPRtlionLUHsG1xYZaZGdgtEyiB8c8oCENJPA1u84AaknYBIAAqGbV1nfUVm.jpg',
        'https://s.nomerogram.ru/photo/dgjBXWZABzX7lvjLV7F85wXSmOdhcv2EGWb0Jy5rqRZcJRc1HJ2tMbyc3Cx_qNyxVvkVyDzilIU3sfd3NTQYaTygqpcO.jpg'
      ];
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
header {
  background: black;
  padding-top: 20px;
  padding-bottom: 20px;
}
footer {
  background: black;
  padding-top: 20px;
  padding-bottom: 20px;
}
</style>
