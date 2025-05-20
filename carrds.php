
          <div class="">
                <?php
                $db = new DBconnect();
                $conn=$db->connect();
                $username = $_SESSION['username'];
                $query=$conn->prepare("select * from student_details where username = '$username' ");
                $query->execute([]);
                if($query->rowCount() > 0){
                  echo "";
                }else{
               
                        while ($row=$query->fetch()) {
                          while ( $row=$query->fetch()) {
                                $student_name = $row['student_name'];
                                $student_reg_no = $row['student_reg_no'];
                                $project_title = $row['project_title'];
                                $username = $row['username'];

                                echo "<div class = 'col-sm-6'>

                                <div class = 'card' id = 'cards'>

                                <div class = 'card-body' id = 'body'>

                                <h5 class = 'card-title' id = 'title'>Student name: $student_name </h5>
                                <h5 class = 'card-title' id = 'title'>Student Registration number: $student_reg_no </h5>
                                <h5 class = 'card-title' id = 'title'>Project Title: $project_title </h5>
                                <h5 class = 'card-title' id = 'title'>Username: $username </h5>
                                
                                </div>
                                </div>
                                </div>";
                          }

                                
                                
          
                        
                        }
                        }
                  ?>
                </div>