/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {
    //Gràfica senzilla amb array donat
    $.jqplot('chart1',  [[[1, 2],[3,5.12],[5,13.1],[7,33.6],[9,85.9],[11,219.9]]],{
      title:"Gràfica senzilla amb array donat"
      
    });
    //Gràfica amb JSON extern
      var ajaxDataRenderer = function(url, plot, options) {
        var ret = null;
        $.ajax({
          async: false,
          url: url,
          dataType:"json",
          success: function(data) {
            ret = data;
            }
         });
         return ret;
      };
      var jsonurl = "../sites/all/themes/pamapam/js/jqplot/jsondatadonut.txt";
      var plot2 = $.jqplot('chart2', jsonurl,{
        title: "Gràfica amb info de JSON extern",
        dataRenderer: ajaxDataRenderer,
        dataRendererOptions: {
        unusedOptionalUrl: jsonurl
        }
      });

    //Gràfica de tipus donut amb JSON extern
      var ajaxDataRenderer = function(url, plot, options) {
        var ret = null;
        $.ajax({
          async: false,
          url: url,
          dataType:"json",
          success: function(data) {
            ret = data;
            }
         });
         return ret;
      };
      var jsonurl = "../sites/all/themes/pamapam/js/jqplot/jsondatadonut.txt";
      var plot2 = $.jqplot('chart3-1', jsonurl,{
        title: "Gràfic Donut JSON extern",
        dataRenderer: ajaxDataRenderer,
        dataRendererOptions: {
        unusedOptionalUrl: jsonurl
        },
        grid:{
            background:'#fff',
            borderColor:'#fff',
            shadow:false
        },
        seriesDefaults: {
          // make this a donut chart.
          renderer:$.jqplot.DonutRenderer,
          rendererOptions:{
            // Donut's can be cut into slices like pies.
            sliceMargin: 3,
            // Pies and donuts can start at any arbitrary angle.
            startAngle: -90,
            showDataLabels: true,
            // By default, data labels show the percentage of the donut/pie.
            // You can show the data 'value' or data 'label' instead.
            dataLabels: 'value'
          }
        }
      });
       
    //Gràfica de tipus donut amb arrays donats
      var s1 = [['a',6], ['b',8], ['c',14], ['d',20]];
      var s2 = [['a', 8], ['b', 12], ['c', 6], ['d', 9]];
       
      var plot3 = $.jqplot('chart3', [s1, s2], {
        title:'Gràfic Donut Bàsic',
        grid:{
            background:'#fff',
            borderColor:'#fff',
            shadow:true
        },   
        seriesDefaults: {
          // make this a donut chart.
          renderer:$.jqplot.DonutRenderer,
          rendererOptions:{
            // Donut's can be cut into slices like pies.
            sliceMargin: 3,
            // Pies and donuts can start at any arbitrary angle.
            startAngle: -90,
            showDataLabels: true,
            // By default, data labels show the percentage of the donut/pie.
            // You can show the data 'value' or data 'label' instead.
            dataLabels: 'value'
          }
        }
      });
   
    //Gràfica de barres amb arrays donats
      var s1 = [2, 6, 7, 10];
      var s2 = [7, 5, 3, 4];
      var s3 = [14, 9, 3, 8];
      plot3 = $.jqplot('chart4', [s1, s2, s3], {
      // Tell the plot to stack the bars.
        title:'Gràfic de barres amb array donat',
      stackSeries: true,
      captureRightClick: true,
      seriesDefaults:{
      renderer:$.jqplot.BarRenderer,
      rendererOptions: {
          // Put a 30 pixel margin between bars.
          barMargin: 30,
          // Highlight bars when mouse button pressed.
          // Disables default highlighting on mouse over.
          highlightMouseDown: true   
      },
      pointLabels: {show: true}
      },
      axes: {
        xaxis: {
          renderer: $.jqplot.CategoryAxisRenderer
        },
        yaxis: {
          // Don't pad out the bottom of the data range.  By default,
          // axes scaled as if data extended 10% above and below the
          // actual range to prevent data points right on grid boundaries.
          // Don't want to do that here.
          padMin: 0
        }
      },
      legend: {
      show: true,
      location: 'e',
      placement: 'outside'
      }     
      });
      // Bind a listener to the "jqplotDataClick" event.  Here, simply change
      // the text of the info3 element to show what series and ponit were
      // clicked along with the data for that point.
      $('#chart4').bind('jqplotDataClick',
      function (ev, seriesIndex, pointIndex, data) {
        $('#info4').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
      }
      ); 




    // Place your code here.
    // Place your code here.

  }
};


})(jQuery, Drupal, this, this.document);
