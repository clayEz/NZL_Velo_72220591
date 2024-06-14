@extends('layouts/main')
@section('title', "Form Edit Bicycle")
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/update/{{ $mv->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Sepeda</label>
                    <input type="text" name="nama" class="form-control" value="{{ $mv->nama }}" required>
                </div>

                <div class="form-group">
                    <label>Merek</label>
                    <select name="merek" class="form-control">
                        <option value="0">Pilih Merek</option>
                        <option value="Cannondale" {{ ($mv->merek == "Cannondale") ? "selected":"" }}>Cannondale</option>
                        <option value="Giant" {{ ($mv->merek == "Giant") ? "selected":"" }}>Giant</option>
                        <option value="GT Bike" {{ ($mv->merek == "GT Bike") ? "selected":"" }}>GT Bike</option>
                        <option value="Polygon" {{ ($mv->merek == "Polygon") ? "selected":"" }}>Polygon</option>
                        <option value="Wimcycle" {{ ($mv->merek == "Wimcycle") ? "selected":"" }}>Wimcycle</option>
                        <option value="United" {{ ($mv->merek == "United") ? "selected":"" }}>United</option>
                        <option value="Specialized" {{ ($mv->merek == "Specialized") ? "selected":"" }}>Specialized</option>
                        <option value="Trek" {{ ($mv->merek == "Trek") ? "selected":"" }}>Trek</option>
                        <option value="Santa Cruz" {{ ($mv->merek == "Santa Cruz") ? "selected":"" }}>Santa Cruz</option>
                        <option value="Kona" {{ ($mv->merek == "Kona") ? "selected":"" }}>Kona</option>
                        <option value="Fuji" {{ ($mv->merek == "Fuji") ? "selected":"" }}>Fuji</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Sepeda</label>
                    <select name="jenis" class="form-control">
                        <option value="Electric Bikes" {{ ($mv->jenis == "Electric Bikes") ? "selected":"" }}>Electric Bikes</option>
                        <option value="Road Bikes" {{ ($mv->jenis == "Road Bikes") ? "selected":"" }}>Road Bikes</option>
                        <option value="Gravel Bikes" {{ ($mv->jenis == "Gravel Bikes") ? "selected":"" }}>Gravel Bikes</option>
                        <option value="Mountain Bikes" {{ ($mv->jenis == "Mountain Bikes") ? "selected":"" }}>Mountain Bikes</option>
                        <option value="Hybird Bikes" {{ ($mv->jenis == "Hybird Bikes") ? "selected":"" }}>Hybird Bikes</option>
                        <option value="Kids Bikes" {{ ($mv->jenis == "Kids Bikes") ? "selected":"" }}>Kids Bikes</option>
                        <option value="BMX" {{ ($mv->jenis == "BMX") ? "selected":"" }}>BMX</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" step="any" name="harga" value="{{ $mv->harga }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" value="{{ $mv->warna }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" min="1900" max="2100" name="tahun" value="{{ $mv->tahun }}" class="form-control" required>
                </div>
                <div class="form-grop">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/'.$mv->poster) }}" alt="{{ $mv->poster }}" height="100" width="100">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection