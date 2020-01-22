@extends('admin.index')
@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">{{$title}}</h3>
      </div>
<div class="card-body">
{!! $dataTable->table([
    'class'=>'dataTable table table-striped table-bordered table-hover'
    ])!!}
  </div> 
  {{-- end card body --}}
</div>
{{-- end card --}}

@push('js')
{!! $dataTable->scripts()!!}
@endpush


@endsection