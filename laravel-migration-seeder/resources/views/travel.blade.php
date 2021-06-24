@extends('layouts.main')

@section('content')
    <main>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Luogo</th>
                <th scope="col">Passeggeri</th>
                <th scope="col">Giorni</th>
                <th scope="col">Prezzo</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($travels as $travel )
                  <tr>
                      <td>{{ $travel['type']  }}</td>
                      <td>{{ $travel['location']  }}</td>
                      <td>{{ $travel['passeggers']  }}</td>
                      <td>{{ $travel['days']  }}</td>
                      <td>{{ $travel['price']}}€</td>
                  </tr>
                @endforeach
          
            </tbody>
          </table>
    </main>
@endsection