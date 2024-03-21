<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Search Seller</title>
    <style>
        /* Container for search and results */
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        /* Search container */
        .search-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-box {
            width: 300px;
            padding: 10px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            outline: none;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        }

        .search-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        /* Results container */
        #results-container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            display: none;
        }

        .result-item {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        .result-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .result-item h4 {
            margin-top: 0;
        }

        .result-item p {
            margin-bottom: 10px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .search-container {
                flex-direction: column;
                text-align: center;
            }

            .search-box {
                width: 100%;
                max-width: 100%;
                margin-bottom: 10px;
            }

            .search-button {
                margin-left: 0;
            }

            #results-container {
                max-width: 100%;
            }

            .result-item {
                margin-bottom: 10px;
                padding: 25px;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div class="container">
    <div class="search-container">
        <input type="text" id="search-box" class="search-box" placeholder="Search...">
        <button id="search-button" class="search-button">Search</button>
    </div>
    <div id="results-container">
        <!-- Sample search results -->
        {{--        <div class="result-item">--}}
        {{--            <h4>Result 1</h4>--}}
        {{--            <p>Description of result 1.</p>--}}
        {{--        </div>--}}
        {{--        <div class="result-item">--}}
        {{--            <h4>Result 2</h4>--}}
        {{--            <p>Description of result 2.</p>--}}
        {{--        </div>--}}
        <!-- Add more result items here -->
    </div>
</div>

<script>
    const searchBox = document.getElementById('search-box');
    const searchButton = document.getElementById('search-button');
    const resultsContainer = document.getElementById('results-container');

    searchBox.value = 'BDCS-';

    // Add an event listener to prevent removing the initial value
    searchBox.addEventListener('input', function () {
        if (!searchBox.value.startsWith('BDCS-')) {
            searchBox.value = 'BDCS-' + searchBox.value.substring(5);
        }
    });

    searchButton.addEventListener('click', function () {
        const query = searchBox.value;

        // Send an AJAX request to the Laravel route
        axios.post('{{ route('search') }}', { query: query })
            .then(function (response) {

                // Clear previous results
                resultsContainer.innerHTML = '';
                resultsContainer.style.display = 'block';
                // Display search result
                if (response.data.code) {
                    const div = document.createElement('div');
                    div.classList.add('result-item');
                    div.innerHTML = `
                        <h4>Code: BDCS - ${response.data.code}</h4>
                        <p>Seller Name: ${response.data.seller_name}</p>
                        <p>Business Type: ${response.data.business_type}</p>
                        <p>Seller Phone: ${response.data.seller_phone}</p>
                        <p>Seller Address: ${response.data.seller_address}</p>
                        <p>Issue Date: ${response.data.issue_date}</p>
                        <p>Expire Date: ${response.data.expire_date}</p>
                        <p style="color: ${response.data.status === 'active' ? 'green' : 'red'}">Register Status: ${response.data.status}</p>
                        <p style="color: ${response.data.is_approved === 'approved' ? 'green' : 'red'}">Approved Status: ${response.data.is_approved}</p>
                         <p><img src="${response.data.seller_photo || 'https://law.thavertech.com/demo/img/male13.jpg'}" alt="Seller Photo"
            style="border-radius: 10%; height: 120px; width: 120px" /></p>

                        <!-- Add more fields as needed -->
                    `;

                    resultsContainer.appendChild(div);

                    resultsContainer.appendChild(printButton);

                } else {
                    resultsContainer.innerHTML = '<p>No results found.</p>';
                }
            })
            .catch(function (error) {
                console.error(error);
            });
    });
</script>
</body>
</html>
