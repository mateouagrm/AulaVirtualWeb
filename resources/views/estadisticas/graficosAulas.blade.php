@extends ('layouts.inicio')
@section ('content')

<div class="container">
    <section class="content-header">
        <h4>
            Aulas Virtuales
        </h4>
        <ol class="breadcrumb">
            <li><a href="{{url('/administrador')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">personal</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                @include('mensajesucces')
                @include('mensajeerror')
                <h3>lista de aulas virtuales que dispongo</h3>
            </div>
            
            <div id = "container" class="box-body table-responsive">
          
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{asset('js/highcharts.js')}}"></script>
<script src="{{asset('js/data.js')}}"></script>
<script src="{{asset('js/drilldown.js')}}"></script>

        <script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Cursos Disponibles'
    },
    subtitle: {
        text: 'Cada una de las barras es un materia que se da el en aula vitual'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total de requisitos enviados'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Cursos",
            "colorByPoint": true,
            "data":<?= $puntajes; ?> 
        }
    ],
    "drilldown": {
        "series": <?= $puntajeCiclo; ?>
    }
});
        </script>


@endpush

