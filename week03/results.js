function drawMeatChart() {
	var myData = meatyData;
	var colors = ['#FACC00', '#FB9900', '#FB6600', '#FB4800', '#CB0A0A', '#F8F933'];
	var myChart = new JSChart('chartid', 'pie');
	
	myChart.setDataArray(myData);
	myChart.colorizePie(colors);
	myChart.setTitleColor('#857D7D');
	myChart.setPieUnitsColor('#9B9B9B');
	myChart.setPieValuesColor('#6A0000');
	myChart.draw();
}

function drawBeanChart() {
	var beansOptions = {
          title: 'Favorite beans: '
    };

    var chart = new google.visualization.PieChart(document.getElementById('beanschart'));

    chart.draw(beansData, beansOptions);    
}

function drawRiceChart() {
	var chart = new google.visualization.PieChart(document.getElementById('ricechart'));
 
    var riceOptions = {
      title: 'Favorite kinds of rice: '
    };

	chart.draw(riceData, riceOptions);
}

function drawTortillaChart() {
	var chart = new google.visualization.PieChart(document.getElementById('mediumchart'));

	var mediumsOptions = {
      title: 'Favorite kind of tortilla: '
    };

	chart.draw(mediumsData, mediumsOptions);
}

function drawTomatoChart() {
	var chart = new google.visualization.PieChart(document.getElementById('tomatochart'));

	var tomatoOptions = {
      title: 'Tomato-ey types: '
    };

	chart.draw(tomatoData, tomatoOptions);
}

function drawFixingsChart() {
	var chart = new google.visualization.PieChart(document.getElementById('fixingschart'));

	var fixingsOptions = {
      title: 'Favorite fixings: '
    };

	chart.draw(fixingsData, fixingsOptions);
}




    

    
    

        
        
        
        
        
        
