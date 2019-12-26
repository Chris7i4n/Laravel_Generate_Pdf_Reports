<table class="table-reports table-small table-width" >
    <thead>
        <tr class="table-empregados-head" >
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
                <h3>Página 2 de 21</h3>
            </td>
        </tr>
        <tr class="sumario">
            <td>
                <h3>Sumário</h3>
                <ol>
                    <li><b><h5>1. </h5>&nbsp; OBJETIVO</b><span>...........................................................................................................................03</span></li>
                    <li><b><h5>2. </h5>&nbsp; REFERÊNCIAS LEGISLATIVAS</b><span>........................................................................................03</span></li>
                    <li><b><h5>3. </h5>&nbsp; REFERÊNCIAS NORMATIVAS</b><span>..........................................................................................03</span></li>
                    <li><b><h5>4. </h5>&nbsp; RESPONSABILIDADES</b><span>.....................................................................................................03</span></li>
                    <li><b><h5>5. </h5>&nbsp; METODOLOGIA</b><span>.................................................................................................................04</span></li>
                    <li><b><h5>6. </h5>&nbsp; INSPEÇÃO DE CAMPO</b><span>.....................................................................................................05</span></li>
                    <li><b><h5>6.1</h5>CENTRAL DE ALARME</b><span>.....................................................................................................05</span></li>
                    <li><b><h5>6.2</h5>ACIONADORES E SIRENES</b><span>...............................................................................................06</span></li>
                    <li><b><h5>6.4</h5>SINALIZAÇÕES</b><span>.................................................................................................................08</span></li>
                    <li><b><h5>6.5</h5>ILUMINAÇÃO DE EMERGÊNCIA</b><span>......................................................................................09</span></li>
                    <li><b><h5>6.6</h5>BOMBAS DE INCÊNDIO</b><span>....................................................................................................14</span></li>
                    <li><b><h5>6.7</h5>HIDRANTES</b><span>.......................................................................................................................15</span></li>
                    <li><b><h5>7. </h5>&nbsp; RECOMENDAÇÕES</b><span>...........................................................................................................17</span></li>
                    <li><b><h5>9. </h5>&nbsp; CONCLUSÃO</b><span>.....................................................................................................................20</span></li>
                </ol>
            </td>
        </tr>

    </tbody>
</table>
