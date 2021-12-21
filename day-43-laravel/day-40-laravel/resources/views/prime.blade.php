@include('includes.header');
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Enter The Information
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="first" class="col-form col-md-3">Enter String</label>
                                <div class="col-md-9">
                                    <input id="first" type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="first" class="col-form col-md-3">Output</label>
                                <div class="col-md-9">

                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="button" class="col-form col-md-3"></label>
                                <div class="col-md-9">
                                    <input id="button" type="submit" value="submit" name="prime" class="btn btn-outline-success"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('includes.footer');