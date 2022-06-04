<template>
  <div class="form">
      <form>
          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input v-if="lang == 0" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введіть ваш email">
              <input v-if="lang == 1" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
          </div>
          <div class="form-group">
              <label v-if="lang == 0" for="exampleInputFirstName">Імʼя</label>
              <label v-if="lang == 1" for="exampleInputFirstName">Firstname</label>
              <input v-if="lang == 0" type="text" class="form-control" id="exampleInputFirstName" placeholder="Введіть ваше імʼя">
              <input v-if="lang == 1" type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter firstname">
          </div>
          <div class="form-group">
              <label v-if="lang == 0" for="exampleInputLastName">Прізвище</label>
              <label v-if="lang == 1" for="exampleInputLastName">Lastname</label>
              <input v-if="lang == 0" type="text" class="form-control" id="exampleInputLastName" placeholder="Введіть ваше прізвище">
              <input v-if="lang == 1" type="text" class="form-control" id="exampleInputLastName" placeholder="Enter lastname">
          </div>
          <button v-if="lang == 0" type="submit" class="btn btn-secondary">Замовити</button>
          <button v-if="lang == 1" type="submit" class="btn btn-secondary">Make an order</button>
      </form>
  </div>
</template>

<script>
export default {
    name: "FormForConcert",
    data() {
        return {
            lang: localStorage.getItem('lang')
        }
    }
}
</script>

<style scoped>
    .form {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    form {
        width: 30em;
    }

    input {
        padding: 5px;
    }

    button {
        width: 100%;
        margin-top: 15px;
    }
</style>
