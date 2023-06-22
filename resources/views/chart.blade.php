@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Charts') }} <a href="{{ route('home') }}" class="btn btn-primary">Home</a></div>
                
                <div class="p-4">
                   <div class="mb-5">
                        <input type="number" id="year" placeholder="Add an year..." oninput="validateInput(event)" class="rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;">
                        <button onclick="newMovie(document.getElementById('year').value)" class="btn btn-primary py-1 px-3 align-top">Add</button>
                   </div>

                    <canvas id="myChart" class="mb-5"></canvas>
                    <canvas id="myChart2" ></canvas>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
                <script type="text/javascript">
                
                function validateInput(event) {
                    var input = event.target;
                    var inputValue = input.value;
                    var sanitizedValue = inputValue.replace(/\D/g, '');
                    input.value = sanitizedValue;
                }

                    var movieArray =  {{ Js::from($data) }};
                    var labels = [], count = [];

                    movieArray.map(function(movie) {
                        labels.push(movie.year)
                        count.push(movie.count)
                    });

                    const data = {
                        labels: labels,
                        datasets: [{
                            label: 'Movies Count',
                            backgroundColor: 'rgb(2, 160, 202)',
                            borderColor: 'rgb(2, 160, 202)',
                            data: count,
                        }]
                    };
                
                    const config = {
                        type: 'line',
                        data: data,
                        options: {}
                    };

                    const config2 = {
                        type: 'bar',
                        data: data,
                        options: {}
                    };
                
                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );

                    const myChart2 = new Chart(
                        document.getElementById('myChart2'),
                        config2
                    );


                    function newMovie(value) {  
                        var index = movieArray.findIndex(function(movie) {
                            return movie.year == value;
                        });

                        if (index !== -1) {
                            movieArray[index].count++;
                            myChart.data.datasets[0].data[index]++;
                            myChart.update();
                            myChart2.update();
                        } else {
                            movieArray.push({ year: parseInt(value), count: 1 });
                            movieArray.sort((a, b) => a.year - b.year);

                            myChart.data.labels = [];
                            myChart.data.datasets[0].data = [];

                            movieArray.map(function(movie) {
                                myChart.data.labels.push(movie.year);
                                myChart.data.datasets[0].data.push(movie.count);
                            });

                            myChart.update();
                            myChart2.update();
                        }
                    }
                </script>

            </div>
        </div>
    </div>
</div>
@endsection

