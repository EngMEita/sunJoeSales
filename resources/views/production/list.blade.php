<form action="{{ route('production.update') }}" method="POST">
    @csrf
    @method('PUT')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th colspan="2">{{ __('Category') }}</th>
                @foreach ($categories as $category)
                    <th colspan="2">{{ $category->name }}</th>
                @endforeach
            </tr>
            <tr>
                <th colspan="2">{{ __('Workorder') }}</th>
                @foreach ($categories as $category)
                    <th rowspan="2">{{ __('In') }}</th>
                    <th rowspan="2">{{ __('Out') }}</th>
                @endforeach
            </tr>
            <tr>
                <th>{{ __('W.O.') }}</th>
                <th>{{ __('Company Name') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workorders as $workorder)
                <tr>
                    <th>{{ $workorder->workorder }}</th>
                    <th>{{ $workorder->company_name }}</th>
                    @foreach ($categories as $category)
                        @php
                            $production = \App\Models\Production::firstOrCreate(
                                [
                                    'workorder_id' => $workorder->id,
                                    'category_id' => $category->id,
                                ],
                                [
                                    'in' => 0,
                                    'out' => 0,
                                ],
                            );
                            $inTotalName = 'inTotal_' . $category->id;
                            if (isset($$inTotalName)) {
                                $$inTotalName += $production->in;
                            } else {
                                $$inTotalName = $production->in;
                            }

                            $outTotalName = 'outTotal_' . $category->id;
                            if (isset($$outTotalName)) {
                                $$outTotalName += $production->out;
                            } else {
                                $$outTotalName = $production->out;
                            }
                        @endphp
                        <td><input type="number" size="4" name="in[{{ $production->id }}]"
                                value="{{ $production->in }}" min="0" step="1" required></td>
                        <td><input type="number" size="4" name="out[{{ $production->id }}]"
                                value="{{ $production->out }}" min="0" step="1" required></td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">{{ __('Total') }}</td>
                @foreach ($categories as $category)
                    @php
                        $inTotalName = 'inTotal_' . $category->id;
                        $outTotalName = 'outTotal_' . $category->id;
                    @endphp
                    <td>{{ $$inTotalName }}</td>
                    <td>{{ $$outTotalName }}</td>
                @endforeach
            </tr>
        </tfoot>
    </table>
    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
</form>
