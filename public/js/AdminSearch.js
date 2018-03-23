$(document).ready(function(){
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
        });
      var i;
      var options = {

      url: function(phrase) {
        return $("#admin").data('url');
      },
      getValue: "nombre",
      template: {
            type: "custom",
            method: function(value, item) {
                i = item;
                       return   item.nombre+" <span class='smallspan'>"+item.email+"</span>";
                },
        },
        list: {
            onSelectItemEvent: function() {
                $("#id").val(i.id);

                anotherSearch()
            }, match: {
                enabled: true
            }
        },
      ajaxSettings: {
        dataType: "json",
        method: "POST",
        data: {
          dataType: "json"
        }
      },

      preparePostData: function(data) {
        $("#data").slideUp("slow");
        $("#data").html('');
        data.phrase = $("#admin").val(); 
        return data;
      },

      requestDelay: 400
    };

    $("#admin").easyAutocomplete(options);
    
    function anotherSearch(){
        $.ajax({
           type:'POST',
           url:   $("#admin").data('second'),
           data:{
            'id' : $("#id").val(),
           },
           success:function(a){
              $("#data").html(a);
               $("#data").slideDown("slow");
           }
        });
    }

    $("form").submit(function(e){
        $(".success").hide();
        $(".error").hide();
        e.preventDefault();
        $.ajax({
           method:'POST',
           url:   $(this).prop('action'),
           data:  $(this).serialize(),
           success:function(a){
               console.log(a);
               if(a.type == 0){
                   $(".error b").text(a.error);
                   $(".error").show();
               }else{
                   $(".success b").text(a.success);
                   $(".success").show();
               }
           }
        });
    });
});