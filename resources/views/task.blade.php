@extends('view')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Код решений (сортировка в обе стороны)</h2>
                <div class="alert alert-secondary my-4" role="alert">
                    <pre>
        $array = [];

        for($i = 0; $i < 10; $i++) {
            array_push($array, rand(-10, 10));
        }

        $arrayAsc = $array;
        $arrayDesc = $array;
        $count = count($array) - 1;

        for ($i = $count; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++)
                if ($arrayAsc[$j] > $arrayAsc[$j + 1]) {
                    $k = $arrayAsc[$j];
                    $arrayAsc[$j] = $arrayAsc[$j + 1];
                    $arrayAsc[$j + 1] = $k;
                }
        }
        for ($i = $count; $i >= 0; $i--) {
            for ($j = 0; $j <= ($i - 1); $j++)
                if ($arrayDesc[$j] < $arrayDesc[$j + 1]) {
                    $k = $arrayDesc[$j];
                    $arrayDesc[$j] = $arrayDesc[$j + 1];
                    $arrayDesc[$j + 1] = $k;
                }
        }

        print_r($array);
        print_r($arrayAsc);
        print_r($arrayDesc);
    </pre>
                </div>
            </div>
        </div>
    </div>
@endsection
