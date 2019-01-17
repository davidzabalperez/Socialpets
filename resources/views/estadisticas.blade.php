<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon (3).ico" />
    <link rel="stylesheet" type="text/css" href="/css/feed.css">
    <link rel="stylesheet" type="text/css" href="/css/grayscale.css">

    <title>Social Pets Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="/js/Chart.min.js"></script>
  </head>

  <body id="page-top">
    <!-- NavBar -->
    @include("layouts.navbar")
<section id="socialpets" class="about-section text-center">

<div class="container">

    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach($usersPerMonth as $month)
                    {{$month['month'].','}}
                @endforeach
            ],
            datasets: [{
                label: 'Usuarios logueados por mes',
                data: [
                    @foreach($usersPerMonth as $users)   
                        [{{$users['users']}}],
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>
        </div>
    </div>
        
        </div>
        
        
        </div>

</section>
<footer class="bg-black small text-center text-white-50">
      <div class="container">

        Copyright &copy; Social Pets 2019
      </div>
</footer>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-easing/jquery.easing.min.js"></script>
    <script src="js/grayscale.min.js"></script>
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/grayscale.min.js"></script>
  </body>
</html>