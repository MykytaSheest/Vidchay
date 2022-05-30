<template>
    <div>
        <small id="userHelp" class="form-text text-center userHelp">Підтвердження замовлення буде вислано на почту адміністратором</small>
        <div class="container d-flex justify-content-evenly">
            <div v-if="merchItem">
                <Card :merchItem="merchItem"></Card>
            </div>
            <div class="order-form">
                <OrderMerchForm></OrderMerchForm>
            </div>
        </div>
        <small class="form-text text-center userHelp">Доставка тільки по території України</small>
    </div>
</template>

<script>
import Card from "../components/Card";
import OrderMerchForm from "../components/OrderMerchForm";

export default {
    name: "MerchItem",
    components: {Card, OrderMerchForm},
    data() {
        return {
            merchItem: null
        }
    },
    mounted() {
        axios.get('/api/merch/get/' + this.$route.params.id).then((response)=>{
            this.merchItem = response.data.data
        })
    },
}
</script>

<style scoped>
    .userHelp {
        display: block;
        margin: 20px;
    }
    @media screen and (max-width: 700px) {
        .container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
