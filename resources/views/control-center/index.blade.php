@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <button class="btn btn-primary">
                Neuen Einsatz erfassen
            </button>
        </div>

        <hr/>

        <div class="row">
            <h4>
                Laufende Einsätze
            </h4>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nr.</th>
                    <th scope="col">Schlagwort</th>
                    <th scope="col">Anschrift</th>
                    <th scope="col">Ort</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ACB KRAFTSTOFF</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

        <hr/>
    </div>
@stop
