<div>
    <div id="sender">
        <h4>
            ------------------------------------------------------------
            FAX
            ------------------------------------------------------------
        </h4>
        <table>
            <tr>
                <td>Absender:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Leitstelle Burgthann</td>
            </tr>
            <tr>
                <td>Telefonnummer:</td>
                <td></td>
                <td>+49 9183 939112</td>
            </tr>
            <tr>
                <td>Einsatznummer:</td>
                <td></td>
                <td>{{ $data['call_id'] }}</td>
            </tr>
        </table>
    </div>


    <div id="caller">
        <h4>
            -------------------------------------------------------
            MITTEILER
            -------------------------------------------------------
        </h4>
        <table>
            <tr>
                <td>Name:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    @empty($data['caller'])
                        -
                    @else
                        {{ $data['caller'] }}
                    @endempty
                </td>
            </tr>
            <tr>
                <td>Rufnummer:</td>
                <td></td>
                <td>
                    @empty($data['caller_phone_number'])
                        -
                    @else
                        {{ $data['caller_phone_number'] }}
                    @endempty
                </td>
            </tr>
        </table>
    </div>

    <div>
        <h4>
            -------------------------------------------------------
            EINSATZORT
            -------------------------------------------------------
        </h4>
        <table>
            <tr>
                <td>Straße:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>{{ $data['street'] }} {{ $data['house_number'] }}</td>
            </tr>
            <tr>
                <td>Abschnitt:</td>
                <td></td>
                <td>
                    @empty($data['section'])
                        -
                    @else
                        {{ $data['section'] }}
                    @endempty
                </td>
            </tr>
            <tr>
                <td>Ort:</td>
                <td></td>
                <td>{{ $data['zip'] }} {{ $data['city'] }}</td>
            </tr>
            <tr>
                <td>Objekt:</td>
                <td></td>
                <td>
                    @empty($data['object'])
                        -
                    @else
                        {{ $data['object'] }}
                    @endempty
                </td>
            </tr>
        </table>
    </div>

    <div>
        <h4>
            -----------------------------------------------------
            EINSATZGRUND
            -----------------------------------------------------
        </h4>
        <table>
            <tr>
                <td>Stichwort:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><b>{{ $data['keyword'] }}</b></td>
            </tr>
            <tr>
                <td>Schlagwort:</td>
                <td></td>
                <td>#{{ $data['category'] }} #{{ $data['catchword'] }}</td>
            </tr>
            <tr>
                <td>Priorität:</td>
                <td></td>
                <td>
                    <b>{{ $data['priority'] }}</b>
                    (1=Notfall / 2=dringend / 3=nicht zeitkritisch)
                </td>
            </tr>
        </table>
    </div>

    <div>
        <h4>
            ----------------------------------------------------
            EINSATZMITTEL
            ----------------------------------------------------
        </h4>
        <table>
            @for($i = 1; $i <= count($data['vehicles']); $i++)
                <tr>
                    <td>Name:</td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>{{ $data['vehicles'][$i-1]['call_sign'] }}</td>
                </tr>
                <tr>
                    <td>Typ:</td>
                    <td></td>
                    <td>{{ $data['vehicles'][$i-1]['type_long'] }}</td>
                </tr>
            @endfor
        </table>
    </div>

    <div>
        <h4>
            -------------------------------------------------------
            BEMERKUNG
            -------------------------------------------------------
        </h4>
        <table>
            <tr>
                <td>{{ $data['note'] }}</td>
            </tr>
        </table>
    </div>

    <h4>
        ------------------------------------------------------------
        FAX
        ------------------------------------------------------------
    </h4>
</div>
