$(document).ready(function()
{
  $("#find_res").click(function(){
    var month = $("#month").val();
    var month1 = $("#month option:selected").text();
    var per_day_sal = $("#per_day_sal").val();
    var leave_days = $("#leave_days").val();
    var permission = $("#permission").val();
   // alert(month);per_day_sall
    if(month==1)
    {
     alert("test");
      $("#tot_working_days").val("26");

      if(leave_days==0 && permission == 0)
        {
           var presnet_days = 26 - leave_days;
           var tot_sal = presnet_days * per_day_sal + 1000;
           alert(tot_sal);
           $("#selected_month").val(month1);
          $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);
        }
    else
    {
      var presnet_days = 26 - leave_days;
      var tot_sal = presnet_days * per_day_sal;
      alert(tot_sal);
       //$("#selected_month").val(month1);
      $("#selected_month").val(month1);
      $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);


    }
    }
    if(month==2)
    {
      $("#tot_working_days").val("24");
      if(leave_days==0 && permission == 0)
        {
      var presnet_days = 24 - leave_days;
      var tot_sal = presnet_days * per_day_sal + 1000;;
      alert(tot_sal);
       $("#selected_month").val(month1);
       $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);

    }
    else
    {
      var presnet_days = 24 - leave_days;
      var tot_sal = presnet_days * per_day_sal;
      alert(tot_sal);
       //$("#selected_month").val(month1);
      $("#selected_month").val(month1);
      $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);
    }
    }
    if(month==3)
    {
      $("#tot_working_days").val("27");
      if(leave_days==0 && permission == 0)
        {
      var presnet_days = 27 - leave_days;
      var tot_sal = presnet_days * per_day_sal + 1000;;
      alert(tot_sal);
      $("#selected_month").val(month1);
    }
      else
    {
      var presnet_days = 27 - leave_days;
      var tot_sal = presnet_days * per_day_sal;
      alert(tot_sal);
       //$("#selected_month").val(month1);
      $("#selected_month").val(month1);
      $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);
    }
    }
    if(month==4)
    {
      $("#tot_working_days").val("25");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 25 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
       $("#selected_month").val(month1);
    }
    else
    {
      var presnet_days = 25 - leave_days;
      var tot_sal = presnet_days * per_day_sal;
      alert(tot_sal);
       //$("#selected_month").val(month1);
      $("#selected_month").val(month1);
      $("#per_day_sall").val(per_day_sal);
          $("#abs_days").val(leave_days);
    }
    }
    }
    if(month==5)
    {
      $("#tot_working_days").val("27");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 27 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);

    }
    }if(month==6)
    {
      $("#tot_working_days").val("26");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 26 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }
    if(month==7)
    {
      $("#tot_working_days").val("27");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 27 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }if(month==8)
    {
      $("#tot_working_days").val("27");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 27 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }if(month==9)
    {
      $("#tot_working_days").val("26");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 26 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }if(month==10)
    {
      $("#tot_working_days").val("26");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 26 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }
    if(month==11)
    {
      $("#tot_working_days").val("26");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 26 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }if(month==12)
    {
      $("#tot_working_days").val("26");
      if(leave_days==0 && permission == 0)
        {
    var presnet_days = 26 - leave_days;

      var tot_sal = presnet_days * per_day_sal + 1000;;
      

      alert(tot_sal);
      $("#selected_month").val(month1);
    }
    }
  });
});