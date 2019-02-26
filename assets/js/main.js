   $(document).ready(function(){

 
      var val = 1;
      $('#passwordCheck').on('click',function(){
            if(val==1)
            {$('#Password').attr('type', 'text');val=0;}
            else{
              $('#Password').attr('type', 'password');
              val=1;
            }


      });


});