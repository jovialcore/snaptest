@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card" style="">
                <div class="card-header">
                    Full Details of Citizens
                </div>
                <ul class="list-group list-group-flush">
                     <li class="list-group-item"> {{ 'Full name: '.  $citizen->full_name }}</li>
                    <li class="list-group-item"> {{ 'Address :'. $citizen->address }}</li>
                    <li class="list-group-item"> {{ 'Gender: '. $citizen->gender }}</li>
                    <li class="list-group-item">{{ 'Ward :'.$citizen->Ward->name }}</li>
                    <li class="list-group-item"> {{'Phone: '. $citizen->phone }}</li>
                    {{-- <li class="list-group-item"> {{ $citizen->gender }}</li> --}}
                </ul>
            </div>
        </div>
    </div>
@endsection
