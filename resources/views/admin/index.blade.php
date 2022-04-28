@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card text-center" style="margin-bottom: 15px">
            <div class="card-header">
                Товари
            </div>
            <div class="card-body">
                <h5 class="card-title">Асортимент</h5>
                <div>
                    @if(!empty($merches[0]))
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Назва</th>
                                <th scope="col">Опис</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Ціна</th>
                                <th scope="col">Розміри</th>
                                <th scope="col">Усього товару</th>
                                <th scope="col">Дії</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($merches as $merch)
                                <tr>
                                    <th scope="row">{{$merch["id"]}}</th>
                                    <td>{{$merch["name"]}}</td>
                                    <td>{{$merch["description"]}}</td>
                                    <td>
                                        <img
                                            src="{{env('APP_URL') . '/storage/' . $merch["image_url"]}}"
                                            alt="img"
                                            style="width: 150px"
                                        >
                                    </td>
                                    <td>{{$merch["price"]}}</td>
                                    <td>
                                        @foreach(json_decode($merch["sizes"]) as $size)
                                            <span style="
                                                background-color: #6b7280;
                                                color: white;
                                                padding: 5px;
                                                margin: 5px;
                                                border-radius: 60px;
                                                "
                                            >{{$size}}</span>
                                        @endforeach
                                    </td>
                                    <td>{{$merch["amount"]}}</td>
                                    <td>
                                        <a href="{{route('merch.edit', $merch["id"])}}" class="btn btn-outline-secondary">Редагувати</a>
                                        <a href="{{route('merch.destroy', $merch["id"])}}" class="btn btn-outline-danger">Видалити</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Поки товару немає</p>
                    @endif
                </div>
                <a href="{{route('merch.create')}}" class="btn btn-primary">Додати товар</a>
            </div>
            <div class="card-footer text-muted">
                VIDCHAY
            </div>
        </div>
            <div class="card text-center" style="margin-bottom: 15px">
                <div class="card-header">
                    Контакти
                </div>
                    <div class="card-body">
                        <form action="#">
                            <form>
                                <div class="form-group">
                                    <label>Директор гурту</label>
                                    <input type="email" class="form-control"  placeholder="Директор гурту">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Телефон</label>
                                    <input type="text" class="form-control" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control"  placeholder="Email">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Зберегти</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
