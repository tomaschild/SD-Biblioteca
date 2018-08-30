@extends('layouts.master')
@section('title', 'Welcome')

@section('content')
    <section>
        <div class="home-wrapper-image">
            <div class="home-wrapper">
                <div class="container">
                    <div class="row justify-content-center align-items-center home-welcome">
                        <div class="col-md-8 welcome-section">
                            <div class="title-area">
                                <h1 class="home-title">BABILON</h1>
                            </div>
                            <hr class="title-subline">
                            <div class="link-area">
                                <a href="{{ route('upload') }}" class="home-link">UPLOAD</a>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-7">
                                    <form action="{{ route('results')}}" method="get" class="search-form">
                                        <input type="text" class="form-control home-input" value="{{ request()->input('busqueda') }}" name="busqueda" id="busqueda" placeholder="Search here!">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection