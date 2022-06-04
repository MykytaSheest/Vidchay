<template>
    <div>
        <div class="concert-image"></div>
        <div class="void"></div>
        <div class="date">
            <h3>14.07.2022</h3>
        </div>
        <div class="void"></div>
        <div>
            <h5 class="counter" v-if="lang == 0">Концерт у Тернополі що відбутиться в Палаці культури «Березіль» по вулиці вул. Шевченка, 27
                квиток коштує 150 грн</h5>
            <h5 class="counter" v-if="lang == 1">Concert in Ternopil to be held at the Palace of Culture "Berezil" on the street. Shevchenko, 27
                the ticket costs UAH 150</h5>
        </div>
        <div class="void"></div>
        <FormForConcert></FormForConcert>
        <div class="void"></div>
    </div>
</template>

<script>
import FormForConcert from "../components/FormForConcert";
export default {
    name: "Concert",
    data() {
      return {
        lang: localStorage.getItem('lang')
      }
    },
    components: {
        FormForConcert
    }
}
</script>

<style scoped>
    .concert-image {
        height: 30em;
        background-image: url("../../static/concert.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .void {
        height: 8em;
    }

    .date {
        text-align: center;
        letter-spacing: 5px;
    }

    .counter {
        text-align: center;
    }

    .card {
        margin: 10px;
    }
</style>
