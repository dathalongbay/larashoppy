@extends('frontend.layouts.main')

@section('title', 'Tieu de cua website dat')

@section('sidebar')
    111
    @parent
    222

    <p>Nội dung của view con sẽ thêm vào master layout sidebar</p>
@endsection

@section('content')
    <p>nội dung body của trang</p>
@endsection