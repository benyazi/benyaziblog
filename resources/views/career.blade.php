@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>My Career</h2>
                @foreach($careerList as $careerItem)
                    <div class="list-group">
                        <a href="{{$careerItem->company_link}}" target="_blank"
                           class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$careerItem->company_name}}</h5>
                                <small>{{$careerItem->start_work->format("m/Y")}} - {{$careerItem->end_work->format("m/Y")}}</small>
                            </div>
                            <p class="mb-1">{{$careerItem->experience}}</p>
                            <small>Location: {{$careerItem->company_location}}</small>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
