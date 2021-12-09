@extends('template')

@section('title')
  Admin | Dashboard
@endsection

@section('header')
  Dashboard
@endsection

@section('body')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{App\Product::count()}}</h3>
        <p>Products</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{App\Sales::count()}}</h3>
        <p>Sales</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>{{App\Source::where('status','leads')->count()}}</h3>
        <p>Leads</p>
      </div>
      <div class="icon">
        {{-- <i class="ion ion-pie-graph"></i> --}}
      </div>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>{{App\Source::where('status','customer')->count()}}</h3>
        <p>Customers</p>
      </div>
      <div class="icon">
        {{-- <i class="ion ion-user"></i> --}}
      </div>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>25</h3>
        <p>{{App\Activity::count()}}</p>
      </div>
      <div class="icon">
        {{-- <i class="ion ion-user"></i> --}}
      </div>
    </div>
  </div><!-- ./col -->
</div><!-- /.row -->
@endsection
