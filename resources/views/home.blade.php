@extends('main')
@section('css')
    <link href="/css/toastr.min.css" rel="stylesheet">

@endsection

@section('content')

    @include('validator')



@endsection

@section('js')


    <script src="/js/charts/demo/Chart.min.js"></script>
    <script src="/js/charts/demo/chart-area-demo.js"></script>
    <script src="/js/charts/demo/chart-bar-demo.js"></script>
    <script src="/js/charts/demo/chart-pie-demo.js"></script>
@endsection
