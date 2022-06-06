<template>
    <div>
        <div class="main-image"></div>
        <div class="void"></div>
        <div class="description-container">
            <div class="row">
                <div class="item">
                    <p class="text-center" v-if="lang == 0">
                        {{LIST_UA.welcome.description}}
                    </p>
                    <p class="text-center" v-if="lang == 1">
                        {{LIST_EN.welcome.description}}
                    </p>

                </div>
            </div>
            <div class="d-flex justify-content-around mt-5 mb-5">
                    <div>
                        <img src="../../../public/images/1.png" width="200" alt="img">
                        <pre class="text-center mt-2" v-if="lang == 0">
Олександр Строй
(вокалист, ритм гітарист)
                        </pre>
                        <pre class="text-center mt-2" v-if="lang == 1">
Alexander Stroy
(vocalist, rhythm guitarist)
                        </pre>
                    </div>
                    <div>
                        <img src="../../../public/images/2.png" width="200" alt="img">
                        <pre class="text-center mt-2" v-if="lang == 0">
Ксенія Музика
(басист)
                        </pre>
                        <pre class="text-center mt-2" v-if="lang == 1">
Ksenia Music
(bassist)
                        </pre>
                    </div>
                    <div>
                        <img src="../../../public/images/3.png" width="200" alt="img">
                        <pre class="text-center mt-2" v-if="lang == 0">
Дмитро Півторак
(ударник)
                        </pre>
                        <pre class="text-center mt-2" v-if="lang == 1">
Dmytro Pivtorak
(percussionist)
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
        <h2 class="text-center" v-if="lang == 0">Новини</h2>
        <h2 class="text-center" v-if="lang == 1">News</h2>
        <div class="news">
            <div class="new-item">
                <hr>
                <h4 class="text-center" v-if="lang == 0">4 ЧЕРВНЯ Гурт опублікував свій перший відео кліп в якому підтримав українців.</h4>
                <h4 class="text-center" v-if="lang == 1">JUNE 4 The band released their first video on behalf of Ukrainians.</h4>
                <br>
                <div class="d-flex justify-content-center">
                    <iframe width="600px"
                            height="400px"
                            src="https://www.youtube.com/embed/i358sOijfMo">
                    </iframe>
                </div>
                <br>
                <p v-if="lang == 0">
                    Пісня "Закрий очі мені" є найпершою піснею, що була написана мною під час війни. В ній
                    я висловив всі свої занепокоєння щодо людей: про їхнє терпіння та силу волі, про психічну
                    та фізичну витримку під час війни з росією. "Не чути зброю цих клятих окупантів. Тому я тебе
                    благаю: закрий очі мені" – прохання, щоб це все скоріш закінчилося та щоб ніколи не чути ці
                    постріли, крики, руйнування та смерть. Тому я благаю, щоб війна завершилася якнайшвидше та
                    вільна Україна перемогла.
                </p>
                <p v-if="lang == 1">
                    The song "Close My Eyes" is the first song I wrote during the war. In her
                    I expressed all my concerns about people: about their patience and willpower, about mental
                    and physical endurance during the war with Russia. "Don't hear the weapons of these damned occupiers. That's why I'm you
                    I beg you to close your eyes to me "- a request that this all end soon and that I never hear these
                    shots, screams, destruction and death. Therefore, I beg that the war be over as soon as possible
                    free Ukraine won.
                </p>
            </div>
            <div class="new-item">
                <hr>
                <h4 class="text-center" v-if="lang == 0">24 ЛИПНЯ Гурт «Vidchay» до ювілею свого існування, дарує великий концерт в Харкові, на стадіоні «Металіст».</h4>
                <h4 class="text-center" v-if="lang == 1">JULY 24 To mark the anniversary of its existence, Vidchay presents a big concert in Kharkiv, at the Metalist Stadium.</h4>
                <br>
                <div class="d-flex justify-content-center">
                    <img  src="../../../public/images/new_1.jpg" alt="img" width="400">
                </div>
                <br>
            </div>
            <div class="new-item">
                <hr>
                <h4 class="text-center" v-if="lang == 0">26 ЧЕРВНЯ Прем’єра нової пісня «Зорепад»</h4>
                <h4 class="text-center" v-if="lang == 1">JUNE 26 Premiere of the new song "Zorepad"</h4>
                <br>
                <div class="d-flex justify-content-center">
                    <img  src="../../../public/images/new_2.jpg" alt="img" width="400">
                </div>
                <br>
                <p v-if="lang == 0" class="text-center">
                    26 червня 2022 року відбудеться прем’єра авторської музичної пісні Строя Олександра під назвою «Зорепад».
                </p>
                <p v-if="lang == 1" class="text-center">
                    On June 26, 2022, the premiere of the author's musical song by Alexander Story entitled "Starfall" will take place.
                </p>
            </div>

        </div>
        <h2 class="text-center" v-if="lang == 0">Г а л е р е я</h2>
        <h2 class="text-center" v-if="lang == 1">G a l l e r y</h2>
        <div class="gallery">
            <gallery-item  v-for="number in numbers" :id-image=number class="m-5 gallery-item"></gallery-item>
        </div>
    </div>
</template>

<script>
import GalleryItem from "../components/GalleryItem";
import {LIST_UA} from "../lang/ua/list";
import {LIST_EN} from "../lang/en/list";
export default {
    name: "Welcome",
    data() {
        return {
            LIST_UA,
            LIST_EN,
            lang: localStorage.getItem('lang'),
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

    .news {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .new-item {
        width: 70%;
        margin: 5px;
    }


</style>
