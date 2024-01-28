@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Submit Dokumen</h1>
      </div>
<div class="col-lg-10">
<form method="POST" action="/dashboard/submit" class="mb-5" enctype="multipart/form-data">
    @csrf
<div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul Aplikasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" required>
      @error('judul')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="function" class="col-sm-2 col-form-label">Function</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('function') is-invalid @enderror" id="function" name="function" value="{{ old('function') }}" required>
      @error('function')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="mb-3 d-flex justify-content-center">
    <label for="vcpu" class="col-sm-1 col-form-label d-flex justify-content-center">VCPU</label>
    <div class="col-sm-1">
      <input type="text" class="form-control @error('vcpu') is-invalid @enderror" id="vcpu" name="vcpu" value="{{ old('vcpu') }}" required>
      @error('vcpu')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <label for="ram" class="col-sm-1 col-form-label d-flex justify-content-center">RAM</label>
    <div class="col-sm-1">
      <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram" name="ram" value="{{ old('ram') }}" required>
      @error('ram')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <label for="disk" class="col-sm-1 col-form-label d-flex justify-content-center">DISK</label>
    <div class="col-sm-1">
      <input type="text" class="form-control @error('disk') is-invalid @enderror" id="disk" name="disk" value="{{ old('disk') }}" required>
      @error('disk')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="targetonboarding" class="col-sm-2 col-form-label">Target Onboarding</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('targetonboarding') is-invalid @enderror" id="targetonboarding" name="targetonboarding" value="{{ old('targetonboarding') }}" required>
      @error('targetonboarding')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="notadinas" class="col-sm-2 col-form-label">Nota Dinas</label>
    <div class="col-sm-10">
        <input class="form-control @error('notadinas') is-invalid @enderror" type="file" accept=".xlsx, .xls" id="notadinas" name="notadinas" value="{{ old('notadinas') }}" required>
        @error('notadinas')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="bisnisreview" class="col-sm-2 col-form-label">Bisnis Review</label>
    <div class="col-sm-10">
        <input class="form-control @error('bisnisreview') is-invalid @enderror" type="file" accept=".xlsx, .xls" id="bisnisreview" name="bisnisreview" value="{{ old('bisnisreview') }}" required>
        @error('bisnisreview')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="dataresource" class="col-sm-2 col-form-label">Data Resource</label>
    <div class="col-sm-10">
        <input class="form-control @error('dataresource') is-invalid @enderror" type="file" accept=".xlsx, .xls" id="dataresource" name="dataresource" value="{{ old('dataresource') }}" required>
        @error('dataresource')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan') }}" required>
      @error('keterangan')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>  
  <input type="submit" name="submit" class="btn btn-primary" value="submit">
</form>
</div>
      @endsection