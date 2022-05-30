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
                        <router-link class="nav-link" :to="{name: 'welcome'}">Головна</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'concert'}">Концерт</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'merch'}">Мерч</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'about'}">Контакти</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "NavBar"
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
