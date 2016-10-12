function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
  vars[key] = value;
  });
  return vars;
}

var farm = getUrlVars()["farm"];
var pandlet = getUrlVars()["pandlet"];

//alert(farm);
//alert(pandlet);
var chart = AmCharts.makeChart( "chartdiv4", {
    "type": "serial",
    "dataLoader": {
      "url": "../database/pandlet/graph-soilmoist.php?pandlet="+pandlet+"&farm="+farm
    },
    "theme": "light",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled": true,
    "categoryField": "date",
    "dataDateFormat": "YYYY-MM-DD",
    "startDuration": 1,
    "categoryAxis": {
      "parseDates": true
    },
    "graphs": [ {
      "id": "g1",
      "balloonText": "<b><span style='font-size:14px;'>Value: [[soilmoisture]]</span></b>",
      "valueField": "soilmoisture",
      "bullet": "round",
      "bulletBorderAlpha": 1,
      "bulletBorderThickness": 2,
      "lineThickness ": 2,
      "lineAlpha": 0.5
    } ],
    "chartScrollbar": {
      "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {

    },
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
  } );

chart.pathToImages = "../img/graphs/";
/*
zoomChart();
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 2, chartData.length - 1);
}
*/