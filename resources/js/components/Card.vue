<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" :src=" APP_URL + IMAGE_DIRECTORY + merchItem.image_url" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{merchItem.name}}</h5>
            <p class="card-text">{{merchItem.description}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Ціна: {{merchItem.price}}</li>
            <li class="list-group-item">Розміри: <span v-for="size in JSON.parse(merchItem.sizes)">{{size + ' '}}</span></li>
            <li class="list-group-item">У наявності {{merchItem.amount}}</li>
        </ul>

        <div class="card-body" v-if="!this.$route.params.id">
            <router-link class="btn btn-secondary" :to="{name: 'merchItem', params: {'id': merchItem.id}}">КУПИТИ</router-link>
        </div>
    </div>
</template>

<script>
import {APP_URL, IMAGE_DIRECTORY} from "../helper"

export default {
    props: ['merchItem'],
    data() {
      return {
          APP_URL,
          IMAGE_DIRECTORY
      }
    },
    name: "Card"
}
</script>

<style scoped>
    .card {
        margin: 15px !important;
    }
</style>
