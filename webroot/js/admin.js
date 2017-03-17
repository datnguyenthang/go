$(document).ready(function(){
    $('#state-id').change(function(){
        state_id = $(this).val();
        url = '/admin/Shops/find_district';
        $.ajax({
            url: url, 
            type : "get",
            data: {
                    'state_id' : state_id
                  },
            success: function(data){
                $("#district-id").append( 
                    $("<option></option>")
                        .text(data.name)
                        .val(data.id)
                );
        }});
    });
});