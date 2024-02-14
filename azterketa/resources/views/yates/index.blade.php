@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Yate lista:</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Izena</th>
                    <th>Fabrikazio urtea</th>
                    <th>Gehienezko bidaiari kopurua</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($yates as $yate)
                    <tr>
                        <td>{{ $yate->id }}</td>
                        <td>{{ $yate->izena }}</td>
                        <td>{{ $yate->fabrikazio_urtea }}</td>
                        <td>{{ $yate->bidaiari_kopurua }}</td>

                        <td>
                            <a href="{{ route('yates.edit', $yate->id) }}" class="btn btn-warning btn-sm">Eguneratu</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('alokairuas.index') }}" class="btn btn-primary btn-block mb-3">Alokairuak ikusi</a>
@endsection
