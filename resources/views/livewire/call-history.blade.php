<div>
    <div class="mb-2">
        @isset($histories)
            @foreach($histories as $history)
                <div class="input-group mb-2">
                    <input
                        type="text"
                        class="form-control"
                        aria-label="History log"
                        aria-describedby="basic-addon2"
                        value="{{ $history->message }}"
                    >
                    <span class="input-group-text" id="basic-addon2">{{ \Carbon\Carbon::parse($history->created_at) }}</span>
                </div>
            @endforeach
        @endisset
    </div>
    <hr/>
    <div class="d-grid gap-2">
        <textarea
            wire:model="message"
            id="message"
            name="message"
            placeholder="Einsatzdokumentation"
            class="form-control"></textarea>
        @error('message') <span class="link-danger">{{ $message }}</span> @enderror
        <button
        id="addMessage"
        class="btn btn-outline-success"
        type="button"
        wire:click="addMessage"
        >
            Hinzufügen
        </button>
    </div>
</div>
