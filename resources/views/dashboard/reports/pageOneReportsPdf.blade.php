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
                <div class="inspection " >
                    <span>Inspeção: </span>
                    <h3>{{$report->inspection_number}}ª  INSPEÇÃO - {{$report->inspection_year}}</h3>
                </div>
                <div class="period" >
                    <span>periodo:</span>
                    <h3>{{$report->period}}</h3>
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
    <tr class="table-data">
        <td>
            <h3>Dados Contratada</h3>
            <ul>
                <li><span><b>EMPRESA:</b></span>{{$companyContracted->company}}</li>
                <li><span><b>ENDEREÇO:</b></span>{{$companyContracted->address}}</li>
                <li><span><b>CNPJ:</b></span>{{$companyContracted->cnpj}}</li>
                <li><span><b>TELEFONE:</b></span>{{$companyContracted->phone}}</li>
                <li><span><b>RESPONSÁVEL TÉCNICO:</b></span>{{$companyContracted->tecnical_responsable}}</li>
            </ul>
        </td>
        <td>
            <h3>Dados Contratante</h3>
            <ul>
                <li><span><b>EMPRESA:</b></span> {{$report->unity->company->first()->company }} </li>
                <li><span><b>ENDEREÇO:</b></span>{{$report->unity->address }} </li>
                <li><span><b>CNPJ:</b></span>{{$report->unity->cnpj }} </li>
                <li><span><b>TELEFONE:</b></span>{{$report->unity->phone }} </li>
                <li><span><b>RESPONSÁVEL CONTRATANTE:</b></span>{{$report->unity->contracting_responsable }} </li>
        </td>
    </tr>
    <tr class="index-of-revisions">
        <td>
            <h3>Índice de revisões</h3>
        </td>
    </tr>
    <tr class="revisions-description">
        <td class = "revisions">
            <h3>Rev.</h3>
        </td>
        <td class="descriptions">
            <h3> Descrição e/ou folhas atingidas</h3>
        </td>
    </tr>

    <tr class="list-of-revisions border-list">
        <td class = "list-of-revisions-number">
            <h3>0</h3>
        </td>
        <td class="list-of-descriptions">
            <h3> {{$report->description_first_revision }}</h3>
        </td>
    </tr>

    @if($report->description_second_revision != null)
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3>1</h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_second_revision}}</h3>
            </td>
        </tr>
    @else
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3></h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_second_revision}}</h3>
            </td>
        </tr>
    @endif

    @if($report->description_third_revision != null)
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3>2</h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_third_revision }}</h3>
            </td>
        </tr>
    @else
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3></h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_third_revision }}</h3>
            </td>
        </tr>
    @endif

    @if($report->description_fourth_revision != null)
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3>3</h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_fourth_revision }}</h3>
            </td>
        </tr>
    @else
        <tr class="list-of-revisions">
            <td class = "list-of-revisions-number">
                <h3></h3>
            </td>
            <td class="list-of-descriptions">
                <h3> {{$report->description_fourth_revision }}</h3>
            </td>
        </tr>
    @endif

    <tr class="result-of-revisions-number">
        <td>
            <h3></h3>
        </td>
        <td>
            <h3>REV.0</h3>
        </td>
        <td>
            <h3>REV.1</h3>
        </td>
        <td>
            <h3>REV.2</h3>
        </td>
        <td>
            <h3>REV.3</h3>
        </td>
    </tr>

    <tr class="result-of-revisions-number-columns">
        <td>
            <h3>Data</h3>
        </td>
        <td>
            <h3>{{ date('d/m/Y', strtotime($report->data_first_revision))  }}</h3>
        </td>
        <td>
            <h3>{{ $report->data_second_revision ? date('d/m/Y', strtotime($report->data_second_revision)) : "" }}</h3>
        </td>
        <td>
            <h3>{{ $report->data_third_revision ? date('d/m/Y', strtotime($report->data_third_revision)) : "" }}</h3>
        </td>
        <td>
            <h3>{{ $report->data_fourth_revision ? date('d/m/Y', strtotime($report->data_fourth_revision)) : "" }}</h3>
        </td>
    </tr>

    <tr class="result-of-revisions-number-columns">
        <td>
            <h3>Inspecionado por</h3>
        </td>
        <td>
            <h3>{{$report->first_inspector_first_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->first_inspector_second_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->first_inspector_third_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->first_inspector_fourth_revision }}</h3>
        </td>
    </tr>

    <tr class="result-of-revisions-number-columns">
        <td>
            <h3>Inspecionado por</h3>
        </td>
        <td>
            <h3>{{$report->second_inspector_first_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->second_inspector_second_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->second_inspector_third_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->second_inspector_fourth_revision }}</h3>
        </td>
    </tr>

    <tr class="result-of-revisions-number-columns">
        <td>
            <h3>Elaborado por</h3>
        </td>
        <td>
            <h3>{{$report->elaborator_first_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->elaborator_second_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->elaborator_third_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->elaborator_fourth_revision }}</h3>
        </td>
    </tr>

    <tr class="result-of-revisions-number-columns">
        <td>
            <h3>Aprovado por</h3>
        </td>
        <td>
            <h3>{{$report->approved_for_first_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->approved_for_second_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->approved_for_third_revision }}</h3>
        </td>
        <td>
            <h3>{{$report->approved_for_fourth_revision }}</h3>
        </td>
    </tr>
</tbody>
</table>
