@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Редагувати мерч #{{$merch->id}}</h2>
        <form action="{{route('merch.update', $merch->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName">Назва</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="exampleInputName"
                    placeholder="Введіть назву"
                    value="{{$merch->name}}"
                >
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Опис товару</label>
                <textarea
                    type="text"
                    class="form-control"
                    name="description"
                    id="exampleInputDescription"
                    placeholder="Ввевіть опис"
                    value="{{$merch->description}}"
                ></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputImg">Зображення</label>
                <input
                    type="file"
                    class="form-control"
                    name="image_url"
                    id="exampleInputImg"
                    placeholder="Додайте зображення"
                    accept="image/png, image/gif, image/jpeg"
                >
                <div>
                    <img src="{{env('APP_URL') . '/storage/' . $merch["image_url"]}}" alt="" style="width: 150px; margin: 5px">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPrice">Ціна</label>
                <input
                    type="number"
                    class="form-control"
                    name="price"
                    id="exampleInputPrice"
                    placeholder="Введіть ціну"
                    value="{{$merch->price}}"
                >
            </div>
            <div class="form-group">

                <br>
                <label for="exampleInputEmail1">Розміри</label>
                <select class="form-control" name="sizes[]" id="sized" multiple required>
                    @foreach(json_decode($merch->sizes) as $size)
                        @if(array_search($size, array("","S", "M", "L", "XL", "XLL")))
                            <option value="{{$size}}" selected>{{$size}}</option>
                        @else
                            <option value="{{$size}}">{{$size}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputAmount">Кількість</label>
                <input
                    type="number"
                    class="form-control"
                    name="amount"
                    id="exampleInputAmount"
                    placeholder="Введіть кількість товару"
                    value="{{$merch->amount}}"
                    required
                >
            </div>
            <br>

            <button type="submit" class="btn btn-secondary" style="margin-left: 15px">Зберегти</button>
            <a href="{{route('admin')}}" class="btn btn-danger" style="margin-left: 15px">Назад</a>

        </form>
        <br>
    </div>
@endsection
