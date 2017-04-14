<?php
include_once('PDF.php');
include_once('ToRtf.php');



if(isset($_POST['submit']))
{
$fecha = $_POST['fecha'];
$razonsocial = $_POST['razonsocial'];
$fechainscrito = $_POST['fechainscrito'];
$rol = $_POST['rol'];
$giro = $_POST['giro'];
$representante = $_POST['representante'];
$nacionalidad = $_POST['nacionalidad'];
$estadocivil = $_POST['estadocivil'];
$profesion = $_POST['profesion'];
$rut = $_POST['rut'];
$domicilio = $_POST['domicilio'];
$comuna = $_POST['comuna'];
$ciudad = $_POST['ciudad'];
// costo en dinero
$costo = $_POST['costo'];
}

$f = new ToRtf();
$f->fichero = 'plantilla.rtf';
$f->fsalida = 'nuevo.rtf';
$f->dirsalida = '';
$f->retorno = 'fichero';
$f->prefijo = 'pre_';
$f->valores = array(
	'#*FECHA*#' => $fecha,
	'#*RAZONSOCIAL*#' => $razonsocial,
	'#*FECHAINSCRITO*#' => $fechainscrito,
	'#*ROL*#' => $rol,
	'#*GIRO*#' => $giro,
	'#*REPRESENTANTE*#' => $representante,
	'#*NACIONALIDAD*#' => $nacionalidad,
	'#*ESTADOCIVIL*#' => $estadocivil,
	'#*PROFESION*#' => $profesion,
	'#*RUT*#' => $rut,
	'#*DOMICILIO*#' => $domicilio,
	'#*COMUNA*#' => $comuna,
	'#*CIUDAD*#' => $ciudad,
	);
$f->rtf();

//se crea un objeto de pdf, para hacer uso de los metodos
$pdf = new PDF();
$pdf->AddPage('P', 'Letter'); // vertical, carta
$pdf->SetFont('Arial','B',12); // Arial, negrita, 12 de tamaño

//$pdf->WriteHTML(pre_nuevo.rtf);
$pdf->ImprimirTexto('pre_nuevo.rtf'); //Texto fijo
$pdf->Output(); // salida al navegador del pdf





  //$textofinal=$_POST['textofinal'];
  //echo $textofinal;
  // se crea un objeto de pdf, para hacer uso de los metodos
  // $pdf = new PDF();
  // $pdf->AddPage('P', 'Letter'); // vertical, carta
  // $pdf->SetFont('Arial','B',12); // Arial, negrita, 12 de tamaño
  // $pdf->WriteHTML($textofinal);
  // $pdf->Output(); // salida al navegador del pdf



//echo $fecha;
//
// $texto ='<h2>
// 	<style type="text/css">
// @page { margin: 0.79in }
// 		p { margin-bottom: 0.1in; direction: ltr; line-height: 120%; text-align: left; orphans: 2; widows: 2 }
// 		p.western { so-language: es-ES }
// 		a:link { color: #0563c1 }	</style>
// </h2>
// <p class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 150%; text-align: center;">
// 	<font face="Arial, serif"><font style="font-size: 12pt"><u><b>CONTRATO DE ARRENDAMIENTO</b></u></font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 150%">
// 	<br />
// 	&nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<font face="Arial, serif"><font style="font-size: 10pt">En Santiago de Chile, a ' ;
//
// $texto2 =' </font></font><font face="Arial, serif"><font style="font-size: 10pt"><b> </b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">entre la sociedad </font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b>ADN Auditores SpA.</b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">, del giro de su denominaci&oacute;n, Rol &Uacute;nico Tributario n&uacute;mero 76.481.317-0,
//  representada legalmente por don </font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b>Pierre Andr&eacute;s Gonz&aacute;lez Meza</b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">, chileno, soltero, contador auditor, c&eacute;dula nacional
//  de identidad n&uacute;mero 15.481.317-0, ambos domiciliados para estos efectos en Huelen 10, oficina 402, comuna de Providencia, Santiago,
//   en adelante el &ldquo;ARRENDADOR&rdquo;; y</font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b> ';
//
// $texto3 =',</b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"> Rol &Uacute;nico Tributario ';
//
// $texto4 =', sociedad cuyo giro es: ';
//
// $texto5 =' ;, debidamente representada por don </font></font><font face="Arial, serif"><font style="font-size: 10pt"><b> ';
//
// $texto6 =',</b></font></font><font face="Arial, serif"><font style="font-size: 10pt">';
//
// $texto7 =', c&eacute;dula nacional de identidad n&uacute;mero ';
//
// $texto8 =', domiciliado en ';
//
// $texto9 =', comuna de ';
//
// $texto10 =', ';
//
// $texto11 =', en adelante el &ldquo;ARRENDATARIO&rdquo;, se ha convenido contrato de arrendamiento
//   que consta de las siguientes declaraciones:</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">I. </font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><u>ARRENDAMIENTO:</u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"> Por el presente contrato, el ARRENDADOR da en arrendamiento al ARRENDATARIO
// el PRIVADO N&deg;2 (sala de reuniones)</font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b>, </b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">de la oficina 402, ubicada en Huelen 10, comuna de Providencia, Santiago,
//  rol de avalu&oacute; n&uacute;mero 511-189, propiedad de do&ntilde;a</font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b> Marta Victoria Fern&aacute;ndez Donoso</b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">,</font></font><font face="Arial, serif"><font style="font-size: 10pt"><b> </b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">c&eacute;dula nacional de identidad n&uacute;mero 4.130.210-0, el que se entrega amoblado.
//  Se hace presente que el ARRENDADOR se encuentra facultado por el propietario del inmueble ya individualizado para subarrendarlo como estime conveniente.
//   De acuerdo a lo anterior, se deja expresa constancia que los muebles que guarecen dicho privado son
// 	 de exclusiva propiedad del ARRENDADOR.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<font face="Arial, serif"><font style="font-size: 10pt">Para los efectos del presente contrato,
// 	 cuando se habla del ARRENDADOR se est&aacute; haciendo referencia a la
// 	  empresa de ADN Auditores SpA y cuando se habla del ARRENDATARIO se est&aacute; haciendo referencia
// 		 a la empresa ';
//
// $texto12 =',</font></font><font face="Arial, serif"><font style="font-size: 10pt"><b> </b></font></font>
// 	 <font face="Arial, serif"><font style="font-size: 10pt">Se deja expresa constancia que la empresa ADN Auditores SpA.
// 		Es arrendataria de do&ntilde;a Marta Victoria Fern&aacute;ndez Donoso, quien es la propietaria del inmueble arrendado objeto de ese contrato,
// 		 y en virtud del contrato firmado entre do&ntilde;a Marta Victoria Fern&aacute;ndez Donoso y ADN Auditores SpA.,
// 		 firmado con fecha de 29 de septiembre de 2016 en la Notar&iacute;a de don Camilo Valenzuela Riveros, ubicada en la
// 			comuna de Providencia, ADN Auditores SpA, se encuentra debidamente facultada para subarrendar la oficina a ';
//
// $texto13 = '</font></font></p><p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">II. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>CONDICIONES DE ARRENDAMIENTO: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">El arriendo del privado objeto del presente contrato no es de car&aacute;cter exclusivo,
//  sino que este se llevar&aacute; a cabo de forma compartida, seg&uacute;n las condiciones contenidas en el anexo n&uacute;mero uno,
// 	que se entiende como parte integrante del presente contrato, y que el ARRENDATARIO declara conocer y recibir en este acto.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">III. </font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><u>USO DE DIRECCI&Oacute;N COMERCIAL Y/O TRIBUTARIA: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">El presente contrato permitir&aacute; hacer uso del domicilio del inmueble
//  que por este acto se entrega en arriendo, para efectos comerciales, de inicio de actividades y
//  toda clase de tr&aacute;mites ante el SII, adem&aacute;s de la obtenci&oacute;n de patentes comerciales,
// 	en forma exclusiva para la sociedad arrendataria o persona natural arrendataria que se especifique en este contrato.
// 	 El uso no autorizado del domicilio por m&aacute;s de un Rol &Uacute;nico Tributario o c&eacute;dula nacional
// 	 de identidad que no sea el ARRENDATARIO, o el uso que exceda los l&iacute;mites de lo estipulado en el
// 		presente contrato y sus anexos sin previo aviso o sin autorizaci&oacute;n por parte del ARRENDADOR, ser&aacute; causal de termino
// 		 inmediato del contrato.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">IV. </font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><u>VIGENCIA DEL CONTRATO: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">El arrendamiento comenzar&aacute; a regir a partir de esta fecha,
//  y se extender&aacute; por un periodo de 3 meses, prorrogable autom&aacute;ticamente por periodos iguales y sucesivos.
// 	Las partes podr&aacute;n poner t&eacute;rmino al mismo, mediante aviso escrito enviado por correo electr&oacute;nico con
// 	 una anticipaci&oacute;n de, al menos, 30 d&iacute;as al e-mail del ARRENDADOR o ARRENDATARIO, seg&uacute;n corresponda.
// 		De no mediar este aviso, el contrato se entender&aacute; prorrogado por otro periodo igual al se&ntilde;alado precedentemente.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">V. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>PROHIBICI&Oacute;N DE SUBARRIENDO: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">Queda expresamente prohibido al ARRENDATARIO subarrendar el privado objeto de este contrato,
//  as&iacute; como ceder o transferir a cualquier t&iacute;tulo el presente contrato sin autorizaci&oacute;n expresa del ARRENDADOR,
// 	la que deber&aacute; constar por escrito.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">VI. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>CANON DE ARRENDAMIENTO: </u></font></font><font face="Arial, serif">';
//
// $texto14 = '<font style="font-size: 10pt">El valor de la renta de arrendamiento ser&aacute; la suma de $';
// $texto15 = '  pesos mensuales m&aacute;s IVA, pagaderos por periodos anticipados, antes del d&iacute;a 5 de cada mes. El ARRENDATARIO declara aceptar que
// 	el ARRENDADOR env&iacute;e todas las facturas electr&oacute;nicas por concepto de mensualidad al correo
// 	 electr&oacute;nico m&aacute;ximo.arancibia.r@gmail.com . En el caso que el ARRENDATARIO modifique la
// 		direcci&oacute;n de su correo electr&oacute;nico, deber&aacute; dar aviso al ARRENDADOR remitiendo un correo
// 		 electr&oacute;nico a <a href="mailto:info@businessfactory.cl">info@businessfactory.cl</a>. </font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">VII.</font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u> OBLIGACI&Oacute;N DE CAMBIO DE DOMICILIO TRIBUTARIO</u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">: Una vez finalizado el presente contrato,
//  ser&aacute; obligaci&oacute;n del ARRENDATARIO acreditar al ARRENDADOR el cambio de domicilio comercial y tributario informado
// 	debidamente al Servicio de precedentemente, el ARRENDADOR quedar&aacute; facultado para informar a ese Servicio Impuestos Internos,
// 	dentro de los 5 d&iacute;as h&aacute;biles siguientes a dicho t&eacute;rmino. En caso de incumplimiento por parte del ARRENDATARIO del
// 	deber expresado a fin que proceda con el bloqueo del contribuyente, en tanto no actualice tal informaci&oacute;n,
// 	 entendi&eacute;ndose adem&aacute;s que, inclusive mediando el aviso al que refiere la cl&aacute;usula cuarta,
// 		el contrato se prorroga por igual plazo, debiendo por tanto el ARRENDATARIO pagar al ARRENDADOR la suma de dinero correspondiente
// 		 a dicho periodo.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">VIII.</font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>DESTINO DE LA PROPIEDAD Y AUTORIZACI&Oacute;N PARA USO COMERCIAL: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">La propiedad ser&aacute; utilizada &uacute;nicamente como oficina,
//  dentro del giro del ARRENDATARIO. Queda expresamente prohibido al ARRENDATARIO:</font></font></p>
// <ol>
// <li>
// 	<p align="justify" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 		<font face="Arial, serif"><font style="font-size: 10pt">Destinar el inmueble a fines contrarios a las leyes, la moral,
// 		 las buenas costumbres, o el orden p&uacute;blico; y mantener o permitir conductas que por impropias o molestas perturben el normal
// 			funcionamiento de la oficina.</font></font></p>
// </li>
// </ol>
// <p align="justify" lang="es-ES" style="margin-left: 0.5in; margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <ol start="2">
// <li>
// 	<p align="justify" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 		<font face="Arial, serif"><font style="font-size: 10pt">Incluir cualquier mobiliario o efectos personales en el inmueble arrendado,
// 		 salvo los que sean indispensables para el desarrollo de su actividad, y que son, b&aacute;sicamente, aquellos documentos contables
// 			que permitan una correcta fiscalizaci&oacute;n. </font></font></p>
// </li>
// </ol>
// <p align="justify" lang="es-ES" style="margin-left: 0.5in; margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <ol start="3">
// <li>
// 	<p align="justify" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 		<font face="Arial, serif"><font style="font-size: 10pt">Usar otra dependencia que no sea la oficina o sala de reuniones,
// 		 en su caso, como lugar de trabajo. Se deja constancia de que hall de entrada y la recepci&oacute;n se podr&aacute;n utilizar exclusivamente
// 			como sala de espera.</font></font></p>
// </li>
// </ol>
// <p align="justify" lang="es-ES" style="margin-left: 0.5in; margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <ol start="4">
// <li>
// 	<p align="justify" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 		<font face="Arial, serif"><font style="font-size: 10pt">Ocupar el inmueble arrendado para desarrollar
// 		 las actividades de cualquier otra compa&ntilde;&iacute;a o persona natural distinta al ARRENDATARIO,
// 			sus socios y funcionarios autorizados.</font></font></p>
// </li>
// </ol>
// <p lang="es-ES" style="margin-left: 0.5in; margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <ol start="5">
// <li>
// 	<p align="justify" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 		<font face="Arial, serif"><font style="font-size: 10pt">Utilizar el domicilio y/o instalaciones cedidas en arrendamiento
// 		 para fines personales, especialmente para efectos de apertura de cuentas corrientes,
// 		 solicitud de cr&eacute;ditos de consumo en bancos o casas comerciales y, en general,
// 		 para finalidades distintas al giro comercial de la sociedad arrendataria.</font></font></p>
// </li>
// </ol>
// <p lang="es-ES" style="margin-left: 0.5in; margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">La destinaci&oacute;n para fines distintos a lo expresado,
//  as&iacute; como la transgresi&oacute;n de cualquiera de los prohibiciones mencionadas en la presente cl&aacute;usula,
// 	dar&aacute; derecho al ARRENDADOR para terminar de forma inmediata el presente contrato, sin que el ARRENDATARIO
// 	 pueda exigir la devoluci&oacute;n de las rentas de arrendamiento pagadas en forma anticipada, las que quedar&aacute;n en manos del ARRENDADOR
// 		a t&iacute;tulo de indemnizaci&oacute;n, sin perjuicio de poder ejercer, adem&aacute;s, las acciones legales en
// 		 contra del ARRENDATARIO y/o de terceros por el uso indebido o no autorizado del domicilio comercial y tributario objeto
// 		 de este contrato.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">IX. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>ESTADO ACTUAL DE LA PROPIEDAD: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">El ARRENDATARIO declara conocer la propiedad que toma en arrendamiento y su estado de conservaci&oacute;n actual,
//  as&iacute; como el hecho de encontrarse &eacute;sta amoblada seg&uacute;n inventario detallado en el anexo IV del presente contrato,
// 	que pasa a formar parte del mismo. Se obliga, por tanto, a mantener el espacio arrendado en perfecto estado de conservaci&oacute;n y funcionamiento,
// 	 lo que incluye todas las instalaciones y mobiliario que lo guarnezcan, y a entregarlo en las mismas condiciones en que lo recibi&oacute;,
// 		debiendo responder el ARRENDATARIO por cualquier da&ntilde;o causado durante el tiempo que use o goce del inmueble, salvo el desgaste por el tiempo y uso leg&iacute;timo.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">La no reparaci&oacute;n o reposici&oacute;n de instalaciones,
//  mobiliario o artefactos da&ntilde;ados por el ARRENDATARIO, facultar&aacute; autom&aacute;ticamente al ARRENDADOR
// 	para poner t&eacute;rmino inmediato al presente contrato y a realizar todas las reparaciones que fueren procedentes, siendo todos los gastos incurridos de cargo del ARRENDATARIO, o bien estos se imputar&aacute;n al monto que se consign&oacute; en garant&iacute;a, si este se ha entregado. En caso que dichos gastos excedan la suma entregada, ser&aacute; obligaci&oacute;n del ARRENDATARIO responder por la diferencia generada seg&uacute;n sea el caso, sin perjuicio de las acciones legales respectivas que a ra&iacute;z de dichos da&ntilde;os pudieren surgir.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">X. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>MEJORAS, ARREGLOS O MODIFICACIONES EN EL INMUEBLE: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">Queda estrictamente prohibido al ARRENDATARIO
// efectuar transformaciones o variaciones de cualquier naturaleza en el inmueble arrendado, en sus dependencias o instalaciones.
//  El ARRENDADOR no tendr&aacute; obligaci&oacute;n de hacer mejoras en el inmueble ni autoriza al arrendatario para hacerlas.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XI. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>CUMPLIMIENTOS LEGALES: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">El ARRENDATARIO se obliga a obtener la patente municipal en un plazo no superior a 15 d&iacute;as corridos contados desde esta fecha y a cumplir con todas las normas legales, tributarias y comerciales exigidas. Asimismo, el ARRENDATARIO asume la responsabilidad por eventuales da&ntilde;os o p&eacute;rdidas, de cualquier naturaleza que pudiesen afectar a equipos, materiales, trabajos o mobiliario de propiedad del ARRENDADOR, siempre que &eacute;sta sea ocasionada por la falta de cumplimiento de las obligaciones legales, tributarias o comerciales por parte del ARRENDATARIO, oblig&aacute;ndose a indemnizar este &uacute;ltimo al ARRENDADOR por cualquier da&ntilde;o o perjuicio ocasionado por la falta de cumplimiento antes indicada.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XII.</font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u> PROHIBICIONES: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">Durante la vigencia de este contrato, y hasta seis meses despu&eacute;s de finalizado el mismo,
//  tanto el ARRENDADOR como el ARRENDATARIO se comprometen a no ofrecer y/o pedir empleo al personal de la contraria.
// 	Esta obligaci&oacute;n comprender&aacute; a todos sus empleados, desde su fecha de contrataci&oacute;n,
// 	 y hasta tres meses despu&eacute;s de finiquitada la relaci&oacute;n laboral.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XIII. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>T&Eacute;RMINO ANTICIPADO DEL CONTRATO: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">En caso de insolvencia financiera del ARRENDATARIO,
//  sea &eacute;sta por quiebra, &oacute;rdenes de embargo, protesto de cheques, o en general, si el ARRENDATARIO
// 	manifestase una conducta no compatible con el uso corriente de las oficinas, el ARRENDADOR podr&aacute;
// 	poner t&eacute;rmino al presente contrato en forma inmediata, sin derecho a reclamo alguno por parte del ARRENDATARIO,
// 	 pudiendo el ARRENDADOR retener las rentas de arrendamiento pagadas y a&uacute;n no devengadas si as&iacute; fuere el caso.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <br />
// &nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XIV. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>EN CASO DE ABANDONO DEL INMUEBLE: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">En el evento que el ARRENDATARIO abandonare el inmueble sin dar aviso del
//  cambio de domicilio al Servicio de Impuestos Internos, el ARRENDADOR queda facultado para retirar las pertenec&iacute;as que el ARRENDATARIO
// 	haya dejado en su interior y depositarlas bajo inventario en una bodega u otro lugar apropiado cuyo costo ser&aacute; de cargo del ARRENDATARIO.
// 	 Este inventario deber&aacute; efectuarse en presencia de dos testigos.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XV.</font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u> RESPONSABILIDADES DEL ARRENDATARIO: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">El ARRENDATARIO asume como de su entera responsabilidad
//  y cuenta cualquier requisito o exigencia de orden sanitario, municipal, fiscal o de cualquier otra naturaleza
// 	y de cualquier organismo o dependencia p&uacute;blica o privada, que diga relaci&oacute;n con el uso o servicio del inmueble arrendado
// 	 para el destino que le dar&aacute; el ARRENDATARIO. Asimismo, ambas partes declaran que las obligaciones del ARRENDATARIO
// 		han sido elevadas a la calidad de esenciales, y por ello cualquier infracci&oacute;n de las normas contenidas en este
// 		 contrato y sus anexos, constituir&aacute; un incumplimiento grave del mismo, lo que facultar&aacute; al ARRENDADOR
// 			para poner fin a este contrato.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XVI. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>ENTREGA DE LA PROPIEDAD:</u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt"> La propiedad arrendada, en este caso el privado seg&uacute;n disponibilidad,
//  se entrega materialmente al arrendatario el d&iacute;a de la firma del presente contrato.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XVII. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>RESPONSABILIDAD POR CASO DE FUERZA MAYOR: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">El ARRENDADOR no responder&aacute; por robos u otros delitos que
//  ocurran en la propiedad arrendada o por perjuicios provenientes de incendios, inundaciones, filtraciones,
// 	rotura de ca&ntilde;er&iacute;as, efectos de humedad o calor, accidentes, o cualquier hecho fortuito o de fuerza mayor,
// 	 que tenga como efecto el que la propiedad quede inutilizable para los fines a que est&aacute; destinada en este contrato,
// 		o bien se torne imposible el cumplimiento del mismo y/o de las obligaciones contenidas en sus anexos. Asimismo, dichas circunstancias constituir&aacute;n causal de t&eacute;rmino anticipado del presente contrato. </font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">Se considerar&aacute; especialmente como un hecho de fuerza mayor
//  cualquier cambio en la aplicaci&oacute;n y/o interpretaci&oacute;n de la legislaci&oacute;n comercial,
//  tributaria o civil que haga inviable la ejecuci&oacute;n de este contrato, ya sea que &eacute;sta emane del Poder Legislativo o de cualquier
// 	autoridad pol&iacute;tica o administrativa.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XVIII.</font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u> CONFIDENCIALIDAD Y ANTECEDENTES PERSONALES: </u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">Los t&eacute;rminos del presente contrato son de car&aacute;cter confidencial,
// de manera que ninguna de las partes podr&aacute; divulgarlos sin autorizaci&oacute;n de la contraria,
//  salvo requerimiento legal o de la autoridad competente. Constituir&aacute; excepci&oacute;n a lo se&ntilde;alado el incumplimiento o mora
// 	por parte del ARRENDATARIO, caso en el cual &eacute;ste autoriza desde ya al ARRENDADOR para publicar dichos montos en los
// 	registros que se remitan a los servicios de informaci&oacute;n Comercial o de Riesgo de Cr&eacute;dito, para los efectos de poner en conocimiento del publico tales incumplimientos. El ARRENDATARIO releva en este acto al ARRENDADOR de cualquier responsabilidad que se pueda derivar al efecto.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="text-indent: 0in; margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XIX. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>GIRO Y ACTIVIDAD ECON&Oacute;MICA: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">Se deja expresa constancia que el giro del ARRENDATARIO es el de importaci&oacute;n, venta
//  y distribuci&oacute;n de art&iacute;culos coleccionables, juguetes y entretenimiento en general y que el inmueble objeto del presente contrato
//  no podr&aacute; utilizarse bajo ninguna circunstancia como bodega.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XX. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>DOMICILIO LEGAL: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">Para todos los efectos legales que provengan de este contrato las partes fijan su domicilio
// en la ciudad de Santiago y se someten a la competencia de sus tribunales.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">XXI. </font></font><font face="Arial, serif">
// <font style="font-size: 10pt"><u>RESPONSABILDAD POR CASOS FORTUITOS: </u></font></font><font face="Arial, serif">
// <font style="font-size: 10pt">El ARRENDADOR se exime de toda responsabilidad civil, legal o criminal que tenga relaci&oacute;n con los juicios
// de por fraude o cualquier otra &iacute;ndole en que el ARRENDATARIO pudiese verse involucrado. Asimismo, el ARRENDADOR
//  no ser&aacute; responsable de ninguna p&eacute;rdida que resulte del hecho de no brindar un servicio
// 	con motivo de alg&uacute;n desperfecto mec&aacute;nico, huelga, demora, incumplimiento de cualquier miembro del equipo,
// 	gerente o encargado de cumplir con sus obligaciones. El ARRENDATARIO declara de forma expresa que renuncia a formular reclamo y cargo alguno,
// 	 o ejercer alguna acci&oacute;n de cualquier naturaleza en contra del ARRENDADOR por da&ntilde;os directos, indirectos,
// 		punitivos o especiales, incluyendo sin que la enunciaci&oacute;n sea taxativa, el lucro cesante, la perdida de negocios,
// 		 ingresos, beneficios o datos; incumplimiento en el suministro de cualquier servicio proporcionado por el ARRENDADOR;
// 		 el fracaso en la entrega a tiempo de alg&uacute;n servicio de mensajer&iacute;a o cualquier articulo
// 			(correo, paquetes, etc&eacute;tera). </font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">El ARRENDATARIO declara en forma expresa que todo el mobiliario
//  que se encuentra al interior del inmueble singularizado en la cl&aacute;usula primera precedente pertenece en forma exclusiva al ARRENDADOR,
// 	oblig&aacute;ndose el primero a responder por da&ntilde;os de cualquier naturaleza, perdidas, embargos, etc&eacute;tera,
// 	 ocasionados como consecuencia de acciones judiciales u otras an&aacute;logas en contra del ARRENDATARIO,
// 		sus empleados o representantes.</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt"><b>XXII. </b></font></font>';
// $texto16 = '<font face="Arial, serif"><font style="font-size: 10pt"><u><b>PERSONERIA</b></u></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt"><b>: </b></font></font>
// <font face="Arial, serif"><font style="font-size: 10pt">La personer&iacute;a de don Pierre Andr&eacute;s Gonz&aacute;lez Meza para
//  representar a ADN Auditores SpA. Consta en el Estatuto inscrito en el Registro de Empresas y Sociedades con fecha 18 de febrero de 2015. </font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// <font face="Arial, serif"><font style="font-size: 10pt">La personer&iacute;a de don ';
// $texto17 = ' para representar a ';
// $texto18 = '	Consta en el Estatuto inscrito en el Registro de Empresas y Sociedades con fecha ';
// $texto19 ='</font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<font face="Arial, serif"><font style="font-size: 10pt">El presente contrato se firma en dos ejemplares de igual tenor y fecha,
// 	 quedando uno en poder del ARRENDADOR y el otro en poder del ARRENDATARIO. </font></font></p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<br />
// 	&nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<br />
// 	&nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<br />
// 	&nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 115%">
// 	<br />
// 	&nbsp;</p>
// ';
//
// $texto20 = '<table cellpadding="7" cellspacing="0" width="567">
// 	<colgroup>
// 		<col width="203" />
// 		<col width="99" />
// 		<col width="222" />
// 	</colgroup>
// 	<tbody>
// 		<tr>
// 				<td style="border-style: solid none none; border-top-color: rgb(0, 0, 10); border-bottom-width: initial;
// 				 		border-bottom-color: initial; border-left-width: initial; border-left-color: initial; border-right-width: initial;
// 				  	border-right-color: initial; padding: 0in;" width="203">
// 				  	<p align="center" class="western" lang="es-ES" style="margin-bottom: 0in">
// 						<font face="Arial, serif"><font style="font-size: 10pt">Andr&eacute;s Gonz&aacute;lez Meza</font></font></p>
// 						<span style="font-size: 10pt; font-family: Arial, serif;">P.p. ADN Auditores SpA.</span>
// 				  	<p align="center" class="western" lang="es-ES">	&nbsp;</p>
// 			</td>
// 				<td style="border-width: initial; border-style: none; border-color: initial; padding: 0in;" width="99">
// 						 		<p align="center" class="western" lang="es-ES">	&nbsp;</p>
// 				</td>
// 				<td style="border-style: solid none none; border-top-color: rgb(0, 0, 10); border-bottom-width: initial;
// 						 		border-bottom-color: initial; border-left-width: initial; border-left-color: initial; border-right-width: initial;
// 						  	border-right-color: initial; padding: 0in;" width="222">
// 								<p align="center" class="western" lang="es-ES" style="margin-bottom: 0in">
// 								<font face="Arial, serif"><font style="font-size: 10pt">';
//
//
// $texto21 ='</font></font></p>
// <span style="font-size: 10pt; font-family: Arial, serif;">P.p. ';
// $texto22 ='</span>
// <p align="center" class="western" lang="es-ES">	&nbsp;</p>
// </td>
// </tr>
// </tbody>
// </table>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 150%">
// <br />
// &nbsp;</p>
// <p align="justify" class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 150%">
// <br />
// &nbsp;</p>
// <p class="western" lang="es-ES" style="margin-bottom: 0.11in; line-height: 108%">
// <br />
// &nbsp;</p>';
//
//
//
// $textofinal = $texto.$fecha.$texto2.$razonsocial.$texto3.$rol.$texto4.$giro.$texto5.$representante.
// $texto6.$nacionalidad.$texto7.$rut.$texto8.$domicilio.$texto9.$comuna.$texto10.$ciudad.$texto11.$razonsocial.$texto12
// .$razonsocial.$texto13.$texto14.$costo.$texto15.$texto16.$representante.$texto17.$razonsocial.$texto18.
// $fechainscrito.$texto19.$texto20.$representante.$texto21.$razonsocial.$texto22;

//echo $textofinal ;

?>
