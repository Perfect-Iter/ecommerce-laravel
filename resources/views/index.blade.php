@extends('layouts.app')

@section('content')


    @foreach ($products as $product)
      <section >
        <div class="mt-5 container">
          <article class="card card-product-list">
            <div class="card-body">
            <div class="row">
              <aside class="col-sm-4 w-50">
                <a href="#" class="img-wrap"><img class="w-100" src="{{ asset('img/products/'.$product->slug.'.jpg') }}"></a>
              </aside> <!-- col.// -->
              <div class="col-sm-8">
                  <a href="/shop/{{$product->slug}}" class="btn-link float-right"> <i class="fa fa-heart"></i></a>
                  <a href="/shop/{{$product->slug}}" class="title mt-2 h5">{{$product->name}}</a>
                  <div class="d-flex mb-3">
                    <div class="price-wrap mr-4">
                      <span class="price h5">Ksh. {{$product->price}}</span>
                    </div> 
                  </div>
          
                  <ul class="list-bullet">
                    <li>{{$product->slug}}</li>
                    <li>{{$product->size}}</li>
                    <li>{{$product->description}}</li>
                  </ul>
          
                    <div class="form-group col-md">
                      <a href="#" class="btn btn-primary"> <span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i> </a>
                    </div> <!-- col.// -->
                  </div> <!-- row.// -->
              </div> <!-- col.// -->
            </div> <!-- row.// -->
            </div> <!-- card-body .// -->
          </article>
        </div>    

      </section>    
    @endforeach
    
 @endsection