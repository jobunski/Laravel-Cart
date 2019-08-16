@extends('layout.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"  class="img-fluid">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p class="description">Product Description</p>
                        <div class="clearfix">
                            <p class="price float-left">Ksh 200</p>
                            <a href="/add-to-cart/" class="btn btn-success float-right" role="button">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"  class="img-fluid">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p class="description">Product Description</p>
                        <div class="clearfix">
                            <p class="price float-left">Ksh 200</p>
                            <a href="/add-to-cart/" class="btn btn-success float-right" role="button">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"  class="img-fluid">
                    <div class="caption">
                        <h3>Product Title</h3>
                        <p class="description">Product Description</p>
                        <div class="clearfix">
                            <p class="price float-left">Ksh 200</p>
                            <a href="/add-to-cart/" class="btn btn-success float-right" role="button">
                                Add
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
