@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Додати мерч</h2>
        <form>
            <div class="form-group">
                <label for="exampleInputName">Назва</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Введіть назву">
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Опис товару</label>
                <textarea type="text" class="form-control" id="exampleInputDescription" placeholder="Ввевіть опис"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputImg">Зображення</label>
                <input type="file" class="form-control" id="exampleInputImg" placeholder="Додайте зображення">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Ціна</label>
                <input type="number" class="form-control" id="exampleInputPrice" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Розміри</label>
                <select class="form-control" name="sizes" id="sized" multiple>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XLL">XLL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Кількість</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Введіть кількість товару">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Додати</button>

            <a href="{{route('admin')}}" class="btn btn-danger" style="margin-left: 15px">Назад</a>

        </form>
        <br>
    </div>
@endsection
