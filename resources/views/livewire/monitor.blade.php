<div>
            <div class="card
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
</div>
