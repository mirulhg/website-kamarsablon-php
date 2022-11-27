<!-- HOMW INFO PENGGUNA -->
<div class="grid-info">
                <h4>INFO PENGGUNA</h4>
                    <table class="container table table-stripped table-hover table-responsive table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <?php

                            $halaman = 10;
                            $page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai   = ($page>1) ? ($page*$halaman) - $halaman : 0;

                            $hasil   = mysqli_query($conn, "SELECT * FROM tbl_pengguna");
                            $total   = mysqli_num_rows($hasil);
                            $pages   = ceil($total/$halaman);

                            $sql    = "SELECT * FROM tbl_pengguna LIMIT $mulai, $halaman";
                            $query  = mysqli_query($conn, $sql);
                            $nomor  = $mulai+1;
                            while ($result = mysqli_fetch_array($query)) {
                            $id     = $result['usersId'];
                            echo "<tr>";
                            
                            echo "<th scope='row'>".$nomor++."</th>";
                            echo "<td scope='row'>".$result['usersName']."</td>";
                            echo "<td scope='row'>".$result['usersUid']."</td>";
                            echo "<td scope='row'>".$result['usersEmail']."</td>";
                            
                            
                            echo "</tr>";

                        }
                            ?>
                        </tbody>
                        <tfoot>
                        <div>
                            Page : 
                            <?php 
                            for($i=1;$i<=$pages ; $i++){
                            ?>
                                <a href="home-admin.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
                            <?php
                                }
                            ?>
                        </div>
                        </tfoot>
                    </table>
            </div>