<template>
    <div>
        <img
            :src="APP_URL + 'images/gallery/' + idImage + '.jpg'"
            class="image"
            alt="text"
            :width=BASE_IMAGE_WIDTH
            :id="idImage"
            @click="clickImage(idImage)"
        >
    </div>
</template>

<script>
import {APP_URL, IMAGE_DIRECTORY, BASE_IMAGE_WIDTH} from "../helper";

export default {
    name: "GalleryItem",
    props: ['idImage'],
    data() {
        return {
            APP_URL,
            IMAGE_DIRECTORY,
            BASE_IMAGE_WIDTH
        }
    },
    methods: {
        clickImage(id) {
            let image = document.getElementById(id)
            for (let i = 1; i <= 11; i++) {
                let currentImage = document.getElementById(i)
                if (i === id) {
                    continue
                } else {
                    currentImage.style.width = BASE_IMAGE_WIDTH  + 'px';
                }
             }
            if (image.width !== BASE_IMAGE_WIDTH) {
                image.style.width = BASE_IMAGE_WIDTH + 'px'
            } else {
                image.style.width =  500 + 'px'
            }
        }
    }
}
</script>

<style scoped>
    .image {
        transition: width 1.5s;
    }

</style>
