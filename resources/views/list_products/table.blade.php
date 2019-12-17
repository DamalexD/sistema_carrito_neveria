<table class="table table-responsive" id="listProducts-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Minstock</th>
        <th>Type</th>
        <th>Minprice</th>
        <th>Maxprice</th>
        <th>Image</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($listProducts as $listProduct)
        <tr>
            <td>{!! $listProduct->name !!}</td>
            <td>{!! $listProduct->price !!}</td>
            <td>{!! $listProduct->stock !!}</td>
            <td>{!! $listProduct->minstock !!}</td>
            <td>{!! $listProduct->type !!}</td>
            <td>{!! $listProduct->minPrice !!}</td>
            <td>{!! $listProduct->maxPrice !!}</td>
            <td>{!! $listProduct->image !!}</td>
            <td>{!! $listProduct->description !!}</td>
            <td>
                {!! Form::open(['route' => ['listProducts.destroy', $listProduct->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('listProducts.show', [$listProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('listProducts.edit', [$listProduct->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>