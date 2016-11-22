<?php 
$k =$_POST['estado'];

switch ($k) {
    case 'CIUDAD DE MEXICO':
        $df=array('','AZCAPOTZALCO','COYOACAN','CUAJIMALPA DE MORELOS','GUSTAVO A. MADERO','IZTACALCO','IZTAPALAPA','LA MAGDALENA CONTRERAS','MILPA ALTA','ALVARO OBREGON','TLAHUAC','TLALPAN','XOCHIMILCO','BENITO JUAREZ','CUAUHTEMOC','MIGUEL HIDALGO','VENUSTIANO CARRANZA');
        foreach($df as $distrito){
       	if($distrito==""){
           echo "<option value='".$distrito."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$distrito."'>".$distrito."</option>";
       	}
                                }
		break;
		case 'JALISCO':
		$jalisco=array('','ACATIC','ACATLAN DE JUAREZ','AHUALULCO DE MERCADO','AMACUECA','AMATITAN','AMECA','SAN JUANITO DE ESCOBEDO','ARANDAS','EL ARENAL','ATEMAJAC DE BRIZUELA','ATENGO','ATENGUILLO','ATOTONILCO EL ALTO','ATOYAC','AUTLAN DE NAVARRO','AYOTLAN','AYUTLA','LA BARCA','BOLAÑOS','CABO CORRIENTES','CASIMIRO CASTILLO','CIHUATLAN','ZAPOTLAN EL GRANDE','COCULA');
        foreach($jalisco as $jal){
       	if($jal==""){
           echo "<option value='".$jal."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$jal."'>".$jal."</option>";
       	}
                                }
	    break;

	    case 'CHIHUAHUA':
	    $chihuahua=array('','AHUMADA','ALDAMA','ALLENDE','AQUILES SERDAN','ASCENSION','BACHINIVA','BALLEZA','BATOPILAS','BOCOYNA','BUENAVENTURA','CAMARGO','CARICHI','CASAS GRANDES','CORONADO','COYAME DEL SOTOL','LA CRUZ','CUAUHTEMOC','CUSIHUIRIACHI','CHIHUAHUA','CHINIPAS','DELICIAS','DR. BELISARIO DOMINGUEZ','GALEANA','SANTA ISABEL');
        foreach($chihuahua as $chihua){
       	if($chihua==""){
           echo "<option value='".$chihua."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$chihua."'>".$chihua."</option>";
       	}
                                }	
	    break;

	    case 'NUEVO LEON':
	    $nuevoleon=array("","ABASOLO","AGUALEGUAS","LOS ALDAMAS","ALLENDE","ANAHUAC","APODACA","ARAMBERRI","BUSTAMANTE","CADEREYTA JIMENEZ","CARMEN","CERRALVO","CIENEGA DE FLORES","CHINA","DOCTOR ARROYO","DOCTOR COSS","DOCTOR GONZALEZ","GALEANA","GARCIA","SAN PEDRO GARZA GARCIA","GENERAL BRAVO","GENERAL ESCOBEDO","GENERAL TERAN","GENERAL TREVIÑO","GENERAL ZARAGOZA");
        foreach($nuevoleon as $nl){
       	if($nl==""){
           echo "<option value='".$nl."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$nl."'>".$nl."</option>";
       	}
                                }
        case 'CAMPECHE':
        $campeche=array('','CALKINI','CAMPECHE','CARMEN','CHAMPOTON','HECELCHAKAN','HOPELCHEN','PALIZADA','TENABO','ESCARCEGA','CALAKMUL','CANDELARIA','ORURO');
        foreach($campeche as $cam){
       	if($cam==""){
           echo "<option value='".$cam."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$cam."'>".$cam."</option>";
       	}
                                }	
        break;

        case 'AGUASCALIENTES':
        $aguascalientes=array("","AGUASCALIENTES","ASIENTOS","CALVILLO","COSIO","JESUS MARIA","PABELLON DE ARTEAGA","RINCON DE ROMOS","SAN JOSE DE GRACIA","TEPEZALA","EL LLANO","SAN FRANCISCO DE LOS ROMO","INSUFICIENTEMENTE ESPECIFICADO","AISEN DEL GRA. CARLOS IBAÑEZ DEL CAMPO","ANTOFAGASTA","ATACAMA","BIOBIO","COQUIMBO","LA ARAUCANIA","LIBERTADOR GRA. BERNARDO O'HIGGINS","LOS LAGOS","MAGALLANES Y DE LA ARTANTICA","MAULE","REGION METROPOLITANA DE SANTIAGO","TARAPACA");
        foreach($aguascalientes as $agua){
       	if($agua==""){
           echo "<option value='".$agua."'>Seleccione una opci&oacute;n</option>";
       	}else{
           echo "<option value='".$agua."'>".$agua."</option>";
       	}
                                }	
        break;
        case 'PUEBLA':  
        $puebla = array('','ACAJETE','ACATENO','ACATLAN','ACATZINGO','ACTEOPAN','AHUACATLAN','AHUATLAN','AHUAZOTEPEC','AHUEHUETITLA','AJALPAN','ALBINO ZERTUCHE','ALJOJUCA','ALTEPEXI','AMIXTLAN','AMOZOC','AQUIXTLA','ATEMPAN','ATEXCAL','ATLIXCO','ATOYATEMPAN','ATZALA','ATZITZIHUACAN','ATZITZINTLA','AXUTLA');
                foreach($puebla as $pue){
        if($pue==""){
           echo "<option value='".$pue."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$pue."'>".$pue."</option>";
        }
                                } 
        break;

        case 'BAJA CALIFORNIA':
          $bajacalifornia = array('','ENSENADA','MEXICALI','TECATE','TIJUANA','PLAYAS DE ROSARITO','PROVIDENCIA');
                          foreach($bajacalifornia as $baj){
        if($baj==""){
           echo "<option value='".$baj."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$baj."'>".$baj."</option>";
        }
                                } 
          break;

          case 'BAJA CALIFORNIA SUR':
        $bajacaliforniasur = array('','COMONDU','MULEGE','LA PAZ','LOS CABOS','LORETO','COCHABAMBA');
                          foreach($bajacaliforniasur as $bajsr){
        if($bajsr==""){
           echo "<option value='".$bajsr."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$bajsr."'>".$bajsr."</option>";
        }
                                }
            break;

        case 'COAHUILA DE ZARAGOZA':
        $coahuila = array('','ABASOLO','ACUÑA','ALLENDE','ARTEAGA','CANDELA','CASTAÑOS','CUATROCIENEGAS','ESCOBEDO','FRANCISCO I. MADERO','FRONTERA','GENERAL CEPEDA','GUERRERO','HIDALGO','JIMENEZ','JUAREZ','LAMADRID','MATAMOROS','MONCLOVA','MORELOS','MUZQUIZ','NADADORES','NAVA','OCAMPO');
                          foreach($coahuila as $coa){
        if($coa==""){
           echo "<option value='".$coa."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$coa."'>".$coa."</option>";
        }
                                }
            break;
          case 'COLIMA':
        $colima = array('','ARMERIA','COLIMA','COMALA','COQUIMATLAN','CUAUHTEMOC','IXTLAHUACAN','MANZANILLO','MINATITLAN','TECOMAN','VILLA DE ALVAREZ','LA PAZ');
                          foreach($colima as $col){
        if($col==""){
           echo "<option value='".$col."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$col."'>".$col."</option>";
        }
                                }
            break;

        case 'CHIAPAS':
        $chiapas = array('','ACACOYAGUA','ACALA','ACAPETAHUA','ALTAMIRANO','AMATAN','AMATENANGO DE LA FRONTERA','AMATENANGO DEL VALLE','ANGEL ALBINO CORZO','ARRIAGA','BEJUCAL DE OCAMPO','BELLA VISTA','BERRIOZABAL','BOCHIL','EL BOSQUE','CACAHOATAN','CATAZAJA','CINTALAPA','COAPILLA','COMITAN DE DOMINGUEZ','LA CONCORDIA','COPAINALA','CHALCHIHUITAN','CHAMULA','CHANAL');
                          foreach($chiapas as $chia){
        if($chia==""){
           echo "<option value='".$chia."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$chia."'>".$chia."</option>";
        }
                                }
          break;

          case 'DURANGO':
          $durango = array('','CANATLAN','CANELAS','CONETO DE COMONFORT','CUENCAME','DURANGO','GENERAL SIMON BOLIVAR','GOMEZ PALACIO','GUADALUPE VICTORIA','GUANACEVI','HIDALGO','INDE','LERDO','MAPIMI','MEZQUITAL','NAZAS','NOMBRE DE DIOS','OCAMPO','EL ORO','OTAEZ','PANUCO DE CORONADO','PEÑON BLANCO','POANAS','PUEBLO NUEVO','RODEO');
        foreach($durango as $dur){
        if($dur==""){
           echo "<option value='".$dur."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$dur."'>".$dur."</option>";
        }
                                }
            break;

          case 'GUANAJUATO':
        $guanajuato = array('','ABASOLO','ACAMBARO','ALLENDE','APASEO EL ALTO','APASEO EL GRANDE','ATARJEA','CELAYA','MANUEL DOBLADO','COMONFORT','CORONEO','CORTAZAR','CUERAMARO','DOCTOR MORA','DOLORES HIDALGO','GUANAJUATO','HUANIMARO','IRAPUATO','JARAL DEL PROGRESO','JERECUARO','LEON','MOROLEON','OCAMPO','PENJAMO','PUEBLO NUEVO');
                          foreach($guanajuato as $gua){
        if($gua==""){
           echo "<option value='".$gua."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$gua."'>".$gua."</option>";
        }
                                }
            break;

          case 'GUERRERO':
        $guerrero = array('','ACAPULCO DE JUAREZ','AHUACUOTZINGO','AJUCHITLAN DEL PROGRESO','ALCOZAUCA DE GUERRERO','ALPOYECA','APAXTLA','ARCELIA','ATENANGO DEL RIO','ATLAMAJALCINGO DEL MONTE','ATLIXTAC','ATOYAC DE ALVAREZ','AYUTLA DE LOS LIBRES','AZOYU','BENITO JUAREZ','BUENAVISTA DE CUELLAR','COAHUAYUTLA DE JOSE MARIA IZAZAGA','COCULA','COPALA','COPALILLO','COPANATOYAC','COYUCA DE BENITEZ','COYUCA DE CATALAN','CUAJINICUILAPA','CUALAC');
                          foreach($guerrero as $guerr){
        if($guerr==""){
           echo "<option value='".$guerr."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$guerr."'>".$guerr."</option>";
        }
                                }
            break;

          case 'HIDALGO':
        $hidalgo = array('','ACATLAN','ACAXOCHITLAN','ACTOPAN','AGUA BLANCA DE ITURBIDE','AJACUBA','ALFAJAYUCAN','ALMOLOYA','APAN','EL ARENAL','ATITALAQUIA','ATLAPEXCO','ATOTONILCO EL GRANDE','ATOTONILCO DE TULA','CALNALI','CARDONAL','CUAUTEPEC DE HINOJOSA','CHAPANTONGO','CHAPULHUACAN','CHILCUAUTLA','ELOXOCHITLAN','EMILIANO ZAPATA','EPAZOYUCAN','FRANCISCO I. MADERO','HUASCA DE OCAMPO');
                          foreach($hidalgo as $hid){
        if($hid==""){
           echo "<option value='".$hid."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$hid."'>".$hid."</option>";
        }
                                }
            break;

          case 'MEXICO':
        $mexico = array('','ACAMBAY','ACOLMAN','ACULCO','ALMOLOYA DE ALQUISIRAS','ALMOLOYA DE JUAREZ','ALMOLOYA DEL RIO','AMANALCO','AMATEPEC','AMECAMECA','APAXCO','ATENCO','ATIZAPAN','ATIZAPAN DE ZARAGOZA','ATLACOMULCO','ATLAUTLA','AXAPUSCO','AYAPANGO','CALIMAYA','CAPULHUAC','COACALCO DE BERRIOZABAL','COATEPEC HARINAS','COCOTITLAN','COYOTEPEC','CUAUTITLAN');
                          foreach($mexico as $mex){
        if($mex==""){
           echo "<option value='".$mex."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$mex."'>".$mex."</option>";
        }
                                }
            break;

          case 'MICHOACAN DE OCAMPO':
        $michoacan = array('','ACUITZIO','AGUILILLA','ALVARO OBREGON','ANGAMACUTIRO','ANGANGUEO','APATZINGAN','APORO','AQUILA','ARIO','ARTEAGA','BRISEÑAS','BUENAVISTA','CARACUARO','COAHUAYANA','COALCOMAN DE VAZQUEZ PALLARES','COENEO','CONTEPEC','COPANDARO','COTIJA','CUITZEO','CHARAPAN','CHARO','CHAVINDA','CHERAN');
                          foreach($michoacan as $michoa){
        if($michoa==""){
           echo "<option value='".$michoa."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$michoa."'>".$michoa."</option>";
        }
                                }
            break;

            case 'MORELOS':
        $morelos = array('','AMACUZAC','ATLATLAHUCAN','AXOCHIAPAN','AYALA','COATLAN DEL RIO','CUAUTLA','CUERNAVACA','EMILIANO ZAPATA','HUITZILAC','JANTETELCO','JIUTEPEC','JOJUTLA','JONACATEPEC','MAZATEPEC','MIACATLAN','OCUITUCO','PUENTE DE IXTLA','TEMIXCO','TEPALCINGO','TEPOZTLAN','TETECALA','TETELA DEL VOLCAN','TLALNEPANTLA','TLALTIZAPAN');
                          foreach($morelos as $more){
        if($more==""){
           echo "<option value='".$more."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$more."'>".$more."</option>";
        }
                                }
              break;

        case 'NAYARIT':
       $nayarit = array('','ACAPONETA','AHUACATLAN','AMATLAN DE CAÑAS','COMPOSTELA','HUAJICORI','IXTLAN DEL RIO','JALA','XALISCO','DEL NAYAR','ROSAMORADA','RUIZ','SAN BLAS','SAN PEDRO LAGUNILLAS','SANTA MARIA DEL ORO','SANTIAGO IXCUINTLA','TECUALA','TEPIC','TUXPAN','LA YESCA','BAHIA DE BANDERAS');
                          foreach($nayarit as $naya){
        if($naya==""){
           echo "<option value='".$naya."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$naya."'>".$naya."</option>";
        }
                                }
          break;

        case 'OAXACA':
       $oaxaca = array('','VILLA DE TAMAZULAPAM DEL PROGRESO','TANETZE DE ZARAGOZA','TANICHE','TATALTEPEC DE VALDES','TEOCOCUILCO DE MARCOS PEREZ','TEOTITLAN DE FLORES MAGON','TEOTITLAN DEL VALLE','TEOTONGO','TEPELMEME VILLA DE MORELOS','TEZOATLAN DE SEGURA Y LUNA','SAN JERONIMO TLACOCHAHUAYA','TLACOLULA DE MATAMOROS','TLACOTEPEC PLUMAS','YOGANA','YUTANDUCHI DE GUERRERO','VILLA DE ZAACHILA','ZAPOTITLAN DEL RIO','ZAPOTITLAN LAGUNAS','ZAPOTITLAN PALMAS','SANTA INES DE ZARAGOZA','ZIMATLAN DE ALVAREZ','INSUFICIENTEMENTE ESPECIFICADO','TLALIXTAC DE CABRERA','TOTONTEPEC VILLA DE MORELOS','TRINIDAD ZAACHILA');
                          foreach($oaxaca as $oxa){
        if($oxa==""){
           echo "<option value='".$oxa."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$oxa."'>".$oxa."</option>";
        }
                                }  
        break;

        case 'QUERETARO DE ARTEAGA':
        $queretaro = array('','AMEALCO DE BONFIL','PINAL DE AMOLES','ARROYO SECO','CADEREYTA DE MONTES','COLON','CORREGIDORA','EZEQUIEL MONTES','HUIMILPAN','JALPAN DE SERRA','LANDA DE MATAMOROS','EL MARQUES','PEDRO ESCOBEDO','PEÑAMILLER','QUERETARO','SAN JOAQUIN','SAN JUAN DEL RIO','TEQUISQUIAPAN','TOLIMAN','ECUADOR','QUERETARO DE ARTEAGA');
                          foreach($queretaro as $quere){
        if($quere==""){
           echo "<option value='".$quere."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$quere."'>".$quere."</option>";
        }
                                }
        break;

        case 'QUINTANA ROO':
        $quintanaroo = array('','COZUMEL','FELIPE CARRILLO PUERTO','ISLA MUJERES','OTHON P. BLANCO','BENITO JUAREZ','JOSE MARIA MORELOS','LAZARO CARDENAS','SOLIDARIDAD');
                          foreach($quintanaroo as $roo){
        if($roo==""){
           echo "<option value='".$roo."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$roo."'>".$roo."</option>";
        }
                                }
          break;

        case 'SAN LUIS POTOSI':
       $sanluis = array('','SAN MIGUEL DE TUCUMAN','AHUALULCO','ALAQUINES','AQUISMON','ARMADILLO DE LOS INFANTE','CARDENAS','CATORCE','CEDRAL','CERRITOS','CERRO DE SAN PEDRO','CIUDAD DEL MAIZ','CIUDAD FERNANDEZ','TANCANHUITZ','CIUDAD VALLES','COXCATLAN','CHARCAS','EBANO','GUADALCAZAR','HUEHUETLAN','LAGUNILLAS','MATEHUALA','MEXQUITIC DE CARMONA','MOCTEZUMA','RAYON');
                          foreach($sanluis as $san){
        if($san==""){
           echo "<option value='".$san."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$san."'>".$san."</option>";
        }
                                }
          break;

        case 'SINALOA':
        $sinaloa = array('','AHOME','ANGOSTURA','BADIRAGUATO','CONCORDIA','COSALA','CULIACAN','CHOIX','ELOTA','ESCUINAPA','EL FUERTE','GUASAVE','MAZATLAN','MOCORITO','ROSARIO','SALVADOR ALVARADO','SAN IGNACIO','SINALOA','NAVOLATO');
                          foreach($sinaloa as $sina){
        if($sina==""){
           echo "<option value='".$sina."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$sina."'>".$sina."</option>";
        }
                                }
          break;

        case 'TLAXCALA':
        $tlaxcala = array('','AMAXAC DE GUERRERO','APETATITLAN DE ANTONIO CARVAJAL','ATLANGATEPEC','ALTZAYANCA','APIZACO','CALPULALPAN','EL CARMEN TEQUEXQUITLA','CUAPIAXTLA','CUAXOMULCO','CHIAUTEMPAN','MUÑOZ DE DOMINGO ARENAS','ESPAÑITA','HUAMANTLA','HUEYOTLIPAN','IXTACUIXTLA DE MARIANO MATAMOROS','IXTENCO','MAZATECOCHCO DE JOSE MARIA MORELOS','CONTLA DE JUAN CUAMATZI','TEPETITLA DE LARDIZABAL','SANCTORUM DE LAZARO CARDENAS','NANACAMILPA DE MARIANO ARISTA','ACUAMANALA DE MIGUEL HIDALGO','NATIVITAS','PANOTLA');
                          foreach($tlaxcala as $tlax){
        if($tlax==""){
           echo "<option value='".$tlax."'>Seleccione una opci&oacute;n</option>";
        }else{
           echo "<option value='".$tlax."'>".$tlax."</option>";
        }
                                }  
        break;
	    
	    default:
		
		break;
}
?>


 ?>