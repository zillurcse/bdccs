<div class="form-group row">
    <div class="col-md-12">
        <table class="table table-bordered table-striped table-hover">

            <tbody>
            <tr>
                <td>Code:</td>
                <td>  {{$seller->code}}</td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><img class="rounded-3" style="height: 80px; width: 80px" src="{{ asset($seller->seller_photo)}}" alt=""></td>
            </tr>
            <tr>
                <td>Seller Name:</td>
                <td>  {{$seller->seller_name}}</td>
            </tr>
            <tr>
                <td>Seller Address:</td>
                <td>  {{$seller->seller_address}}</td>
            </tr>
            <tr>
                <td>Seller Phone:</td>
                <td>  {{$seller->seller_phone}}</td>
            </tr>
            <tr>
                <td>Seller NID:</td>
                <td>  {{$seller->seller_nid}}</td>
            </tr>
            <tr>
                <td>Seller Trade License:</td>
                <td>  {{$seller->seller_trade_license}}</td>
            </tr>
            <tr>
                <td>Issue Date:</td>
                <td>  {{ \Carbon\Carbon::parse($seller->issue_date)->format('Y-m-d')}} </td>
            </tr>
            <tr>
                <td>Expire Date:</td>
                <td>  {{ \Carbon\Carbon::parse($seller->expire_date)->format('Y-m-d')}} </td>
            </tr>
            <tr>
                <td>Remaining Days:</td>
                <td>  {{ \Carbon\Carbon::parse($seller->expire_date)->diffInDays(\Carbon\Carbon::now()) }} Days Remaining </td>
            </tr>
            <tr>
                <td>Status:</td>
                @if($seller->status=='active')
                    <td>
                        <button class="btn btn-primary">
                            {{ $seller->status  }}
                        </button>
                    </td>
                @else
                    <td>
                        <button class="btn btn-danger">
                            {{ $seller->status  }}
                        </button>
                    </td>
                @endif
            </tr>
            <tr>
                <td>Approved:</td>
                @if($seller->is_approved=='active')
                    <td>
                        <button class="btn btn-primary">
                            {{ $seller->is_approved  }}
                        </button>
                    </td>
                @else
                    <td>
                        <button class="btn btn-danger">
                            {{ $seller->is_approved  }}
                        </button>
                    </td>
                @endif
            </tr>

            </tbody>

        </table>
    </div>
</div>
