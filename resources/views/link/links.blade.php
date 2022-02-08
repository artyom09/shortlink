
<table class="table" id="link-table">
    @if(!$links->isEmpty())
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Сокращение ссылка</th>
            <th scope="col">Ссылка</th>
            <th scope="col">Открыть ссылку</th>
        </tr>
    </thead>
    <tbody>
        @foreach($links as $link)
        <tr>
            <th scope="row">{{$link->id}}</th>
            <th>{{route('shortlink', $link->shortlink)}}</th>
            <th>{{$link->link}}</th>
            <td><a href="{{route('shortlink', $link->shortlink)}}" target="_blank">Открыть</a></td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>

