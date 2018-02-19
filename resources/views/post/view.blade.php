@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{$post['title']}}</h2>
                <div class="mt-5">
                    {!! $post['intro_html'] !!}
                </div>
                <div class="mt-5">
                    {!! $post['content_html'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection
