<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home">IPMAN Admin Panel</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <?php $getnewMessageAlert = $db->getRowCount("SELECT * FROM contact_message WHERE status = ?", ["a"]) ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope">
          <?php
          if ($getnewMessageAlert != 0) {
            echo "<span class='badge'>$getnewMessageAlert</span>";
          }
          ?>
          </i>
          <b class="caret"></b></a>
        <ul class="dropdown-menu message-dropdown">
          <?php
            $getFewMessage = $db->getRows("SELECT * FROM contact_message WHERE status = ? ORDER BY id DESC LIMIT 3", ["a"]);
            foreach ($getFewMessage as $key => $value) {
              echo "
              <li class='message-preview'>
                  <a href='readMessage?id=".$value['id']."'>
                      <div class='media'>
                          <span class='pull-left'>
                              <img class='media-object' src='http://placehold.it/50x50' alt=''>
                          </span>
                          <div class='media-body'>
                              <h5 class='media-heading'><strong>". $value['name'] ."</strong>
                              </h5>
                              <p class='small text-muted'><i class='fa fa-clock-o'></i>". $value['message_date'] ." </p>
                              <p>".$value['subject']."</p>
                          </div>
                      </div>
                  </a>
              </li>
              ";
            }
          ?>

            <li class="message-footer">
                <a href="home">View All New Messages</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user->name; ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="home"><i class="fa fa-fw fa-dashboard"></i> Dashboard
              <?php
              if ($getnewMessageAlert != 0) {
                echo "<i class='fa fa-envelope'></i><span class='badge'> $getnewMessageAlert </span>";
              }
              ?>
            </a>
        </li>
        <li>
            <a href="price"><i class="fa fa-fw fa-bar-chart-o"></i> Manage price</a>
        </li>
        <li>
            <a href="deport"><i class="fa fa-fw fa-table"></i> Manage Depots</a>
        </li>
        <li>
            <a href="cmembers"><i class="fa fa-fw fa-table"></i> Manage Members</a>
        </li>
        <li>
          <a href="manageUser"><i class="fa fa-fw  fa-user "></i> <i class="fa  fa-edit "></i> <i class="fa  fa-plus "></i> <i class="fa  fa-trash "></i> Manage user</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> manage Content <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="copyright">Edit copyright</a>
                </li>
                <li>
                    <a href="activity">Update Activities</a>
                </li>
                <li>
                    <a href="member">Manage Team member</a>
                </li>
                <li>
                    <a href="address">Edit address</a>
                </li>
                <li>
                    <a href="sellingRate">Edit product Selling rate</a>
                </li>
                <li>
                    <a href="advert.php">Advert</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>
