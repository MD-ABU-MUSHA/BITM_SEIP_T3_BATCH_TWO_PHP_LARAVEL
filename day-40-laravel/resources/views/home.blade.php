@include('includes.header');

<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mx-auto">
                <div class="card ">
                    <img src="{{$product['image']}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3>Product Name : {{$product['name']}}</h3>
                        <h4>Product Price: {{$product['price']}} </h4>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>


@include('includes.footer');

