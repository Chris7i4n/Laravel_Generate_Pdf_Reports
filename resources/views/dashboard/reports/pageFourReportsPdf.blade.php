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
                <h3>Página 4 de 21</h3>
            </td>
        </tr>

        <tr>
            <td class="metodology">

                <ol>
                    <li><b><h5>5. Metodologia</h5></b>
                        <p>
                            &nbsp; &nbsp; &nbsp;A Norma Brasileira NBR 17240 e seus anexos especificam requisitos para projeto, instalação, comissionamento e manutenção de sistemas manuais e automáticos de detecção e alarme de incêndio, em e ao redor de edificações, conforme as recomendações da ABNT ISO/TR 7240-14, sem prejuízo da observância das dispostas nas demais Normas Regulamentadoras - NRs, aprovadas pela Portaria n.º 3.214, de 8 de junho de 1978, nas normas técnicas oficiais e, na ausência ou omissão destas, nas normas internacionais aplicáveis.
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;Cada item a ser inspecionado conforme mencionado no Capítulo 6 “Descrição do Itens Inspecionados do Sistema”, foi registrado em um checklist.
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;Os checklists serão utilizados para identificação de não conformidades e situações perigosas associadas, através de questões objetivas, onde as respostas se limitam em Conforme (C), Não Conforme (NC) ou Não Aplicável (NA).
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;Para cada item registrado como Não Conforme (NC), significa que uma anomalia foi constatada, e que um plano de ação será gerado com prazo máximo de 30 dias para correção da falha.
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;Após qualquer alteração do projeto ou correção de falhas, uma nova verificação no funcionamento do sistema deve ser efetuada, e um relatório deve ser emitido com o objetivo de atestar o perfeito funcionamento do equipamento.
                        </p>
                    </li>
                </ol>

            </td>
        </tr>
        <tr class = "margin-when-page-break"></tr>
    </tbody>
</table>
