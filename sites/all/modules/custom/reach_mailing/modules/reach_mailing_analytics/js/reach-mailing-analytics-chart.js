/**
 * Custom JS reach_mailing_analytics
 */
google.load('visualization', '1', {packages: ['corechart']});
/* New D7 Wrapper --> */(function ($) {



Drupal.behaviors.reach_mailing_analytics_analytics_chart = {
  attach: function(context, settings) { //new attach function
    
    $('#mailing-analytics-chart', context).once(function(){

      $.getJSON(settings.reach_mailing_analytics.chart_callback, function(json) {
        
        console.log(json);
        
        function drawVisualization(json) {
          // Create and populate the data table.
          console.log(json);
          
          $.each(json.data, function(index, value) {
            json.data[index][0] = new Date(value[0] * 1000);
          });
          
          var dataTable = new google.visualization.DataTable();
          dataTable.addColumn('date', 'Date');
          $.each(json.labels, function(key, label) {
            dataTable.addColumn('number', label);
          });
          dataTable.addRows(json.data);

          //var dataView = new google.visualization.DataView(dataTable);
          //dataView.setColumns([{calc: function(data, row) { return data.getFormattedValue(row, 0); }, type:'string'}, 1]);
            
        
          // Create and draw the visualization.
          console.log(json.settings);
          new google.visualization.LineChart(document.getElementById('mailing-analytics-chart')).
              draw(dataTable, json.settings);
        }
        
        drawVisualization(json);
        
        
      }); //getJSON
      
    }); // once
      




    
  }//attach
};//behaviors

/* New D7 Wrapper --> */ })(jQuery);
