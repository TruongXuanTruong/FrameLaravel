@extends('layouts.app')

@section('title','Tiêu đề trang con')

@section('content')
    <p>Nội Dung</p>
    @if($data % 2 == 0)
        <p>{{$data}} Là số chẵn</p>
    @else
        <p>{{$data}} Là số lẻ</p>
    @endif

@endsection

@section('sidebar')
    @parent

@endsection
