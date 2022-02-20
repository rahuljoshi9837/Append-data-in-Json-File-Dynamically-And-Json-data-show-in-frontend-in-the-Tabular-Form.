<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Task 1</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="style.css"/>  
      </head>  
      <body>  
           <!-- <br />   -->
           <div class="container" style="width:500px;">  
                <h3 style="text-align:center">Task 1</h3><br />                 
                <form method="post" action="welcome.php">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />

                     <label>Gender</label>  
                     <input type="text" name="gender" class="form-control" /><br />

                     <label>Designation</label>  
                     <input type="text" name="designation" class="form-control" /><br /> 

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br /> 
           
           <!-- Data in Tabular Form  -->

           <section>
        <h1>Tabular Form</h1>
        <table id='table'>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Designation</th>
            </tr>
  
            <script>
                $(document).ready(function () {
  
                    $.getJSON("StudentsData.json", function (data)       // FETCHING DATA FROM JSON FILE 
                     {
                        var student = '';
                        $.each(data, function (key, value) {             // ITERATING THROUGH OBJECTS
  
                            student += '<tr>';                           //CONSTRUCTION OF ROWS HAVING
                                                                         // DATA FROM JSON OBJECT
                            student += '<td>' + value.Name + '</td>';
  
                            student += '<td>' + value.Gender + '</td>';
  
                            student += '<td>' + value.Designation + '</td>';
  
                            student += '</tr>';
                        });
                          
                        $('#table').append(student);                     //INSERTING ROWS INTO TABLE 
                    });
                });
            </script>
    </section>

      </body>  
 </html>  
