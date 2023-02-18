/*=========================================================================================
    File Name: chart-apex.js
    Description: Apexchart Examples
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/



  // Line Chart
  // --------------------------------------------------------------------
  let data = [];
  const kendaraan = '$datas';
  var i = 0;
  while ( i < kendaraan.length+1){
    data.push(kendaraan.jenis_kendaraan);
  }
  var lineChartEl = document.querySelector('#line-chart'),
    lineChartConfig = {
      chart: {
        height: 400,
        type: 'line',
        zoom: {
          enabled: false
        },
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      series: [
        {
          data: $('data')
        }
      ],
      markers: {
        strokeWidth: 7,
        strokeOpacity: 1,
        strokeColors: [window.colors.solid.white],
        colors: [window.colors.solid.warning]
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      colors: [window.colors.solid.warning],
      grid: {
        xaxis: {
          lines: {
            show: true
          }
        },
        padding: {
          top: -20
        }
      },
      tooltip: {
        custom: function (data) {
          return (
            '<div class="px-1 py-50">' +
            '<span>' +
            data.series[data.seriesIndex][data.dataPointIndex] +
            '%</span>' +
            '</div>'
          );
        }
      },
      xaxis: {
        categories: [
        
        ]
      },
      yaxis: {
        opposite: isRtl
      }
    };
  if (typeof lineChartEl !== undefined && lineChartEl !== null) {
    var lineChart = new ApexCharts(lineChartEl, lineChartConfig);
    lineChart.render();
  };

