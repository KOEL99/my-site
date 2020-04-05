<?php 
                                             while($row = mysqli_fetch_array($result_up))
                                             {
                                                  echo "<tr>";
                                                       echo "<td>".$row['index_up']."</td>";
                                                       echo "<td>".$row['name']."</td>";
                                                       echo "<td>".$row['load_ac']."</td>";
                                                       echo "<td>".$row['course']."</td>";
                                                       echo "<td>".$row['semestr']."</td>";
                                                       echo "<td>".$row['assessment']."</td>";
                                                  echo "</tr>";
                                             }
                                             ?>         