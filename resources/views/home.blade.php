@extends('layouts.app')

@section('title', 'Homepage - LEN Sync')

@section('content')
<div class="dashboard">
    <div class="card">
        <h2>Total Income</h2>
        <p>Rp 579.000.000,-</p>
        <span>+15% Last Month</span>
    </div>
    <div class="card">
        <h2>Total Expenses</h2>
        <p>Rp 79.000.000,-</p>
        <span>-29% Last Month</span>
    </div>

    <div class="card">
        <h2>Cash On hand</h2>
        <p>Rp 1.231.985.000,-</p>
        <span>-12% Last Month</span>
    </div>
    <div class="card">
        <h2>Net Profit Margin</h2>
        <p>Rp 12.231.985.000,-</p>
        <span>+41% Last Month</span>
    </div> 

    <div class="card">
        <canvas id="mixed-chart" width="800" height="450"></canvas>
    </div> 

    <div class="card">
    <canvas id="polar-chart" width="400" height="225"></canvas>
    </div> 

    <div class="card">
    <canvas id="doughnut-chart" width="350" height="200"></canvas>
    </div> 

    <div class="card">
    <canvas id="line-chart" width="850" height="450"></canvas>
    </div> 
</div>


@endsection
