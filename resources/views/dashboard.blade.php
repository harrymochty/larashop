@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Dashboard</a></li>
@endsection

@section('content')
    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2>5</h2>
                    <p>Product</p>
                </div>
                <i class='bx bx-box'></i>
            </div>
            <span class="progress" data-value="40%"></span>
            <span class="label">40%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>5</h2>
                    <p>Category</p>
                </div>
                <i class='bx bx-category'></i>
            </div>
            <span class="progress" data-value="60%"></span>
            <span class="label">60%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>465</h2>
                    <p>Pageviews</p>
                </div>
                <i class='bx bx-trending-up icon'></i>
            </div>
            <span class="progress" data-value="30%"></span>
            <span class="label">30%</span>
        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>235</h2>
                    <p>Visitors</p>
                </div>
                <i class='bx bx-trending-up icon'></i>
            </div>
            <span class="progress" data-value="80%"></span>
            <span class="label">80%</span>
        </div>
    </div>
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Sales Report</h3>
            </div>
            <div class="chart">
                <div id="chart"></div>
            </div>
        </div>


    </div>
    </div>
@endsection
