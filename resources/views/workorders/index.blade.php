<x-bs.title>{{ __('Workorders') }}</x-bs.title>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>{{ __('Ser.') }}</th>
            @isset($branches)
                <th>{{ __('Branch') }}</th>
            @endisset
            <th>{{ __('Workorder') }}</th>
            <th>{{ __('Date') }}</th>
            <th>{{ __('Company Name') }}</th>
            <th>{{ __('Amount') }}</th>
            <th>{{ __('Quantity Number') }}</th>
            <th>{{ __('Salesman') }}</th>
            <th>{{ __('Project Name') }}</th>
            <th>{{ __('Remarks') }}</th>
            @isset($branches)
                <th>{{ __('Control') }}</th>
            @endisset
            @isset($branch)
                <th>{{ __('Delivery Date') }}</th>
            @endisset
        </tr>
    </thead>
    <tbody>
        @if ($workorders->count() < 1)
            <tr>
                <td colspan="11">
                    <div class="alert alert-danger">
                        {{ __('No Records') }}
                    </div>
                </td>
            </tr>
        @endif
        @foreach ($workorders as $workorder)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @isset($branches)
                    <td>{{ $workorder->branch->id }}. {{ $workorder->branch->name }}
                        {{ $workorder->branch->is_head ? ' ( * )' : '' }}</td>
                @endisset
                <td>{{ $workorder->workorder }}</td>
                <td>{{ $workorder->date }}</td>
                <td>{{ $workorder->company_name }}</td>
                <td>{{ $workorder->amount }}</td>
                <td>{{ $workorder->quantity_number }}</td>
                <td>{{ $workorder->salesman }}</td>
                <td>{{ $workorder->project_name }}</td>
                <td>{{ $workorder->remarks }}</td>
                @isset($branches)
                    <td>
                        <form action="{{ route('workorders.destroy', ['workorder' => $workorder]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                        </form>
                    </td>
                @endisset
                @isset($branch)
                    <td>
                        <form action="{{ route('workorders.update', ['workorder' => $workorder]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <table class="table table-borderless">
                                <tr>
                                    <td><input type="date" name="delivery_date" class="form-control"
                                            value="{{ $workorder->delivery_date }}" /></td>
                                    <td><button type="submit" class="btn btn-success">{{ __('Save') }}</button></td>
                                </tr>
                            </table>
                        </form>
                    </td>
                @endisset
            </tr>
        @endforeach
    </tbody>
</table>
