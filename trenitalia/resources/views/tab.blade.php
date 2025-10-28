@extends('layouts.master')

@section('tab')

    <div class="bg-danger p-4">

        <div class="p-4 bg-dark row text-white">
            <p class="col-3 mb-0">Treno</p>
            <p class="col-3 mb-0">Arriva da</p>
            <p class="col-3 mb-0">Diretto a</p>
            <p class="col-3 mb-0">Ritardo</p>
        </div>

        @foreach ($trains as $train)

            <div class="row p-4 bg-white">

                @if ($train['is_canceled'] == 0)
                
                    <div class="col-3 d-flex justify-content-start align-items-center">
                        <p class="mb-0 me-1">{{$train['train_type']}}</p>
                        <p class="mb-0">{{$train['train_identifier']}}</p>
                    </div>
                    

                    <div class="col-3">
                        <p class="mb-0">{{$train['arriving_from']}}</p>
                        <p class="mb-0">{{$train['departure_time']}}</p>
                    </div>

                    <div class="col-3">
                        <p class="mb-0">{{$train['going_to']}}</p>
                        <p class="mb-0">{{$train['arrival_time']}}</p>
                    </div>
                    
                    <div class="col-3 d-flex justify-content-start align-items-center">
                        <p class="mx-auto mb-0">{{$train['minutes_of_delay']}}</p>
                    </div>
                
                @elseif ($train['is_canceled'] == 1)

                    <div class="col-3 d-flex justify-content-start align-items-center">
                        <p class="mb-0 me-1 text-danger">{{$train['train_type']}}</p>
                        <p class="mb-0 text-danger">{{$train['train_identifier']}}</p>
                    </div>

                    <div class="col-3">
                        <p class="mb-0 text-danger">{{$train['arriving_from']}}</p>
                        <p class="mb-0 text-danger">{{$train['departure_time']}}</p>
                    </div>

                    <div class="col-3">
                        <p class="mb-0 text-danger">{{$train['going_to']}}</p>
                        <p class="mb-0 text-danger">{{$train['arrival_time']}}</p>
                    </div>
                    
                    <p class="mx-auto mb-0 col-3"></p>

                @endif    

            </div>
        
        @endforeach
    
    </div>
    

@endsection