<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap.min.css">

<style>
    a.paginate_button {
        margin: 5px;
        cursor: pointer;
    }
</style>
<div class="container">
    <h2>Asset Details</h2>
    <table class="table table-hover" id="assetTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Asset Id</th>
                <th>Data Symbols Count</th>
                <th>Data Start</th>
                <th>Data End</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    jQuery(document).ready(function() {
        $('#assetTable').dataTable({
            ajax: "{{ url('api/assets') }}",
            // 'processing': true,
            "columns": [{
                    "data": "name"
                },
                {
                    "data": "asset_id"
                },
                {
                    "data": "data_symbols_count"
                },
                {
                    "data": "data_start",
                    "render": function(data, type, row) {
                        return data ? data : ""
                    }
                },
                {
                    "data": "data_end",
                    "render": function(data, type, row) {
                        return data ? data : ""
                    }
                }
            ]
        })

    });
</script>