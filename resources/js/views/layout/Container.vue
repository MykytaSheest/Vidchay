<template>
    <div>
        <nav-bar></nav-bar>
        <router-view  class="main"></router-view>
        <footer-bar></footer-bar>
    </div>
</template>

<script>

import NavBar from "../../components/NavBar";
import FooterBar from "../../components/FooterBar";
export default {
    name: "Container",
    components: {
        NavBar,
        FooterBar
    },
    mounted() {
        !localStorage.getItem('lang') ? localStorage.setItem('lang', 0) : localStorage.getItem('lang')
    }

}
</script>

<style>
    .main {
        min-height: 40em;
    }

    h1 {
        text-align: center;
        margin: 30px;
    }

</style>
