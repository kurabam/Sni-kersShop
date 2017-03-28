@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Подтверждение заказа</div>
                <div class="panel-body">
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="errors">{{$error}}</div>
                    @endforeach
                    @endif
                    <form method='POST' action='home' enctype='multipart/form-data'>
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for='name'> Название </label>
                            <input type='text' name='name' id='name' class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for='price'> Цена </label>
                            <input type='text' name='price' id='price' class="form-control"  />
                        </div>

                        <div class="form-group">
                            <label for='category_id'> Категория </label>
                            <select class="form-control" name='category_id'>
                                <option value=1>Adidas</option>
                                <option value=2>Nike</option>
                                <option value=4>Reebok</option>
                                <option value=3>Puma</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for='body'> Описание </label>
                            <textarea class="form-control" rows="5" name='body'></textarea>
                        </div>

                        <div class="form-group">
                            <label for="picture1"> Фото</label>
                            <input type="file" name='picture1' id="Photo">
                        </div>


                        <button type="submit" class="btn btn-default">Добавить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

