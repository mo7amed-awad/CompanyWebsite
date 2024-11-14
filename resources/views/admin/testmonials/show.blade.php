@extends('admin.master')

@section('title', __('keywords.show_testmonials'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.show_testmonials') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{$testmonial->name}}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="position">{{ __('keywords.position') }}</label>
                                <p class="form-control">{{$testmonial->position}}</p>
                            </div>

                            <div class="col-md-6">
                                <label for="image">{{ __('keywords.image') }}</label>
                                <div>
                                    <img src="{{asset("storage/testmonials/$testmonial->image")}}" width="100px">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p class="form-control">{{$testmonial->description}}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
