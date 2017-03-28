@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$cat->name}}</div>

                    <div class="panel-body">
                        @foreach($all as $one)
                            <div class="col-md-4">
                                <div class="name">{{$one->name}}</div>

                                @if($one->picture)
                                    <img src="{{asset('media/photos/s_'.$one->picture)}}" class="picture">
                                @else
                                    <img src="{{asset('media/photos/')}}" class="picture">
                                @endif
                                <div class="body">Описание: {{$one->body}}</div>
                                <div class="price">Цена: {{$one->price}}</div>
                                <a href="#" id="good-{{$one->id}}-{{$one -> price}}"  class="btn btn-success addCart">Добавить в корзину</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
