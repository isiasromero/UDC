<div class="box">
    <div class="box-title">Database Informacion</div>
    <form action="" method="post">
        @if($message)
            <div class="alert">{{$message}}</div>
        @endif
    <div class="box-content">

            <label>DB Host:</label>

            <input type="text" value="" placeholder="Localhost" name="val[host]"/>

            <label>DB Nombre:</label>
            <input type="text" value="" placeholder="crea8Social" name="val[name]"/>

            <label>DB Usuario:</label>
            <input type="text" value="" name="val[username]"/>

            <label>DB Contraseña:</label>
            <input type="text" value="" name="val[password]"/>

            <label>DB Prefijo:</label>
            <input type="text" value="UDCSOCIAL_" name="val[prefix]" />

    </div>

    <div class="box-footer">
        <button class="btn">Continue</button>
    </div>

    </form>
</div>
