@extends('app.master')

@section('content')
<h2>Data Projek</h2>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>nama projek</th>
      <th>deskripsi</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Deadline</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php //dd($data);?>
  @foreach($data as $td)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $td->nama_projek }}</td>
      <td>{{ $td->deskripsi }}</td>
      <td>{{ $td->tangal_mulai }}</td>
      <td>{{ $td->tanggal_deadline }}</td>
      <td>
        <a href="/projek/{{$td->id}}/edit" class="btn btn-warning btn-small">edit</a>
        <form action="/projek/{{$td->id}}" method="post">
        @csrf
        @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@push('footer')
<script src="{{asset('sbadmin2')}}/js/swal.min.js"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush()
