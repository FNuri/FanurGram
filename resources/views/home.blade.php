@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fcmb1-1.fna.fbcdn.net/vp/d9386c6a0285c12c20c626afc93da96a/5E10DA40/t51.2885-19/s150x150/26158931_171113673637309_1919775876514316288_n.jpg?_nc_ht=instagram.fcmb1-1.fna.fbcdn.net" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
        <div>
            
            <h1>{{$user->username}}</h1>
        </div> 
            <div class="d-flex">
              <div class="pr-5"> <strong>25</strong> posts </div>
              <div class="pr-5"> <strong>251K</strong> followers</div>
              <div class="pr-5"> <strong>25</strong> following</div>  
            </div> 
            <div class="pt-3 font-weight-bold">{{$user->profile->title}} </div>
            <div>{{$user->profile->description}} </div>
            <div><a href="">{{$user->profile->url ?? 'N/A'}} </a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="/svg/a.jpg" style="max-height: 300px; min-width:300px" alt=""  class="w-100">
        </div>
        <div class="col-4">
            <img src="/svg/a.jpg" style="max-height: 300px; min-width:300px" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/svg/a.jpg" style="max-height: 300px; min-width:300px" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
