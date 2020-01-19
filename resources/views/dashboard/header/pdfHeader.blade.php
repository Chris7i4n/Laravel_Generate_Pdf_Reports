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
