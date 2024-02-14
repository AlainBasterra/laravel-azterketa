@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Yatea eguneratu</h1>
        <form action="{{ route('yates.update', $yate->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="izena" class="form-label">Izena:</label>
                <input type="text" class="form-control" id="izena" name="izena" value="{{ $yate->izena }}" required>
            </div>
            <div class="mb-3">
                <label for="fabrikazio_urtea" class="form-label">Fabrikazio urtea:</label>
                <input type="number" class="form-control" id="fabrikazio_urtea" name="fabrikazio_urtea" value="{{ $yate->fabrikazio_urtea }}" required>
            </div>
            <div class="mb-3">
                <label for="bidaiari_kopurua" class="form-label">Gehienezko bidaiari kopurua:</label>
                <input type="number" class="form-control" id="bidaiari_kopurua" name="bidaiari_kopurua" value="{{ $yate->bidaiari_kopurua }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Yatea eguneratu</button>
        </form>
    </div>
@endsection
