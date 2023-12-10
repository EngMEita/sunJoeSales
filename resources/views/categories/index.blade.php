<x-bs.title>{{ __('Categories') }}</x-bs.title>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Control') }}</th>
        </tr>
    </thead>
    <tbody>
        @if ($categories->count() < 1)
            <tr>
                <td colspan="3">
                    <div class="alert alert-danger">
                        {{ __('No Records') }}
                    </div>
                </td>
            </tr>
        @endif
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            @method('POST')
            <tr>
                <td> - </td>
                <td>
                    <input type="text" name="name" id="name" class="form-control" required
                        placeholder="{{ __('Name') }}">
                </td>
                <td>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </td>
            </tr>
        </form>
    </tfoot>
</table>
