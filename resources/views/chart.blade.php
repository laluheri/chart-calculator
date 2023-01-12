<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
        <div id="app">
            {!! $chart->container() !!}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js">></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/fusioncharts@3.12.2/fusioncharts.js" charset="utf-8"></script> -->

        {!! $chart->script() !!}
    </body>
</html>