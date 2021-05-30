<div>
<hr />
    <table class="table mt-2 table-bordered align-middle">
        <thead>
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Done</th>
            </tr>
        </thead>
    @foreach ($posts as $post)
        <tbody>
            <tr>
                <th scope="row" class="text-end pe-2 col-1">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td class="text-center col-1">{{$post->done ? 1 : 0}}</td>
            </tr>
        </tbody>
    @endforeach   
    </table>
    @if ($posts->hasPages())    
    <div class="d-flex justify-content-center" colspan="3">
    {{ $posts->onEachSide(1)->links() }}
    </div>    
    @endif
</div>
