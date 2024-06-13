<div class="w-1/2 my-4 bg-gray-700 shadow-lg rounded-lg flex justify-center items-center text-white flex-col border border-transparent">
    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propertyViews as $propertyView)
            <tr>
                <td class="text-white">{{ $propertyView->name }}</td>
                <td class="text-white">{{ $propertyView->views_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
