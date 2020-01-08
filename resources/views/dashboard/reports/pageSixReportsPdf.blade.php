<table class="table-reports table-small table-width" >
    <thead>
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
    </thead>
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
        <tr class = "triggers-inspection-table">
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
        <tr class = "localization-of-equipments">
            <td class="localization-of-equipments-data">
                <h3>AC-01</h3>
            </td>
            <td class="localization-of-equipments-data">
                <h3 class="localization-of-equipments-h3" >ADM - Estacionamento Interno</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td>
                <h3 class="color-white">C</h3>
            </td>
            <td class="localization-of-equipments-data">
                <h3>Sirene queimada</h3>
            </td>
        </tr>
    </tbody>
</table>
