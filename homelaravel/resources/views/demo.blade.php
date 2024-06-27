{{-- @extends('layouts.app')

@section('title', 'Demo Page')

@section('content')
    <p>Danh sách người dùng:</p>
    <ul>
        @foreach($users as $id => $user)
            <li>ID: {{$id}}, Tên: {{$user['name']}}</li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    @parent
    <p>Phần mở rộng của sidebar.</p>
@endsection --}}

@include('inc.new',['title' =>'New page'])

{{-- @php
    foreach($users as $id => $user){
        echo $user['name'],'<br>';
    }
@endphp --}}
