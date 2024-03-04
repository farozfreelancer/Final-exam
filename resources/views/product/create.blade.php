@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Add Products</h2>

        <form action="/product/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control mt-2" id="phone" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control mt-2" id="description" rows="4" name="description" placeholder="description here">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control mt-2" id="image" name="image">
                    @if($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection