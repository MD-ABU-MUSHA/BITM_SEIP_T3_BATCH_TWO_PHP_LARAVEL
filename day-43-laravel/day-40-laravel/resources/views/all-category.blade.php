@include('includes.header');
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-3">
                <a href="{{route('category.show', $category['id'])}}" class="btn btn-link">
                <div class="card card-body">
                    <h4 class="text-center">{{$category['name']}}</h4>
                </div>
                </a>
            </div>
                @endforeach
        </div>
    </div>
</section>
@include('includes.footer');