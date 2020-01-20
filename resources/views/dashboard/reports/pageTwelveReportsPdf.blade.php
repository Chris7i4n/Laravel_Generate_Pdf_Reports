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
                <h3>Página 12 de 12</h3>
            </td>
        </tr>

        <tr>
            <td class="conclusion">

                <ol>
                    <li><b><h5>8. Conclusão</h5></b>
                        <p>&nbsp; &nbsp; &nbsp;No caso presente foi possível realizar em campo os levantamentos, e a inspeção dos equipamentos através dos checklists apresentados nos itens acima. </p>
                        <p>&nbsp; &nbsp; &nbsp;<u>Após a uma criteriosa inspeção de campo, e mediante nossa avaliação técnica, definimos como {{$endOfReport->end_of_report_description}} Tal condição foi previamente comunicada a liderança do site, e está relacionada no plano de ação da Empresa. </u></p>
                        <p>&nbsp; &nbsp; &nbsp;As considerações técnicas descritas neste relatório retratam a situação do momento em que foram feitas as vistorias. Uma reavaliação deverá ser realizada sempre que houverem mudanças significativas, pois em momento algum, essa situação deve ser encarada como definitiva para os riscos envolvendo a segurança dos operadores com relação a incêndios. A empresa contratante deverá assumir o compromisso de manter as inspeções e manutenções do sistema dentro dos parâmetros exigidos pela norma, mantendo o sistema saudável, além de administrar treinamentos para seus operadores e brigadistas, para que seja alcançado um bom nível de segurança funcional.</p>
                        <p>&nbsp; &nbsp; &nbsp;Todas as ações descritas são frutos das observações feitas pelo responsável pela inspeção, durante a visita ou através de informações obtidas junto aos representantes da empresa.</p>
                        <p>&nbsp; &nbsp; &nbsp;Sendo assim a Empresa, com a certeza de ter realizado corretamente este trabalho, dentro da técnica e ética profissional, agradece desde já, e se coloca à disposição para quaisquer dúvidas ou para efetuar revisões do escopo proposto.</p>
                        <p>&nbsp; &nbsp; &nbsp;Nada mais havendo a considerar, encerramos aqui o presente RELATÓRIO TÉCNICO DE INSPEÇÃO DE SISTEMA DE PROTEÇÃO E COMBATE A INCÊNDIO - SPCI, segundo a Norma Regulamentadora NR 23, “Proteção contra incêndios”, e conforme os itens especificados na “ABNT NBR 17240, Sistemas de detecção e alarme de incêndio - Projeto, instalação, comissionamento e manutenção de sistemas de detecção e alarme de incêndio - Requisitos”, composto de {{$endOfReport->end_of_report_pages}} impressas por computador, somente anverso e rubricadas, com exceção desta que segue devidamente datada e assinada.</p>
                        <br>
                        <p>&nbsp; &nbsp; &nbsp;{{$endOfReport->end_of_report_localization}}</p>

                        <p>
                            <img
                                src="{{ public_path("storage/". $endOfReport->end_of_report_signature) }}"
                                class = "signature"
                            >

                        </p>
                        <p class="signature-responsable">________________________________</p>
                        <p class="signature-responsable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$endOfReport->end_of_report_employee_name}}</p>
                        <p class="signature-responsable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$endOfReport->end_of_report_employee_function_1}}</p>
                        <p class="signature-responsable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$endOfReport->end_of_report_employee_function_2}}</p>
                        <p class="signature-responsable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CREA: {{$endOfReport->end_of_report_employee_crea}}</p>

                    </li>
                </ol>

            </td>

        </tr>
    </tbody>
</table>
