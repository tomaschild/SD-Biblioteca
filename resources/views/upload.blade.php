@extends('layouts.master')
@section('title', 'Upload File')

@include('components.header')

@section('content')
	<div class="">
        <div class="container">
            <div class="row justify-content-center align-items-center upload-form">
                <div class="col form-wrapper">
                    <div class="container">
                        <div class="form-title-area">
                            <h1 class="form-title">Upload File</h1>
                        </div>
                        <form action="/upload" method="post" class="form-content">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="form-row justify-content-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="file-title-input" class="form-label">Title</label>
                                            <input type="text" name="document_title" id="file-title-input" class="form-control upload-input @if($errors->has('document_title')) is-invalid @endif">
                                        </div>
                                        <div class="form-group">
                                            <label for="file-author-input" class="form-label">Author</label>
                                            <input type="text" name="document_author" id="file-author-input" class="form-control upload-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="file-year-input" class="form-label">Year</label>
                                            <input type="text" name="document_year" id="file-year-input" class="form-control upload-input">
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="file-type-input" class="form-label">File Type</label>
                                            <input type="text" name="document_type" id="file-type-input" class="form-control upload-input">
                                        </div>
                                        <div class="form-group">
                                            <button type="file" class="btn btn-block form-btn" disabled>Choose File</button>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="upload_document" class="btn btn-block form-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection