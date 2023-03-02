@extends('layout.index')

@section('content')
<div class="my-10 w-2/4 mx-auto">
    <p class="mb-10">Dashboard</p>
    <p>Jumlah Data | SDIPKTKN | {{ $sdipktkn }}</p>
    <div class="text-sm mt-5">
        <p>Ambil Data Terbaru</p>
        <form id="get-new-data" class="flex items-center gap-5">
            <button id="btn-get-new-data" class="bg-green-400 text-white hover:bg-green-600 p-2 rounded-lg font-medium">BEGIN GET NEW DATA</button>
            <p class="text-xs text-green-600" style="display: none" id="success-msg"><i class="fa-solid fa-check"></i> Success <span id="counter"></span></p>
            <p class="text-xs text-red-600" style="display: none" id="fail-msg"><i class="fa-solid fa-xmark"></i> Fail</p>
        </form>
    </div>
</div>

<script>
    $(document).on('submit', '#get-new-data', function(e) {
        e.preventDefault();
        $('#success-msg').hide();
        $('#fail-msg').hide();
        $('#btn-get-new-data').html('<i class="fa-solid fa-spinner animate-spin"></i> Processing...');
        $('#btn-get-new-data').attr('disabled', true);

        axios.post('/fetchData', {})
        .then(function(response) {
            if(response.status == 200) {
                if(response.data.message == 'success'){
                    $('#btn-get-new-data').html('BEGIN GET DATA');
                    $('#btn-get-new-data').attr('disabled', false);
                    $('#success-msg').show();
                    $('#counter').text(response.data.newData + ' Added');
                }
            }
        })
        .catch(function(error) {
            $('#btn-get-new-data').html('BEGIN GET DATA');
            $('#btn-get-new-data').attr('disabled', false);
            $('#fail-msg').show();
        })
    })
</script>
@stop
