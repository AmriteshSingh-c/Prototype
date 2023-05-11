<?php

session_start();

require_once("db.php");

$limit = 4;

if (isset($_GET["page"])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$start_from = ($page - 1) * $limit + 1;

$sql = "SELECT * FROM job_post LIMIT $start_from, $limit";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $sql1 = "SELECT * FROM job_post WHERE id_coordinator='$row[id_coordinator]'";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
      while ($row1 = $result1->fetch_assoc()) {
        ?>

        <div class="attachment-block clearfix">
          <!-- <img class="attachment-img" src="uploads/logo/<?php
          echo $row1['logo'];
          ?>" alt="Attachment Image"> -->

          <!-- logo k baad niche wala text aaeyga  -->

          <div class="attachment-pushed">
            <h4 class="attachment-heading"><a href="view-job-post.php?id=<?php echo $row1['id_jobpost']; ?>"><?php echo $row1['companyname']; ?></a> <span class="attachment-heading pull-right">₹
                <?php echo $row1['ctc']; ?>/Year
              </span></h4>
            <div class="attachment-text">
              <div><strong>
                  <?php if ($row1['active'] == 1) {
                    ?>
                    <h5 class="text-yellow">
                      <?php echo "Ongoing"; ?>
                    </h5>
                    <?php
                  } else if ($row1['active'] == 0) {
                    ?>
                      <h5 class="text-green">
                      <?php echo "Completed"; ?>
                      </h5>

                    <?php
                  } else {
                    ?>
                      <h5 class="text-orange">
                      <?php echo "On hold"; ?>
                      </h5>
                      ;
                    <?php
                  } ?>



                </strong></div>
            </div>
          </div>
        </div>

        <?php
      }
    }
  }
}

$conn->close();