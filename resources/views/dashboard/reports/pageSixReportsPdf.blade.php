<table class="table-reports table-small table-width" >
        <tr class="table-employee-head" >
            <th>
                <img
                    src="{{ public_path("storage/". $report->logoCompanyContracted) }}"
                    class = "logo-header"
                >
            </th>
            <th>
                <div class="table-title" >
                    <h2>Relatório Técnico de Inspeção de Sistemas de Proteção Contra Incêndio - {{$report->type}}
                    </h2>
                </div>
                <div class = "clientDiv" >
                    <div class="client" >
                        <span>Cliente: </span>
                        <h3>{{$report->unity->company->first()->company }}</h3>
                    </div>
            </th>
            <th>
                <img
                    src="{{ public_path("storage/". $report->logoCompanyContracting) }}"
                    class = "logo-header"
                >
            </th>

        </tr>
    <tbody>
        <tr class="table-id-fields">
            <td >
                <span >Unidade:</span>
                <h3>{{$report->unity->name}}</h3>
            </td>
            <td>
                <span>Número Documento:</span>
                <h3>US{{$yearNumberForDocumentNumber}}-RTSPCI-{{$codeNumberForDocumentNumber}}-{{$companyNameForDocumentNumber}}</h3>
            </td>
            <td>
                <span>Folha:</span>
                <h3>Página 6 de 21</h3>
            </td>
        </tr>

        <tr>
            <td class="triggers">

                <ol>
                    <li><b><h5>6.2 Acionadores Manuais e Sirenes Audiovisuais</h5></b></li>
                </ol>

            </td>
        </tr>

        <tr class = "triggers-header-table">
            <td>
                <h3>&nbsp;C - <span class="according">CONFORME&nbsp;</span></h3>
            </td>
            <td>
                <h3>NC - <span class="non-according">NÃO CONFORME&nbsp;</span></h3>
            </td>
            <td>
                <h3>&nbsp;NR - <span class="non-done">NÃO REALIZADA&nbsp;</span></h3>
            </td>
            <td>
                <h3>&nbsp;N/A - NÃO APLICÁVEL&nbsp;</h3>
            </td>
        </tr>
        <tr class = "sinalization-inspection-table">
            <td>
                <ol>
                    <li>
                        <h3><span>#</span> O que foi inspecionado?</h3>
                    </li>
                    <li>
                        <h3><span>01</span> Condições da botoeira</h3>
                    </li>
                    <li>
                        <h3><span>02</span> Condições do vidro</h3>
                    </li>
                    <li>
                        <h3><span>03</span> Condições do LED verde</h3>
                    </li>
                    <li>
                        <h3><span>04</span> Condições do LED vermelho</h3>
                    </li>
                    <li>
                        <h3><span>05</span> Botão acionador</h3>
                    </li>
                </ol>
            </td>
            <td>
                <ol>
                    <li>
                        <h3><span>#</span> O que foi inspecionado?</h3>
                    </li>
                    <li>
                        <h3><span>01</span> Condições da botoeira</h3>
                    </li>
                    <li>
                        <h3><span>02</span> Condições do vidro</h3>
                    </li>
                    <li>
                        <h3><span>03</span> Condições do LED verde</h3>
                    </li>
                    <li>
                        <h3><span>04</span> Condições do LED vermelho</h3>
                    </li>
                    <li>
                        <h3><span>05</span> Botão acionador</h3>
                    </li>
                </ol>
            </td>
        </tr>
        <tr class = "description-of-elements">
            <td>
                <h3>DESCRIÇÃO DOS ELEMENTOS</h3>
            </td>
        </tr>
        <tr class = "description-of-elements-list">
            <td>
                @foreach($descriptionOfElements as $descriptionOfElement)
                    <li>
                        <h3> {{$descriptionOfElement}} </h3>
                    </li>
                @endforeach
            </td>
        </tr>
        <tr class = "localization-of-equipments">
            <td>
                <h3>#</h3>
            </td>
            <td>
                <h3>Localização</h3>
            </td>
            <td>
                <h3>1</h3>
            </td>
            <td>
                <h3>2</h3>
            </td>
            <td>
                <h3>3</h3>
            </td>
            <td>
                <h3>4</h3>
            </td>
            <td>
                <h3>5</h3>
            </td>
            <td>
                <h3>6</h3>
            </td>
            <td>
                <h3>7</h3>
            </td>
            <td>
                <h3>8</h3>
            </td>
            <td>
                <h3>9</h3>
            </td>
            <td>
                <h3>10</h3>
            </td>
            <td>
                <h3>Observação</h3>
            </td>
        </tr>

        @foreach ($triggers as $key => $trigger )
            <tr class = "localization-of-equipments-datas">
                <td class="localization-of-equipments-data">
                    <h3>{{$trigger->initials}}-{{$key+1}}</h3>
                </td>
                <td class="localization-of-equipments-data">
                    <h3 class="localization-of-equipments-h3" >{{$trigger->localization}}</h3>
                </td>
                @if($trigger->question_01 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_01}}</h3>
                    </td>
                @elseif($trigger->question_01 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_01}}</h3>
                    </td>
                @elseif($trigger->question_01 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_01}}</h3>
                    </td>
                @elseif($trigger->question_01 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_01}}</h3>
                    </td>
                @endif

                @if($trigger->question_02 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_02}}</h3>
                    </td>
                @elseif($trigger->question_02 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_02}}</h3>
                    </td>
                @elseif($trigger->question_02 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_02}}</h3>
                    </td>
                @elseif($trigger->question_02 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_02}}</h3>
                    </td>
                @endif

                @if($trigger->question_03 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_03}}</h3>
                    </td>
                @elseif($trigger->question_03 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_03}}</h3>
                    </td>
                @elseif($trigger->question_03 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_03}}</h3>
                    </td>
                @elseif($trigger->question_03 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_03}}</h3>
                    </td>
                @endif

                @if($trigger->question_04 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_04}}</h3>
                    </td>
                @elseif($trigger->question_04 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_04}}</h3>
                    </td>
                @elseif($trigger->question_04 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_04}}</h3>
                    </td>
                @elseif($trigger->question_04 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_04}}</h3>
                    </td>
                @endif

                @if($trigger->question_05 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_05}}</h3>
                    </td>
                @elseif($trigger->question_05 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_05}}</h3>
                    </td>
                @elseif($trigger->question_05 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_05}}</h3>
                    </td>
                @elseif($trigger->question_05 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_05}}</h3>
                    </td>
                @endif

                @if($trigger->question_06 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_06}}</h3>
                    </td>
                @elseif($trigger->question_06 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_06}}</h3>
                    </td>
                @elseif($trigger->question_06 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_06}}</h3>
                    </td>
                @elseif($trigger->question_06 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_06}}</h3>
                    </td>
                @endif

                @if($trigger->question_07 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_07}}</h3>
                    </td>
                @elseif($trigger->question_07 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_07}}</h3>
                    </td>
                @elseif($trigger->question_07 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_07}}</h3>
                    </td>
                @elseif($trigger->question_07 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_07}}</h3>
                    </td>
                @endif

                @if($trigger->question_08 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_08}}</h3>
                    </td>
                @elseif($trigger->question_08 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_08}}</h3>
                    </td>
                @elseif($trigger->question_08 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_08}}</h3>
                    </td>
                @elseif($trigger->question_08 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_08}}</h3>
                    </td>
                @endif

                @if($trigger->question_09 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_09}}</h3>
                    </td>
                @elseif($trigger->question_09 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_09}}</h3>
                    </td>
                @elseif($trigger->question_09 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_09}}</h3>
                    </td>
                @elseif($trigger->question_09 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_09}}</h3>
                    </td>
                @endif

                @if($trigger->question_10 == "C")
                    <td>
                        <h3 class="color-white"> {{$trigger->question_10}}</h3>
                    </td>
                @elseif($trigger->question_10 == "NC")
                    <td style="background-color: red;">
                        <h3 class="color-white" > {{$trigger->question_10}}</h3>
                    </td>
                @elseif($trigger->question_10 == "NR")
                    <td style="background-color: blue;">
                        <h3 class="color-white" > {{$trigger->question_10}}</h3>
                    </td>
                @elseif($trigger->question_10 == "N/A")
                    <td style="background-color: black;">
                        <h3 class="color-white" > {{$trigger->question_10}}</h3>
                    </td>
                @endif

                <td class="localization-of-equipments-data">
                    <h3>{{$trigger->note}}</h3>
                </td>
            </tr>
        @endforeach
        <tr class = "conclusion-of-trigger">
            <td>
                <h3>Conclusão</h3>
            </td>
        </tr>
        <tr class = "conclusion-of-trigger-datas">
            <td>
                <h3>{{$report->conclusion_of_trigger}}</h3>
            </td>
        </tr>
        <tr class = "conclusion-of-trigger-images">
            <td>
                <img
                    src="{{ public_path("storage/". $report->conclusion_image_trigger_1) }}"
                    class="conclusion-trigger-image"
                >
            </td>
            <td>
                <img
                    src="{{ public_path("storage/". $report->conclusion_image_trigger_2) }}"
                    class="conclusion-trigger-image"
                >
            </td>
        </tr>
        <tr class = "legend-of-trigger fixed-padding">
            <td>
                <h3>{{$report->conclusion_legend}}</h3>
            </td>
        </tr>
        <tr class = "margin-when-page-break"></tr>
    </tbody>
</table>
