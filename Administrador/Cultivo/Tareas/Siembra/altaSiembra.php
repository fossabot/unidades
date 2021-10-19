<?php
date_default_timezone_set("America/Montevideo");
$idC = $_GET['idC'];

$Fecha = getdate();
$FechaTxt = $Fecha["year"] . "/" . $Fecha["mon"] . "/" . $Fecha["mday"];
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Alta Siembra</title>


        <link rel="stylesheet" type="text/css" href="../../../CSS/styles.css" />

    </head>

    <body >
        <form id="fom" onSubmit="return submitSiembra(this)" name="frmAltaSiembra" method="GET" action="agregarSiembra.php" >

            <h1>Ingreso Informaci&oacute;n de Siembra</h1><input class="cajasTextoForm" type="text" name="txtCultivo" required  value="<?php echo $idC ?>" hidden="hidden">
            <table width="334px" cellspacing="0" cellpadding="12" class="textosForm">
                <tr>

                    <td width="74px" class="textosForm"> <div align="center">	Fecha de siembra	</div></td>
                    <td width="260px"> <input type="date" name="txtFechadesiembra" required> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Metodo de siembra	</div></td>
                <td width="260px"> 
                    <select name="txtMetododesiembra" size="1" required>
                        <option value="Cobertura">Cobertura</option>
                        <option value="Convencional">Convencional</option>
                        <option value="Directa">Directa</option>
                        <option value="Zapata">Zapata</option>              
                    </select>
                    <!--<input class="cajasTextoForm" type="text" name="txtMetododesiembra" required> -->
                </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Sembradora	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSembradora" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Distancia entre surcos	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDistanciaentresurcos" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Sembrador	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtSembrador" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fecha de emergencia	</div></td>
                <td width="260px"> <input type="date" name="txtFechadeemergencia" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fecha FertilInicial	</div></td>
                <td width="260px"> <input type="date" name="txtFechaFertilInicial"> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtFertilizante" > </td>
                </tr>		

                <td width="74px" class="textosForm"> <div align="center">	Dosis Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtDosisFert" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Unidad Fertilizante	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtUnidadFert" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Observaciones	</div></td>
                <td width="260px"> <input class="cajasTextoForm" type="text" name="txtObservaciones" > </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot1	</div></td>
                <td width="260px"> <!--<input class="cajasTextoForm" type="text" name="txtNombreCompBot1" required value="-">-->
                    <select name="txtNombreCompBot1" required>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select>
                </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot2	</div></td>
                <td width="260px"> <select name="txtNombreCompBot2" >
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select></td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot3	</div></td>
                <td width="260px"> <select name="txtNombreCompBot3" >
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot4	</div></td>
                <td width="260px"> <select name="txtNombreCompBot4" >
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot5	</div></td>
                <td width="260px"> <select name="txtNombreCompBot5">
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select></td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot6	</div></td>
                <td width="260px"> <select name="txtNombreCompBot6">
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr>		
                <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot7	</div></td>
                <td width="260px"> <select name="txtNombreCompBot7">
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr> <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot8	</div></td>
                <td width="260px"> <select name="txtNombreCompBot8">
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr> <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot9	</div></td>
                <td width="260px"> <select name="txtNombreCompBot9" >
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr> <td width="74px" class="textosForm"> <div align="center">	Nombre CompBot10	</div></td>
                <td width="260px"> <select name="txtNombreCompBot10" >
                        <option value=""></option>
                        <option value="Arrenatherum elatius">Arrenatherum elatius</option>
                        <option value="Avena byzantina">Avena byzantina</option>
                        <option value="Avena sativa">Avena sativa</option>
                        <option value="Avena strigosa">Avena strigosa</option>
                        <option value="Brachiaria brizantha">Brachiaria brizantha</option>
                        <option value="Brassica campestris">Brassica campestris</option>
                        <option value="Brassica napus">Brassica napus</option>
                        <option value="Brassica rapa">Brassica rapa</option>
                        <option value="Bromus auleticus">Bromus auleticus</option>
                        <option value="Bromus biebierstenii">Bromus biebierstenii</option>
                        <option value="Bromus catharticus">Bromus catharticus</option>
                        <option value="Bromus inermis">Bromus inermis</option>
                        <option value="Bromus parodii">Bromus parodii</option>
                        <option value="Bromus stamineus">Bromus stamineus</option>
                        <option value="Bromus valdivianus">Bromus valdivianus</option>
                        <option value="Campo Natural">Campo Natural</option>
                        <option value="Chloris gayana">Chloris gayana</option>
                        <option value="Cichorium intybus">Cichorium intybus</option>
                        <option value="Dactylis glomerata">Dactylis glomerata</option>
                        <option value="Digitaria eriantha">Digitaria eriantha</option>
                        <option value="Elytrigia elongata">Elytrigia elongata</option>
                        <option value="Eragrostis tef">Eragrostis tef</option>
                        <option value="Festuca arundinacea">Festuca arundinacea</option>
                        <option value="Festulolium spp">Festulolium spp</option>
                        <option value="Glycine max">Glycine max</option>
                        <option value="Gramíneas">Gramíneas</option>
                        <option value="Hedysarum coronarium">Hedysarum coronarium</option>
                        <option value="Holcus lanatus">Holcus lanatus</option>
                        <option value="Hordeum vulgare">Hordeum vulgare</option>
                        <option value="Leguminosas">Leguminosas</option>
                        <option value="Lolium hybridum">Lolium hybridum</option>
                        <option value="Lolium perenne">Lolium perenne</option>
                        <option value="Lotononis bainessi">Lotononis bainessi</option>
                        <option value="Lolium multiflorum">Lolium multiflorum</option>
                        <option value="Lotus corniculatus">Lotus corniculatus</option>
                        <option value="Lotus subbiflorus">Lotus subbiflorus</option>
                        <option value="Lotus tenuis">Lotus tenuis</option>
                        <option value="Lotus uliginosus">Lotus uliginosus</option>
                        <option value="Maleza">Maleza</option>
                        <option value="Medicago polymorpha">Medicago polymorpha</option>
                        <option value="Medicago sativa">Medicago sativa</option>
                        <option value="Melilotus alba">Melilotus alba</option>
                        <option value="Mezcla">Mezcla</option>
                        <option value="Ornithopus compressus">Ornithopus compressus</option>
                        <option value="Ornithopus pinnatus">Ornithopus pinnatus</option>
                        <option value="Ornithopus sativus">Ornithopus sativus</option>
                        <option value="Panicun coloratum">Panicun coloratum</option>
                        <option value="Paspalum atratum">Paspalum atratum</option>
                        <option value="Paspalum dilatatum">Paspalum dilatatum</option>
                        <option value="Paspalum guenoarum">Paspalum guenoarum</option>
                        <option value="Paspalum notatum">Paspalum notatum</option>
                        <option value="Pennisetum glaucum">Pennisetum glaucum</option>
                        <option value="Pennisetum purpureum">Pennisetum purpureum</option>
                        <option value="Phalaris aquatica">Phalaris aquatica</option>
                        <option value="Phleum pratense">Phleum pratense</option>
                        <option value="Pisum sativum">Pisum sativum</option>
                        <option value="Plantago lanceolata">Plantago lanceolata</option>
                        <option value="Poa pratensis">Poa pratensis</option>
                        <option value="Raphanus sativus">Raphanus sativus</option>
                        <option value="Restos varios">Restos varios</option>
                        <option value="Ricinus communis">Ricinus communis</option>
                        <option value="Secale cereale">Secale cereale</option>
                        <option value="Secale cereale perenne">Secale cereale perenne</option>
                        <option value="Setaria italica">Setaria italica</option>
                        <option value="Setaria sphacelata">Setaria sphacelata</option>
                        <option value="Sorghum bicolor">Sorghum bicolor</option>
                        <option value="Sorghum saccharatum">Sorghum saccharatum</option>
                        <option value="Sorghum sudanense">Sorghum sudanense</option>
                        <option value="Sudangras">Sudangras</option>
                        <option value="Trifolium alexandrinum">Trifolium alexandrinum</option>
                        <option value="Trifolium balansae">Trifolium balansae</option>
                        <option value="Trifolium fragiferum">Trifolium fragiferum</option>
                        <option value="Trifolium incarnatum">Trifolium incarnatum</option>
                        <option value="Trifolium michelianum">Trifolium michelianum</option>
                        <option value="Trifolium pratense">Trifolium pratense</option>
                        <option value="Trifolium repens">Trifolium repens</option>
                        <option value="Trifolium resupinatum">Trifolium resupinatum</option>
                        <option value="Trifolium subterraneum">Trifolium subterraneum</option>
                        <option value="Trifolium vesiculosum">Trifolium vesiculosum</option>
                        <option value="Triticosecale">Triticosecale</option>
                        <option value="Triticum aestivum">Triticum aestivum</option>
                        <option value="Vicia benghalensis">Vicia benghalensis</option>
                        <option value="Vicia sativa">Vicia sativa</option>
                        <option value="Vicia villosa">Vicia villosa</option>
                        <option value="Zea mays">Zea mays</option>
                    </select> </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div align="center">
                            <input type="submit" name="cmdEnvio" value="Guardar" class="boton2">
                        </div>

                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>