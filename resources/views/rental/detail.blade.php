@can('admin')
@extends('layouts/contentLayoutMaster')

@section('title', $title)

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">

@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
{{-- Page Css files --}}
<link rel="stylesheet" user="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection

@section('content')
{{-- @include('user/form-edit') --}}
<div class="row">
    <div class="card">
        <div class="card-header">
          <h4 class="card-title">Detail Pengajuan</h4>
        </div>        
        <div class="card-body">
          <div class="form form-horizontal">
            <input type="hidden" value="">
            <div class="row">
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="first-name">Driver</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->driver}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">NIP</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->nip}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Keperluan</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->keperluan}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Jenis Kendaraan</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->jenis_kendaraan}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Idntitas Kendaraan</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->identitas_kendaraan}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Penaggung Jawab</label>
                  </div>
                  <div class="col-sm-9">
                    <span class="form-control-plaintext" >: {{$data->penanggung_jawab}}</span>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Proses Pengajuan</label>
                  </div>
                  <div class="col-sm-9">
                    @if ($data->status == 0)
                    <span class="badge bg-secondary">Verifikasi</span>
                    @elseif($data->status == 1)
                    <span class="badge bg-primary">Pengecekan Kendaraan</span>
                    @else
                    <span class="badge bg-success">Disetujui</span> 
                    @endif        
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-3">
                    <label class="col-form-label" for="email-id">Posisi Kendaraan</label>
                  </div>
                  <div class="col-sm-9">
                    @if ($data->is_active == 0)
                    <span class="badge bg-secondary">Parkir</span>
                    @else
                    <span class="badge bg-success">Ready</span>    
                    @endif       
                  </div>
                </div>
              </div>
              <div>
                <a href="/dashboard" class="btn btn-outline-secondary">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@section('vendor-script')
  {{-- vendor files --}}

  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>

@endsection

@section('page-script')
  {{-- Page js files --}}

  {{-- toastr --}}
@if ($message = Session::get('success'))
<script>
  toastr['success']('{{ $message }}', 'Berhasil!', {
    positionClass: 'toast-top-center',
    });
</script>

@endif
@if ($message = Session::get('error'))
<script>
  toastr['error']('{{ $message }}', 'Gagal!', {
    positionClass: 'toast-top-center',
    });
</script>
@endif  
@endsection
@endcan