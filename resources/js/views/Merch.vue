<template>
    <div>
        <div class="void"></div>
        <div class="alert d-flex justify-content-center" @click="hiddenAlert" v-if="this.$route.query.success === 'yes'">
            <div class="alert alert-success w-50 d-flex justify-content-center" role="alert">
                Дякую за замовлення!
            </div>
        </div>

        <div class="cards">
            <div v-for="merchItem in merchItems">
                <Card :merchItem="merchItem"></Card>
            </div>
            <div v-if="merchItems <= 0">
                <div class="alert alert-secondary" role="alert" v-if="lang == 0">
                    Нажаль товару немає :c
                </div>
                <div class="alert alert-secondary" role="alert" v-if="lang == 1">
                    Unfortunately there is no product :c
                </div>
            </div>
        </div>
        <div class="void"></div>

    </div>
</template>

<script>
import Card from "../components/Card"
export default {
    name: "Merch",
    data() {
        return {
            merchItems: null,
            lang: localStorage.getItem('lang')
        }
    },
    components: {
        Card
    },
    mounted() {
        axios.get('/api/merch/get/all').then((response)=>{
            this.merchItems = response.data.data
        })
    },
    methods: {
        hiddenAlert() {
            document.querySelector(".alert").style.visibility = "hidden";
            document.querySelector(".alert").style.height = 0;
            document.querySelector(".alert").style.width = 0;
        }
    }
}
</script>

<style scoped>
    .void {
        height: 8em;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
    }

</style>
