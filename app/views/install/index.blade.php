<div class="box">
    <div class="box-title">UDC SOCIAL Instalacion</div>
    <form action="{{URL::to('check/purchase-code')}}" method="post">
        <div class="box-content">
            @if($error)
            <div class="alert">Código de compra no válido</div>
            @endif
            <h3>Para continuar, proporcione su código de compra para continuar la instalación</h3>
            <p><strong>Note:</strong>Puede instalar UDC SOCIAL en este dominio muchas veces pero si desea instalar
             En otro dominio póngase en contacto conmigo a través de <strong><a href="https://www.facebook.com/IsiasRomero2"></a> </strong>
                <li>su usuario</li>
                <li>su codigo de compra</li>
            </p>

            <input type="text" name="code" placeholder="ingrese su codigo"/>
        </div>

        <div class="box-footer">
            <button class="btn" style="cursor: pointer">Continuar Instalacion</button>
        </div>
    </form>
</div>
