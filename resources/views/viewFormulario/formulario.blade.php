<section class="defensoria-form">
    <form id="form-data" name="form-data" method="POST" action="{{ url('/mensaje') }}">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>Formulario</h3>
            <hr class="red"></hr>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container-fluid">
            <p class="text-justify">
                Los datos marcados como obligatorios, con un asterisco, son necesarios para poder entrar en contacto con usted. Sin embargo lo invitamos a llenar todas las casillas, as&iacute; usted nos brinda informaci&oacute;n valiosa para construir el perfil de nuestras audiencias. Una vez que termine de llenar las variables, no olvide darle clic al bot&oacute;n <strong>Enviar</strong>.
            </p>
            <p>
                *Los campos con (*) son obligatorios.
            </p>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-nombre">
                    <label for="nombre" id="label-nombre">Nombre:*</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" maxlength="50" />
                </div>
                <div id="mensaje-nombre"></div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-apaterno">
                    <label for="apaterno">Apellido paterno:*</label>
                    <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Apellido paterno" maxlength="50" />
                </div>
                <div id="mensaje-apaterno"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-amaterno">
                    <label for="amaterno">Apellido materno:*</label>
                    <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Apellido materno" />
                </div>
                <div id="mensaje-materno"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-group" id="form-edad">
                    <label for="amaterno">Edad:*</label>
                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" min="10" max="99" />
                </div>
                <div id="mensaje-materno"></div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-ocupacion">
                    <label for="ocupacion">Ocupaci&oacute;n:*</label>
                    <select class="form-control" id="ocupacion" name="ocupacion">
                        <option selected value="">Selecciona una opci&oacute;n</option>
                        <option value="Otro">Otro</option>
                        <option value="Abogado">Abogado</option>
                        <option value="Abogado">Administrador de proyectos</option>
                        <option value="Alba&ntilde;il">Alba&ntilde;il</option>
                        <option value="Almacenista">Almacenista</option>
                        <option value="Alphabiotista">Alphabiotista</option>
                        <option value="Analista contable">Analista contable</option>
                        <option value="Arquitecto">Arquitecto</option>
                        <option value="Abogado de Software">Abogado de Software</option>
                        <option value="Asesor comercial">Asesor comercial</option>
                        <option value="Asesor financiero">Asesor financiero</option>
                        <option value="Abogado">Abogado</option>
                        <option value="Asistente de direcci&oacute;n">Asistente de direcci&oacute;n</option>
                        <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                        <option value="Auxiliar de recursos humanos">Auxiliar de recursos humanos</option>
                        <option value="Bibliotecario">Bibliotecario</option>
                        <option value="Bolero">Bolero</option>
                        <option value="Cajero">Cajero</option>
                        <option value="Cantinero">Cantinero</option>
                        <option value="Cargador">Cargador</option>
                        <option value="Carnicero">Carnicero</option>
                        <option value="Carpintero">Carpintero</option>
                        <option value="CEO">CEO</option>
                        <option value="Cocinero">Cocinero</option>
                        <option value="Consejero senior">Consejero senior</option>
                        <option value="Contador">Contador</option>
                        <option value="Corrector de estilo">Corrector de estilo</option>
                        <option value="Costurera">Costurera</option>
                        <option value="Bolero">Bolero</option>
                        <option value="Country Manger">Country Manger</option>
                        <option value="Director General">Director General</option>
                        <option value="Diseñador de Interiores">Diseñador de Interiores</option>
                        <option value="Diseñador Gr&aacute;fico">Diseñador Gr&aacute;fico</option>
                        <option value="Editor">Editor</option>
                        <option value="Ejecutivo de ventas">Ejecutivo de ventas</option>
                        <option value="Electricista">Electricista</option>
                        <option value="Escritor">Escritor</option>
                        <option value="Estilista">Estilista</option>
                        <option value="F&iacute;sico">F&iacute;sico</option>
                        <option value="General Manager">General Manager</option>
                        <option value="General de ventas">General de ventas</option>
                        <option value="Ingeniero Civil">Ingeniero Civil</option>
                        <option value="Ingeniero de Diseño">Ingeniero de Diseño</option>
                        <option value="Ingeniero de Software">Ingeniero de Software</option>
                        <option value="Ingeniero en Rob&oacute;tica">Ingeniero en Rob&oacute;tica</option>
                        <option value="Ingeniero Mec&aacute;tronico">Ingeniero Mec&aacute;tronico</option>
                        <option value="Ingeniero Qu&iacute;mico">Ingeniero Qu&iacute;mico</option>
                        <option value="Licenciado en Filosof&iacute;a">Licenciado en Fisof&iacute;a</option>
                        <option value="Licenciado en inform&aacute;tica">Licenciado en inform&aacute;tica</option>
                        <option value="Maestro o docente">Maestro o docente</option>
                        <option value="Managing Parter">Managing Parter</option>
                        <option value="Maquilista">Maquilista</option>
                        <option value="Masajista">Masajista</option>
                        <option value="Mec&aacute;nico">Me&aacute;nico</option>
                        <option value="Mecan&oacute;grafo">Mecan&oacute;grafo</option>
                        <option value="Minero">Minero</option>
                        <option value="Peluquero">Peluquero</option>
                        <option value="Plomero">Plomero</option>
                        <option value="Pod&oacute;logo">Pod&oacute;logo</option>
                        <option value="Publicista">Publicista</option>
                        <option value="Quiropr&aacute;ctico">Quiropr&aacute;ctico</option>
                        <option value="Relaciones p&uacute;blicas">Relaciones p&uacute;blicas</option>
                        <option value="Reportero">Reportero</option>
                        <option value="Secretaria">Secretaria</option>
                        <option value="Tablajero">Tablajero</option>
                        <option value="T&eacute;cnico en audio">T&eacute;cnico en audio</option>
                        <option value="T&eacute;cnico en mantenimiento">T&eacute;cnico en mantenimiento</option>
                        <option value="Vendedor">Vendedor</option>
                        <option value="Zapatero">Zapatero</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-pais">
                    <label for="pais">Pa&iacute;s:*</label>
                    <select class="form-control" id="pais" name="pais">
                        <option selected value="">Selecciona una opci&oacute;n</option>
                        <option value="Mexico">M&eacute;xico</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-estado">
                    <label for="estado">Entidad federativa:*</label>
                    <select class="form-control" id="estado" name="estado" disabled="disabled">
                        <option value="" selected>Seleccione una opci&oacute;n</option>
                        <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                        <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                        <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                        <option value="CAMPECHE">CAMPECHE</option>
                        <option value="COAHUILA DE ZARAGOZA">COAHUILA DE ZARAGOZA</option>
                        <option value="COLIMA">COLIMA</option>
                        <option value="CHIAPAS">CHIAPAS</option>
                        <option value="CHIHUAHUA">CHIHUAHUA</option>
                        <option value="CIUDAD DE MEXICO">CIUDAD DE MEXICO</option>
                        <option value="DURANGO">DURANGO</option>
                        <option value="GUANAJUATO">GUANAJUATO</option>
                        <option value="GUERRERO">GUERRERO</option>
                        <option value="HIDALGO">HIDALGO</option>
                        <option value="JALISCO">JALISCO</option>
                        <option value="MEXICO">MEXICO</option>
                        <option value="MICHOACAN DE OCAMPO">MICHOACAN DE OCAMPO</option>
                        <option value="MORELOS">MORELOS</option>
                        <option value="NAYARIT">NAYARIT</option>
                        <option value="NUEVO LEON">NUEVO LEON</option>
                        <option value="OAXACA">OAXACA</option>
                        <option value="PUEBLA">PUEBLA</option>
                        <option value="QUERETARO DE ARTEAGA">QUERETARO DE ARTEAGA</option>
                        <option value="QUINTANA ROO">QUINTANA ROO</option>
                        <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</option>
                        <option value="SINALOA">SINALOA</option>
                        <option value="TLAXCALA">TLAXCALA</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group" id="form-delegacion">
                    <label for="delegacion">Municipio:*</label>
                    <select class="form-control" id="delegacion" name="delegacion" disabled="disabled">
                        <option selected value="">Selecciona una opci&oacute;n</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 renglon">
                <div class="form-group" id="form-correo">
                    <label for="correo">Correo electr&oacute;nico:*</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electr&oacute;nico" />
                </div>
                <div id="mensaje-correo"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 renglon">
                <p>
                    <label>Motivo del mensaje</label>
                </p>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="felicitaci&oacute;n" value="Felicitaci&oacute;n"/> Felicitaci&oacute;n
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="comentario" value="Comentario" /> Comentario
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="sugerencia" value="Sugerencia" /> Sugerencia
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="queja" value="Queja"/> Queja
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="pregunta" value="Pregunta o duda" /> Pregunta o duda
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <input type="radio" name="motivo[]" id="respuesta" value="Respuesta" /> Respuesta
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 renglon">
                <div class="form-group" id="form-mmensaje">
                    <label for="mmensaje">Mensaje:*</label>
                    <textarea class="form-control" rows="3" id="mmensaje" name="mmensaje"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group" id="anonimo">
                    <label>AUTORIZO LA MENCIÓN DE MI NOMBRE Y APELLIDO EN LA PUBLICACIÓN DE ESTE MENSAJE:*</label>
                    <label for="anonimo-si">SI: </label>
                    <input type="radio" name="anonimo" value="si">
                    <label for="anonimo-no">NO: </label>
                    <input type="radio" name="anonimo" value="no">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 renglon">
                <button class="btn btn-default center-block" id="btn" type="button">Enviar</button>
            </div>
        </div>
        <div id="mensaje" class="renglon"></div>
        {{csrf_field()}}
    </form>
</section>