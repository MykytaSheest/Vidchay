<template>
    <div>
        <div class="main-image"></div>
        <div class="void"></div>
        <div class="description-container">
            <div class="row">
                <div class="item">
                    <p class="text-center">
                        Vidchay - музичний гурт який утворився в 2021 році в маленькому містечку Ромни що на Сумщині. Гурт грає в жанрі гранж-інді рок. Цей колектив має вже багато прихильників в своєму місті й вони готові цьому не зупинітися. Продовжують писати пісні та давати концерти в різних містах України.
                    </p>
                </div>
            </div>
            <div class="d-flex justify-content-around mt-5 mb-5">
                    <div>
                        <img src="../../../public/images/1.png" width="200px" alt="img">
                        <pre class="text-center mt-2">
Олександр Строй
(вокалист, ритм гітарист)
                        </pre>
                    </div>
                    <div>
                        <img src="../../../public/images/2.png" width="200px" alt="img">
                        <pre class="text-center mt-2">
Ксенія Музика
(басист)
                        </pre>
                    </div>
                    <div>
                        <img src="../../../public/images/3.png" width="200px" alt="img">
                        <pre class="text-center mt-2">
Дмитро Півторак
(ударник)
                        </pre>
                    </div>

            </div>
            <div class="d-flex justify-content-center">
                <iframe width="600px"
                        height="400px"
                        src="https://www.youtube.com/embed/N7UzbxqlArc">
                </iframe>
            </div>
        </div>
        <div class="void"></div>
        <h2 class="text-center">Г а л е р е я</h2>
        <div class="gallery">
            <gallery-item  v-for="number in numbers" :id-image=number class="m-5 gallery-item"></gallery-item>
        </div>
    </div>
</template>

<script>
import GalleryItem from "../components/GalleryItem";
export default {
    name: "Welcome",
    data() {
        return {
            numbers: [1, 2, 3, 4, 5, 6, 7 ,8 ,9, 10 ,11]
        }
    },
    components: {
        GalleryItem,
    }

}
</script>

<style scoped>
    .main-image {
        height: 30em;
        background-image: url("../../static/main-image.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .void {
        height: 8em;
    }

    .void-top h2 {
        text-align: center;
        vertical-align: center;
        margin-top: 1.5em;
        margin-bottom: 1.5em;
        font-family: 'Nunito', sans-serif;
    }

    .description-container .row {
        margin: 5px;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .item {
        font-size: 18px;
        margin: 5px;
        width: 30%;
        margin-left: 30px;
    }

    .row:nth-child(2) .item:nth-child(1) {
        color: white;
        background-color: rgba(33,37,41, 1);
    }

    .gallery {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }


</style>
