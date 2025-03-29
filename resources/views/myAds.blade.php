@extends('layout.layout')

@section('content')
<div class="my-ads-page">
    <x-sideBar class="config-myAds" />
    <div class="myAds-area">
        <h3 class="myAds-title">Meus Anúncios</h3>
        <div class="myAds-ads-area">

            @foreach($advertises as $ad)
            <x-ad title="{{$ad->title}}" price="{{$ad->price}}" :images="$ad->photos" />

            @endforeach
        </div>
    </div>
</div>
@endsection
