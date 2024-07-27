@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Size for {{ $product->name }}</h1>
        </div>

        <div>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary my-3">Back</a>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Create Product Size</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-size.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sizes as $size)
                                    <tr>
                                        <td>{{ $size->name }}</td>
                                        <td>{{ $size->price }}</td>
                                        <td>
                                            <a href="{{ route('admin.product-size.destroy', $size->id) }}"
                                                class='btn btn-danger mx-2 delete-item'><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($sizes) === 0)
                                    <tr>
                                        <td colspan="3" class="text-center">No data found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Create Product Options</h4>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-option.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card card-primary">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($options as $option)
                                    <tr>
                                        <td>{{ $option->name }}</td>
                                        <td>{{ $option->price }}</td>
                                        <td>
                                            <a href="{{ route('admin.product-option.destroy', $option->id) }}"
                                                class='btn btn-danger mx-2 delete-item'><i class='fas fa-trash'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($options) === 0)
                                    <tr>
                                        <td colspan="3" class="text-center">No data found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
