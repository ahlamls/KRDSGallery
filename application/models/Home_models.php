<?php
class Home_models extends CI_Model {

  public function __construct()
  {
          $this->load->database();
           //$this->load->library('config_Writer'); ex nyolong proyek sebelah


    }

      public function listImage($page = 0) {
        $page = $this->db->escape_str($page);
        $page = (int)$page * 16;
$asede = "";
$query = $this->db->query("SELECT * FROM `image` ORDER BY `id` DESC LIMIT $page,16 ");
//
foreach ($query->result() as $row) {
  $time = $row->time;
  $image_url = $row->image_url;
  $title = $row->title;
  $user = $row->user;

$asede .="<div class='col-12 col-md-3'>

  <div onclick= ". '"' . "openInNewTab(' $image_url ')" . '"' . " class='card bg-secondary'>

        <span class='badge-info badge'>$time</span>

      <div class='xpad card-body'>
<img src='$image_url' width='100%'>
<span class='badge badge-primary'>$title</span>
<span class='badge badge-warning'>$user</span>
      </div>
  </div>
  <br>

</div>";
}

return $asede;
      }

    }
    ?>
