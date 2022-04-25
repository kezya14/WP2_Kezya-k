<?php 
    class Formsiswa extends CI_Controller {
        public function index() {
            $this->load->view('view-form-siswa');
        }

        public function cetak() {
            $this->form_validation->set_rules('siswa', 'nama siswa', 'required|min_length[3]', [
                'required' => 'Nama Siswa Harus DIisi!',
                'min_length' => 'Nama Siswa Tidak Terdaftar!'
            ]);

            $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
                'required' => "NIS Harus Diisi!",
                'min_length' => "NIS Belom Terdaftar"
            ]);

            $this->form_validation->set_rules('kelas', 'kelas', 'required|min_length[3]', [
                'required' => "Kelas Harus Diisi!",
                'min_length' => "Kelas Belom Terdaftar"
            ]);

            $this->form_validation->set_rules('tgl', 'tanggal_lahir', 'required|min_length[3]', [
                'required' => "tanggal lahir Harus Diisi!",
                'min_length' => "tanggal lahir tidak sesuai"
            ]);

            $this->form_validation->set_rules('lahir', 'tempat_lahir', 'required|min_length[3]', [
                'required' => "Tempat lahir Harus Diisi!",
                'min_length' => "Tempat Lahir Tidak Sesuai"
            ]);

            $this->form_validation->set_rules('alamat', 'alamat', 'required|min_length[3]', [
                'required' => "alamat Harus Diisi!",
                'min_length' => "alamat Belom Terdaftar"
            ]);

            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|min_length[3]', [
                'required' => "Jenis Kelamin Harus Diisi!",
                'min_length' => "Jenis Kelamin Belom Terdaftar"
            ]);

            if ($this->form_validation->run () == FALSE) {
                $this->load->view('view-form-siswa');
            }
            else {
                    $siswa = $this->input->post('siswa', TRUE);
                    $nis = $this->input->post('nis', TRUE);
                    $kelas =  $this->input->post('kelas', TRUE);
                    $tgl =  $this->input->post('tgl', TRUE);
                    $lahir =  $this->input->post('lahir', TRUE);
                    $alamat =  $this->input->post('alamat', TRUE);
                    $jenis_kelamin =  $this->input->post('jenis_kelamin', TRUE);
                    $agama =  $this->input->post('agama', TRUE);
                $siswa = [
                    'siswa' => $siswa,
                    'nis'=> $nis,
                    'kelas'=> $kelas,
                    'tgl'=> $tgl,
                    'lahir'=> $lahir,
                    'alamat'=> $alamat,
                    'jenis_kelamin'=> $jenis_kelamin,
                    'agama'=> $agama,

                ];

                $this->load->view('view-data-siswa', $siswa);
            }
        }
    }
?>