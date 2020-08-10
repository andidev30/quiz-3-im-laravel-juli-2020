@extends('app.master')

@section('content')
<div class="">
    <h2>Projek Baru</h2>
    <br>
    <form action="/projek" method="post">
        @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="name_projek" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
        </div>

        <div class="form-group">
          <label for="">Tanggal Mulai</label>
          <input type="date" name="date_start" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <div class="form-group">
          <label for="">Tanggal Deadline</label>
          <input type="date" name="date_end" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Simpan</button>
    </form>
</div>
@endsection

@push('footer')

@endpush()
