@if ($results->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach ($results as $result)
            <li>
                Code: {{ $result->code }}<br>
                Issue Date: {{ $result->issue_date }}<br>
                Expire Date: {{ $result->expire_date }}<br>
                Seller Name: {{ $result->seller_name }}<br>
                <!-- Add more fields as needed -->
            </li>
        @endforeach
    </ul>
@endif
