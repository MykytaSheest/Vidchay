<template>
    <div>
        <form action="">
            <input class="form-control form-control-sm" v-model="order.email" name="email" type="email" placeholder="Ваш email" required>
            <input class="form-control form-control-sm" v-model="order.firstname" name="firstname" type="text" placeholder="Ім'я" required>
            <input class="form-control form-control-sm" v-model="order.lastname" name="lastname" type="text" placeholder="Прізвище" required>
            <hr class="col-xs-12">
            <input class="form-control form-control-sm" v-model="order.countItem" name="count-item" type="number" placeholder="Кількість товару" required>
            <input class="form-control form-control-sm" v-model="order.postIndex" name="post-index" type="number" placeholder="Почтовий індекс" required>
            <input class="form-control form-control-sm" v-model="order.address" name="address" type="text" placeholder="Адреса" required>
            <button class="btn btn-outline-success btn-sm">Замовити</button>
        </form>
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
                address: null
            }
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
