@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            List Product
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($listProduct, ['route' => ['listProducts.update', $listProduct->id], 'method' => 'patch']) !!}

                        @include('list_products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection