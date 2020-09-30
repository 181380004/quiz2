<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <title>181380004</title>
</head>
<body>
 <!-- WRITE FORM PROCESSING CODE HERE -->
 <?php    
        //Check if the form is submitted
        if(isset($_POST['submit'])){
            
            $errors = [];
            if(empty($error)){
                $dbc=db_conect();
                $sql="INSERT INTO user Values('$posttitle', '$postdescription','$Category')";
                $result=mysqli_query($dbc,$sql);
                if($result){
                    echo "<div class = 'alert  alert-success'> Data is Enter successful>";
                }
                else{
                    echo "<div class = 'alert  alert-success'> Data is Enter not successful>";
                }
                db_close($dbc);
                }
                elseforeach($error as $error){
                    echo"<div class  ' alert alert-danger'> $error</div>"
                }
        else {
            echo "<div class = alert alert-danger'> FORM IS NOT SUBMIT</div>"
        }
                }
            }
        }
    ?>
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-sm-7">
                <!-- Output the data here -->
                <?php
                   
                    if(empty($_POST[' post tittle'])){
                        $_errors[] = "titel is not  empty";
                    }           
            else{
                $name =trim($_POST[' post titel']);
            }
            if(empty($_POST['post description'])){
                $_errors[] =  "post description is not  empty";
            }
            else{
                $name =trim($_POST['post description']);
                }
               
                ?>
                <div class="card">
                    <div class="card-header">
                        <!-- Output Title Here -->
                    </div>
                    <div class="card-body">
                        <!-- output description here -->
                    </div>
                    <div class="card-footer">
                    <span class="badge badge-secondary">
                        <!-- Output Category Here -->
                    </span>
                    </div>
                </div>
                <?php } ?>
                </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1 class="text-center">Rabia - 181380004</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h2 class="text-center">
                Add Post Form
            </h2>
        </div>
        <div class="col-sm-6">
            <form>
            <div class="form-group">
                    <label for="post_title">Post Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="post_description">Post Description:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="category">Category: </label>
                    <select name="category" class="form-control" id="category">
                        <option value="">--SELECT--</option>
                        <option value="Technology">Technology</option>
                        <option value="Programming">Programming</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="General">General</option>
                    </select>
                </div>

                <input type="submit" value="Submit Post" name="submit" class="btn btn-primary">
            </form>
            </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>