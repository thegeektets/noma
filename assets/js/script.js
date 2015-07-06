       function add_new(){
       
                  $.ajax({
    url: "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
    type: "POST",
    data: JSON.stringify({"word":$('#word').val(),"definition_1":$('#definition').val()}),
    contentType: "application/json",
    success: function (response) {
                        console.log(response);

                       $('#addmessage').attr("class" ,"alert-box success radius");
                       $('#addmessage').append("<strong>Success!</strong> new word added"); 
                       $('#addmessage').append("<a href='#' class='close'>&times;</a>");
 
    },
    error: function (response) {
                         console.log(response);
                       $('#addmessage').attr("class" ,"alert-box warning radius");
                       $('#addmessage').append("<strong>Warning!</strong> failed to add a new word"); 
                       $('#addmessage').append("<a href='#' class='close'>&times;</a>");
  
    }
});

               return false;
              }

    function new_contribution(){
       
                  $.ajax({
    url: "https://api.mongolab.com/api/1/databases/sheng/collections/queries?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
    type: "POST",
    data: JSON.stringify({"word":$('#word').val(),"definition":$('#definition').val()}),
    contentType: "application/json",
    success: function (response) {
                        console.log(response);

                       $('#addmessage').attr("class" ,"alert-box success radius");
                       $('#addmessage').append("<strong>Success!</strong> new contribution added"); 
                       $('#addmessage').append("<a href='#' class='close'>&times;</a>");
 
    },
    error: function (response) {
                         console.log(response);
                       $('#addmessage').attr("class" ,"alert-box warning radius");
                       $('#addmessage').append("<strong>Warning!</strong> failed to add a new contribution"); 
                       $('#addmessage').append("<a href='#' class='close'>&times;</a>");
  
    }
});

               return false;
              }

  function decline(key){
       
                  $.ajax({
    url: "https://api.mongolab.com/api/1/databases/sheng/collections/queries/"+key+"/?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
    type: "DELETE",
    data: JSON.stringify([]),
      contentType: "application/json",
    success: function (response) {
                        console.log(response);

                       $('#message').attr("class" ,"alert-box success radius");
                       $('#message').append("<strong>Success!</strong> declined"); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");

                         return true;
      
 
    },
    error: function (response) {
                         console.log(response);
                       $('#message').attr("class" ,"alert-box warning radius");
                       $('#message').append("<strong>Warning!</strong> failed to decline"); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");
                         return true;
      
  
    }
});
                }

  function delete_word(key){
       
                  $.ajax({
    url: "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary/"+key+"/?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
    type: "DELETE",
    data: JSON.stringify([]),
      contentType: "application/json",
    success: function (response) {
                        console.log(response);

                       $('#message').attr("class" ,"alert-box success radius");
                       $('#message').append("<strong>Success!</strong> deleted "); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");

                    
      
 
    },
    error: function (response) {
                         console.log(response);
                       $('#message').attr("class" ,"alert-box warning radius");
                       $('#message').append("<strong>Warning!</strong> failed to delete"); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");
                       
  
    }
});
                    return false; 
                }



 function approve(key){
       
                  $.ajax({
    url: "https://api.mongolab.com/api/1/databases/sheng/collections/dictionary?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
    type: "POST",
    data: JSON.stringify({"word":$('#word').html(),"definition_1":$('#definition').html()}),
    contentType: "application/json",
    success: function (response) {

                           $.ajax({
                        url: "https://api.mongolab.com/api/1/databases/sheng/collections/queries/"+key+"/?apiKey=Iwy7zOOBBd6lUzN5jBhLNhv68Wv8UfUl",
                        type: "DELETE",
                        data: JSON.stringify([]),
                          contentType: "application/json"
                        });



                        console.log(response);

                       $('#message').attr("class" ,"alert-box success radius");
                       $('#message').append("<strong>Success!</strong> word approved"); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");
 
    },
    error: function (response) {
                         console.log(response);
                       $('#message').attr("class" ,"alert-box warning radius");
                       $('#message').append("<strong>Warning!</strong> failed to add a new word"); 
                       $('#message').append("<a href='#' class='close'>&times;</a>");
  
    }
});

               return false;
              }
