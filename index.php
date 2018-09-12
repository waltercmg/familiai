
        <?php
            //COMENTADO EM 06/09/17 PORQUE A CENTOS NAO ESTA TRABALHANDO COM HTTPS
            //header('Content-Type: text/html; charset=UTF-8');
            //session_start();

            //if(!$_SESSION['autenticado'])
            //    header('Location: https://10.32.64.91/');
        ?>
        <html>

        <head>
          <meta charset="UTF-8">
        </head>
        <body>

        <style>
        #overlay {
            background-color: #EEEEEE;
            position: relative;
            top: 30;
            left: 0;
            z-index:100;
            -webkit-animation: blink 1s;
            -webkit-animation-iteration-count: infinite;
            -moz-animation: blink 1s;
            -moz-animation-iteration-count: infinite;
            -o-animation: blink 1s;
            -o-animation-iteration-count: infinite;
        }

        a {
            color: #FFFFFF;
        }

        .image {
           position: relative;
           font-size: 9;
           font-family: "Verdana";
        }

        .motor {
           position: absolute;
           top: 2;
           left: 5;
           width: 100%;
           margin: 0 auto;
           width: 150;
           height: 50px;
           color: #FFFFFF;
           font-size: 8;
           font-align: center;
           font-weight: bold;
        }

        h1 {
           position: absolute;
           top: 0;
           left: 0;
           width: 25%;
           margin: 0 auto;   
           height: 50px;
           color: #d9b38c;
           font-size: 7;
           font-align: left; 
           align: left;
        }

        h2 {
           position: absolute;
           top: 22;
           left: 3;
           width: 100%;
           margin: 0 auto;
           width: 150;
           height: 50px;
           color: #FFFFFF;
           font-size: 8;
           font-align: center;   
        }

        table {
        border:none;
        border-collapse: collapse;
        }

        table td {
        font-size: 12;
        font-family: "Verdana";
        color: #996633;
        border-left: 1px solid #d9b38c;
        border-right: 1px solid #d9b38c;
        text-align: center;
        width: 160;
        }

        table td:first-child {
        border-left: none;
        }

        table td:last-child {
        border-right: none;
        }

        table tr {
        background-color: #f5f5f5
        }


        /* Tooltip container */
        .tooltip {
            position: relative;
            display: inline-block;
           /* border-bottom: 1px dotted black; *//* If you want dots under the hoverable text */
            
        }

        /* Tooltip text */
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;

            /* Position the tooltip text */
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;

            /* Fade in tooltip */
            opacity: 0;
            transition: opacity 1s;
        }

        /* Tooltip arrow */
        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Show the tooltip text when you mouse over the tooltip container */
        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    
        @-webkit-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @-moz-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @-o-keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }


        </style>

        <p>
        <font face="Verdana" color="#996633">
        <b>AcompanhAi - 19/06/18 09:28:01</b>
        </font>
        <p><p>
        <table style="border: 1px solid black">        
        	<tr>
            	<td style="border: 0px"><b>LEGENDA:</b></td>                
            	<td style="border: 0px"><img src="http://10.32.64.91/acompanhai/urc.png" height="30"/><br>Aguardando Cliente</td>                
                <td style="border: 0px"><img src="http://10.32.64.91/acompanhai/des.png" height="30"/><br>Aguardando Desenv.</td>
                <td style="border: 0px"><img src="http://10.32.64.91/acompanhai/suspenso.png" height="30"/><br>SS Suspensa</td>
                <td style="border: 0px"><img src="http://10.32.64.91/acompanhai/semlote.png" height="30"/><br>SS sem Lote/Proj/ANS</td>
                <td style="border: 0px"><img src="http://10.32.64.91/acompanhai/velocimetro.png" height="30"/><br>Produtividade na meta (ou N/A)</td>
                <td  style="border: 0px"><img src="http://10.32.64.91/acompanhai/velocimetro_prod.png" height="30"/><br>Produtividade acima da meta</td>
                <td style="border: 0px"><img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="30"/><br>Sem PF informado</td>                     		</tr>
        </table>
        <br>
        <table><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SNCR/WEB (1)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1329439">1329439
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>312 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Integração/reestruturação do SNCR/CNIR (MPV4)
                    	<span class="tooltiptext">Suspensa [Aberta]</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (2)</td><td></td><td></td><td><div id='overlay'><b>ATRASADO 81 DIA(S)</b></div><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Bergson
                        <span class="tooltiptext">Bergson: 385h<br>Marcos: 272h<br>Clodoaldo: 222h<br>Luis: 102h<br>Davi: 101h<br>Milena: 94h<br>J. Henrique: 91h<br>Jonas: 84h<br>Pedro: 23h<br>Maurus: 20h<br>Daniel: 10h<br>Wagner: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1162742">1162742
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>235.22 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_prod.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 6.0 PF<br>
                            Apropriado: 1411.32 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>509 dias
                       </h1>       
	                </div>
	                <div class="tooltip">MP - Investimento em Melhoria do Sistema Nacional Cadastro Rural - SNCR-web
                    	<span class="tooltiptext">Em Atendimento</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (3)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 12h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1535442">1535442
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 14.0 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>39 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP -&nbsp; Aba Temporário - Não está abrindo na DCR
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SNCR/WEB (4)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 9h<br>Maurus: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1537851">1537851
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>2.27 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 5.25 PF<br>
                            Apropriado: 11.91 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>35 dias
                       </h1>       
	                </div>
	                <div class="tooltip">MC -Imóvel 930 512 007 641-6 (GO) processou sem análise
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (5)</td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 2h<br>Maurus: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1558492">1558492
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 2.5 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>7 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - EXIGÊNCIA DDE ATOS DE ESTRANGEIROS PARA PORTUGUÊS COM TERMO DE RECIPPROCIDADE
                    	<span class="tooltiptext">Entregue</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (6)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 2h<br>Maurus: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1562488">1562488
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 2.5 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - CONSULTA POR TIPO SISNATE - PESSOA NATURAL SEM PAÍS DE ORIGEM
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SNCR/WEB (7)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 4h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1562523">1562523
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 5.5 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - Imóvel 414 123 019 062-0 (MG) PA do INCRA está com CCIR isentoNÃO E
                    	<span class="tooltiptext">Homologação Aceita</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (8)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Maurus
                        <span class="tooltiptext">Maurus: 1h<br>Milena: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1562537">1562537
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 2.5 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - Imóvel 950 050 228 729-5 (SC) não permite atualizar dados pessoa
                    	<span class="tooltiptext">Homologação Aceita</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (9)</td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 4h<br>Clodoaldo: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1563148">1563148
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 6.0 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Imóvel 950 050 228 729-5 (SC) não permite atualizar dados pessoa
                    	<span class="tooltiptext">Entregue</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (10)</td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 4h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1563184">1563184
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 4.0 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP- Imóvel 414 123 019 062-0 (MG) PA do INCRA está com CCIR isentoNÃO E
                    	<span class="tooltiptext">Entregue</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (11)</td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc_sus.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>R. Araripe
                        <span class="tooltiptext">R. Araripe: 60h<br>Jonas: 41h<br>Givaldo: 8h<br>Ronaldo: 8h<br>Rudnaldo: 0h<br>ALEXANDRE.GONCALVES: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=855460">855460
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>5.68 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 21.06 PF<br>
                            Apropriado: 119.68 h<br>
                            Meta:  10.0 hh/pf
                        </span>
                       </div>  
                       <br>845 dias
                       </h1>       
	                </div>
	                <div class="tooltip">NOVO - Criação de um Webservice para consulta aos dados do SNCR WEB
                    	<span class="tooltiptext">Suspensa [Em Atendimento]</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (12)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc_sus.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Gustavo
                        <span class="tooltiptext">Gustavo: 74h<br>Marcos: 30h<br>Jonas: 24h<br>Maurus: 11h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=972777">972777
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>7.79 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_prod.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 18.0 PF<br>
                            Apropriado: 140.31 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>732 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - View materializada para Incra e TCU
                    	<span class="tooltiptext">Suspensa [Em Homologação]</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SNCR/WEB (13)</td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc_sus.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 14h<br>Clodoaldo: 4h<br>J. Henrique: 4h<br>Maurus: 3h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1161652">1161652
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>4.5 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 6.0 PF<br>
                            Apropriado: 26.97 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>510 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Imóveis de Glebas do INCRA cancelados na migração que ao atualizar está dando erro 500.
                    	<span class="tooltiptext">Suspensa [Em Atendimento]</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (14)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Marcos
                        <span class="tooltiptext">Marcos: 45h<br>Maurus: 5h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1275015">1275015
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 50.0 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>378 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - imóvel 950 092 793 051-5 - atualizado DCR, processada SNCR Web e consta&nbsp; também imoveis a cadastrar
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SNCR/WEB (15)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1318927">1318927
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>323 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Inibição por análise cadastral - Imóveis cadastrados pela SRFA
                    	<span class="tooltiptext">Suspensa [Aberta]</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (16)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Marcos
                        <span class="tooltiptext">Marcos: 283h<br>Pedro: 134h<br>J. Henrique: 128h<br>Milena: 127h<br>Clodoaldo: 114h<br>Davi: 76h<br>Bergson: 26h<br>Maurus: 6h<br>Luis: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1447810">1447810
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>10.32 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_prod.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 87.0 PF<br>
                            Apropriado: 898.27 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>159 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Identificação das atualizações feitas por apuração especial
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (17)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 3h<br>Davi: 2h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1537257">1537257
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.65 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 10.0 PF<br>
                            Apropriado: 6.5 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>36 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Declarações na Situação: &quot;Enviada - aguardando documentação&quot; e Outros
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SNCR/WEB (18)</td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 89h<br>Davi: 38h<br>Clodoaldo: 37h<br>Marcos: 29h<br>Maurus: 5h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1483210">1483210
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>2.92 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 68.25 PF<br>
                            Apropriado: 199.41 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>109 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Relatório Processos de Fiscalização Cadastral
                    	<span class="tooltiptext">Em Atendimento</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (19)</td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 11h<br>Maurus: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1510909">1510909
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.52 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 25.9 PF<br>
                            Apropriado: 13.56 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>74 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Relação dos IR do SNCR por UF
                    	<span class="tooltiptext">Estimativa Aprovada</span>
                    </div><br><br>
                </div></td></tr><tr><td>SNCR/WEB (20)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1510296">1510296
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>74 dias
                       </h1>       
	                </div>
	                <div class="tooltip">DS - Geração de Dicionário de Dados do SNCR
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (21)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1484640">1484640
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>106 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANS - INFORMAÇÕES DOS SERVIÇOS NOTARIAIS E REGISTRAIS.
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (22)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1554719">1554719
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>13 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANP - Imoveis 632 139 001 902-8, 632 139 000 167-6 e 950 017 702 579-3 (SP) Erro 500 emissão CCIR
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (23)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1487284">1487284
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>103 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANS - Atualização/Adequação da Situação Jurídica
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (24)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 9h<br>Maurus: 3h<br>Clodoaldo: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1493317">1493317
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>2.5 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 6.0 PF<br>
                            Apropriado: 15.01 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>96 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Imovel 950 190 450 154-0 (RS) Não abre nova declaração
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (25)</td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Marcos
                        <span class="tooltiptext">Marcos: 13h<br>Davi: 2h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1510856">1510856
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>1.09 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 16.0 PF<br>
                            Apropriado: 17.48 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>74 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Consulta por CPF na aba Dossie do Imóvel
                    	<span class="tooltiptext">Em Análise</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (26)</td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 2h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1497254">1497254
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.35 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 10.0 PF<br>
                            Apropriado: 3.5 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>90 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME&nbsp; - A Consulta em nível de Superintendência Regional (SR)
                    	<span class="tooltiptext">Em Análise</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (27)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1531251">1531251
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>43 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ANS - CCIR INEXISTENTES
                    	<span class="tooltiptext">Suspensa [Aberta]</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (28)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 6h<br>Maurus: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1545999">1545999
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>1.6 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 5.25 PF<br>
                            Apropriado: 8.4 h<br>
                            Meta:  6.0 hh/pf
                        </span>
                       </div>  
                       <br>26 dias
                       </h1>       
	                </div>
	                <div class="tooltip">MC - Pesquisas em Estatistica - CCIR Emitidos, analise de melhoria de performance da consulta
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (29)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 18h<br>Maurus: 4h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1546026">1546026
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>1.62 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 13.8 PF<br>
                            Apropriado: 22.4 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>26 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP- Pesquisas em Estatistica - CCIR Emitidos, analise de melhoria de performance da consulta
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (30)</td><td></td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 3h<br>Milena: 2h<br>Maurus: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1522717">1522717
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.99 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 6.0 PF<br>
                            Apropriado: 5.95 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>56 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Apuração de Logs de Acesso
                    	<span class="tooltiptext">Estimativa Aprovada</span>
                    </div><br><br>
                </div></td></tr><tr><td>SNCR/WEB (31)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Davi
                        <span class="tooltiptext">Davi: 3h<br>Maurus: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1534540">1534540
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.38 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 12.0 PF<br>
                            Apropriado: 4.5 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>40 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP&nbsp; - Erro 500 na atualização aba pessoa imovel 999 920 510 327-9
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (32)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1529446">1529446
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>47 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Consulta e Relatório Pagamento de TSC/CCIR (continuação da demanda: 111201
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SNCR/WEB (33)</td><td></td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/urc.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Milena
                        <span class="tooltiptext">Milena: 5h<br>Maurus: 2h<br>Davi: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1529796">1529796
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.91 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 8.8 PF<br>
                            Apropriado: 8.0 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>47 dias
                       </h1>       
	                </div>
	                <div class="tooltip">AESP - Imóvel 628 093 001 090-6, não apresenta opção de análise
                    	<span class="tooltiptext">Em Implantação</span>
                    </div><br><br>
                </div></td><td></td></tr><tr><td>SNCR/WEB (34)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1538373">1538373
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>35 dias
                       </h1>       
	                </div>
	                <div class="tooltip">ME - Imóvel 931 101 000 892-0 (GO), em nome do INCRA não está com CCIR isento
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SIEFRH (1)</td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1473871">1473871
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_pf.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 0 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>119 dias
                       </h1>       
	                </div>
	                <div class="tooltip">DI 2018/0005 [SIEF-RH] - Apoio a operação continuada - Fevereiro 2018 a Abril 2018
                    	<span class="tooltiptext">Entregue</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td></tr><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SIEFDELCOM (1)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des_sus.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Geandre
                        <span class="tooltiptext">Geandre: 887h<br>Lucas Veloso: 137h<br>Fabrício Canez: 99h<br>Milton Bender: 97h<br>Karla Cordeiro: 39h<br>None: 20h<br>Alisson Coelho: 14h<br>Patríca Pavão: 2h<br>Vinicio: 2h<br>Marcelo Parrela: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=864039">864039
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>10.81 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro_prod.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 120.44 PF<br>
                            Apropriado: 1302.39 h<br>
                            Meta:  10.0 hh/pf
                        </span>
                       </div>  
                       <br>837 dias
                       </h1>       
	                </div>
	                <div class="tooltip">Demanda Cotec 0188/2015 (Migração plataforma para Java/Demoiselle)
                    	<span class="tooltiptext">Suspensa [Em Homologação]</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SIEFDELCOM (2)</td><td></td><td></td><td><div id='overlay'><b>ATRASADO 29 DIA(S)</b></div><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Karla Cordeiro
                        <span class="tooltiptext">Karla Cordeiro: 52h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1522560">1522560
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>1.03 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 51.0 PF<br>
                            Apropriado: 52.6 h<br>
                            Meta:  10.0 hh/pf
                        </span>
                       </div>  
                       <br>57 dias
                       </h1>       
	                </div>
	                <div class="tooltip">COTEC 0170/2017 [SIEF-DELEGAÇÃO] - Efetuar correção de erros de definição encontradas&nbsp; que afetarão a migração para a platafarma Java/Demoiselle - Impeditivos Operacionais<br/> <br/><br/>
                    	<span class="tooltiptext">Em Atendimento</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr><td>SIEFDELCOM (3)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Thiago Kato
                        <span class="tooltiptext">Thiago Kato: 30h<br>Karla Cordeiro: 1h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1529644">1529644
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>3.88 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 8.0 PF<br>
                            Apropriado: 31.0 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>47 dias
                       </h1>       
	                </div>
	                <div class="tooltip">COTEC 0088/2018 [DELEGACAO] - Atualizar os registros de delegação com função DAS1012 para FPE1012.
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SIEFCHANCE (1)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1291200">1291200
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>357 dias
                       </h1>       
	                </div>
	                <div class="tooltip">Demanda Cotec 0067/2016 ( MIgração da plataforma do Sief - Chancela Eletrônica para Java/Demoiselle com alteração no processo de carga e correção de erros estruturais)
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SIEFCHANCE (2)</td><td></td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Karla Cordeiro
                        <span class="tooltiptext">Karla Cordeiro: 19h<br>Thiago Kato: 8h<br>Vinicio: 2h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1510837">1510837
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>4.01 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 7.3 PF<br>
                            Apropriado: 29.3 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>74 dias
                       </h1>       
	                </div>
	                <div class="tooltip">COTEC 0064/2018 [SIEF-CHANCELAS] - Construção de novas rotinas de recuperação de chancela eletrônica por CPF e UA&nbsp; integração Chancela X Pucomex
                    	<span class="tooltiptext">Em Homologação</span>
                    </div><br><br>
                </div></td><td></td><td></td></tr><tr><td>SIEFCHANCE (3)</td><td></td><td></td><td><div id='overlay'><b>FALTA(M) 1 DIA(S)</b></div><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Karla Cordeiro
                        <span class="tooltiptext">Karla Cordeiro: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1563116">1563116
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1>0.06 hh/pf<br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho: 8.0 PF<br>
                            Apropriado: 0.5 h<br>
                            Meta:  5.0 hh/pf
                        </span>
                       </div>  
                       <br>1 dias
                       </h1>       
	                </div>
	                <div class="tooltip">COTEC 0118/2018 [SIEF-CHANCELAS] - Recuperação das assinaturas digitalizadas da base do Chancela Eletrônica.
                    	<span class="tooltiptext">Em Atendimento</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td></tr><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SISCONFAZ (1)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1532494">1532494
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>42 dias
                       </h1>       
	                </div>
	                <div class="tooltip">[SISCONFAZ] - Informações de BD
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SISCONFAZ (2)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/des.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>Bergson
                        <span class="tooltiptext">Bergson: 6h<br>Adriano: 2h<br>Maurus: 0h<br></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1557983">1557983
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado: 8.5 h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>8 dias
                       </h1>       
	                </div>
	                <div class="tooltip">[SISCONFAZ] ANP -&nbsp; encaminhamento em nome de outra usuária
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>SISCONFAZ (3)</td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1560867">1560867
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>5 dias
                       </h1>       
	                </div>
	                <div class="tooltip">SISCONFAZ - Erro - encaminhamento saiu em nome de outra usuária
                    	<span class="tooltiptext">Aberta</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr style = "background-color: #ffd966">
            <td>
            <b>SISTEMA</b>
            </td>
            <td>
            <b>ABERTA</b>
            </td>
            <td>
            <b>EM ANÁL./ESTIM.</b>
            </td>
            <td>
            <b>EM ATENDIMENTO</b>
            </td>
            <td>
            <b>ENTREGUE</b>
            </td>
            <td>
            <b>EM HOMOLOGAÇÃO</b>
            </td>
            <td>
            <b>HOM ACEITA/EM IMPL</b>
            </td>
            <td>
            <b>OUTROS</b>
            </td>
            </tr><tr><td>SIEST (1)</td><td></td><td></td><td></td><td><div class="image">
                    <img src="http://10.32.64.91/acompanhai/semlote.png" height="50"/>   
                    <div class="motor">
                       <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/motorista.png" height="12"/><br>
                        <span class="tooltiptext"></span>
                       </div>
                    </div>
                    <div class="text">
                       <h2><a target="_blank" href="https://alm.serpro/ccm/web/projects/Negócio%20%28Solicitação%20de%20Serviço%29#
action=com.ibm.team.workitem.viewWorkItem&id=1476305">1476305
                    </a></h2>    	  
                    </div>
                    <div class="text">   	  
                       <h1><br>
	                   <div class="tooltip">
                       <img src="http://10.32.64.91/acompanhai/velocimetro.png" height="15"/>
                       <span class="tooltiptext">
                            Tamanho:  PF<br>
                            Apropriado:  h<br>
                            Meta:   hh/pf
                        </span>
                       </div>  
                       <br>117 dias
                       </h1>       
	                </div>
	                <div class="tooltip">Verificar diferenças no código de homologação - Módulo de Inversões Financeiras
                    	<span class="tooltiptext">Entregue</span>
                    </div><br><br>
                </div></td><td></td><td></td><td></td></tr></table>
    </html>