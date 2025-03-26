<div wire:poll>
    <div class="d-flex">
        <div class="card rounded-2 dme-bg-light border-5 border-dark" style="width: 280px">
            <div class="p-3">
                <div class="dme-bg-dark rounded-3 px-2 pb-4 border-5 border-dark">
                    <div class="card-body">
                        <div class="card dme-bg-display border-5 border-dark">
                            <div class="card-body" style="height: 160px;">
                                <p class="card-text font-monospace">
                                    @isset($message)
                                        {{ $message }}
                                    @endisset
                                    @isset($address)
                                        {{ $address }}
                                    @endisset
                                </p>
                            </div>
                        </div>
                        <div class="text-center text-white mt-2 mb-3">
                            <b>ALARMPHONE</b>
                        </div>
                        <div class="mb-5">
                            <button
                                id="btn_ack"
                                type="button"
                                class="btn btn-warning btn-circle btn-xl"
                                wire:click="acknowledge"
                                onclick="stopAlarm()"
                            ></button>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let dme = new Audio("{{ asset('/audio/dme.mp3') }}");
        let alarmedAt = new Date({!! json_encode($alarmedAt) !!});
        let now = new Date();
        let status = {!! json_encode($status) !!};
        let pusher = new Pusher('375eedcece7cfce060da', {
            encrypted: true,
            cluster: 'eu'
        });

        let channel = pusher.subscribe('vehicle-alarmed');

        channel.bind('App\\Events\\VehicleAlarmed', function(data) {
        if (status === 'C' && (now.getMinutes() === alarmedAt.getMinutes())) {
            dme.play();
        }
        });
    </script>
{{-- Old Method - no pusher useage --}}
{{--    <script>--}}
{{--        setTimeout(function () {--}}
{{--            window.location.reload();--}}
{{--        }, 12000);--}}
{{--        let dme = new Audio("{{ asset('/audio/dme.mp3') }}");--}}

{{--        window.addEventListener("load", (event) => {--}}
{{--            let status = {!! json_encode($status) !!};--}}
{{--            let alarmedAt = new Date({!! json_encode($alarmedAt) !!});--}}
{{--            let now = new Date();--}}

{{--            if (--}}
{{--                status === 'C'--}}
{{--                && (now.getMinutes() === alarmedAt.getMinutes())--}}
{{--            ) {--}}
{{--                dme.play();--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
</div>
