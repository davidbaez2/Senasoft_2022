<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form action="">
            <div class="identificacion">
                <h1>INDENTIFICACION</h1>
                <h2>TIPO DE DOCUMENTO</h2>
                <select  class="select" name="tipoDocumento" id="tipoDocumento" required>
                    <option value=""></option>
                    <option value="1">Cedula de Ciudadania</option>
                    <option value="2">Tarjeta de Identidad</option>
                    <option value="3">Cedula de Extranjeria</option>
                </select>
                <h2>NUMERO DE DOCUMENTO</h2>
                <input class="box-input" type="number" name="numeroDocumento" required>
                <h2>NOMBRES COMPLETPS</h2>
                <input class="box-input" type="text" name="nombresCompletos" required>
                <h2>APELLIDOS</h2>
                <input class="box-input" type="text" name="apellidos"required>
                <h2>SEXO</h2>
                <select  class="select" name="sexo" id="sexo"required>
                    <option value="0"></option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    <option value="3">Intersexual</option>
                    <option value="4">Indefinido</option>
                    <option value="5">Prefeiro no decir</option>
                </select>
            </div>
            <div class="contacto">
                <h1>Contacto</h1>
                <h2>TELEFONO CELULAR</h2>
                <input class="box-input" type="number" name="telefonoCelular">
                <h2>NUMERO FIJO</h2>
                <input class="box-input" type="number" name="telefonoFijo">
                <h2>CORREO ELECTRONICO</h2>
                <input class="box-input" type="email" name="correoElectronico" required>
            </div>
            <div class="geograficas">
                <h1>GEOGRAFICAS</h1>
                <h2>MUNICIPIO</h2>
                <input class="box-input" type="text" name="municipio" required>
                <h2>DIRECCION</h2>
                <input  class="box-input" type="text" name="direccion">
                <h2>BARRIO - VEREDA</h2>
                <input  class="box-input" type="text" name="barrioVereda" required>

            </div>
            <div class="enfoqueDiferencial">
                <h1>ENFOQUE DIFERENCIAL</h1>
                <h2>FECHA DE NACIMIENTO</h2>
                <input class="box-input" type="date" name="fechaNacimiento" required>
                <h2>ETNIA</h2>
                <input class="box-input" type="text" name="etnia" required>
            </div>
            <div class="enfoquePoblacional">
                <h1>ENFOQUE POBLACIONAL</h1>
                <h2>CONDICION DE DISCAPACIDAD</h2>
                <input class="box-input" type="text" name="condicionDiscapacidad" required>
            </div>
            <div class="socioEconomico">
                <h1>SOCIOECONOMICO</h1>
                <h2>ESTRATO DE RESIDENCIA</h2>
                <input class="box-input" type="text" name="estratoResidencia" required>
            </div>
            <div class="escolaridad">
                <h1>ESCOLARIDAD</h1>
                <h2>ULTIMO NIVEL EDUCATIVO ALCANZADO</h2>
                <input class="box-input" type="text" name="ultimoNivelEducativo" required>
            </div>
            <div class="accesoTecnologia">
                <h1>ACCESO Y CONECTIVIDAD A MEDIOS TECNOLOGICOS</h1>
                <h2>CUENTA CON ACCESO A DISPOSITIVOS TECNOLOGICOS?</h2>
                <select  class="select" name="accesoTecnologia" id="accesoTecnologia" required>
                    <option value="0"></option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
                <h2>Cuales</h2>
                <select  class="select" name="" id="" required>
                    <option value="0"></option>
                    <option value="1">Telefono Movil</option>
                    <option value="2">Computador</option>
                    <option value="3">Tablet</option>
                    <option value="4">Otro - ¿Cuál?</option>
                </select>
                <h2>CUENTA CON CONECTIVIDAD A INTERNET'</h2>
                <select  class="select" name="" id="">
                    <option value="0"></option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="salud">
                <h1>SALUD</h1>
                <h2>TIPO DE REGIMEN DE AFILIACION</h2>
                <input class="box-input" type="text" name="tipoAfiliacion" required>
            </div>
            <div class="accion">
                <input class="boton" type="submit" value="Ingresar">
                <input class="boton" type="reset" value="Vaciar">
            </div>
        </form>
    </div>
</body>
</html>