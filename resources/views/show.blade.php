<div>
    <h1>Treni</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train->orario_di_partenza}}
            </li>
        @endforeach
    </ul>
</div>