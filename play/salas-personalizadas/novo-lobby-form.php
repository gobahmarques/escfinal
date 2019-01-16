<h2>
    + Novo Lobby
</h2>
Jogue partidas personalizadas com a comunidade e acumule recursos<br><br>

<strong>
    Informações Gerais
</strong><br>

<div class="row">
    <div class="col-6">
        Jogo<br>
        <select class="form-control">
        
        </select>
    </div>
    <div class="col-6">
        Nome da Sala<br>
        <input type="text" class="form-control" name="nomeSala" placeholder="Informe o nome da sala">
    </div>
    <div class="col-4">
        Num Equipes<br>
        <input type="number" class="form-control" name="numEquipes" min="2" value="2">
    </div>
    <div class="col-4">
        Vagas / Equipe<br>
        <input type="number" class="form-control" name="numEquipes" min="1" value="1">
    </div>
    <div class="col-4">
        Tipo de Partida<br>
        <select class="form-control">
        
        </select>
    </div>
    <div class="col-4">
        Privacidade<br>
        <select class="form-control" onchange="alterarPrivacidade(this.value);">
            <option value="0">Público</option>
            <option value="1">Privado</option>
        </select>
    </div>
    <div class="col-8 campoSenha">
        Senha<br>
        <input type="password" class="form-control" name="nomeSala" placeholder="Informe a senha">
    </div>
    <div class="col-12 mt-3">
        <input type="button" class="btn btn-azul form-control" value="CRIAR LOBBY">
    </div>
</div>

<script>
    function alterarPrivacidade(valor){
        if(valor == "0"){
            $(".campoSenha").css("display", "none");
        }else{
            $(".campoSenha").css("display", "block");
        }
    }
</script>