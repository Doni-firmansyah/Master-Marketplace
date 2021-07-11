@extends('layouts.index')

@section('konten')


    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($user as $users)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $users->name}}</td>
                    <td>{{ $users->email}}</td>
                    <td> * * * * * </td>
                    <td><a href="#" class="btn btn-info  stretched-link">Detail</a></td>
                    {{-- <td><a href="/produk/{{ $produks->id}}" class="btn btn-info  stretched-link">Detail</a></td> --}}
                </tr>
          @endforeach
        </tbody>
      </table>

</form>


</div>
@endsection
