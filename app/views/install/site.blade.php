<div class="box">
    <div class="box-title">Proporcionar información del sitio y crear cuenta de administrador</div>
    <form action="" method="post">
        @if($message)
        <div class="alert">{{$message}}</div>
        @endif
        <div class="box-content">

            <label>Nombre del sitio:</label>
            <input type="text" value="" placeholder="UDC Social" name="val[title]"/>

            <label>Email:</label>
            <input type="text" value=""  name="val[email]"/>

            <label>Admin Nombre Completo:</label>
            <input type="text" value=""  name="val[fullname]"/>



            <label>Admin Nombre Usuario:</label>
            <input type="text" value="" name="val[username]"/>

            <label>Admin Contraseña:</label>
            <input type="text" value="" name="val[password]"/>


        </div>

        <div class="box-footer">
            <button class="btn">Finalizar</button>
        </div>

</div>
