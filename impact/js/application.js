(function($){
    function getRandomColor() {
        var color = '';
        while (!color.match(/(#[c-e].)([e-f][a-f])([9-c].)/)) {
            color = '#' + Math.floor(Math.random() * (Math.pow(16,6))).toString(16);
        }
        return color;
    }

    if($('body.details').length > 0) {
        $.get('/data.php', function(data) {
            revData = JSON.parse(data);
            var oilData = revData.oil,
                gasData = revData.gas;

            var government = [],
                company = [];
    
            for(var i=3; i < 6; i++) {
                government.push({x: 2009 + i-3, y: oilData[i][6]});
                company.push({x: 2009 + i-3, y: oilData[i][7]});
            }


            var data = [
                 {
                   values: government,
                   key: 'Government',
                   color: '#ff7f0e'
                 },
                 {
                   values: company,
                   key: 'Company',
                   color: '#2ca02c'
                  } 
            ];

            nv.addGraph(function() {  
               var chart = nv.models.lineChart();

               chart.xAxis
                   .axisLabel('Year')
                   .tickFormat(d3.format('04d'));
               chart.yAxis
                   .axisLabel('Revenue (USD$’000)')
                   .tickFormat(d3.format('05d'));
               d3.select('#chart svg')
                   .datum(data)
                 .transition().duration(500)
                   .call(chart);
               nv.utils.windowResize(function() { d3.select('#chart svg').call(chart) }); 

               return chart;
             });

        });
    }

    $('#execute').click(function () {
               
    });
  
    $('#policyID').hide();
    $('#actionResultID').hide();
    $('#InvestmentID').hide();
    $('#finalchartid').hide();

 $('#recoverID').click(function (ev) {
        ev.preventDefault();
        $('#policyID').show("slow");
 });

 $('#executeID').click(function () {   
     $('#policyID').hide("slow");
     var val = Math.floor((Math.random() * 70) + 1);
     var m = (val * 1.3) / 100;
     var r = "Your Economic Policies and Action Just Recovered <span>" + val + " % </span> of N1.3 tr which amounts to <span>N" + m + " trillion </span>, hmm.. Looking Good. Which top areas will you invest this savings?";
     $('#resultarea').html(r);
     $('#actionResultID').show("slow");
 });
 $('#Button1').click(function () {
     $('#actionResultID').hide("slow");
     $('#InvestmentID').show('slow');
 });
 $('#Button2').click(function () {
    
     $('#InvestmentID').hide('slow');
     $('#finalchartID').show("slow");
 });
 $('#Button3').click(function () {   
     $('#finalchartID').hide("slow");
 });

    $('#containerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Where Nigerians are investing in?'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage}%</b>',
            percentageDecimals: 1
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    formatter: function () {
                        return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Sectors',
            data: [
                ['Electricity', 45.0],
                ['Food', 26.8],
                {
                    name: 'Education',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Housing', 8.5],
                ['Transportation', 6.2],
                ['Health', 0.7]
            ]
        }]
    });



})(jQuery);
