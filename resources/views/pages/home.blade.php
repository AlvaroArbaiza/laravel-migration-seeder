@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel Migration Seeder
@endsection

{{-- body content --}}
@section('content')
    <div class="container">
        <div class="row row-gap-4">

            @foreach ($trains as $train)        
                <div class="col-4">
                    <div class="card">
            
                        <div class="card-body">
                            <h5 class="card-title">{{ $train['azienda'] }}</h5>
                        </div>
            
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Codice Treno: {{ $train['codice_treno'] }}
                            </li>
                            <li class="list-group-item">
                                Numero Carrozze: {{ $train['numero_carrozze'] }}
                            </li>
                            <li class="list-group-item">
                                Stazione di Partenza: {{ $train['stazione_di_partenza'] }}
                            </li>
                            <li class="list-group-item">
                                Orario di Partenza: {{ $train['orario_di_partenza'] }}
                            </li>
                            <li class="list-group-item">
                                Orario di Arrivo: {{ $train['orario_di_arrivo'] }}
                            </li>
                            <li class="list-group-item">
                                Arrivo: {{ $train['in_orario'] ? "In orario" : "In ritardo di 10 minuti" }}                                
                            </li>
                            <li class="list-group-item">
                                Cancellato: {{ $train['cancellato'] ? "Si" : "No" }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection