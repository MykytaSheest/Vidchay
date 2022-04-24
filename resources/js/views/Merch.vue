<template>
    <div>
        <div class="void"></div>
        <div class="cards">
            <Card></Card>
            <Card></Card>
            <Card></Card>
        </div>
        <div class="void"></div>

    </div>
</template>

<script>
import Card from "../components/Card"
export default {
    name: "Merch",
    components: {
        Card
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
