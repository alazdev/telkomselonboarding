@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tracking Dokumen</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID Tracking</th>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal Submit</th>
              <th scope="col">Nota Dinas</th>
              <th scope="col">Bisnis Review</th>
              <th scope="col">Data Resource</th>
              <th scope="col">Status</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tracking as $data)
              <tr>
                <td>{{ $data->idtracking }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tglsubmit }}</td>
                <td>
                  <a href="{{ url('/').'/'.$data->notadinas }}" download>Unduh Nota Dinas</a>
                </td>
                <td>
                  <a href="{{ url('/').'/'.$data->bisnisreview }}" download>Unduh Bisnis Review</a>
                </td>
                <td>
                  <a href="{{ url('/').'/'.$data->dataresource }}" download>Unduh Data Resource</a>
                </td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->keterangan }}</td>
                <td></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endsection