{!!Form::open(array('url'=>'cadastro/produto','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!}
<div class="form-group">
    <div class="input-group">
        <input type="text" class="form-control" name="searchtext" placeholder="Buscar">
        <span class="input-group-btn">
            <button type="submit" class="btn-primary" value="{{$searchText}}">Buscar</button>
        </span>
    </div>
</div>

{{Form::Close()}}

