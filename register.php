
@extends('front')
@section('content')
<div class="row"> <div class="col-6">
    <from action="" method="post">
        </div>
        <div>
            <label class="from-label" for="">Pelanggan</label>
            <input class="from-control" type="text" name="pelanggan">
        </div>
        <div>
            <label class="from-label" for="">Alamat</label>
            <input class="from-control" type="text" name="alamat">
        </div>
        <div>
            <label class="from-label" for="">Telp</label>
            <input class="from-control" type="text" name="telp">
        </div>
        <div>
            <label class="from-label" for="">Jenis kelamin</label>
            <select class="from-select" name="jeniskelamin" id="">
                <option value="l">L</option>
                <option value="p" selected>P</option>
            </select>
        </div>
        <div>
            <label class="from-label" for="">Email</label>
            <input class="from-control" type="email" name="email">
        </div>
        <div>
            <label class="from-label" for="">Password</label>
            <input class="from-control" type="text" name="password">
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Register</button>
            <input type="submit" name="submit" value="Register">
        </div>

</from>
</div> </div>

@endsection