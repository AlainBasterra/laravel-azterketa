@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Alokairu lista:</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Alokailuaren izena</th>
                    <th>Alokatutako yatea</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($alokairuas as $alokairua)
                    <tr>
                        <td>{{ $alokairua->id }}</td>
                        <td>{{ $alokairua->izena }}</td>
                        <td>{{ $alokairua->yate_id }}</td>

                        <td>
                            <a href="{{ route('alokairuas.edit', $alokairua->id) }}" class="btn btn-warning btn-sm">Eguneratu</a>
                        </td>
                        <td>
                            <form action="{{ route('alokairuas.destroy', $alokairua->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Zihuar zaude alokairua nahi duzula ezabatu?')">Ezabatu</button>
                            </form>
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('yates.index') }}" class="btn btn-primary btn-block mb-3">Yateak ikusi</a>
@endsection
