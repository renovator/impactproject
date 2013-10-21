$('document').ready(function () {
    $('#execute').click(function () {
        
       
    });
  
    $('#policyID').hide();
    $('#actionResultID').hide();
    $('#InvestmentID').hide();
    $('#finalchartid').hide();

    

 $('#recoverid').click(function () {
       
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
     $('#finalchartid').show("slow");
 });
 $('#Button3').click(function () {

   
     $('#finalchartid').hide("slow");
 });
 
    var option = {
        chart: {
            renderTo: 'container',
            type: 'column'
        },
        title: {
            text: 'Extractive Revenue Report and Difference in Dollars '
        }, xAxis: {
            categories: ['1999-2004', '2005', '2006-2008']
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'CBN',
            data: [1.4, 401.7, 53.1, ]
        }, {
            name: 'Company Report',
            data: [9.3, 321.6, 79.4]
        }]
    }
    var option2 = {
        chart: {
            renderTo: 'container2',
            type: 'column'
        },
        title: {
            text: 'Difference in Extractive Reporting By CBN and Companies'
        }, xAxis: {
            categories: ['1999-2004', '2005', '2006-2008']
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Difference',
            data: [-7.90, 80.1, -26.3]
        }]
    }
    chart = new Highcharts.Chart(option);
    chart = new Highcharts.Chart(option2);

    $('#containerPie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Where Nigerians are investing in!!!!!!!!'
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
                ['Electricty', 45.0],
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







    //$.ajax({
    //    url: "/ExtractiveMainIncomes/GetMainResult",
    //    type: "GET",
    //    success: function (data) {
    //        $(data).each(function (index, elem) {

    //            var series = { name: "", data: [] };

    //            $.each(data.years, function (index, d) {

    //                option.xAxis.categories.push(d);

    //            });

    //            $.each(data.datas, function (index, d) {
    //                series.name = d.name;
    //                series.data.push(d.values);
    //            });
    //            option.series.push(series);
    //            chart = new Highcharts.Chart(option);
    //        });


    //    }

    //});
});