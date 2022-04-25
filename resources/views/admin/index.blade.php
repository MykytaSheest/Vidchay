@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Товари
            </div>
            <div class="card-body">
                <h5 class="card-title">Асортимент</h5>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Ціна</th>
                            <th scope="col">Кількість</th>
                            <th scope="col">Розміри</th>
                            <th scope="col">Куплено</th>
                            <th scope="col">Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn btn-outline-secondary">Редагувати</button>
                                <button class="btn btn-outline-danger">Видалити</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>Thornton</td>
                            <td>
                                <button class="btn btn-outline-secondary">Редагувати</button>
                                <button class="btn btn-outline-danger">Видалити</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>the Bird</td>
                            <td>
                                <button class="btn btn-outline-secondary">Редагувати</button>
                                <button class="btn btn-outline-danger">Видалити</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="btn btn-primary">Додати товар</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
@endsection
