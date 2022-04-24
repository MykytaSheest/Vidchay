<template>
  <div class="form">
      <form>
          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введіть ваш email">
          </div>
          <div class="form-group">
              <label for="exampleInputFirstName">Імʼя</label>
              <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Введіть ваше імʼя">
          </div>
          <div class="form-group">
              <label for="exampleInputLastName">Прізвище</label>
              <input type="text" class="form-control" id="exampleInputLastName" placeholder="Введіть ваше прізвище">
          </div>
          <button type="submit" class="btn btn-secondary">Замовити</button>
      </form>
  </div>
</template>

<script>
export default {
    name: "FormForConcert"
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
