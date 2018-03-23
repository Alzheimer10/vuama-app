$(document).ready(function(){
    $("input:not('.not')").each(function(){
        $(this).prop("disabled",true);
    });
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
                
                result = i.nombre.split(' ');
                $("#name").val(result[0]);
                $("#lname").val(result[1]);
                $("#email").val(i.email);
                $("#username").val(i.username);
                $("a.btn-success").prop('href',i.url);
                $("input:not('.not')").each(function(){
                    $(this).prop("disabled",false);
                });
                
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
        $("a.btn-success").prop('href','#');
        $("input:not('.not')").each(function(){
            $(this).prop("disabled",true);
            if($(this).prop('type')!='submit' && $(this).prop('type')!='checkbox'){
                $(this).val('');  
            }
        });
        $("#data").slideUp("slow");
        data.phrase = $("#admin").val(); 
        return data;
      },

      requestDelay: 400
    };

    $("#admin").easyAutocomplete(options);
    
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