@extends('layouts.main')

@section('content')

<section class="hero">
    <div class="container--narrow">
        <h1>Brian.Glaz</h1>
        <p class="large subhead">Experienced full-stack developer</p>
    </div>    
</section>

@include('partials/about')
@include('partials/portfolio')
@include('partials/code-lab')


@endsection