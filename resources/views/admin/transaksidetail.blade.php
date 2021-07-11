@extends('layouts.index')

@section('konten')


    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Pesanan ID</th>
            <th scope="col">Jumlah Pesanan</th>
            <th scope="col">Jumlah Harga</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            ?>
       @foreach ($transaksi as $transaksis  )
           <tr>
               <th scope="row">{{ $no++ }}</th>
               <td>{{ DB::table('pesanans')->where('id', $transaksis -> pesanan_id)->value('tanggal') }}</td>
               <td>{{ $transaksis -> barang_id }}</td>
               <td>{{ DB::table('barangs')->where('id', $transaksis -> barang_id)->value('nama_barang') }}</td>

                   @php
                       $user = (DB::table('pesanans')->where('id', $transaksis -> pesanan_id)->value('user_id') )
                   @endphp

               <td>{{ DB::table('users')->where('id', $user )->value('name') }}</td>
               <td>{{ $transaksis -> jumlah }}</td>
               <td>{{ $transaksis -> jumlah_harga }}</td>
               <td>
                       <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                           <button type="button" class="btn btn-success">Edit</button>
                           <button type="button" class="btn btn-danger">Delete</button>

                       </div>
                   </div>
                   </td>
           </tr>
           @endforeach


        </tbody>
      </table>

</form>


</div>
@endsection
