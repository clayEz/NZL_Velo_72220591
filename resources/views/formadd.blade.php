@extends('layouts/main')
@section('title', "Form Add Bicycle")
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Sepeda</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Merek</label>
                    <select name="merek" class="form-control">
                        <option value="0">Pilih Merek</option>
                        <option value="Cannondale">Cannondale</option>
                        <option value="Giant">Giant</option>
                        <option value="GT Bike">GT Bike</option>
                        <option value="Polygon">Polygon</option>
                        <option value="Wimcycle">Wimcycle</option>
                        <option value="United">United</option>
                        <option value="Specialized">Specialized</option>
                        <option value="Trek">Trek</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Kona">Kona</option>
                        <option value="Fuji">Fuji</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Sepeda</label>
                    <select name="jenis" class="form-control">
                        <option value="Electric Bikes">Electric Bikes</option>
                        <option value="Road Bikes">Road Bikes</option>
                        <option value="Gravel Bikes">Gravel Bikes</option>
                        <option value="Mountain Bikes">Mountain Bikes</option>
                        <option value="Hybird Bikes">Hybird Bikes</option>
                        <option value="Kids Bikes">Kids Bikes</option>
                        <option value="BMX">BMX</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" step="any" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="number" min="1900" max="2100" name="tahun" class="form-control" required>
                </div>
                <div class="form-grop">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection