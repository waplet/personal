@extends ('layouts.dashboard')

@section('page_heading', 'Create product')

@section('section')
<div class="col-sm-12">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
                @if (isset($product))
                    {!! Form::model($product, ['url' => '/admin/product/create']) !!}
                @else
                    {!! Form::open(['url' => '/admin/product/create', 'method' => 'POST']) !!}
                @endif
                {!! Form::hidden('id') !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_available', 'Is available') !!}
                    {!! Form::select('is_available', [
                        '1' => 'Yes',
                        '0' => 'No'
                    ], '1' , ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('url', 'Url') !!}
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                    <p class="help-block">Url of external site</p>
                </div>
                {!! csrf_field() !!}
                {!! Form::submit('Add product', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection