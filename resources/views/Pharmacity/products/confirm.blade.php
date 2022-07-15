@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">Are you sure you want to delete?</h1>
    @include('watch.products.watchsDetails')

    <form action="{{route('products.destroy', ['id' =>$watchs->id])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$watchs->id}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('products.products')}}" class="btn btn-info">Cancel</a>
    </form>
  </div>
@endsection
