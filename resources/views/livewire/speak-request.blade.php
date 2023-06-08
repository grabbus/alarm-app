<div wire:poll.2500ms>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Zeit</th>
            <th scope="col">Status</th>
            <th scope="col">Rufname</th>
            <th scope="col">SA</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @isset($vehicles)
            @foreach($vehicles as $vehicle)
                @if($vehicle->status == 5 || $vehicle->status == 0)
                    <tr class="blink-bg-red">
                        <td>{{ $vehicle->updated_at }}</td>
                        <td>{{ $vehicle->status }}</td>
                        <td>{{ $vehicle->call_sign }}</td>
                        <td>
                            <button
                                id="sendSpeakPrompt"
                                class="btn btn-sm btn-info"
                                type="button"
                                wire:click="sendSpeakPrompt({{$vehicle}})"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-mic" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                    <path
                                        d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0v5zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endif
            @endforeach
        @endisset
        </tbody>
    </table>
</div>
