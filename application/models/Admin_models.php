<?php
class Admin_models extends CI_Model {

  public function __construct()
  {
          $this->load->database();
           //$this->load->library('config_Writer'); ex nyolong proyek sebelah


    }

      public function handleLogin() {
        $user = $this->db->escape_str($_POST['username']);
              $pass = hash('sha512', $_POST['password']);

              $query = $this->db->query("SELECT * FROM `admin` WHERE username = '$user' AND password = '$pass' ");
              if ($query->num_rows() == 1) {
                $row = $query->row();

                if (isset($row))
                {
                  $aidi = $row->id;
                  return $aidi;
                }




              } else {
                return "";
              }
      }

      public function handleUpload() {
        $post = $this->input->post();

        $image = $this->_uploadProfileImage();

        $title = $this->db->escape_str($_POST['title']);
        $user = $this->db->escape_str($_POST['user']);
        if ($image == "") {
             header("Location: /AdministrasiGalleryX/?msg=Gagal Upload Gambar . error 2 permission");
        } else {
        if ($this->db->query("INSERT INTO `image` (`id`, `time`, `image_url`, `title`, `user`) VALUES (NULL, NOW(), '/data/$image', '$title', '$user');")) {

          header("Location: /AdministrasiGalleryX/?msg=Sukses Mengupload Gambar");

        } else {
          header("Location: /AdministrasiGalleryX/?msg=Gagal Mengubah Gambar . error 1 database");
        }
       }
        die();

      }



    private function _uploadProfileImage()
    {
        $config['upload_path']          = './data/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = hash('sha256',  "KRDSGalleryEncryptedX" .  mt_rand(69,420420));
        $config['overwrite']			= true;
        $config['max_size']             = 2048; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);



        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        if (strpos($this->upload->data("file_name"), '.php') !== false OR strpos($this->upload->data("file_name"), '.html') !== false) {
          die("<h1>Bangsat kau! ~imam supriadi</h1>");
        }

        // die($this->upload->display_errors());

        return "";
    }

    }
    ?>
