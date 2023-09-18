<table>
    <thead>
    <tr>
        <th style="font-weight: bold;">Serial No</th>
        <th style="font-weight: bold;">RF Embassy</th>
        <th style="font-weight: bold;">Submit Date</th>
        <th style="font-weight: bold;">Submit Serial No</th>
        <th style="font-weight: bold;">Receipt No</th>
        <th style="font-weight: bold;">Invoice Date</th>
        <th style="font-weight: bold;">Name</th>
        <th style="font-weight: bold;">Old MRP No</th>
        <th style="font-weight: bold;">New MRP No</th>
        <th style="font-weight: bold;">Enrollment No</th>
        <th style="font-weight: bold;">Mobile No</th>
        <th style="font-weight: bold;">Area/Branch</th>
        <th style="font-weight: bold;">Remarks</th>
    </tr>
    </thead>
    <tbody>
    @foreach($applications as $data)
        <tr>
            <td>{{ $data->serial_no }}</td>
            <td>{{ $data->rf_embassy }}</td>
            <td>{{ $data->submit_date }}</td>
            <td>{{ $data->submit_serial_no }}</td>
            <td>{{ $data->recept_no }}</td>
            <td>{{ $data->invoice_date }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->old_mrp_no }}</td>
            <td>{{ $data->new_mrp_no }}</td>
            <td>{{ $data->enrollment_no }}</td>
            <td>{{ $data->mobile_no }}</td>
            <td>{{ $data->branch_name }}</td>
            <td>{{ $data->remarks }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
