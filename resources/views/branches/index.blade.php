<x-bs.title>{{ __('Branches') }}</x-bs.title>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Is Head Branch') }}</th>
            <th>{{ __('Control') }}</th>
        </tr>
    </thead>
    <tbody>
        @if ($branches->count() < 1)
            <tr>
                <td colspan="4">
                    <div class="alert alert-danger">
                        {{ __('No Records') }}
                    </div>
                </td>
            </tr>
        @endif
        @foreach ($branches as $branch)
            <tr>
                <td>{{ $branch->id }}</td>
                <td>{{ $branch->name }}</td>
                <td>{{ $branch->is_head ? __('Yes') : __('No') }}</td>
                <td>
                    <form action="{{ route('branches.destroy', ['branch' => $branch]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if ($branch->workorders->count() > 0)
                            <a href="{{ route('branches.show', ['branch' => $branch]) }}" class="btn btn-success">
                                {{ __('Show') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <form action="{{ route('branches.store') }}" method="POST">
            @csrf
            @method('POST')
            <tr>
                <td> - </td>
                <td>
                    <input type="text" name="name" id="name" class="form-control" required
                        placeholder="{{ __('Name') }}">
                </td>
                <td>
                    <input type="checkbox" name="is_head" id="is_head" value="1">
                </td>
                <td>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </td>
            </tr>
        </form>
    </tfoot>
</table>
