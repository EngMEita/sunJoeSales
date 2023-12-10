<x-bs.title>{{ __('Add Workorder') }}</x-bs.title>
<form action="{{ route('workorders.store') }}" method="POST">
    @csrf
    @method('POST')
    <x-bs.select name="branch_id" label="{{ __('Branch') }}" required="true">
        @foreach ($branches as $branch)
            <option value="{{ $branch->id }}" @if ($branch->is_head) @selected(true) @endif>
                {{ $branch->id }}. {{ $branch->name }}</option>
        @endforeach
    </x-bs.select>
    <x-bs.input type="number" name="workorder" label="{{ __('Workorder') }}" required="true" />
    <x-bs.input type="date" name="date" label="{{ __('Date') }}" />
    <x-bs.input type="text" name="company_name" label="{{ __('Company Name') }}" />
    <x-bs.input type="number" name="amount" label="{{ __('Amount') }}" />
    <x-bs.input type="number" name="quantity_number" label="{{ __('Quantity Number') }}" />
    <x-bs.input type="text" name="salesman" label="{{ __('Salesman') }}" />
    <x-bs.input type="text" name="project_name" label="{{ __('Project Name') }}" />
    <x-bs.input type="text" name="remarks" label="{{ __('Remarks') }}" />

    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
    <button type="reset" class="btn btn-danger">{{ __('Reset') }}</button>

</form>
