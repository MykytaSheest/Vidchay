<template>
    <div>
        <form>
            <input class="form-control form-control-sm" v-model="order.email" name="email" type="email" placeholder="Ваш email" required>
            <input class="form-control form-control-sm" v-model="order.firstname" name="firstname" type="text" placeholder="Ім'я" required>
            <input class="form-control form-control-sm" v-model="order.lastname" name="lastname" type="text" placeholder="Прізвище" required>
            <hr class="col-xs-12">
            <input class="form-control form-control-sm" v-model="order.countItem" name="count-item" type="number" placeholder="Кількість товару" required>
            <input class="form-control form-control-sm" v-model="order.postIndex" name="post-index" type="number" placeholder="Почтовий індекс" required>
            <input class="form-control form-control-sm" v-model="order.address" name="address" type="text" placeholder="Адреса" required>
            <input class="form-control form-control-sm" v-model="order.merch_id" name="merch_id" type="hidden" required>
        </form>
        <button type="button" class="btn btn-outline-success btn-sm" @click="sendForm">Замовити</button>

    </div>
</template>

<script>
export default {
    name: "OrderMerchForm",
    data() {
        return {
            order: {
                email: null,
                firstname: null,
                lastname: null,
                countItem: null,
                postIndex: null,
                address: null,
                merch_id: this.$route.params.id
            }
        }
    },
    methods: {
        sendForm() {
            axios.post('/api/order/set', this.order).then((response) => {
                if (response.status === 201) {
                    this.$router.push({name: 'merch', query: { success: 'yes' }})
                }

            })
        }
    }
}
</script>

<style scoped>
    input {
        width: 20em;
        margin: 20px;
    }

    button {
        margin: 20px;
        width: 20em;
    }
</style>
