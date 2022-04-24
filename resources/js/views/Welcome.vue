<template>
    <div>
        <div class="main-image"></div>
        <div class="void"></div>
        <div class="description-container">
            <div class="row">
                <div class="item"></div>
                <div class="item">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa doloribus eum eveniet exercitationem illum impedit praesentium quasi quo sunt. At cupiditate ducimus excepturi iure numquam qui quos tempora totam.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate error eum fuga impedit ipsam itaque iure molestias quo veniam, voluptatem. Aliquid cupiditate eos expedita inventore laboriosam neque quas sit temporibus!
                    </p>
                </div>
                <div class="item"></div>
            </div>
        </div>
        <div class="void"></div>
    </div>
</template>

<script>
export default {
    name: "Welcome",

}
</script>

<style scoped>
    .main-image {
        height: 30em;
        background-image: url("../../static/main-image.png");
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
</style>
