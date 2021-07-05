@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-5 ">
      <div class="card">
        <article class="card-group-item">
          <header class="card-header">
            <button type="button" id="filter" class="btn  btn-outline-primary">Filter</button>
          </header>
          <div class="filter-content ">
            <div class="card-body">

                  <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                          <label class="form-check">
                          <input name="category" class="form-check-input" type="checkbox" value="{{ $category->id }}"
                          
                          @if (in_array($category->id, explode(',', request()->input('filter.category'))))
                            checked
                          @endif
                          >
                          <span class="form-check-label">
                              {{$category->name}}
                          </span>
                          </label> <!-- form-check.// -->
                        </div>                       
                    @endforeach                                          
                  </div>

      
            </div> <!-- card-body.// -->
          </div>
        </article> <!-- card-group-item.// -->
      </div> <!-- card.// -->
    </div>
<!-- searchbox.// -->
    <div class="container align-items-center text-center mt-5 w-75">
      <form class="">
        <div class="form-group">
          <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
        </div>
      </form>
      </div>  
<!-- end search box.// -->
    @foreach ($products as $product)
      <section >
        <div class="mt-5 container">
          <article class="card card-product-list">
            <div class="card-body">
            <div class="row">
              <aside class="col-sm-4">
                <a href="/shop/{{$product->slug}}" class="img-wrap "><img class="img-fluid img-thumbnail d-block" src="{{ asset('img/products/'.$product->slug.'.jpg') }}"></a>
              </aside> <!-- col.// -->
              <div class="col-sm-8">
                  <a href="/shop/{{$product->slug}}" class="title mt-2 h5">{{$product->name}}</a>
                  <div class="d-flex mb-3">
                    <div class="price-wrap mr-4">
                      <span class="price h5">Ksh. {{$product->price}}</span>
                    </div> 
                  </div>
          
                  <ul class="list-bullet">
                    <li>{{$product->slug}}</li>
                    <li>{{$product->size}}</li>
                    <li>{!! $product->description !!}</li>
                  </ul>
          
                    <div class="form-group col-md">
                      {!! Form::open(['route' => 'cart.store', 'method'=>'POST']) !!}

                      {{Form::hidden('id', $product->id)}}
                      {{Form::hidden('name', $product->name)}}
                      {{Form::hidden('slug', $product->slug)}}
                      {{Form::hidden('size', $product->size)}}
                      {{Form::hidden('price', $product->price)}}
   
                      {{Form::submit('Add to cart',['class'=>'btn  btn-outline-primary mb-2 ml-3'])}}
                    {!! Form::close() !!}
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

 @section('extra-js')
 <script>
  function getIds(checkboxName) {
      let checkBox = document.getElementsByName(checkboxName);
      let ids = Array.prototype.slice.call(checkBoxes)
                      .filter(ch => ch.checked==true)
                      .map(ch => ch.value);
      return ids;
  }

  function filterResults () {
  
      let catagoryId = getIds("catagory");

      let href = 'shop/';

      if(catagoryIds.length) {
          href += '&filter[category]=' + catagoryIds;
      }

      document.location.href=href;
  }

  document.getElementById("filter").addEventListener("click", filterResults);
</script>
 @endsection