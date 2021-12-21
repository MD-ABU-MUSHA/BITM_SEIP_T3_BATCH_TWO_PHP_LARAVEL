@include('includes.header');

<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mx-auto">
                <div class="card ">
                    <img src="{{asset($product['image'])}}" alt="" class="card-img-top" height="400" width=""300>
                    <div class="card-body">
                        <h5>Product Name : {{$product['name']}}</h5>
                        <h5>Product Price: {{$product['price']}} </h5>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>


@include('includes.footer');

