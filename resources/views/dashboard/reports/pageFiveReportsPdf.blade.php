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
                <h3>Página 5 de 21</h3>
            </td>
        </tr>

        <tr>
            <td class="field-inspection">

                <ol>
                    <li><b><h5>6. Inspeção de campo</h5></b>
                        <p>
                            <h5>&nbsp; &nbsp;6.1 Central de Detecção e Alarme</h5>
                        </p>
                    </li>
                </ol>

            </td>
        </tr>

        <tr class = "description-of-system">
            <td>
                <h3>Descrição do Sistema</h3>
            </td>
        </tr>
        <tr class = "description-of-system-datas">
            <td>
                <h3 class="italic-padding">{{$report->description_of_system}}</h3>
            </td>
        </tr>
        <tr class = "tag-localization-condition">
            <td>
                <h3>Tag</h3>
            </td>
            <td>
                <h3>Localização</h3>
            </td>
            <td>
                <h3>Condição</h3>
            </td>
        </tr>
        @foreach($equipments as $equipment)
            <tr class = "tag-localization-condition-datas">
                <td>
                    <h3>{{$equipment->tag}}</h3>
                </td>
                <td>
                    <h3>{{$equipment->localization}}</h3>
                </td>
                @if($equipment->condition == "C")
                    <td class = "initials" style="background-color: #59a106;">
                        <h3>C</h3>
                    </td>
                    <td class = "conditions">
                        <h3>Aprovado</h3>
                    </td>
                @elseif($equipment->condition == "NC")
                    <td class = "initials" style="background-color: red;">
                        <h3>NC</h3>
                    </td>
                    <td class = "conditions">
                        <h3>Não se comunica com a central</h3>
                    </td>
                @elseif($equipment->condition == "NR")
                    <td class = "initials" style="background-color: blue;">
                        <h3>NR</h3>
                    </td>
                    <td class = "conditions">
                        <h3>Não realizada</h3>
                    </td>
                @elseif($equipment->condition == "N/A")
                    <td class = "initials">
                        <h3>N/A</h3>
                    </td>
                    <td class = "conditions">
                        <h3>Não aplicável</h3>
                    </td>
                @endif
            </tr>
        @endforeach
            <tr class = "conclusion-of-system">
                <td>
                    <h3>Conclusão</h3>
                </td>
            </tr>
            <tr class = "description-of-system-datas">
                <td>
                    <h3 class="italic-padding">{{$report->description_of_conclusion}}</h3>
                </td>
            </tr>
            <tr class = "description-of-system-datas">
                <td>
                    <img
                        src="{{ public_path("storage/". $report->conclusion_image) }}"
                        class="conclusion-image"
                    >
                </td>
            </tr>
            <tr class = "legend-of-conclusion" >
                <td>
                    <h3 class="italic-padding">{{$report->legend_of_conclusion}}</h3>
                </td>
            </tr>
    </tbody>

</table>

