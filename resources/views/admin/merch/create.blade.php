@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Додати мерч</h2>
        <form action="{{route('merch.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">Назва</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Введіть назву" required>
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Опис товару</label>
                <textarea type="text" class="form-control" name="description" id="exampleInputDescription" placeholder="Ввевіть опис" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputImg">Зображення</label>
                <input type="file" class="form-control" name="image_url" id="exampleInputImg" placeholder="Додайте зображення" required accept="image/png, image/gif, image/jpeg">
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Ціна</label>
                <input type="number" class="form-control" name="price" id="exampleInputPrice" placeholder="Введіть ціну" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Розміри</label>
                <select class="form-control" name="sizes[]" id="sized" multiple required>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XLL">XLL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputAmount">Кількість</label>
                <input type="number" class="form-control" name="amount" id="exampleInputAmount" placeholder="Введіть кількість товару" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Додати</button>

            <a href="{{route('admin')}}" class="btn btn-danger" style="margin-left: 15px">Назад</a>

        </form>
        <br>
    </div>
@endsection
