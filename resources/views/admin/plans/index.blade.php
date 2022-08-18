@extends('admin.layout.layout')
@section('content')
<style type="text/css">
  .adjust {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: break-spaces !important;
  }
</style>
<div class="py-4">
  <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
      <li class="breadcrumb-item">
        <a href="{{ '/dashboard' }}">
          <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
        </a>
      </li>
      <li class="breadcrumb-item"><a href="#">Our Plans</a></li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Plans List</h1>
    </div>
    <div>
      <a href="{{ route('plans.create') }}" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Add New
      </a>
    </div>
  </div>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if (session()->has($msg))
    <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
      {{ session($msg) }}
    </div>
  @endif
@endforeach
<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-centered table-nowrap mb-0 rounded overflow-hidden">
        <thead class="thead-light">
          <tr>
            <th class="border-0 rounded-start">#</th>
            <th class="border-0">Title</th>
            <th class="border-0">Description</th>
            <th class="border-0">Price</th>
            <th class="border-0">Type</th>
            <th class="border-0">Features</th>
            <th class="border-0">Created At</th>
            <th class="border-0">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($plans as $p)
            <tr>
              <td><a href="#" class="text-primary fw-bold">{{ $loop->iteration }}</a></td>
              <td class="fw-bold align-items-center adjust">{{ $p->title }}</td>
              <td class="adjust">{{ Str::limit(strip_tags($p->description), 200, '...') }}</td>
              <td class="adjust">{{ empty($p->price) ? '' : '$' . $p->price }}</td>
              <td class="adjust"><span class="badge {{ UtilsHelper::getPlanTypeBGClass($p->type) }}">{{ $p->type }}</span></td>
              <td class="adjust">{{ Str::limit(strip_tags($p->features), 200, '...') }}</td>
              <td class="adjust">{{ $p->created_at }}</td>
              <td>
                <div class="btn-group ms-2 ms-lg-3">
                  <a href="{{ route('plans.edit', $p->id) }}" type="button" class="btn btn-sm btn-outline-gray-600">Edit</a>

                  {!! Form::open(['route' => ['plans.destroy', $p->id], 'method' => 'DELETE' , 'enctype' => 'multipart/form-data']) !!}
                  {!! Form::submit('Delete', ['class'=> 'btn btn-sm btn-outline-gray-600', 'style' => 'border-top-left-radius:0px;border-bottom-left-radius:0px;']) !!}
                  {!! Form::close() !!}
                </div>
              </td>
            </tr>
          @endforeach
          @if (count($plans) == 0)
            <tr>
              <td colspan="8" class="text-center">No Plans</td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')

@endpush