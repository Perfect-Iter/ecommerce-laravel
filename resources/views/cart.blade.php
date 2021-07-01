@extends('layouts.app')

@section('content')



<section>
	<div class="container">
		<div class="container mt-5">
<div class="row">
	<aside class="col-lg-9">
<div class="card">

<div class="table-responsive">

<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right d-none d-md-block" width="200"> </th>
</tr>
</thead>

<tbody>
	@if (Cart::count() > 0)
	@foreach (Cart::content() as $item)
	<tr>
		<td>
			<figure class="itemside align-items-center  border-bottom">
				<div class="aside" class="img-wrap w-50"><img src="{{ asset('img/products/'.$item->model->slug.'.jpg') }}" class="w-25 img-sm img-thumbnail d-block"></div>
				<figcaption class="info">
					<a href="/shop/{{$item->model->slug}}" class="title text-dark">{{$item->model->name}}</a>
					<p class="text-muted small">Matrix: {{$item->model->type}} <br> Brand: {{$item->model->slug}}</p>
				</figcaption>
			</figure>
		</td>
		<td>
			<input type="text" class="quantity form-control"  value={{$item->qty}} data-id="{{$item->rowId}}">
		</td>
		<td class="text-center">
			<div class="price-wrap">
				<var class="price">Ksh. {{$item->subtotal}}</var>
				<small class="text-muted"> {{$item->model->price}}each </small>
			</div> <!-- price-wrap .// -->
		</td>
		<td class="text-right d-none d-md-block">
			{!! Form::open(['route' => ['cart.destroy',$item->rowId], 'method'=>'POST']) !!}
			{{ csrf_field() }}
			{{Form::hidden('_method','DELETE')}}
			{{Form::submit('Remove',['class'=>'btn  btn-danger mb-2 ml-3'])}}
		  {!! Form::close() !!}
		</td>
	</tr>		
	@endforeach
</tbody>
@endif	
</table>

</div> <!-- table-responsive.// -->

<div class="card-body border-top">
	<p class="icontext">{{Cart::count()}} items in cart</p>
</div> <!-- card-body.// -->

</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-lg-3">

<div class="card">
<div class="card-body">
		<dl class="dlist-align">
		  <dt>Total price:</dt>
		  <dd class="text-right">{{Cart::subtotal()}}</dd>
		</dl>
		<dl class="dlist-align">
		  <dt>Tax:</dt>
		  <dd class="text-right text-danger">{{Cart::tax()}}</dd>
		</dl>
		<dl class="dlist-align">
		  <dt>Total:</dt>
		  <dd class="text-right text-dark b"><strong>{{Cart::total()}}</strong></dd>
		</dl>
		<hr>

		<a href="#" class="btn btn-primary btn-block"> Make Purchase </a>
		<a href="#" class="btn btn-light btn-block">Continue Shopping</a>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

			</aside> <!-- col.// -->
		</div> <!-- row.// -->
			</div>
    
 
    </div>

    </section>

 @endsection

 @section('extra-js')
 	<script src="{{ asset('js/app.js') }}"></script>
	 <script>
		 (function(){
			 const classname = document.querySelectorAll('.quantity')

			 Array.from(classname).forEach(function(element){
				 element.addEventListener('change', function(){
					 const id = element.getAttribute('data-id')
					 axios.patch(`/cart/${id}`, {
						 quantity: this.value
					 })
					 .then(function(response) {
						 //console.log(response);
						 window.location.href = `{{route('cart.index')}}`
						
					 })
					 .catch(function (error) {
						 console.log(error);
					 })
				 })
			 })
		 })();
	 </script>
 @endsection