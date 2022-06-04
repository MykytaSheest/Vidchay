<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <p class="navbar-brand">VIDCHAY</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-menu">
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'welcome'}" v-if="lang ==0">Головна</router-link>
                        <router-link class="nav-link" :to="{name: 'welcome'}" v-if="lang ==1">Main Page</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'concert'}" v-if="lang ==0">Концерти</router-link>
                        <router-link class="nav-link" :to="{name: 'concert'}" v-if="lang ==1">Concerts</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'merch'}" v-if="lang ==0">Мерч</router-link>
                        <router-link class="nav-link" :to="{name: 'merch'}" v-if="lang ==1">Merch</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'about'}" v-if="lang ==0">Контакти</router-link>
                        <router-link class="nav-link" :to="{name: 'about'}" v-if="lang ==1">Contacts</router-link>
                    </li>
                </ul>
            </div>
            <li class="d-flex justify-content-center" v-if="lang == 0">
                <button class="btn-sm btn-secondary m-1" id="ua" @click="clickUA">UA</button>
                <button class="btn-sm btn-outline-secondary m-1" id="en" @click="clickEN">EN</button>
            </li>
            <li class="d-flex justify-content-center" v-if="lang == 1">
                <button class="btn-sm btn-outline-secondary m-1" id="ua" @click="clickUA">UA</button>
                <button class="btn-sm btn-secondary m-1" id="en" @click="clickEN">EN</button>
            </li>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
      return {
          lang: !localStorage.getItem('lang') ? 0 : localStorage.getItem('lang')
      }
    },
    name: "NavBar",
    methods: {
        clickUA() {
            let ua = document.getElementById('ua')
            let en = document.getElementById('en')
            ua.classList.replace('btn-outline-secondary', 'btn-secondary')
            en.classList.replace('btn-secondary', 'btn-outline-secondary')
            localStorage.setItem('lang', 0)
            location.reload();
        },
        clickEN() {
            let ua = document.getElementById('ua')
            let en = document.getElementById('en')
            en.classList.replace('btn-outline-secondary', 'btn-secondary')
            ua.classList.replace('btn-secondary', 'btn-outline-secondary')
            localStorage.setItem('lang', 1)
            location.reload();
        }
    }
}
</script>

<style scoped>
    .main-menu {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .main-menu li {
        margin-left: 50px;
        font-size: 16px;
    }

    .main-menu li:first-child {
        margin-left: 0;
    }

    .navbar-brand {
        position: absolute;
        top: 5px;
        left: 80px;
        font-size: 25px;
        letter-spacing: 5px;
    }
</style>
