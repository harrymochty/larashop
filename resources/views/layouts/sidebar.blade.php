<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand"><i class='bx bxs-cart icon'></i> {{ config('app.name') }}</a>
    <ul class="side-menu">
        <li><a href="{{ route('dashboard') }}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
        <li class="divider" data-text="main">Main</li>

        <li>
            <a href="#"><i class='bx bxs-package icon'></i> Products <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('product.index') }}">Data Products</a></li>
                <li><a href="{{ route('product.create') }}">Add Products</a></li>
            </ul>
        </li>

        <li>
            <a href="#"><i class='bx bx-category icon'></i> Categories <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('category.index') }}">Data Categories</a></li>
                <li><a href="{{ route('category.create') }}">Add Categories</a></li>
            </ul>
        </li>


        <li>
            <a href="#"><i class='bx bxs-id-card icon'></i> Member <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="#">Add Member</a></li>
            </ul>
        </li>
        {{-- 
        <li><a href="#"><i class='bx bxs-chart icon'></i> Charts</a></li>
        <li><a href="#"><i class='bx bxs-widget icon'></i> Widgets</a></li> --}}

        <li class="divider" data-text="transaction">Transaction</li>

        <li><a href="#"><i class='bx bxs-cart-download icon'></i> Pembelian</a></li>
        <li><a href="#"><i class='bx bxs-cart-add icon'></i> Penjualan</a></li>
        <li><a href="#"><i class='bx bx-table icon'></i> Transaksi Lama</a></li>
        <li><a href="#"><i class='bx bx-table icon'></i> Transaksi Baru</a></li>

        <li class="divider" data-text="report">Report</li>
        <li><a href="#"><i class='bx bxs-file-pdf icon'></i> Laporan</a></li>

    </ul>
    {{-- <div class="ads">
        <div class="wrapper">
            <a href="#" class="btn-upgrade">Upgrade</a>
            <p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
        </div>
    </div> --}}
</section>
<!-- SIDEBAR -->
