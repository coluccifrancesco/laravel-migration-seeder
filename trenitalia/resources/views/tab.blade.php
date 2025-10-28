@extends('layouts.master')

@section('tab')

    <div class="bg-warning p-4">

        <div class="p-4 bg-dark row text-warning mb-3">
            <p class="col-2 mb-0">Treno</p>
            <p class="col-3 mb-0">In arrivo da</p>
            <p class="col-3 mb-0">Diretto a</p>
            <p class="col-1 mb-0">Ritardo</p>
        </div>

        @foreach ($trains as $train)


            @if ($train['is_canceled'] == 0)
                
                <div class="row p-4 bg-black">
                    
                    <div class="bg-dark rounded text-warning col-2 d-flex justify-content-start align-items-center">
                        <p class="mb-0 me-1">{{$train['train_type']}}</p>
                        <p class="mb-0">{{$train['train_identifier']}}</p>
                    </div>
                    

                    <div class="bg-dark rounded text-warning col-3">
                        <p class="mb-0">{{$train['arriving_from']}}</p>
                        <p class="mb-0">{{$train['departure_time']}}</p>
                    </div>

                    <div class="bg-dark rounded text-warning col-3">
                        <p class="mb-0">{{$train['going_to']}}</p>
                        <p class="mb-0">{{$train['arrival_time']}}</p>
                    </div>
                        
                    <div class="bg-dark rounded text-warning col-1 d-flex justify-content-start align-items-center">
                            
                        @if ($train['has_delay'] === 1)
                            <p class="mb-0">{{$train['minutes_of_delay']}}</p>
                        @elseif($train['has_delay'] === 0)
                            <p class="mb-0">0</p>
                        @endif
    
                    </div>
                    
                </div>
                
            @elseif ($train['is_canceled'] == 1)

                <div class="row p-4 bg-black">

                    <div class="bg-dark rounded col-2 text-danger d-flex justify-content-start align-items-center">
                        <p class="mb-0 me-1">{{$train['train_type']}}</p>
                        <p class="mb-0">{{$train['train_identifier']}}</p>
                    </div>

                    <div class="bg-dark rounded text-danger col-3">
                        <p class="mb-0">{{$train['arriving_from']}}</p>
                        <p class="mb-0">{{$train['departure_time']}}</p>
                    </div>

                    <div class="bg-dark rounded text-danger col-3">
                        <p class="mb-0">{{$train['going_to']}}</p>
                        <p class="mb-0">{{$train['arrival_time']}}</p>
                    </div>

                    <div class="bg-dark rounded text-danger col-1 d-flex justify-content-start align-items-center">
                        <p class="mb-0">X</p>
                    </div>

                </div>
                
            @endif    

        
        @endforeach
    
    </div>
    

@endsection