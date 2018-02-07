@extends('layouts.master')

@section('title', 'Al - Sat')

@section('content')
    <div class="row">
        <div class="jumbotron">
            <div class="container text-center">

                <div class="form-group">
                    <div >
                        <h3 style="float:left;">Popüler Ürünler Slider</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-3 text-center">
        <div class="row">

            <div class="col-sm-9">
                <p>Kategoriler Ve ikonları</p>
                @foreach($adCategories as $adCategory)

                    <th>

                        <tr>{{$adCategory->adCategories->body}}<br><img src="http://daybuuy.app/storage/{{$adCategory->icon}}"  height="92" width="92"><br></tr>


                    </th>

                @endforeach
            </div>
            <div class="col-sm-3">
                <p>Reklam</p>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
    </div><br>
    <div class="container-fluid bg-3 text-center">
        <h3>Kategori içerikleri</h3><br>
        <div class="row">
            <div class="col-sm-9" style="background-color:blue;">
                <div class="row">
                    <div class="col-sm-3">
                        @foreach($adCategories as $adCategory)
                            {{$adCategory->adCategories->body}}
                        @endforeach
                    </div>
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="background-color:yellow;">
                <p>REKLAM</p>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
    </div><br><br>
    <div class="container-fluid bg-3 text-center">
        <h3> Dopingli İlanlar </h3>
        <div class="row">
            <div class="col-md-9" style="background-color:red;">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <p>REKLAM</p>
            <div class="col-md-3" style="background-color:black;">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>

    </div>
@endsection

