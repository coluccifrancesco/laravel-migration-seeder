@extends('layouts.master')

@section('tab')

    <div class="bg-warning p-4">

        <div class="p-4 bg-dark row text-warning mb-3">
            <p class="col-2 mb-0 text-center">Treno</p>
            <p class="col-4 mb-0 text-center">In arrivo da</p>
            <p class="col-4 mb-0 text-center">Diretto a</p>
            <p class="col-2 mb-0 text-center">Ritardo</p>
        </div>

        @foreach ($trains as $train)

            <x-row>
                {{-- Se il treno non è cancellato le informazioni sono in arancione --}}
                @if ($train['is_canceled'] == 0)
                    <x-slot:row_classes>row p-4 bg-black text-warning</x-slot:row_classes>
                {{-- Altrimenti sono in rosso --}}
                @elseif ($train['is_canceled'] == 1)
                    <x-slot:row_classes>row p-4 bg-black text-danger</x-slot:row_classes>
                @endif

                {{-- Classi per i vari riquadri del tabellone --}}
                <x-slot:side_sections_classes>h-100 p-3 bg-dark rounded d-flex justify-content-center align-items-center</x-slot:side_sections_classes>
                <x-slot:central_sections_classes>h-100 bg-dark rounded p-3 d-flex justify-content-between align-items-start flex-column</x-slot:central_sections_classes>

                {{-- Dati che popolano ogni riquadro --}}
                <x-slot:type>{{$train['train_type']}}</x-slot:type>
                <x-slot:identifier>{{$train['train_identifier']}}</x-slot:identifier>

                <x-slot:arriving_from>{{$train['arriving_from']}}</x-slot:arriving_from>
                <x-slot:departure_time>{{$train['departure_time']}}</x-slot:departure_time>

                <x-slot:going_to>{{$train['going_to']}}</x-slot:going_to>
                <x-slot:arrival_time>{{$train['arrival_time']}}</x-slot:arrival_time>

                @if ($train['minutes_of_delay'] != 0)
                    <x-slot:delay>{{$train['minutes_of_delay']}}</x-slot:delay>
                @else
                    <x-slot:delay>0</x-slot:delay>
                @endif
            </x-row>

        @endforeach

    </div>


@endsection