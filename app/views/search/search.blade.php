  
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::text('empresa', $date, array('id' => 'datetimepicker', 'class' => 'form-control')) }} 
        </div>
    </div>  
    
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('Palabra clave') }}
            {{ Form::text('palabra', $date, array('id' => 'datetimepicker', 'class' => 'form-control')) }} 
        </div>
    </div>
    
    <div class="col-md-2">
        <div class="form-group">
            {{ Form::label('Area') }}
            {{ Form::select('areas', ArrayHelper::areas(), null, array('class' => 'form-control')); }}
        </div>
    </div>    
    
    <div class="col-md-1">
        <div class="form-group">
            <label>&nbsp;</label>
            <div class="dropdown">
                <a id="dropFecha" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" >Fecha</a>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropFecha">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todas</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hoy</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ayer</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hace dos días</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hace una semana</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hace dos semanas</a></li>
                </ul>                 
            </div>
        </div>
    </div> 
    
    <div class="col-md-1">
        <div class="form-group">
            <label>&nbsp;</label>
            <div class="dropdown">
                <a id="dropZona" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" >Zona</a>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropZona">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todas</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Guadalajara</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Monterrey</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Puebla</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Queretaro</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tijuana</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Toluca</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Valle de mexico</a></li>
                </ul>                 
            </div>            
        </div>
    </div>  
    
    <div class="col-md-1">
        <div class="form-group">
            <label>&nbsp;</label>
            <div class="dropdown">
                <a id="dropTurno" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" >Turno</a>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropTurno">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todos</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Diurno</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mixto</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nocturno</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Variable</a></li>
                </ul>                 
            </div>             
        </div>
    </div>
    
    <div class="col-md-1">
        <div class="form-group">
            <label>&nbsp;</label>
            <div class="dropdown">
                <a id="dropContrato" class="dropdown-toggle" data-toggle="dropdown" role="button" href="#" >Contrato</a>
                <ul class="dropdown-menu " role="menu" aria-labelledby="dropContrato">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Todos</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Permanente</a></li>  
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Temporal</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Practicas profesionales</a></li>
                </ul>                 
            </div>
        </div>
    </div> 
    
    <input type="hidden" name="avanzado" value="{{ $avanzado }}" id="avanzado"> 