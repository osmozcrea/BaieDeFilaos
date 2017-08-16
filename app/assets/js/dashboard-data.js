/*Dashboard Init*/
 
"use strict"; 

/*****Ready function start*****/
$(document).ready(function(){
	$('#statement').DataTable({
		"bFilter": false,
		"bLengthChange": false,
		"bPaginate": false,
		"bInfo": false,
	});
	if( $('#chart_2').length > 0 ){
		var ctx2 = document.getElementById("chart_2").getContext("2d");
		var data2 = {
			labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet"],
			datasets: [
				{
					label: "Pré-contrat",
					backgroundColor: "rgba(254,193,7,1)",
					borderColor: "rgba(254,193,7,1)",
					data: [10, 30, 80, 61, 26, 75, 40]
				},
				{
					label: "Hors-Delai",
					backgroundColor: "rgba(255,42,0,1)",
					borderColor: "rgba(255,42,0,1)",
					data: [28, 48, 40, 19, 86, 27, 90]
				},
				{
					label: "Conclu",
					backgroundColor: "rgba(1,200,83,1)",
					borderColor: "rgba(1,200,83,1)",
					data: [8, 28, 50, 29, 76, 77, 40]
				}
			]
		};
		
		var hBar = new Chart(ctx2, {
			type:"horizontalBar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "#878787",
						},
						ticks: {
							fontFamily: "Roboto",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "#878787",
						},
						ticks: {
							fontFamily: "Roboto",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display: false,
				},
				
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Roboto'"
				}
				
			}
		});
	}
	if( $('#chart_6').length > 0 ){
		var ctx6 = document.getElementById("chart_6").getContext("2d");
		var data6 = {
			 labels: [
			"organic",
			"Referral",
			"Other"
		],
		datasets: [
			{
				data: [200,50,250],
				backgroundColor: [
					"#2879ff",
					"#01c853",
					"#fec107",
				],
				hoverBackgroundColor: [
					"#2879ff",
					"#01c853",
					"#fec107",
				]
			}]
		};
		
		var pieChart  = new Chart(ctx6,{
			type: 'pie',
			data: data6,
			options: {
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display:false
				},
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Roboto'"
				},
				elements: {
					arc: {
						borderWidth: 0
					}
				}
			}
		});
	}
	if($('#morris_extra_line_chart').length > 0) {
		var data=[{
            period: 'Dim',
            précontrat: 50,
            HorsDelai: 80,
            conclu: 20
        }, {
            period: 'Lun',
            précontrat: 130,
            HorsDelai: 100,
            conclu: 80
        }, {
            period: 'Mar',
            précontrat: 80,
            HorsDelai: 60,
            conclu: 70
        }, {
            period: 'Mer',
            précontrat: 70,
            HorsDelai: 200,
            conclu: 140
        }, {
            period: 'Jeu',
            précontrat: 180,
            HorsDelai: 150,
            conclu: 140
        }, {
            period: 'Ven',
            précontrat: 105,
            HorsDelai: 100,
            conclu: 80
        },
         {
            period: 'Sam',
            précontrat: 250,
            HorsDelai: 150,
            conclu: 200
        }];
		var dataNew = [{
            period: 'Jan',
            précontrat: 10,
            HorsDelai: 60,
            conclu: 20
        }, 
		{
            period: 'Fev',
            précontrat: 110,
            HorsDelai: 100,
            conclu: 80
        },
		{
            period: 'Mars',
            précontrat: 120,
            HorsDelai: 100,
            conclu: 80
        },
		{
            period: 'Avril',
            précontrat: 110,
            HorsDelai: 100,
            conclu: 80
        },
		{
            period: 'Mai',
            précontrat: 170,
            HorsDelai: 100,
            conclu: 80
        },
		{
            period: 'Juin',
            précontrat: 120,
            HorsDelai: 150,
            conclu: 80
        },
		{
            period: 'Juillet',
            précontrat: 120,
            HorsDelai: 150,
            conclu: 80
        },
		{
            period: 'Aout',
            précontrat: 190,
            HorsDelai: 120,
            conclu: 80
        },
		{
            period: 'Sep',
            précontrat: 110,
            HorsDelai: 120,
            conclu: 80
        },
		{
            period: 'Oct',
            précontrat: 10,
            HorsDelai: 170,
            conclu: 10
        },
		{
            period: 'Nov',
            précontrat: 10,
            HorsDelai: 470,
            conclu: 10
        },
		{
            period: 'Dec',
            précontrat: 30,
            HorsDelai: 170,
            conclu: 10
        }
		];
		var lineChart = Morris.Line({
        element: 'morris_extra_line_chart',
        data: data ,
        xkey: 'period',
        ykeys: ['précontrat', 'HorsDelai', 'conclu'],
        labels: ['précontrat', 'HorsDelai', 'conclu'],
        pointSize: 2,
        fillOpacity: 0,
		lineWidth:2,
		pointStrokeColors:['#fec107', '#e91e63', '#2879ff'],
		behaveLikeLine: true,
		gridLineColor: '#878787',
		hideHover: 'auto',
		lineColors: ['#fec107', '#e91e63', '#2879ff'],
		resize: true,
		redraw: true,
		gridTextColor:'#878787',
		gridTextFamily:"Roboto",
        parseTime: false
    });

	}
	/* Switchery Init*/
	var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
	$('#morris_switch').each(function() {
		new Switchery($(this)[0], $(this).data());
	});
	var swichMorris = function() {
		if($("#morris_switch").is(":checked")) {
			lineChart.setData(data);
			lineChart.redraw();
		} else {
			lineChart.setData(dataNew);
			lineChart.redraw();
		}
	}
	swichMorris();	
	$(document).on('change', '#morris_switch', function () {
		swichMorris();
	});
	
});
/*****Ready function end*****/

/*****Load function start*****/
$(window).load(function(){
	window.setTimeout(function(){
		$.toast({
			heading: 'Bienvenue à CRM Filaos',
			text: 'Application de gestion des ventes - Aménagement foncier Baie des filaos',
			position: 'top-right',
			loaderBg:'#fec107',
			icon: 'success',
			hideAfter: 3500, 
			stack: 6
		});
	}, 3000);
});
/*****Load function* end*****/

var sparklineLogin = function() { 
	if( $('#sparkline_1').length > 0 ){
		$("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
			type: 'line',
			width: '100%',
			height: '35',
			lineColor: '#2879ff',
			fillColor: 'rgba(40,121,255,.2)',
			maxSpotColor: '#2879ff',
			highlightLineColor: 'rgba(0, 0, 0, 0.2)',
			highlightSpotColor: '#2879ff'
		});
	}	
	if( $('#sparkline_2').length > 0 ){
		$("#sparkline_2").sparkline([0,2,8,6,8], {
			type: 'line',
			width: '100%',
			height: '35',
			lineColor: '#2879ff',
			fillColor: 'rgba(40,121,255,.2)',
			maxSpotColor: '#2879ff',
			highlightLineColor: 'rgba(0, 0, 0, 0.2)',
			highlightSpotColor: '#2879ff'
		});
	}	
	if( $('#sparkline_3').length > 0 ){
		$("#sparkline_3").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
			type: 'line',
			width: '100%',
			height: '35',
			lineColor: '#2879ff',
			fillColor: 'rgba(40,121,255,.2)',
			maxSpotColor: '#2879ff',
			highlightLineColor: 'rgba(0, 0, 0, 0.2)',
			highlightSpotColor: '#2879ff'
		});
	}
	if( $('#sparkline_4').length > 0 ){
		$("#sparkline_4").sparkline([0,2,8,6,8,5,6,4,8,6,6,2 ], {
			type: 'bar',
			width: '100%',
			height: '50',
			barWidth: '5',
			resize: true,
			barSpacing: '5',
			barColor: '#fec107',
			highlightSpotColor: '#fec107'
		});
	}	
}
var sparkResize;
	$(window).resize(function(e) {
		clearTimeout(sparkResize);
		sparkResize = setTimeout(sparklineLogin, 200);
	});
sparklineLogin();