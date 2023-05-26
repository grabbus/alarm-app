<div>
    <div class="card w-100
                    @if($status == 1)
                    bg-status-1
                @elseif($status == 2)
                    bg-status-2
                @elseif($status == 3)
                    bg-status-3
                @elseif($status == 4)
                    bg-status-4
                @elseif($status == 5)
                    bg-status-5 text-white
                @endif
        mb-lg-4 mb-3">
        <div class="card-body">
            <h1 class="card-title d-flex justify-content-between align-items-center">
                {{ $callSign }}
                <div>
                    Sprechwunsch - {{ $status }}
                </div>
            </h1>
            <p class="card-text">
                {{ $typeLong }}
            </p>
        </div>
    </div>

    <div class="row row-cols-3 text-center align-items-center">
        {{-- Status 1 --}}
        <div class="col mb-2">
            {{ $status }}
            <button class="card w-100" wire:click="$set('status', '1')">
                <div class="card-body">
                    <h2 class="card-title">1</h2>
                </div>
            </button>
        </div>
       {{-- Status 2 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus(2)">
                <div class="card-body">
                    <h2 class="card-title">2</h2>
                </div>
            </button>
        </div>
        {{-- Status 2 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus(3)">
                <div class="card-body">
                    <h2 class="card-title">3</h2>
                </div>
            </button>
        </div>
        {{-- Status 4 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">4</h2>
                </div>
            </div>
        </div>
        {{-- Status 5 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">5</h2>
                </div>
            </div>
        </div>
        {{-- Status 6 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">6</h2>
                </div>
            </div>
        </div>
        {{-- Status 7 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">7</h2>
                </div>
            </div>
        </div>
        {{-- Status 8 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">8</h2>
                </div>
            </div>
        </div>
        {{-- Status 9 --}}
        <div class="col mb-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">9</h2>
                </div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
            </div>
        </div>
        {{-- Status 0 --}}
        <div class="col mb-2">
            <div class="card">
                <button class="card w-100" wire:click="setStatus(0)">
                    <div class="card-body">
                        <h2 class="card-title">0</h2>
                    </div>
                </button>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
            </div>
        </div>
    </div>

</div>
