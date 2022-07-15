@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Product</h1>

    @include('partials.errors')

    <form action="{{route('products.update', ['id' => old('id')?? $watchs->id])}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('watch.products.watchsFields1')

      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
