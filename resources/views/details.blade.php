@extends('layouts.app')

@section('content')

        <div class="card">
            <div class="row no-gutters">
                <aside class="col-md-6">
        <article class="gallery-wrap">
                    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        
                      <!--Slides-->
                      <div class="carousel-inner text-center text-md-left" role="listbox">
                        <div class="carousel-item active">
                          <img src="assets/img/download.jpg" alt="First slide" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/download.jpg" alt="Second slide" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                          <img src="assets/img/download.jpg" alt="Third slide" class="img-fluid">
                        </div>
                      </div>
        </article> <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-md-6 border-left">
        <article class="content-body">
        
        <h2 class="title">{{$product->name}}</h2>
        
        
        
        <div class="mb-3">
            <var class="price h4">{{$product->price}}</var>
            <span class="text-muted">/per</span>
        </div> <!-- price-detail-wrap .// -->
        
        <p>{{$product->description}}</p>
        
        
        <dl class="row">
          <dt class="col-sm-3">Model#</dt>
          <dd class="col-sm-9">{{$product->slug}}</dd>
        
          <dt class="col-sm-3">Size</dt>
          <dd class="col-sm-9">Brown</dd>
        
          <dt class="col-sm-3">type</dt>
          <dd class="col-sm-9">{{$product->type}} </dd>
        </dl>
        
        <hr>

                <div class="form-group col-md flex-grow-0">
                    <label>Quantity</label>
                    <div class="input-group mb-3 input-spinner">
                      <div class="input-group-prepend">
                        <button class="btn btn-light" type="button" id="button-plus"> + </button>
                      </div>
                      <input type="text" class="form-control" value="1">
                      <div class="input-group-append">
                        <button class="btn btn-light" type="button" id="button-minus"> − </button>
                      </div>
                    </div>
                </div> <!-- col.// -->
                  {!! Form::open(['route' => 'cart.store', 'method'=>'POST']) !!}

                    {{Form::hidden('id', $product->id)}}
                    {{Form::hidden('name', $product->name)}}
                    {{Form::hidden('slug', $product->slug)}}
                    {{Form::hidden('price', $product->price)}}
 
                    {{Form::submit('Add to cart',['class'=>'btn  btn-outline-primary mb-2 ml-3'])}}
                  {!! Form::close() !!}
        
        </article> <!-- product-info-aside .// -->
                </main> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->

    
 @endsection