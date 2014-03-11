

<div id="list_table">
<h1> QUAN TRI THANH VIEN</h1>
<h2><a href = "<?php echo base_url()."index.php/Admin/User/add";?>">Thêm user</a></h2>
                  <!-- Paging -->
                  <div id="paging" class="pagination">

                  <?php 
                 
                        echo $link;
					
                  ?>
                  </div>

                    <table width="75%" cellpadding="2" cellspacing="2" border="1">
                          <tbody>
                          <tr>
                            <td width="20%" class="table_titile">Username</td>
                            <td width="20%" class="table_titile">Fullname</td>
                            <td width="20%" class="table_titile">Gender</td>
                            <td width="20%" class="table_titile">Country</td>
                            <td width="20%" class="table_titile">Email</td>
                            <td width="20%" class="table_titile">Tel</td>
                            <td width="20%" class="table_titile">Active</td>
                            <td width="20%" class="table_titile">Level</td>
                            <td width="20%" class="table_titile">Birthday</td>
                            <td width="20%" class="table_titile">Edit</td>
                            <td width="20%" class="table_titile">Delete</td>
                          </tr>
                          <?php
                            $count=0;
                           
                                foreach($users as $item) {
                                    $count++;
                                    if($count % 2 == 0)
                                      echo "<tr class='row_chan'></tr>";
                                    else
                                        echo "<tr>";
                                        echo '<td>'.$item['username'].'</td>';
                                        echo '<td>'.$item['fullname'].'</td>';
                                        echo '<td>'.$item['gender'].'</td>';
                                        echo '<td>'.$item['country'].'</td>';
                                        echo '<td>'.$item['email'].'</td>';
                                        echo '<td>'.$item['tel'].'</td>';
                                        echo '<td>'.$item['active'].'</td>';
                                        echo '<td>'.$item['level'].'</td>';
                                        echo '<td>'.$item['birthday'].'</td>';
                                
                                        echo '<td class="alt">
                                                <a href="'.base_url().'index.php/Admin/User/edit/'.$item['username'].'">Edit</a>
                                            </td>
                                                <td><a href="'.base_url().'index.php/Admin/User/delete/'.$item['username'].'" >Delete</a>
                                             </td>';
                                        echo "</tr>";  
                                }
                            
                          ?>
                    </tbody>
                   </table>
</div>
