@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Alokairua eguneratu</h1>
        <form action="{{ route('alokairuas.update', $alokairua->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="izena" class="form-label">Alokairua: </label>
                <input type="text" class="form-control" id="izena" name="izena" value="{{ $alokairua->izena }}" required>
            </div>
            <div class="mb-3">
                <label for="yate_id" class="form-label">Yatea: </label>
                <select class="form-control" id="yate_id" name="yate_id" required>
                    @foreach($yates as $yate)
                        <option value="{{ $yate->id }}">{{ $yate->izena }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Alokairua eguneratu</button>
        </form>
    </div>
@endsection
