$(document).ready(function(){
    $.ajax({
        url: "http://localhost/voting/result_process.php",
        method: "GET",
        success: function(data){
            var result = JSON.stringify(data);
            console.log(result);
            var student = [];
            var votes = [];

            var vpname = [];
            var vpvotes = [];

            var secname = [];
            var secvotes = [];

            var value = '';

           for(var i in data) {
               value = data[i].pos;
             if(value.indexOf('President') >= 0){
                student.push(data[i].name);
                votes.push(data[i].votes);

                var chartdata = {
                    labels: student,
                    datasets: [
                        {
                            label : 'No of Votes',
                            backgroundColor: '#c9fadd',
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: votes
                        }
                    ]
                };
                var cxt = $("#mychart");

                var barGraph = new Chart(cxt, {
                    type: 'bar',
                    data: chartdata,
                     options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true,
                             stepSize: 2
                         }
                     }]
                 }
             }
                });
             }
             else if(value.indexOf('VP') >= 0){
                vpname.push(data[i].name);
                vpvotes.push(data[i].votes);

                var chartdata = {
                    labels: vpname,
                    datasets: [
                        {
                            label : 'No of Votes',
                            backgroundColor: '#c9fadd',
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: vpvotes
                        }
                    ]
                };
                var cxt = $("#thechart");

                var barGraph = new Chart(cxt, {
                    type: 'bar',
                    data: chartdata,
                     options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true,
                             stepSize: 1
                         }
                     }]
                 }
             }
                });
             }
            
             else {
                secname.push(data[i].name);
                secvotes.push(data[i].votes);

                var chartdata = {
                    labels: secname,
                    datasets: [
                        {
                            label : 'No of Votes',
                            backgroundColor: '#c9fadd',
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: secvotes
                        }
                    ]
                };
                var cxt = $("#dchart");

                var barGraph = new Chart(cxt, {
                    type: 'bar',
                    data: chartdata,
                     options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true,
                             stepSize: 1
                         }
                     }]
                 }
             }
                });
             }
           
 }
        }
   });
});

    