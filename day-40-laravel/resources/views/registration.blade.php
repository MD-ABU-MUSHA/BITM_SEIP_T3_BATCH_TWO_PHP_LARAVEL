@include('includes.header');

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Registration form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 text-center">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 text-center">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 text-center">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{isset($full_name)? $full_name : ''}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Register" class="btn btn-outline-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


@include('includes.footer');