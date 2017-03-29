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
                    <form method='POST' action='basket' enctype='multipart/form-data'>
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for='name'> Имя </label>
                            <input type='text' name='name' id='name' class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for='body'> Контакты </label>
                            <textarea class="form-control" rows="5" name='body'></textarea>
                        </div>



                        <button type="submit" class="btn btn-default">Подтвердить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

