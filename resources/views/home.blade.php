
@extends('layouts.app2')

@section('content')
<header>

@include('supp.slider')
</header>



<div class="container">


    <div class="row justify-content-center">
        @foreach($barangs as $barang)
        <div class="col-md-3 mb-3">
            <div class="card"  >
                <label for="cart">
                    <img src="{{ url('image') }}/{{ $barang->gambar }}" class="card-img-top" style="height: 10rem;" alt="...">
                </label>
              <div class="card-body">
                <h5>{{ $barang->nama_barang }}</h5>
                    <p>
                        <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                        <strong>Stok :</strong> {{ $barang->stok }} <br>
                    </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary btn-sm" ><i class="fa fa-shopping-cart" ></i> Pesan</a>
              </div>
            </div>
        </div>
    @endforeach
    </div>

</div>
    <form style="padding-top: 20px" class='row justify-content-center'>
        {{ $barangs->onEachSide(5)->links("pagination::bootstrap-4") }}
    </form>




@include('supp.footer')



@endsection

