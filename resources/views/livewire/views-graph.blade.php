<div class="w-1/2 h-56 my-4 bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent">
   <table class="table-auto">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($views as $view)
        <tr>
            <td class="text-white">{{ $view->property_id }}</td>
            <td class="text-white">{{ $view->property->name }}</td>
        </tr>
    @endforeach
    </table>
    </tbody>
</div>
