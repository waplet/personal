@extends ('layouts.dashboard')

@if ($type == 'product')
    @section('page_heading', 'Product image list')
@else
    @section('page_heading', 'Project image list')
@endif

@section('section')
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <a class="btn btn-primary" href="{{ url('/admin/product')  }}">Back to product list</a>
                <hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3>Add Image</h3>
                {!! Form::open(['files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_featured', 'Is featured') !!}
                    <div>
                        {!! Form::checkbox('is_featured', 1, true) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! csrf_field() !!}
                    {!! Form::submit('Add image', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="col-sm-8">
                <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Extension</th>
                    <th>Featured</th>
                    <th>Url</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{{ $image->image->title }}</td>
                        <td>{{ $image->image->extension }}</td>
                        <td>{{ $image->is_featured ? 'Yes' : 'No' }}</td>
                        <td>{{ link_to(url('/uploads/images/' . $image->image->id . '/' . $image->image->id . '.' . $image->image->extension), null, ['target' => '_blank']) }}</td>
                        <td>
                            <a onClick="confirm('Are you sure to delete?')"
                               href="{{ URL::to('/admin/' . $type . '/images/' . $image->id . '/delete') }}">
                                <i class="fa fa-times"></i>&nbsp;Delete
                            </a>
                            {{--<a href="" target="_blank"><i class="fa fa-eye"></i></a>--}}
                            {{--<a href=""><i class="fa fa-pencil"></i></a>--}}
                            {{--<a href=""><i class="fa fa-times"></i></a>--}}
                            {{--<a href="">View Images</a>--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{-- Pagination --}}
            {!! $images->render() !!}
            </div>
        </div>
    </div>
@endsection