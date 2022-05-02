<template>
    <div>
        <div class="void"></div>

        <div class="cards">
            <div v-for="merchItem in merchItems">
                <Card :merchItem="merchItem"></Card>
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
            merchItems: null
        }
    },
    components: {
        Card
    },
    mounted() {
        axios.get('/api/merch/get/all').then((response)=>{
            this.merchItems = response.data.data
        })
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
