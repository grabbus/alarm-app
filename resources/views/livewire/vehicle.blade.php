<div wire:poll>
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
                @elseif($status == 6)
                    bg-status-6
                @elseif($status == 7)
                    bg-status-7
                @elseif($status == 8)
                    bg-status-8
                @elseif($status == 9)
                    bg-status-9
                @elseif($status == 0)
                    bg-status-0
                @elseif($status == 'C')
                    bg-status-c blink-bg-red
                @elseif($status == 'J')
                    bg-status-j blink-bg-orange
                @endif
        mb-lg-3 mb-3">
        <div class="card-body">
            <h1 class="card-title d-flex justify-content-between align-items-center">
                {{ $callSign }}
                <div>
                    {{ $status }}
                </div>
            </h1>
            <p class="card-text">
                {{ $typeLong }}
            </p>
        </div>
    </div>

    @if($status === 'C' || $status === 'J')
        <div class="d-grid gap-2">
            <button
                id="acknowledge_call"
                class="btn btn-outline-success mb-3"
                wire:click="sendAcknowledgment"
            >
                Empfangsbestätigung
            </button>
        </div>
    @endif

    <div class="row row-cols-3 align-items-center text-center mb-4">
        {{-- Status 1 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('1')">
                <div class="card-body">
                    <h2 class="card-title">1</h2>
                </div>
            </button>
        </div>
        {{-- Status 2 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('2')">
                <div class="card-body">
                    <h2 class="card-title">2</h2>
                </div>
            </button>
        </div>
        {{-- Status 2 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('3')">
                <div class="card-body">
                    <h2 class="card-title">3</h2>
                </div>
            </button>
        </div>
        {{-- Status 4 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('4')">
                <div class="card-body">
                    <h2 class="card-title">4</h2>
                </div>
            </button>
        </div>
        {{-- Status 5 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('5')">
                <div class="card-body">
                    <h2 class="card-title">5</h2>
                </div>
            </button>
        </div>
        {{-- Status 6 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('6')">
                <div class="card-body">
                    <h2 class="card-title">6</h2>
                </div>
            </button>
        </div>
        {{-- Status 7 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('7')">
                <div class="card-body">
                    <h2 class="card-title">7</h2>
                </div>
            </button>
        </div>
        {{-- Status 8 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('8')">
                <div class="card-body">
                    <h2 class="card-title">8</h2>
                </div>
            </button>
        </div>
        {{-- Status 9 --}}
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('9')">
                <div class="card-body">
                    <h2 class="card-title">9</h2>
                </div>
            </button>
        </div>
        {{-- Status 0 --}}
        <div class="col mb-2">
            <div class="card">
            </div>
        </div>
        <div class="col mb-2">
            <button class="card w-100" wire:click="setStatus('0')">
                <div class="card-body">
                    <h2 class="card-title">0</h2>
                </div>
            </button>
        </div>
        <div class="col mb-2">
            <div class="card">
            </div>
        </div>
    </div>

    <div class="float-end">
        <p>{{ date('d.m.Y H:i') }}</p>
    </div>

    <script>
        setTimeout(function () {
            window.location.reload();
        }, 12000);

        document.addEventListener('livewire:load', function () {
            let status = new Audio("{{ asset('/audio/tetra_status.mp3') }}");
            Livewire.on('changed-status', () => {
                status.play()
            })
        });

        window.addEventListener("load", (event) => {
            let status = {!! json_encode($status) !!};
            let alarmedAt = new Date({!! json_encode($alarmedAt) !!});
            let now = new Date();
            var fms = new Audio("{{ asset('/audio/fms_alarm.mp3') }}");

            if (
                status === 'C'
                && (now.getMinutes() === alarmedAt.getMinutes())
            ) {
                fms.play();
            }
        });
    </script>
</div>
