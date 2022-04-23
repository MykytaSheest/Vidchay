<template>
    <div>
        <nav-bar></nav-bar>
        <router-view></router-view>
    </div>
</template>

<script>
import NavBar from "../../components/NavBar";
export default {
    name: "Container",
    components: {
        NavBar
    }

}
</script>

<style scoped>

</style>
