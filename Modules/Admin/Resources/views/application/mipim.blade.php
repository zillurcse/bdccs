{{--<table>--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th style="font-weight: bold;">SL</th>--}}
{{--        <th style="font-weight: bold;">First Name</th>--}}
{{--        <th style="font-weight: bold;">Last Name</th>--}}
{{--        <th style="font-weight: bold;">Name</th>--}}
{{--        <th style="font-weight: bold;">Phone</th>--}}
{{--        <th style="font-weight: bold;">Position</th>--}}
{{--        <th style="font-weight: bold;">Email</th>--}}
{{--        <th style="font-weight: bold;">Company Name</th>--}}
{{--        <th style="font-weight: bold;">Type</th>--}}
{{--        <th style="font-weight: bold;">Country</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($applications as $key => $data)--}}
{{--        <tr>--}}
{{--            <td>{{ $key+1 }}</td>--}}
{{--            <td>{{ $data->first_name }}</td>--}}
{{--            <td>{{ $data->last_name }}</td>--}}
{{--            <td>{{ $data->name }}</td>--}}
{{--            <td>{{ $data->phone }}</td>--}}
{{--            <td>{{ $data->job_position }}</td>--}}
{{--            <td>{{ $data->email }}</td>--}}
{{--            <td>{{ $data->company_name }}</td>--}}
{{--            <td>{{ $data->type }}</td>--}}
{{--            <td>{{ $data->country }}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}

<table>
    <thead>
    <tr>
        <th style="font-weight: bold;">SL</th>
        <th style="font-weight: bold;">First Name</th>
        <th style="font-weight: bold;">Last Name</th>
        <th style="font-weight: bold;">Name</th>
        <th style="font-weight: bold;">Phone</th>
        <th style="font-weight: bold;">Position</th>
        <th style="font-weight: bold;">Email</th>
        <th style="font-weight: bold;">Company Name</th>
        <th style="font-weight: bold;">Type</th>
        <th style="font-weight: bold;">Country</th>
    </tr>
    </thead>
    <tbody>
    @foreach($applications as $key => $data)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $data->first_name }}</td>
            <td>{{ $data->last_name }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->job_position }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->company_name }}</td>
            <td>{{ $data->type }}</td>
            <td>{{ $data->country }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
