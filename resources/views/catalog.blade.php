@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Каталог</div>

                <div class="panel-body">
                  @foreach($all as $one)
				  <a href = "{{asset('catalog/' . $one->id)}}" class = 'btn  btn-block mylink'>
					  {{$one->name}}
				  </a>
			      @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
