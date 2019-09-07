<div class="input-field">
    <input type="text" name="Titulo" value="{{ isset($registro->Titulo) ? $registro->Titulo : '' }}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="Descricao" value="{{ isset($registro->Descricao) ? $registro->Descricao : '' }}">
    <label>Descrição</label>
</div>
<div class="input-field">
    <input type="text" name="Valor" value="{{ isset($registro->Valor) ? $registro->Valor : '' }}">
    <label>Valor</label>
</div>
<div class="file-field input-field">
    <div class="btn blue darken-3">
        <span><i class="material-icons">image</i></span>
        <input type="file" name="Imagem">
    </div>  
    <div class="file-path-wrapper">
        <input type="text" class="file-path validate">    
    </div>  
</div>
@if (isset($registro->Imagem))
    <div class="input-field">
        <img width="150" src="{{asset($registro->Imagem)}}" alt="{{$registro->Titulo}}">
    </div>    
@endif
<div class="input-field">
        <p>
            <label>
                <input name="Publicado" type="checkbox" {{isset($registro->Publicado) && $registro->Publicado == 'sim' ? 'checked' : ''}} value="true"/>
                <span>Publicar ?</span>
            </label>
        </p>
    
    <br><br>
</div>