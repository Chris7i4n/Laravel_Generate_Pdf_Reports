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
        </tr>

        <tr>
            <td class="triggers">

                <ol>
                    <li><b><h5>7.0 Recomendações</h5></b></li>
                </ol>

            </td>
        </tr>

        <tr class = "recomendations">
            <td>
                <h3>Item</h3>
            </td>
            <td>
                <h3>Descrição</h3>
            </td>
            <td>
                <h3>Respons.</h3>
            </td>
            <td>
                <h3>Prazo</h3>
            </td>
        </tr>
        <tr class = "recomendations-datas">
            @foreach ($recomendations as $key => $recomendation)
                <td>
                    <h3>{{$key+1}}</h3>
                </td>
                <td>
                    <h3>{{$recomendation->description }}</h3>
                </td>
                <td>
                    <h3>{{$recomendation->responsable }}</h3>
                </td>
                <td>
                    <h3>{{ date('d/m/Y', strtotime($recomendation->date))  }}</h3>
                </td>
            @endforeach
        </tr>
        <tr class = "responsabilities-datas-last-child">
        </tr>
        <tr class = "margin-when-page-break"></tr>

    </tbody>
</table>
