@extends('app.master')

@section('content')
<div class="">
    <h2>Projek Edit</h2>
    <br>
    <form action="/projek/{{$data->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" name="name_projek" class="form-control" placeholder="" aria-describedby="helpId"
            value="{{old('name_projek', $data->nama_projek)}}" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required>{{old('deskripsi', $data->deskripsi)}}
          </textarea>
        </div>

        <div class="form-group">
          <label for="">Tanggal Mulai</label>
          <input type="date" name="date_start" class="form-control" placeholder="" aria-describedby="helpId"
          value="{{old('date_start', $data->tangal_mulai)}}" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <div class="form-group">
          <label for="">Tanggal Deadline</label>
          <input type="date" name="date_end" class="form-control" placeholder="" aria-describedby="helpId"
          value="{{old('date_end', $data->tanggal_deadline)}}" required>
          <small id="helpId" class="text-muted"></small>
        </div>

        <button type="submit" class="btn btn-primary float-right">Simpan</button>
    </form>
</div>
@endsection

@push('footer')

@endpush()
