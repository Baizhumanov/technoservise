# Тестовое задание
**Ключевая компетенция: Full Stack Developer**

Языки программирования: PHP, JavaScript  
Framework: Laravel  
Базы данных: СУБД MySQL, PostgreSQL  

Задания к выполнению:
- **Сортировка данных**: написать функцию сортировки массива (до 10) из случайных чисел от -10 до 10, в обе стороны ASC, DESC;
- **Laravel**: Создать, используя только Laravel, 3 таблицы с любым количеством полей и наполнить их данными, используя PK и FK;
- **Laravel Query Builder**: Ранее созданные таблицы вывести в одно представление, используя Laravel запросы и Join;
- **Laravel**: Создать url-маршруты (до 10). Тематика - "Новостной портал". Маршруты должны иметь универсальный вид и быть логичными, можно отразить ссылки на статичные страницы, страницы категорий и страницы отдельных новостей

## Решение
#### Сортировка данных
Решение находится в `/resources/views/task.blade.php`:
```
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
```


#### Laravel таблицы
Для создания этих таблиц были использованы миграций. Миграций находятся по пути `/database/migrations/`


#### Laravel Query Builder
Запросы находятся в соответствующих контроллерах. Путь до контроллеров: `/app/Http/Controllers/`


#### Laravel маршруты
Все маршруты находятся в файле `web.php` . Путь до файла: `/routes/web.php`
