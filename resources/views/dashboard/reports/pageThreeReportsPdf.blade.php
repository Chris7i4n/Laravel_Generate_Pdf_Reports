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
                <h3>Página 3 de 21</h3>
            </td>
        </tr>

        <tr>
            <td class="goals">

                <ol>
                    <li><b><h5>1. OBJETIVO</h5></b><p>
                            &nbsp; &nbsp; &nbsp;Este Relatório de Inspeção de Sistemas de Proteção Contra Incêndio - SPCI ({{$report->inspection_number}}ª  Inspeção de {{$report->inspection_year}})
                            visa continuação do relatório original US{{$yearNumberForDocumentNumber}}-RTSPCI-{{$codeNumberForDocumentNumber}}-{{$companyNameForDocumentNumber}} ART# {{$report->article_goals}} de {{date('d', strtotime($report->data_goals))}} de {{$monthOfTheGoal}} de {{date('Y', strtotime($report->data_goals))}},
                            com o objetivo de inspecionar novamente o funcionamento dos sistemas de proteção de combate à incêndio,
                            validando a performance de funcionamento. Qualquer “Não Conformidade” será registrada de acordo com o nível de
                            prioridade e a devida recomendação para correção do item será estabelecida.
                    </p></li>
                </ol>

                <ol>
                    <li><b><h5>2. Referências Legislativas</h5></b>
                        <p>&nbsp; &nbsp; &nbsp;<b>NR 23</b> - Proteção contra incêndios.</p>
                        <p class= "in-line-paragrapher">&nbsp; &nbsp; &nbsp;<b>NR 10</b> - Segurança em instalações e serviços em eletricidade.</p>
                    </li>
                </ol>

                <ol>
                    <li><b><h5>3. Referências Normativas</h5></b>
                        <p style="white-space: pre !important;">&nbsp; &nbsp; &nbsp; <b>ABNT NBR 17240</b> - Sistemas de detecção e alarme de incêndio - Projeto, instalação, comissionamento e
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; manutenção de sistemas de detecção e alarme de incêndio - Requisitos. </p>
                        <p>&nbsp; &nbsp; &nbsp; <b>ABNT NBR 5410</b> - Instalações elétricas de baixa tensão.</p>
                    </li>
                </ol>

                <ol>
                    <li><b><h5>4. Responsabilidades </h5></b></li>
                </ol>
            </td>

        </tr>
        <tr class = "responsabilities">
            <td>
                <h3>ETAPAS</h3>
            </td>
            <td>
                <h3>RESPONSÁVEL</h3>
            </td>
            <td>
                <h3>FUNÇÃO</h3>
            </td>
            <td>
                <h3>DATA</h3>
            </td>
        </tr>
        <tr class = "responsabilities-datas">
            <td>
                <h3>Inspeção</h3>
            </td>
            <td>
                <h3>{{$report->first_inspector_first_revision }}</h3>
            </td>
            <td>
                <h3>{{$report->first_inspector_function_first_revision }}</h3>
            </td>
            <td>
                <h3>{{ date('d/m/Y', strtotime($report->data_first_revision))  }}</h3>
            </td>
        </tr>

        <tr class = "responsabilities-datas">
            <td>
                <h3>Inspeção</h3>
            </td>
            <td>
                <h3>{{$report->second_inspector_first_revision }}</h3>
            </td>
            <td>
                <h3>{{$report->second_inspector_function_first_revision }}</h3>
            </td>
            <td>
                <h3>{{ date('d/m/Y', strtotime($report->data_first_revision))  }}</h3>
            </td>
        </tr>

        <tr class = "responsabilities-datas">
            <td>
                <h3>Elaboração do Relatório</h3>
            </td>
            <td>
                <h3>{{$report->elaborator_first_revision }}</h3>
            </td>
            <td>
                <h3>{{$report->elaborator_function_first_revision }}</h3>
            </td>
            <td>
                <h3>{{ $report->approved ? date('d/m/Y', strtotime($report->updated_at)) : "Não aprovado"  }}</h3>
            </td>
        </tr>

        <tr class = "responsabilities-datas">
            <td>
                <h3>Revisão do Relatório</h3>
            </td>
            <td>
                <h3>{{$report->reviewed_for}}</h3>
            </td>
            <td>
                <h3>{{$report->reviewed_for_function}}</h3>
            </td>
            <td>
                <h3>{{ $report->approved ? date('d/m/Y', strtotime($report->updated_at)) : "Não aprovado"  }}</h3>
            </td>
        </tr>

        <tr class = "responsabilities-datas-last-child">
            <td>
                <h3>Aprovação do Relatório</h3>
            </td>
            <td>
                <h3>{{$report->approved_for_first_revision }}</h3>
            </td>
            <td>
                <h3>{{$report->approved_for_function_first_revision }}</h3>
            </td>
            <td>
                <h3>{{ $report->approved ? date('d/m/Y', strtotime($report->updated_at)) : "Não aprovado"  }}</h3>
            </td>
        </tr>
        <tr class = "margin-when-page-break"></tr>

    </tbody>
</table>
