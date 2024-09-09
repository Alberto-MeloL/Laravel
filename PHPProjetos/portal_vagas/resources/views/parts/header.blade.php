@if (Auth::check())
@if(Auth::user()->isEmpresa())
    <div>

        <p>Acesse o painel de vagas</p>
        <a href="/vagas">Vagas</a>
        
    </div>

{{-- cmsp rotas --}}
@else
<p>Acesse o painel de vagas</p>


@endif
    <div>
        <h3>Olá, {{Auth::user()->nome}}</h3>
    </div>
    <div>
        <form action="/logout" method="post">
        @csrf
        <input type='submit' value='Sair'>
        </form>

        <div class="nav-bar">
            <a href="/vagas">Vagas</a>
        </div>
    </div>
    <br>
    <hr>
    <br>
@else
    <div class="nav-bar">
        <a href="/login">Login</a>
        <a href="/registro">Registre-se</a>
    </div>
    <br>
    <hr>
    <br>
@endif
