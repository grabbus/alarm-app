@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex gap-3">
            <a href="{{ route('control-center.create') }}"
               class="btn btn-success flex-fill">
                Neuen Einsatz erfassen
            </a>
            <a href="{{ route('control-center.all-status-two') }}"
               class="btn btn-info flex-fill">
                Alle Fahrzeuge Status 2
            </a>
            <button
                type="button"
                class="btn btn-danger flex-fill"
                onclick='playSound("{{ asset('/audio/gong.mp3') }}");'
            >
                Wachgong auslösen
            </button>
        </div>

        <hr class="my-4"/>

        <div class="row mb-4">
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
                    <th scope="col">Aktionen</th>
                </tr>
                </thead>
                <tbody>
                @isset($calls)
                    @foreach($calls as $call)
                        <tr>
                            <th scope="row">{{ $call->id }}</th>
                            <td>{{ $call->keyword }} - {{ $call->category }} - {{ $call->catchword }}</td>
                            <td>{{ $call->street }} {{ $call->housenumber }}</td>
                            <td>{{ $call->zip }} {{ $call->city }}</td>
                            <td>
                                <div class="d-flex">
                                    <livewire:alarm :call="$call"/>
                                    <a class="btn btn-secondary btn-sm me-2"
                                       href="{{ route('control-center.download', [$call->id]) }}"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                        </svg>
                                    </a>
                                    <a class="btn btn-info btn-sm me-2"
                                       href="{{ route('control-center.show', [$call]) }}"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('control-center.delete', [$call]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endisset
                </tbody>
            </table>
        </div>

        <hr class="my-4"/>

        <div class="row mb-4">
            <h4>
                Abgeschlossene Einsätze
            </h4>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nr.</th>
                    <th scope="col">Schlagwort</th>
                    <th scope="col">Anschrift</th>
                    <th scope="col">Ort</th>
                    <th scope="col">Abgeschlossen</th>
                </tr>
                </thead>
                <tbody>
                @isset($closedCalls)
                    @foreach($closedCalls as $closedCall)
                        <tr>
                            <th scope="row">{{ $closedCall->id }}</th>
                            <td>{{ $closedCall->keyword }} - {{ $closedCall->category }}
                                - {{ $closedCall->catchword }}</td>
                            <td>{{ $closedCall->street }} {{ $closedCall->housenumber }}</td>
                            <td>{{ $closedCall->zip }} {{ $closedCall->city }}</td>
                            <td>{{ $closedCall->deleted_at }}</td>
                        </tr>
                    @endforeach
                @endisset
                </tbody>
            </table>
        </div>

        <hr class="my-4"/>

        <div class="row mb-4">
            <div class="col">
                <div class="row">
                    <h4>
                        Statusverlauf
                    </h4>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Zeit</th>
                            <th scope="col">Status</th>
                            <th scope="col">Rufname</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @isset($statusLogs)
                            @foreach($statusLogs as $log)
                                <tr>
                                    <td>{{ $log->created_at }}</td>
                                    <td>{{ $log->status }}</td>
                                    <td>{{ $log->vehicle->call_sign }}</td>
                                </tr>
                            @endforeach
                        @endisset
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $statusLogs->links() }}
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="row">
                    <h4>
                        Sprechwunsch
                    </h4>
                    <livewire:speak-request :vehicles="$vehicles"/>
                </div>
            </div>
        </div>

        <div>
            <a class="btn btn-sm btn-outline-danger"
               href="{{ route('control-center.reset') }}">
                System zurücksetzen
            </a>
        </div>

    </div>
    <script>
        function playSound(url) {
            const audio = new Audio(url);
            audio.play();
        }
    </script>
@stop
