<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-menu">
                    <li class="nav-item">
                        <router-view class="nav-link" :to="{name: 'welcome'}">Главная</router-view>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <router-view class="nav-link" :to="{name: 'about'}">О нас</router-view>
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
        margin-left: 20px;
    }

    .main-menu li:first-child {
        margin-left: 0px;
    }
</style>
