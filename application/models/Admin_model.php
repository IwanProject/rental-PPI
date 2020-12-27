<?php

class Admin_model extends CI_model
{

    public function Merk()
    {
        $nama_merk = $this->input->post('nama_merk', true);
        $type = $this->input->post('type', true);
        $image = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['max_size'] = '5012';
        }


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            echo "gambar gagal di upload";
        } else {
            $image = $this->upload->data('file_name');
        }


        $data = [
            'nama_merk' => $nama_merk,
            'type' => $type,
            'image' => $image

        ];
        $this->db->insert('merk', $data);
    }


    public function getMerk()
    {
        $this->db->order_by('id_merk', 'desc');
        return $this->db->get('merk')->result_array();
    }
    public function getMerkMobil()
    {
        $mobil = 'mobil';
        return $this->db->get_where('merk', ['type' => $mobil])->result_array();
    }
    public function getMerkMotor()
    {
        $motor = 'motor';
        return $this->db->get_where('merk', ['type' => $motor])->result_array();
    }

    public function deleteMerk($id_merk)
    {
        $this->db->where('id_merk', $id_merk);
        $this->db->delete('merk');
    }

    public function editMerk()
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'png|jpeg|jpg';
        $config['max_size'] = '5012';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

            $nama_merk = $this->input->post('nama_merk', true);

            $data = [

                'nama_merk' => $nama_merk

            ];
            $this->db->where('id_merk', $this->input->post('id_merk'));
            $this->db->update('merk', $data);
        } else {
            $nama_merk = $this->input->post('nama_merk', true);
            $image = $this->upload->data('file_name', true);

            $data = [

                'nama_merk' => $nama_merk,
                'image' => $image
            ];
            $this->db->where('id_merk', $this->input->post('id_merk'));
            $this->db->update('merk', $data);
        }
    }


    public function getMobil()
    {
        $this->db->order_by('id_mobil', 'desc');
        return $this->db->get('mobil')->result_array();
    }


    public function deleteMobil($id_mobil)
    {
        $this->db->where('id_mobil', $id_mobil);
        $this->db->delete('mobil');
    }


    public function editMobil()
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'png|jpeg|jpg';
        $config['max_size'] = '5012';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

            $nama_mobil = $this->input->post('nama_mobil', true);
            $merk = $this->input->post('merk', true);
            $tahun = $this->input->post('tahun', true);
            $plat_nomor = $this->input->post('plat_nomor', true);
            $tarif_sewa = $this->input->post('tarif_sewa', true);
            $warna = $this->input->post('warna', true);
            $kursi = $this->input->post('kursi', true);

            $data = [

                'nama_mobil' => $nama_mobil,
                'merk' => $merk,
                'tahun' => $tahun,
                'plat_nomor' => $plat_nomor,
                'tarif_sewa' => $tarif_sewa,
                'warna' => $warna,
                'kursi' => $kursi
            ];
            $this->db->where('id_mobil', $this->input->post('id_mobil'));
            $this->db->update('mobil', $data);
        } else {
            $nama_mobil = $this->input->post('nama_mobil', true);
            $merk = $this->input->post('merk', true);
            $tahun = $this->input->post('tahun', true);
            $plat_nomor = $this->input->post('plat_nomor', true);
            $tarif_sewa = $this->input->post('tarif_sewa', true);
            $warna = $this->input->post('warna', true);
            $kursi = $this->input->post('kursi', true);
            $image = $this->upload->data('file_name', true);

            $data = [

                'nama_mobil' => $nama_mobil,
                'merk' => $merk,
                'tahun' => $tahun,
                'plat_nomor' => $plat_nomor,
                'tarif_sewa' => $tarif_sewa,
                'warna' => $warna,
                'kursi' => $kursi,
                'image' => $image
            ];
            $this->db->where('id_mobil',  $this->input->post('id_mobil'));
            $this->db->update('mobil', $data);
        }
    }

    public function Mobil()
    {
        $nama_mobil = $this->input->post('nama_mobil', true);
        $slug = url_title($nama_mobil, 'dash', true);
        $merk = $this->input->post('merk', true);
        $tahun = $this->input->post('tahun', true);
        $plat_nomor = $this->input->post('plat_nomor', true);
        $tarif_sewa = $this->input->post('tarif_sewa', true);
        $warna = $this->input->post('warna', true);
        $kursi = $this->input->post('kursi', true);
        $image = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['max_size'] = '5012';
        }


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            echo "gambar gagal di upload";
        } else {
            $image = $this->upload->data('file_name');
        }


        $data = [
            'nama_mobil' => $nama_mobil,
            'slug' => $slug,
            'merk' => $merk,
            'tahun' => $tahun,
            'plat_nomor' => $plat_nomor,
            'tarif_sewa' => $tarif_sewa,
            'status' => 'Tersedia',
            'warna' => $warna,
            'kursi' => $kursi,
            'image' => $image,

        ];
        $this->db->insert('mobil', $data);
    }


    public function Motor()
    {
        $nama_motor = $this->input->post('nama_motor', true);
        $slug = url_title($nama_motor, 'dash', true);
        $merk = $this->input->post('merk', true);
        $tahun = $this->input->post('tahun', true);
        $plat_nomor = $this->input->post('plat_nomor', true);
        $tarif_sewa = $this->input->post('tarif_sewa', true);
        $warna = $this->input->post('warna', true);
        $image = $_FILES['image'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['max_size'] = '5012';
        }


        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            echo "gambar gagal di upload";
        } else {
            $image = $this->upload->data('file_name');
        }


        $data = [
            'nama_motor' => $nama_motor,
            'slug' => $slug,
            'merk' => $merk,
            'tahun' => $tahun,
            'plat_nomor' => $plat_nomor,
            'tarif_sewa' => $tarif_sewa,
            'warna' => $warna,
            'status' => 'Tersedia',
            'image' => $image

        ];
        $this->db->insert('motor', $data);
    }


    public function getMotor()
    {
        $this->db->order_by('id_motor', 'desc');
        return $this->db->get('motor')->result_array();
    }


    public function deleteMotor($id_motor)
    {
        $this->db->where('id_motor', $id_motor);
        $this->db->delete('motor');
    }


    public function editMotor()
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'png|jpeg|jpg';
        $config['max_size'] = '5012';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {

            $nama_motor = $this->input->post('nama_motor', true);
            $merk = $this->input->post('merk', true);
            $tahun = $this->input->post('tahun', true);
            $plat_nomor = $this->input->post('plat_nomor', true);
            $tarif_sewa = $this->input->post('tarif_sewa', true);
            $warna = $this->input->post('warna', true);

            $data = [

                'nama_motor' => $nama_motor,
                'merk' => $merk,
                'tahun' => $tahun,
                'plat_nomor' => $plat_nomor,
                'tarif_sewa' => $tarif_sewa,
                'warna' => $warna


            ];
            $this->db->where('id_motor', $this->input->post('id_motor'));
            $this->db->update('motor', $data);
        } else {
            $nama_motor = $this->input->post('nama_motor', true);
            $merk = $this->input->post('merk', true);
            $tahun = $this->input->post('tahun', true);
            $plat_nomor = $this->input->post('plat_nomor', true);
            $tarif_sewa = $this->input->post('tarif_sewa', true);
            $warna = $this->input->post('warna', true);
            $image = $this->upload->data('file_name', true);

            $data = [

                'nama_motor' => $nama_motor,
                'merk' => $merk,
                'tahun' => $tahun,
                'plat_nomor' => $plat_nomor,
                'tarif_sewa' => $tarif_sewa,
                'warna' => $warna,
                'image' => $image
            ];
            $this->db->where('id_motor', $this->input->post('id_motor'));
            $this->db->update('motor', $data);
        }
    }
}
