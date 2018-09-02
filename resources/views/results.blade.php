@extends('layouts.master')
@section('title', 'Results')

@include('components.header')

@section('content')
    <div class="cuerpo">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-lg-4">
                    <div class="search-area">
                        <form action="{{ route('results')}}" method="get" class="result-search-form">
                            <input type="text" class="form-control result-input" value="{{ request()->input('busqueda') }}" name="busqueda" id="busqueda" placeholder="Search here!">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr class="result-line">
        <div class="result-title-area">
            <div class="container">
                <h1 class="result-title">Resultados</h1>
            </div>
        </div>
        @if(count($documents) >= 1)
            <div class="result-content-area">
                <div class="container">
                    <div class="row">
                        @foreach($documents as $document)
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                <a href="" class="doc-link">
                                    <div class="doc-thumb">
                                        <div class="doc-prev">
                                            <i class="fas fa-file-pdf doc-icon"></i>
                                        </div>
                                        <div class="doc-info">
                                            <p class="doc-text doc-title">{{ $document->document_title }}</p>
                                            <p class="doc-text doc-author">{{ $document->document_author }}</p>
                                            <p class="doc-text doc-year">{{ $document->document_year }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="no-result-area">
                <div class="container">
                    <p>no</p>
                </div>
            </div>
        @endif
    </div>
@endsection

