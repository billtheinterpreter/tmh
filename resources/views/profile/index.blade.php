@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     <div class="col-3">
        <img src="https://www.seekpng.com/png/detail/46-462652_this-icon-for-gender-neutral-user-is-an.png" alt="" style="width:100%">
    </div>

    <div class=" col-9">
    <h2>{{$profile->name??'UserName:N/A'}}</h2>
    <p>{{$profile->gender??'Gender:N/A'}}</p>
    <p>{{$profile->mobile_phone??'Mobile Phone:N/A'}}</p>
    <p>{{$profile->tel??'TEL:N/A'}}</p>
    <p>{{$profile->birthday??'BirthDay:N/A'}}</p>
    <p>{{$profile->email??'Email:N/A'}}</p>
    </div>
    <span class="fa fa-pencil"></span>edit
</div>

@endsection