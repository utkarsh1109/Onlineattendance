$(document).ready(function(){
  // Get Report passenger
  $(document).on('click', '#STUDENT_LOG', function(){
    
    var date_sel = $('#date_sel').val();
    
    $.ajax({
      url: 'STUDENT_LOG_UP.php',
      type: 'POST',
      data: {
        'log_date': 1,
        'date_sel': date_sel,
      },
      success: function(response){
        $.ajax({
          url: "STUDENT_LOG_UP.php",
          type: 'POST',
          data: {
            'log_date': 1,
            'date_sel': date_sel,
            'select_date': 0,
          }
          }).done(function(data) {
          $('#STUDENT_LOG').html(data);
        });
      }
    });
  });
});