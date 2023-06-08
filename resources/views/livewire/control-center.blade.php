<div>
    <a href="{{ route('control-center.index') }}"
       class="btn btn-primary mb-3">
        Zurück
    </a>

    <h4 class="mb-3 fw-bold">Neuen Einsatz anlegen</h4>

    <h5 class="mb-3 fw-bold">Einsatzort</h5>
    <form wire:submit.prevent="submit">
        <div class="row mb-2">
            <div class="col">
                <label class="form-label"
                       for="caller">Meldender</label>
                <input id="caller"
                       name="caller"
                       type="text"
                       class="form-control"
                       wire:model="caller"
                >
            </div>
            <div class="col">
                <label class="form-label"
                       for="caller_phone_number">Meldender Telefonnummer</label>
                <input id="caller_phone_number"
                       name="caller_phone_number"
                       type="text"
                       class="form-control"
                       wire:model="callerPhoneNumber"
                >
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label class="form-label" for="street">Straße *</label>
                <input id="street"
                       name="street"
                       type="text"
                       class="form-control"
                       wire:model="street"
                >
                @error('street') <span class="link-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-3">
                <label class="form-label" for="house_number">Hausnummer</label>
                <input id="house_number"
                       name="house_number"
                       type="text"
                       class="form-control"
                       wire:model="houseNumber"
                >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="city">Stadt *</label>
                <input id="city"
                       name="city"
                       type="text"
                       class="form-control"
                       wire:model="city"
                >
                @error('city') <span class="link-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-3">
                <label class="form-label" for="zip">Postleitzahl *</label>
                <input id="zip"
                       name="zip"
                       type="text"
                       class="form-control"
                       wire:model="zip"
                >
                @error('zip') <span class="link-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="section">Abschnitt</label>
                <input id="section"
                       name="section"
                       type="text"
                       class="form-control"
                       wire:model="section"
                >
            </div>
            <div class="col">
                <label class="form-label" for="object">Objekt</label>
                <input id="object"
                       name="object"
                       type="text"
                       class="form-control"
                       wire:model="object"
                >
            </div>
        </div>


        <h5 class="mb-3 fw-bold">Einsatzstichwort und Priorität</h5>
        <div class="row mb-2">
            <div class="col">
                <label class="form-label" for="keyword">Einsatzstichwort *</label>
                <select
                    id="keyword"
                    name="keyword"
                    class="form-select"
                    aria-label="Einsatzstichwort"
                    wire:model="selectedKeyword"
                >
                    <option value="" selected>Einsatzstichwort auswählen...</option>
                    @isset($keywords)
                        @foreach($keywords as $keyword)
                            <option value="{{ $keyword->id }}">
                                {{ $keyword->keyword }} -
                                {{ $keyword->category }} -
                                {{ $keyword->catchword }}
                            </option>
                        @endforeach
                    @endisset
                </select>
            </div>
            @error('selectedKeyword') <span class="link-danger">{{ $message }}</span> @enderror
        </div>

        <div class="row mb-3">
            <div class="col">
                <div>
                    <label class="form-label mb-0">Priorität *</label>
                    <p class="small text-muted">
                        1 = Notfall / 2 = dringend / 3 = nicht zeitkritisch
                    </p>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input"
                           type="radio"
                           name="priority"
                           id="priority_1"
                           value="1" checked
                           wire:model="priority">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="priority" id="priority_2"
                           value="2" wire:model="priority">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="priority" id="priority_3"
                           value="3" wire:model="priority">
                    <label class="form-check-label" for="inlineRadio2">3</label>
                </div>
            </div>
            @error('priority') <span class="link-danger">{{ $message }}</span> @enderror
        </div>

        <h5 class="mb-3 fw-bold">Einsatzmittel</h5>

        <div class="row mb-4">
            <div class="col">
                @isset($vehicles)
                    @foreach($vehicles as $vehicle)
                        <input
                            type="checkbox"
                            class="btn-check"
                            id="btn-resources-{{ $vehicle->id }}"
                            autocomplete="off"
                            value="{{ $vehicle->id }}"
                            wire:model="selectedResources"
                        >
                        <label
                            class="btn btn-lg btn-outline-primary me-3 mb-3"
                            for="btn-resources-{{ $vehicle->id }}">
                            {{ $vehicle->call_sign }}
                        </label>
                    @endforeach
                @endisset
            </div>
            @error('selectedResources') <span class="link-danger">{{ $message }}</span> @enderror
        </div>

        <h5 class="mb-3 fw-bold">Sonstiges</h5>

        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="note">Bemerkung</label>
                <textarea id="note"
                          name="note"
                          class="form-control"
                          wire:model="note"
                ></textarea>
            </div>
        </div>

        <h5 class="mb-3 fw-bold">Disponieren</h5>

        <div class="row mb-4">
                <p class="text-muted">
                    Möchten Sie den Einsatz zu einem bestimmten Datum oder einer bestimmen Uhrzeit disponieren, können Sie dies hier einstellen.
                    Die Einsatzmittel werden dann zu der eingestellten Uhrzeit alarmiert.
                    Beachten Sie dass disponierte Einsätze nicht manuell alarmiert werden können.
                </p>
                <div class="col">
                    <label class="form-label" for="date">Datum</label>
                    <input id="date"
                           name="date"
                           type="date"
                           class="form-control"
                           wire:model="date"
                    >
                    @error('date') <span class="link-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col">
                    <label class="form-label" for="date">Uhrzeit</label>
                    <input id="time"
                           name="time"
                           type="time"
                           class="form-control"
                           wire:model="time"
                    >
                    @error('time') <span class="link-danger">{{ $message }}</span> @enderror
                </div>
        </div>

        <button
            class="btn btn-success btn-lg"
            id="submit"
            type="submit">
            Erfassen
        </button>
    </form>
</div>
