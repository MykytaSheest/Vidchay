<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="../../static/test.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Merch item</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Ціна: 500 грн</li>
            <li class="list-group-item">Розміри: S M L XL XXL</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <button class="btn btn-secondary">КУПИТИ</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Card"
}
</script>

<style scoped>
    .card {
        margin: 15px !important;
    }
</style>
