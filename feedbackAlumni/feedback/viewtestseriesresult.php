<?php
include("header.php");
include("sidebar.php");
$sqltestseriestopic = "SELECT * FROM testseriestopic where testseriestopicid='$_GET[testseriestopicid]'";
$qsqltestseriestopic = mysqli_query($con, $sqltestseriestopic);
$rstestseriestopic = mysqli_fetch_array($qsqltestseriestopic);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- Main content -->
    <section class="content">
        <form method="post" action="">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">View Test Series Result -
                        <?php echo $rstestseriestopic['testseries_topic']; ?></h3>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Alumni</th>
                                <th>Email - </th>
                                <th>Class</th>
                                <th>Test series Date</th>
                                <th>Scored Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM testseries_result WHERE testseriestopicid='$_GET[testseriestopicid]' GROUP BY testseriestopicid,alumniid";
                            $qsql = mysqli_query($con, $sql);
                            echo mysqli_error($con);
                            while ($rs = mysqli_fetch_array($qsql)) {
                                //######		
                                $sqlalumni = "SELECT * FROM alumni WHERE alumniid='$rs[alumniid]'";
                                $qsqlalumni = mysqli_query($con, $sqlalumni);
                                $rsalumni = mysqli_fetch_array($qsqlalumni);
                                //######


                                $sqlqz = "SELECT * FROM testseries_result WHERE testseriestopicid='$rs[testseriestopicid]' AND alumniid='$rs[alumniid]' and selectedanswer = correctanswer ";
                                $qsqlqz  = mysqli_query($con, $sqlqz);
                                $correctanswer = mysqli_num_rows($qsqlqz);

                                $sqlqz = "SELECT * FROM testseries_result WHERE testseriestopicid='$rs[testseriestopicid]' AND alumniid='$rs[alumniid]' and selectedanswer != correctanswer ";
                                $qsqlqz  = mysqli_query($con, $sqlqz);
                                $wronganswer =  mysqli_num_rows($qsqlqz);

                                $sqltestseries_result = "SELECT * FROM testseries_result WHERE testseriestopicid='$rs[testseriestopicid]' AND alumniid='$rs[alumniid]'";
                                $qsqltestseries_result  = mysqli_query($con, $sqltestseries_result);
                                $rstestseries_result = mysqli_fetch_array($qsqltestseries_result);

                                $totalmarks =  ($correctanswer * $rstestseries_result['marksperquestion']) - ($wronganswer * $rstestseries_result['negativemarks']);

                                echo "<tr>
				<td>$rsalumni[alumniname]</td>
				// <td>$rsalumni[rollno]</td>
				<td>";
                            ?>
                                <?php echo $rsalumni['alumniclass']; ?>
                                <!-- (<?php echo $rsalumni['section']; ?>) -->
                            <?php
                                echo "</td>
				<td>" . date("d-M-Y", strtotime($rs['date'])) . "</td>";

                                echo "<td>$totalmarks</td>";

                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("footer.php");
?>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


<script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>
<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script>
    function validatedel() {
        if (confirm("Are you sure want to delete this record?") == true) {
            return true;
        } else {
            return false;
        }
    }
</script>