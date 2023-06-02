<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Penerimaan Santri
            <!-- <div class="logo-image-big">
                        <img src="../assets/img/logo-big.png">
                    </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class=" {{ Request::is('dashboard')? "active":"" }} ">
                <a href="{{url('dashboard')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class=" {{ Request::is('kriteria')? " active":"" }} ">
                <a href="{{url('kriteria')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Kriteria</p>
                </a>
            </li>
            <li class=" {{ Request::is('keterangan')? " active":"" }} ">
                <a href="{{url('keterangan')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Keterangan</p>
                </a>
            </li>
            <li class=" {{ Request::is('bobot')? " active":"" }} ">
                <a href="{{url('bobot')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Bobot</p>
                </a>
            </li>
            <li class=" {{ Request::is('dataNilai')? " active":"" }} ">
                <a href="{{url('dataNilai')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Data Nilai</p>
                </a>
            </li>
            <li class=" {{ Request::is('hasil')? " active":"" }} ">
                <a href="{{ url('hasil')}}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Hasil</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>