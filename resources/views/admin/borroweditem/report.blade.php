<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>BSIT DEPARTMENT</title>
    <link rel ="icon" href="{{ asset('-admin/img/ctu.png')}}" type="image/x-icon">
    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>Bachelor of Science in Information Technology Department</h3>
                <pre>
Street 15
123456 City
United Kingdom
<br /><br />
Date: 2018-01-01

</pre>


            </td>
            <td align="center">
                <img src="{{ asset ('-admin/img/ctu.png') }}" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>Cebu Technological University</h3>
                <pre>
                    Daanbantayan Campus

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Borrowed Items Report</h3>
                                                <table class="table table-striped table-bordered tbl_pendingres display" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th hidden>Id</th>
                                                            <th>Borrower's Name</th>
                                                            <th>Date Borrowed</th>
                                                            <th>Equipment Borrowed</th>
                                                            <th>Quantity</th>
                                                            <th>Rooms</th>
                                                            <th>Return Date</th>
                                                            
                                                         </tr>
                                                    </thead>

                                                    <tbody style="text-align:center">
                                                    @foreach ($bt as $btdata)
                                                        <tr>
                                                            <td hidden></td>
                                                            <td>{{ $btdata->bname }}</td>
                                                            <td>{{ $btdata->itemb->format('F j, Y @ h:i A') }}</td>
                                                            <td>{{ $btdata->bdate }}</td>
                                                            <td>{{ $btdata->bquantity }}</td>
                                                            <td>{{ $btdata->broom }}</td>
                                                            <td>{{ $btdata->returnd->format('F j, Y @ h:i A') }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 100%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" >
             <a href="{{route('admin.home')}}" class="float-right" onclick="window.print();">Print</a>
            </td>
        </tr>

    </table>
</div>
</body>
</html>