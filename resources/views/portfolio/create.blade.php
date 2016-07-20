@extends ('layouts.dashboard')

@section('page_heading', $pageHeading)

@section('section')
<div class="col-sm-12">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <form role="form" method="POST" action="{{ url('/admin/product/create') }}">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <label>Is available</label>
                    <select class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <input class="form-control"/>
                    <p class="help-block">Url of external site</p>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Add product</button>
            </form>
        </div>
    </div>
</div>
@endsection