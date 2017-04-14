<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>formulario</title>
      <link type="text/css" rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
       crossorigin="anonymous">
  </head>
  <body>
    <section class="formulario">
    <form  name="form1" method="POST" action="proceso.php" >
        <label for="fecha">Fecha:</label>
        <input id="fecha" type="text" name="fecha" placeholder="01 de Marzo de 2017" required="" />
            <fieldset >
              <legend>Datos del arrendatario</legend>
              <label for="razonsocialArrendador">Razon social Arrendador:</label>
              <input id="razonsocialArrendador" type="text" name="razonsocial" placeholder="ingenieria the solve limitada" required="" />
              <label for="fechainscrito">Fecha de inscripcion empresa:</label>
              <input id="fechainscrito" type="text" name="fechainscrito" placeholder="01 de Marzo de 2017" required="" />
              <label for="rol">Rol unico Tributario:</label>
              <input id="rol" type="text" name="rol" placeholder="76.703.105-k" required="" />
              <label for="giro">Giro comercial</label>
              <input id="giro" type="text" name="giro" placeholder="Desarrollo y Diseño informatico" />
              <label for="representante">Nombre del representante legal</label>
              <input id="representante" type="text" name="representante" placeholder="Maximo guillermo Arancibia Rodriguez" required="" />
              <label for="nacionalidad">Nacionalidad</label>
              <input id="nacionalidad" type="texto" name="nacionalidad" placeholder="Chileno" required="" />
              <label for="estadocivil">estado civil</label>
              <input id="estadocivil" type="texto" name="estadocivil" placeholder="Soltero" required="" />
              <label for="profesion">Profesion</label>
              <input id="profesion" type="text" name="profesion" placeholder="Ingeniero Civil Industrial" required="" />
              <label for="rut">Rut Arrendador</label>
              <input id="rut" type="text" name="rut" placeholder="17.163.642-6" required="" />
              <label for="domicilio">Domicilio del arrendador</label>
              <input id="domicilio" type="text" name="domicilio" placeholder="San francisco N°467 depto 613">
              <label for="comuna">Comuna</label>
              <input id="comuna" type="text" name="comuna" placeholder="Comuna de Santiago" required="" />
              <label for="ciudad">Ciudad</label>
              <input id="ciudad" type="text" name="ciudad" placeholder="santiago" required="" />
            </fieldset>
            <fieldset>
              <legend> Datos del Arriendo</legend>
              <label for="costo">costo Mensual</label>
              <input id="costo" type="text" name="costo" placeholder="$18.000" required="" />
            </fieldset>
           <input id="submit" type="submit" name="submit" value="Enviar" />
      </form>
    </section>
  </body>
</html>
