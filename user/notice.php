<?php

session_start();

if (empty($_SESSION['id_user'])) {
    header("Location: ../index.php");
    exit();
}

require_once("../db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Placement Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/_all-skins.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="../css/custom.css">


    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php

        include 'header.php';

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-left: 0px;">

            <section id="candidates" class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8 bg-white padding-2">
                            <div class="box box-primary">
                                <!-- <div class="box-header with-border">
                                    <h3 id="heading" class="box-title">Posted Notice</h3>
                                </div> -->

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div style="display:flex;flex-direction:column">
                                        <?php

                                        $sql = "SELECT * FROM notice where audience='All Students' ORDER BY date DESC";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>
                                                <div style="border:2px solid green;padding:3px;margin:10px;">
                                                    <div style="display:flex;
                                                        justify-content:center;text-align:center;">
                                                        <div>
                                                            <h2 style="color:#12AD2B">
                                                                <strong>NOTICE</strong>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div style="display:flex;flex-direction:row;margin:10px;">
                                                        <div
                                                            style="margin-right:8px;font-size:20px;font-wight:700;color:#686A6C">
                                                            Title :</div>
                                                        <div style="margin-top:4px;">
                                                            <?php echo $row['subject']; ?>
                                                        </div>
                                                    </div>
                                                    <div style="display:flex;flex-direction:row;margin:10px;">
                                                        <div
                                                            style="margin-right:8px;font-size:20px;font-wight:700;color:#686A6C">
                                                            DESCRIPTION:
                                                        </div>
                                                        <div style="margin-top:4px;">
                                                            <?php echo $row['notice']; ?>
                                                        </div>
                                                    </div>
                                                    <div style="display:flex;flex-direction:row;margin:10px;">
                                                        <div
                                                            style="margin-right:8px;font-size:20px;font-wight:700;color:#686A6C">
                                                            Attachments :</div>
                                                        <div style="margin-top:4px;">
                                                            <?php if ($row['noticefile'] != '') { ?>
                                                                <div><a href="../uploads/noticefile/<?php echo $row['noticefile']; ?>"
                                                                        download="<?php echo 'Notice'; ?>"><i
                                                                            class="fa fa-file"></i></a>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div>No Files Attached</div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div style="display:flex;flex-direction:row;margin:10px;">
                                                        <div
                                                            style="margin-right:8px;font-size:20px;font-wight:700;color:#686A6C">
                                                            Date Posted:
                                                        </div>
                                                        <div style="margin-top:4px;">
                                                            <?php echo $row['date']; ?>
                                                        </div>
                                                    </div>



                                                </div>
                                                <?php

                                            }
                                        }

                                        ?>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>

                    </div>
                </div>
        </div>
        </section>


    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer" style="margin-left: 0px;">
        <div class="text-center">
            <strong>Copyright &copy; 2022 <a href="#">Placement Portal</a>.</strong> All rights
            reserved.
        </div>
    </footer>

</body>

</html>

<style>
    #heading {
        text-align: centre;
        margin-bottom: 50px;
    }
</style>