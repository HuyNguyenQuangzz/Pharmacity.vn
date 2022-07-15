@extends('master.watchMasterAdmin')

@section('main')


  <div class="container">
    <h1 class="display-4"> DETAIL WATCH </h1>
    @include('watch.products.watchsDetails')
    <a type="button" href="{{route('products.products')}}" class="btn btn-info">&lt;&lt;&nbsp;Index</a>
  </div>
@endsection
