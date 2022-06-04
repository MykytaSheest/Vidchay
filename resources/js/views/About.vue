<template>
    <div>
        <div class="void"></div>
        <div class="contact" v-if="lang ==0"><h4>Директор гурту - Євген Гречка</h4></div>
        <div class="contact" v-if="lang ==1"><h4>The band's director - Yevhen Hrechka</h4></div>
        <div class="void"></div>
        <div class="contact" v-if="lang ==0"><h4>Тел: +380980988730</h4></div>
        <div class="contact" v-if="lang ==1"><h4>Phone: +380980988730</h4></div>
        <div class="void"></div>
        <div class="contact"><h4>Е-mail: <a class="link-secondary" target="_blank" href="mailto: vidchayevgen@gmail.com">vidchayevgen@gmail.com</a></h4></div>
    </div>
</template>

<script>
export default {
    name: "About",
    data() {
        return {
            lang: localStorage.getItem('lang')
        }
    }
}
</script>


<style scoped>
    .contact {
        text-align: center;
    }

    .void {
        height: 8em;
    }
</style>
