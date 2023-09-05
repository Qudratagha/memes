@extends('layouts.app')
@section('title', 'Meme Create')
@section('content')
    <div class="container-fluid p-4" style="margin-top: 3%">
        <div class="card card-default color-palette-box p-2" style="margin: auto">
            <div class="card-header text-center bg-primary text-white">
                <h5 class="card-title">Meme Upload Form</h5>
                <p class="card-text">Please fill out the following information:</p>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('meme.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mt-2">
                        <label for="category" class="form-label col-form-label col-sm-2 fw-bolder">Category:</label>
                        <div class="col-sm-6">
                            <select name="category" class="form-select form-select-lg">
                                <option value="">Select Category</option>
                                <option value="hollywood">Hollywood</option>
                                <option value="bollywood">Bollywood</option>
                                <option value="tamil">Tamil</option>
                                <option value="cartoon">Cartoon</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="name" class="form-label col-form-label col-sm-2 fw-bolder">Name:</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="title" class="form-label col-form-label col-sm-2 fw-bolder">Title:</label>
                        <div class="col-sm-6">
                            <input type="text" name="title" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="video" class="form-label col-form-label col-sm-2 fw-bolder">Video:</label>
                        <div class="col-sm-6">
                            <input type="file" name="video" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="desc" class="form-label col-form-label col-sm-2 fw-bolder">Description:</label>
                        <div class="col-sm-6">
                            <input type="text" name="desc" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="offset-2">
                            <input class="btn btn-primary" type="submit" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

    </script>
@endsection

