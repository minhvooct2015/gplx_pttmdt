@extends('gplx.cbsh.master')
@section('title','Thống kê lượt truy cập')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="card">
      <div class="card-header border-0">
        <div class="d-flex justify-content-between">

          <h3 >Lượt khách truy cập</h3>
          <a href="javascript:void(0);">Xem báo cáo</a>
        </div>
    
      <div class="card-body">
        <div class="d-flex">
          <p class="d-flex flex-column">
            <span class="text-bold text-lg">1</span>
            <span>Khách truy cập theo thời gian</span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
            <span class="text-success">
              <i class="fas fa-arrow-up"></i> 0.01% 
            </span>
            <span class="text-muted">kể từ tuần trước</span>
          </p>
        </div>
        <!-- /.d-flex -->
        <div class="position-relative mb-4">
          <canvas id="visitors-chart" height="200"></canvas>
        </div>
        <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
            <i class="fas fa-square text-primary"></i> Tuần này
          </span>
          <span>
            <i class="fas fa-square text-gray"></i> Tuần trước
          </span>
        </div>
      </div>
      </div>
   
<script>
  $(function () {
    //-------------
    //- Khách truy cập  -
    //-------------
    'use strict'
    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }
    var mode      = 'index'
    var intersect = true
    var $visitorsChart = $('#visitors-chart')
    var visitorsChart  = new Chart($visitorsChart, {
      data   : {
        labels  : {!! json_encode($data['date']->map(function($d){return $d->format('d/m/y');})) !!},
        datasets: [{
          type                : 'line',
          data                : {!! json_encode($data['visitors']) !!},
          backgroundColor     : 'transparent',
          borderColor         : '#007bff',
          pointBorderColor    : '#007bff',
          pointBackgroundColor: '#007bff',
          fill                : false
          // pointHoverBackgroundColor: '#007bff',
          // pointHoverBorderColor    : '#007bff'
        },
          {
            type                : 'line',
            data                : {!! json_encode($data['pageViews']) !!},
            backgroundColor     : 'tansparent',
            borderColor         : '#ced4da',
            pointBorderColor    : '#ced4da',
            pointBackgroundColor: '#ced4da',
            fill                : false
            // pointHoverBackgroundColor: '#ced4da',
            // pointHoverBorderColor    : '#ced4da'
          }]
      },
      options: {
        maintainAspectRatio: false,
        tooltips           : {
          mode     : mode,
          intersect: intersect
        },
        hover              : {
          mode     : mode,
          intersect: intersect
        },
        legend             : {
          display: false
        },
        scales             : {
          yAxes: [{
            // display: false,
            gridLines: {
              display      : true,
              lineWidth    : '4px',
              color        : 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks    : $.extend({
              beginAtZero : true,
              suggestedMax: 200
            }, ticksStyle)
          }],
          xAxes: [{
            display  : true,
            gridLines: {
              display: false
            },
            ticks    : ticksStyle
          }]
        }
      }
    })
  })
</script>        
@stop