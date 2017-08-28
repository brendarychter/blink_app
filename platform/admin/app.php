<div class="col-lg-12 col-sm-12 col-md-12 admin-partial" data-table="faq" id="faq">
	<div class="panel panel-default">
		<label class="section-name menu_menu_spanish" id="show-users-app" style="cursor: pointer; padding-top: 20px;font-size: 22px;color: #222;">Usuarios</label>
		<label class="section-name menu_menu_spanish" id="show-groups-app" style="cursor: pointer; padding-top: 20px;font-size: 22px;color: #222;">Grupos</label>
		<div class="panel-heading"></div>
		<div class="panel-body">
		</div>

        <div id="content-users">
            <button class="create-user btn btn-primary btn-md" type="submit" name="submit" style="margin-bottom: 20px">Crear usuario</button>
            <table class="contact-users">
                <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contrase&ntilde;a</th>
                    <th>Mail</th>
                    <th>Tel&eacute;fono</th>
                    <th>Ingreso</th>
                    <th>Estado</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody class="table-users">
                </tbody>
            </table>

            <div class="signInUser row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default modal-login" style="border-radius: 0; margin-top: 170px; margin-bottom: 100px;">
                        <div class="panel-heading" style="height: 52px;">S I G N &nbsp; U P <span class="close-modal" style="float:right; margin-top:-6px; cursor:pointer;">&#10006;</span></div>
                        <div class="panel-body" style="padding: 15px;">
                            <form role="form" id="signin-user-form" method="post">
                                <div class="messages"></div>
                                <div class="form-group">
                                    <input class="form-control sign_in_name" placeholder="Ingrese su nombre" name="nombre-usuario" type="input" autofocus="" id="new-user" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control sign_in_mail" placeholder="Ingrese su email" name="email-usuario" type="email" value="" id="new-mail" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone-usuario" class="form-control sign_in_phone" placeholder="Ingrese su n&uacute;mero de tel&eacute;fono" id="new-phonenumber" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control sign_in_username" placeholder="Ingrese su nombre de usuario" name="username-usuario" type="input" autofocus="" id="new-username" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control sign_in_password" placeholder="Ingrese una contrase&ntilde;a" name="password-usuario" type="password" value="" id="new-passowrd" style="border-radius: 0;" required />
                                </div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6Le78ScUAAAAAIwMiCcAfjo6XputN6OYM3LXyLQx"></div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-send send-form sign_in_button" id="signup-user" value="Registrar usuario">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content-groups">
            <span>Nombre grupo</span>
            <table class="groups-conv">
                <thead>
                <tr>
                    <th>Mensaje</th>
                    <th>Usuario</th>
                    <th>Mail</th>
                    <th>Hora</th>
                </tr>
                </thead>
                <tbody class="table-groups">
                </tbody>
            </table>
        </div>
	</div>
</div>