@extends('layouts.app')
@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>	
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" align=center>
    <div class="item active">
      <img src="/media/img/main.jpg" alt="Original store">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="/media/img/adidas.jpg" alt="Adidas">
      <div class="carousel-caption">
        Adidas
      </div>
    </div>
	<div class="item">
      <img src="/media/img/nike.jpg" alt="Nike">
      <div class="carousel-caption">
        Nike
      </div>
	 </div>
	 <div class="item">
      <img src="/media/img/puma.jpg" alt="Puma">
      <div class="carousel-caption">
        Puma
      </div>
	 </div>
	 <div class="item">
      <img src="/media/img/reebok.jpg" alt="Reebok">
      <div class="carousel-caption">
        Reebok
      </div>
	 </div>
    ORIGINAL STORE
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

