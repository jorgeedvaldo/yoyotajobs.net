@extends('template.app')
@section('title', __('curriculos.page_title'))
@section('description', __('curriculos.page_description'))
@section('canonical_link', lurl('modelos-de-curriculos'))
@section('content')

<section class="capa-sobre mb-5" style="background-image: url('{{ asset('storage/images/bg_5.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 p-4 big-text center-all">
                <p class="text-white">{{ __('curriculos.heading') }}</p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mt-5">

        @foreach($curriculos as $curriculo)
            <div class="col-md-4 mb-5">
                <div class="card" style="width: auto;">
                    <img src="{{asset('storage/' . $curriculo['photo'])}}" class="card-img-top my-thumb" alt="...">
                    <div class="card-body">
                    <a href="{{ lurl('modelos-de-curriculos/' . $curriculo['slug']) }}"><h5 class="card-title">{{ $curriculo['title'] }}</h5></a>
                    <p class="card-text">{!! \Illuminate\Support\Str::limit(strip_tags($curriculo['description']), 91, $end='...') !!}</p>
                    <a href="{{ $curriculo['link'] }}" class="btn btn-dark">{{ __('curriculos.download') }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $curriculos->links() }}
    </div>
</div>
@endsection('content')
