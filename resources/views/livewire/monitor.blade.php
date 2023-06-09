<div>
    <div
        class="card
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
                    bg-status-0 text-white
                @elseif($status == 'C')
                    bg-status-c
                @elseif($status == 'J')
                    bg-status-j
                @endif
                mb-3 ">
        <div class="card-body">
            <h2 class="card-title d-flex justify-content-between align-items-center">
                {{ $callSign }}
                <div>
                    {{ $status }}
                </div>
            </h2>
            <h6 class="card-subtitle">
                {{ $type }}
            </h6>
        </div>
    </div>
    <script>
        setTimeout(function () {
            window.location.reload();
        }, 12000);
    </script>
</div>
