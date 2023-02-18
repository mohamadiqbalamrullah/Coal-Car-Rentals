
@extends('layouts/contentLayoutMaster')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
<link rel="stylesheet" user="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
@endsection

@include('rental.form')
@section('content')
<!-- Dashboard Ecommerce Starts -->
@can('admin')
<section id="admin-section">
  <div class="col-12">
    <div class="card">
      <div
        class="
          card-header
          d-flex
          flex-sm-row flex-column
          justify-content-md-between
          align-items-start
          justify-content-start
        "
      >
        <div>
          <h4 class="card-title mb-25">Kuantitas Perizinan Kendaraan</h4>
          {{-- <span class="card-subtitle text-muted">Kuantitas Perizinan Kendaraan</span> --}}
        </div>
      </div>
      <div class="card-body">
        <div id="line-chart"></div>
      </div>
    </div>
  </div>
    <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <table class="datatables-basic table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Diajukan Oleh</th>
                      <th>Keperluan</th>
                      <th>Jenis Kendaraan</th>
                      <th>Driver</th>
                      <th>Penanggung Jawab</th>
                      <th>Perizinan</th>
                      <th>Kondisi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse ($datas as $data)
                      <tr class="text-center">
                          <td scope="row">
                            {{$loop->iteration}}
                          </td>
                          <td>
                            {{$data->created_by}}
                          </td>
                          <td>
                            {{$data->keperluan}}
                          </td>
                          <td>
                            {{$data->jenis_kendaraan}}
                          </td>
                          <td>
                            {{$data->driver}}
                          </td>
                          <td>
                            {{$data->penanggung_jawab}}  
                          </td>
                          <td>
                          @if ($data->status == 0)
                          <span class="badge bg-secondary">Verifikasi</span>
                          @elseif($data->status == 1)
                          <span class="badge bg-primary">Pengecekan Kendaraan</span>
                          @else
                          <span class="badge bg-success">Disetujui</span> 
                          @endif    
                          </td>
                          <td>
                          @if ($data->is_active == 0)
                          <span class="badge bg-secondary">Parkir</span>
                          @else
                          <span class="badge bg-success">Ready</span>    
                          @endif 
                          </td>
                          <td nowrap>
                            <a class="btn btn-success waves-effect waves-float waves-light" href="{{route ('rental.detail', $data->id)}}">
                              Detail
                            </a>
                          </td>
                      </tr>
                      @empty
                          
                      @endforelse
                  </tbody>
                </table>
          </div>
      </div>
    </div>
  </section>
@endcan

@can('stakeholder')
<div class="row match-height">
    <div class="col-12">
        <h1>Data Yang Menunggu Verifikasi</h1>
    </div>
    <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Diajukan Oleh</th>
                    <th>Keperluan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Driver</th>
                    <th>Penanggung Jawab</th>
                    <th>Perizinan</th>
                    <th>Kondisi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $data)
                    <tr class="text-center">
                        <td scope="row">
                          {{$loop->iteration}}
                        </td>
                        <td>
                          {{$data->created_by}}
                        </td>
                        <td>
                          {{$data->keperluan}}
                        </td>
                        <td>
                          {{$data->jenis_kendaraan}}
                        </td>
                        <td>
                          {{$data->driver}}
                        </td>
                        <td>
                          {{$data->penanggung_jawab}}  
                        </td>
                        <td>
                        @if ($data->status == 0)
                        <span class="badge bg-secondary">Verifikasi</span>
                        @elseif($data->status == 1)
                        <span class="badge bg-primary">Pengecekan Kendaraan</span>
                        @else
                        <span class="badge bg-success">Disetujui</span> 
                        @endif    
                        </td>
                        <td>
                        @if ($data->is_active == 0)
                        <span class="badge bg-secondary">Parkir</span>
                        @else
                        <span class="badge bg-success">Ready</span>    
                        @endif 
                        </td>
                        <td nowrap>
                          <a class="btn btn-success waves-effect waves-float waves-light" href="{{route ('rental.stakeholder', $data->id)}}">
                            Setujui
                          </a>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
    <div class="col-12">
        <h1>Data Yang Telah Melewati Tahap Verifikasi</h1>
    </div>
    <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Diajukan Oleh</th>
                    <th>Keperluan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Driver</th>
                    <th>Penanggung Jawab</th>
                    <th>Perizinan</th>
                    <th>Kondisi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($items as $data)
                    <tr class="text-center">
                        <td scope="row">
                          {{$loop->iteration}}
                        </td>
                        <td>
                          {{$data->created_by}}
                        </td>
                        <td>
                          {{$data->keperluan}}
                        </td>
                        <td>
                          {{$data->jenis_kendaraan}}
                        </td>
                        <td>
                          {{$data->driver}}
                        </td>
                        <td>
                          {{$data->penanggung_jawab}}  
                        </td>
                        <td>
                        @if ($data->status == 0)
                        <span class="badge bg-secondary">Verifikasi</span>
                        @elseif($data->status == 1)
                        <span class="badge bg-primary">Pengecekan Kendaraan</span>
                        @else
                        <span class="badge bg-success">Disetujui</span> 
                        @endif    
                        </td>
                        <td>
                        @if ($data->is_active == 0)
                        <span class="badge bg-secondary">Parkir</span>
                        @else
                        <span class="badge bg-success">Ready</span>    
                        @endif 
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
  </div>
@endcan

@can('engineer')
<div class="row match-height">
    <div class="col-12">
        <h1>Kenderaan Yang Akan Melalui Pengecekan</h1>
    </div>
    <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Diajukan Oleh</th>
                    <th>Keperluan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Driver</th>
                    <th>Penanggung Jawab</th>
                    <th>Perizinan</th>
                    <th>Kondisi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $data)
                    <tr class="text-center">
                        <td scope="row">
                          {{$loop->iteration}}
                        </td>
                        <td>
                          {{$data->created_by}}
                        </td>
                        <td>
                          {{$data->keperluan}}
                        </td>
                        <td>
                          {{$data->jenis_kendaraan}}
                        </td>
                        <td>
                          {{$data->driver}}
                        </td>
                        <td>
                          {{$data->penanggung_jawab}}  
                        </td>
                        <td>
                        @if ($data->status == 0)
                        <span class="badge bg-secondary">Verifikasi</span>
                        @elseif($data->status == 1)
                        <span class="badge bg-primary">Pengecekan Kendaraan</span>
                        @else
                        <span class="badge bg-success">Disetujui</span> 
                        @endif    
                        </td>
                        <td>
                        @if ($data->is_active == 0)
                        <span class="badge bg-secondary">Parkir</span>
                        @else
                        <span class="badge bg-success">Ready</span>    
                        @endif 
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
    <div class="col-12">
        <h1>Data Yang Sudah Disetujui</h1>
    </div>
    <div class="col-12">
        <div class="card">
            <table class="datatables-basic table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Diajukan Oleh</th>
                    <th>Keperluan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Driver</th>
                    <th>Penanggung Jawab</th>
                    <th>Perizinan</th>
                    <th>Kondisi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($items as $data)
                    <tr class="text-center">
                        <td scope="row">
                          {{$loop->iteration}}
                        </td>
                        <td>
                          {{$data->created_by}}
                        </td>
                        <td>
                          {{$data->keperluan}}
                        </td>
                        <td>
                          {{$data->jenis_kendaraan}}
                        </td>
                        <td>
                          {{$data->driver}}
                        </td>
                        <td>
                          {{$data->penanggung_jawab}}  
                        </td>
                        <td>
                        @if ($data->status == 0)
                        <span class="badge bg-secondary">Verifikasi</span>
                        @elseif($data->status == 1)
                        <span class="badge bg-primary">Pengecekan Kendaraan</span>
                        @else
                        <span class="badge bg-success">Disetujui</span> 
                        @endif    
                        </td>
                        <td>
                        @if ($data->is_active == 0)
                        <span class="badge bg-secondary">Parkir</span>
                        @else
                        <span class="badge bg-success">Ready</span>    
                        @endif 
                        </td>
                        <td nowrap>
                          <a class="btn btn-success waves-effect waves-float waves-light" href="{{route ('rental.engineer', $data->id)}}">
                            Setujui
                          </a>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
  </div>
@endcan

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
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>

@endsection

@section('page-script')
{{-- sweet alert --}}
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

@can('admin')
  <script src="{{ asset(mix('js/scripts/charts/chart-apex.js')) }}"></script>
  <script>
    $(document).ready( function () {
    $('.datatables-basic').DataTable({
      dom: '<"card-header border-bottom p-1"<"head-label"><"dt -action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      lengthMenu: [ 10, 25, 50, 75, 100],      
      buttons: [
      {
          text: feather.icons['plus'].toSvg({ class: 'me-50 font-small-4' }) + 'Ajukan Perizinan',
          className: 'create-new btn btn-primary',
          attr: {
            'data-bs-toggle': 'modal',
            'data-bs-target': '#rentalForm',
          },
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary');
          }
        }
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          user: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      },
      
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
  } );
  </script>
@endcan

@if(Gate::check('stakeholder') ||Gate::check('engineer'))
<script>
    $(document).ready( function () {
    $('.datatables-basic').DataTable({
      dom: '<"card-header border-bottom p-1"<"head-label"><"dt -action-buttons text-end"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      lengthMenu: [ 10, 25, 50, 75, 100],    
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          user: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      },
      
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      }
    });
  } );
</script>
@endif
@endsection