@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Submit Dokumen</h1>
      </div>
<div class="col-lg-10">
<form method="POST" action="/dashboard/tracking" class="mb-5" enctype="multipart/form-data">
    @csrf
<div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul Aplikasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" name="judul">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="function" class="col-sm-2 col-form-label">Function</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="function" name="function">
    </div>
  </div>
  <div class="mb-3 d-flex justify-content-center">
    <label for="vcpu" class="col-sm-1 col-form-label d-flex justify-content-center">VCPU</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="vcpu" name="vcpu">
    </div>
    <label for="ram" class="col-sm-1 col-form-label d-flex justify-content-center">RAM</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="ram" name="ram">
    </div>
    <label for="disk" class="col-sm-1 col-form-label d-flex justify-content-center">DISK</label>
    <div class="col-sm-1">
      <input type="text" class="form-control" id="disk" name="disk">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="targetonboarding" class="col-sm-2 col-form-label">Target Onboarding</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="targetonboarding" name="targetonboarding">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="notadinas" class="col-sm-2 col-form-label">Nota Dinas</label>
    <div class="col-sm-10">
        <input class="form-control" type="file" id="notadinas" name="notadinas">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="bisnisreview" class="col-sm-2 col-form-label">Bisnis Review</label>
    <div class="col-sm-10">
        <input class="form-control" type="file" id="bisnisreview" name="bisnisreview">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="dataresource" class="col-sm-2 col-form-label">Data Resource</label>
    <div class="col-sm-10">
        <input class="form-control" type="file" id="dataresource" name="dataresource">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keterangan" name="keterangan">
    </div>
  </div>  
  <input type="submit" name="submit" class="btn btn-primary" value="submit">
</form>
</div>
      @endsection