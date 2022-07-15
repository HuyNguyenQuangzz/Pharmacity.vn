@extends('master.watchMasterAdmin')

@section('main')
  <div class="container">
    <h1 class="display-4">New Watch</h1>
    {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
    @include('partials.errors')

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      @include('watch.products.watchsFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
