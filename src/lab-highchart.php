<script src='./assets/vendor/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>

<style type="text/css">
	.highcharts-figure,
	.highcharts-data-table table {
	    min-width: 320px;
	    max-width: 800px;
	    margin: 1em auto;
	}

	.highcharts-data-table table {
	    font-family: Verdana, sans-serif;
	    border-collapse: collapse;
	    border: 1px solid #ebebeb;
	    margin: 10px auto;
	    text-align: center;
	    width: 100%;
	    max-width: 500px;
	}

	.highcharts-data-table caption {
	    padding: 1em 0;
	    font-size: 1.2em;
	    color: #555;
	}

	.highcharts-data-table th {
	    font-weight: 600;
	    padding: 0.5em;
	}

	.highcharts-data-table td,
	.highcharts-data-table th,
	.highcharts-data-table caption {
	    padding: 0.5em;
	}

	.highcharts-data-table thead tr,
	.highcharts-data-table tr:nth-child(even) {
	    background: #f8f8f8;
	}

	.highcharts-data-table tr:hover {
	    background: #f1f7ff;
	}

	input[type="number"] {
	    min-width: 50px;
	}

</style>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Pie charts are very popular for showing a compact overview of a
        composition or comparison. While they can be harder to read than
        column charts, they remain a popular choice for small datasets.
    </p>
</figure>

<script type="text/javascript">
	jQuery(document).ready(function ($) { 
		// Retrieved from https://www.ssb.no/jord-skog-jakt-og-fiskeri/jord-skog-jakt-og-fiskeri
		// Data retrieved from https://netmarketshare.com
		Highcharts.chart('container', {
		    chart: {
		        plotBackgroundColor: null,
		        plotBorderWidth: null,
		        plotShadow: false,
		        type: 'pie'
		    },
		    title: {
		        text: 'Browser market shares in May, 2020'
		    },
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		    },
		    accessibility: {
		        point: {
		            valueSuffix: '%'
		        }
		    },
		    plotOptions: {
		        pie: {
		            allowPointSelect: true,
		            cursor: 'pointer',
		            dataLabels: {
		                enabled: true,
		                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
		            }
		        }
		    },
		    series: [{
		        name: 'Brands',
		        colorByPoint: true,
		        innerSize: '50%',
		        data: [{
		            name: 'Chrome',
		            y: 50,
		            // sliced: true,
		            // selected: true
		        }, {
		            name: 'Edge',
		            y: 50
		        }]
		    }]
		});

	});
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>