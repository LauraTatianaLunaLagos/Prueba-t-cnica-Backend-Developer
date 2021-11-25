<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreProducto') }}
            {{ Form::text('NombreProducto', $producto->NombreProducto, ['class' => 'form-control' . ($errors->has('NombreProducto') ? ' is-invalid' : ''), 'placeholder' => 'Nombreproducto']) }}
            {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('Descripción', $producto->Descripción, ['class' => 'form-control' . ($errors->has('Descripción') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('Descripción', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $producto->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>