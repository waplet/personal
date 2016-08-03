@extends ('layouts.dashboard')

@section('page_heading', $pageHeading)

@section('section')
    <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Price</th>
                    <th>Is available</th>
                    <th>Url</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->price ?: 'Free' }}</td>
                        <td>{{ $product->is_available ? 'Yes' : 'No' }}</td>
                        <td>{{ link_to($product->url, null, ['target' => '_blank']) }}</td>
                        <td><a href="{{ URL::to('/portfolio/' . $product->slug) }}" target="_blank"><i class="fa fa-eye"></i></a> | Add Images | Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $products->render() !!}
    </div>
@endsection