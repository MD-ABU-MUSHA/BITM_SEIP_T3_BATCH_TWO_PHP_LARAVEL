@include('includes.header');


<section content="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="{{route('count')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Enter Your String</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="given_string"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea cols="30" rows="10" readonly class="form-control">{{isset($word) ? $word : ' '}} {{"\n"}}{{isset($character) ? $character : ' '}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success btn-block" name="btn" value="Submit"   />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>





@include('includes.footer');