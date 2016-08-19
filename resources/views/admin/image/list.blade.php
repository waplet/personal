@extends ('layouts.dashboard')

@if ($type == 'product')
    @section('page_heading', 'Product image list')
@else
    @section('page_heading', 'Project image list')
@endif

@section('section')
    <div class="col-sm-12">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Title</th>
                <th>Extension</th>
                <th>Url</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>{{ $image->product_id }}</td>
                    <td>{{ $image->image->title }}</td>
                    <td>{{ $image->image->extension }}</td>
                    <td>{{ link_to(url('/public/uploads/images/' . $image->image->id . '.' . $image->image->extension), null, ['target' => '_blank']) }}</td>
                    <td>
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
@endsection