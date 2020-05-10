<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

public function export_btq(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Penilaian Peserta BTQ")
                 ->setSubject("Penilaian Peserta BTQ")
                 ->setDescription("Penilaian Peserta BTQ")
                 ->setKeywords("Penilaian Peserta BTQ");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "PENILAIAN PESERTA BTQ"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Cara Penilaian");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "Ubah Status Dengan :");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "- Angka 1 Bila Lulus Tes BTQ");
     $excel->setActiveSheetIndex(0)->setCellValue('J4', "- Angka 10 Bila Tidak Lulus Tes BTQ");
      $excel->setActiveSheetIndex(0)->setCellValue('J5', "- Angka 0 Bila Tidak Perlu Dinilai");
       $excel->setActiveSheetIndex(0)->setCellValue('J7', "Perhatian!! Jangan Ubah Data Selain Kolom Status");
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('J1:J7')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "TANGGAL LAHIR");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "ASAL SEKOLAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "STATUS"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $siswa = $this->Madmin->read_btq();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->tgl_lahir);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->asal_sekolah); 
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->no_hp);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->id_status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Penilaian Peserta BTQ");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Penilaian Peserta BTQ.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  public function import_btq()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';

        $config['upload_path'] = realpath('berkas');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
              $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('berkas/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            $data = array();
            $numrow = 4;
            foreach ($sheet as $row){
                            if($numrow > 4){
                                 array_push($data,  array(
                                    'nisn'            =>  $row['B'],
                                    'id_status'      =>  $row['G'],

                                ));
                                
            
                    }
                    $numrow++;
                  }
                  
                      $this->db->update_batch('peserta', $data, 'nisn');
            //delete file from server
            unlink(realpath('berkas/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('Cadmin/btq');
           

        } else {
           //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/btq/');

          

        }
    }

    public function export_prestasi(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Penilaian Jalur Prestasi")
                 ->setSubject("Penilaian Jalur Prestasi")
                 ->setDescription("Penilaian Jalur Prestasi")
                 ->setKeywords("Penilaian Jalur Prestasi");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "PENILAIAN PESERTA JALUR PRESTASI"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Cara Penilaian");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "Ubah Status Dengan :");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "- Angka 2 Bila Lulus Jalur Prestasi");
     $excel->setActiveSheetIndex(0)->setCellValue('J4', "- Angka 20 Bila Tidak Lulus Jalur Prestasi");
       $excel->setActiveSheetIndex(0)->setCellValue('J7', "Perhatian!! Jangan Ubah Data Selain Kolom Status");
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('J1:J7')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "JALUR PILIHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "BERKAS"); 
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "STATUS"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $siswa = $this->Madmin->read_prestasi();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->jenis_kelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_hp); 
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jalur);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->berkas);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->id_status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
       $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Penilaian Jalur Prestasi");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Penilaian Jalur Prestasi.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  public function import_prestasi()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';

        $config['upload_path'] = realpath('berkas');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
              $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('berkas/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            $data = array();
            $numrow = 4;
            foreach ($sheet as $row){
                            if($numrow > 4){
                                 array_push($data,  array(
                                    'nisn'            =>  $row['B'],
                                    'id_status'      =>  $row['H'],

                                ));
                                
            
                    }
                    $numrow++;
                  }
                  
                      $this->db->update_batch('peserta', $data, 'nisn');
            //delete file from server
            unlink(realpath('berkas/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('Cadmin/jalur_prestasi');
           

        } else {
           //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/jalur_prestasi');

          

        }
    }

        public function export_ketm(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Penilaian Jalur KETM")
                 ->setSubject("Penilaian Jalur KETM")
                 ->setDescription("Penilaian Jalur KETM")
                 ->setKeywords("Penilaian Jalur KETM");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "PENILAIAN PESERTA JALUR KETM"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Cara Penilaian");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "Ubah Status Dengan :");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "- Angka 2 Bila Lulus Jalur KETM");
     $excel->setActiveSheetIndex(0)->setCellValue('J4', "- Angka 20 Bila Tidak Lulus Jalur KETM");
       $excel->setActiveSheetIndex(0)->setCellValue('J7', "Perhatian!! Jangan Ubah Data Selain Kolom Status");
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('J1:J7')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "JALUR PILIHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "BERKAS"); 
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "STATUS"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $siswa = $this->Madmin->read_ketm();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->jenis_kelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_hp); 
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jalur);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->berkas);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->id_status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
       $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Penilaian Jalur KETM");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Penilaian Jalur KETM.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  public function import_ketm()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';

        $config['upload_path'] = realpath('berkas');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
              $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('berkas/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            $data = array();
            $numrow = 4;
            foreach ($sheet as $row){
                            if($numrow > 4){
                                 array_push($data,  array(
                                    'nisn'            =>  $row['B'],
                                    'id_status'      =>  $row['H'],

                                ));
                                
            
                    }
                    $numrow++;
                  }
                  
                      $this->db->update_batch('peserta', $data, 'nisn');
            //delete file from server
            unlink(realpath('berkas/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('Cadmin/jalur_ketm');
           

        } else {
           //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/jalur_ketm');

          

        }
    }

          public function export_akademik(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Penilaian Jalur Akademik")
                 ->setSubject("Penilaian Jalur Akademik")
                 ->setDescription("Penilaian Jalur Akademik")
                 ->setKeywords("Penilaian Jalur Akademik");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "PENILAIAN PESERTA JALUR Akademik"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Cara Penilaian");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "Ubah Status Dengan :");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "- Angka 9 Bila Lulus Jalur Akademik");
     $excel->setActiveSheetIndex(0)->setCellValue('J4', "- Angka 90 Bila Tidak Lulus Jalur Akademik");
       $excel->setActiveSheetIndex(0)->setCellValue('J7', "Perhatian!! Jangan Ubah Data Selain Kolom Status");
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('J1:J7')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "JALUR PILIHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "BERKAS"); 
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "STATUS"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $siswa = $this->Madmin->read_akademik();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->jenis_kelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_hp); 
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jalur);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->berkas);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->id_status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
       $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Penilaian Jalur Akademik");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Penilaian Jalur Akademik.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  public function import_akademik()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';

        $config['upload_path'] = realpath('berkas');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
              $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('berkas/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            $data = array();
            $numrow = 4;
            foreach ($sheet as $row){
                            if($numrow > 4){
                                 array_push($data,  array(
                                    'nisn'            =>  $row['B'],
                                    'id_status'      =>  $row['H'],

                                ));
                                
            
                    }
                    $numrow++;
                  }
                  
                      $this->db->update_batch('peserta', $data, 'nisn');
            //delete file from server
            unlink(realpath('berkas/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('Cadmin/jalur_akademik');
           

        } else {
           //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/jalur_akademik');

          

        }
    }
           public function export_ppt(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Penilaian Jalur PPT")
                 ->setSubject("Penilaian Jalur PPT")
                 ->setDescription("Penilaian Jalur PPT")
                 ->setKeywords("Penilaian Jalur PPT");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "PENILAIAN PESERTA JALUR PPT"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "Cara Penilaian");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "Ubah Status Dengan :");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "- Angka 8 Bila Lulus Jalur PPT");
     $excel->setActiveSheetIndex(0)->setCellValue('J4', "- Angka 80 Bila Tidak Lulus Jalur PPT");
       $excel->setActiveSheetIndex(0)->setCellValue('J7', "Perhatian!! Jangan Ubah Data Selain Kolom Status");
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('J1:J7')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('J1')->getFont()->setSize(15);
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "JENIS KELAMIN");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "JALUR PILIHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "BERKAS"); 
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "STATUS"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    $siswa = $this->Madmin->read_ppt();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->jenis_kelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_hp); 
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->jalur);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->berkas);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->id_status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
       $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Penilaian Jalur PPT");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Penilaian Jalur PPT.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  public function import_ppt()
    {
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';

        $config['upload_path'] = realpath('berkas');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
              $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('berkas/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
            
            $data = array();
            $numrow = 4;
            foreach ($sheet as $row){
                            if($numrow > 4){
                                 array_push($data,  array(
                                    'nisn'            =>  $row['B'],
                                    'id_status'      =>  $row['H'],

                                ));
                                
            
                    }
                    $numrow++;
                  }
                  
                      $this->db->update_batch('peserta', $data, 'nisn');
            //delete file from server
            unlink(realpath('berkas/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('Cadmin/jalur_ppt');
           

        } else {
           //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/jalur_ppt');

          

        }
    }

    public function rekap_data_peserta(){
    // Load plugin PHPExcel nya
    include APPPATH.'third_party/PHPExcel/Classes/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();

  
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('MAN 2 Bandung')
                 ->setLastModifiedBy('MAN 2 Bandung')
                 ->setTitle("Rekap Data Peserta")
                 ->setSubject("Rekap Data Peserta")
                 ->setDescription("Rekap Data Peserta")
                 ->setKeywords("Rekap Data Peserta");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );


    $pilih_j = $_POST['pilih_jalur'];
    $pilih_s = $_POST['pilih_status'];
    $pilih_d = $_POST['pilih_data'];
    if ($pilih_d == 'data_diri'){

    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Diri Peserta"); 
  
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); 
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NIK");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "JALUR PILIHAN");
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "TEMPAT LAHIR"); 
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "TANGGAL LAHIR"); 
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "JENIS KELAMIN");
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "HOBI"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "CITA-CITA"); 
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "EMAIL"); 
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "NO WHATSAPP"); 
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "JUMLAH SAUDARA"); 
    $excel->setActiveSheetIndex(0)->setCellValue('N3', "ANAK KE");
    $excel->setActiveSheetIndex(0)->setCellValue('O3', "STATUS");
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    if($pilih_j == 'akademik' and $pilih_s == 'lulus'){
       $siswa = $this->Madmin->lulus_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ppt();
    }else if($pilih_j == 'akademik' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ppt();
    }
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nik);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->jalur);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->tempat_lahir);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->tgl_lahir);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->jenis_kelamin);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->hobi);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->cita);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->email);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->no_hp);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->jumlah_saudara);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->anak_ke);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->status);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
     $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom E
     $excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("REKAP DATA DIRI");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="REKAP DATA DIRI PESERTA.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }else if($pilih_d == 'asal_alamat'){

    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Asal Sekolah Dan Alamat Peserta"); 
  
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); 
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "ALAMAT RUMAH");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "PROVINSI"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "KOTA/KAB"); 
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "KECAMATAN");
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "KELURAHAN"); 
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "KODE POS"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "JARAK RUMAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "TRANSPORTASI"); 
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "ASAL SEKOLAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "JENIS SEKOLAH");
    $excel->setActiveSheetIndex(0)->setCellValue('N3', "STATUS SEKOLAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('O3', "KOTA/KAB SEKOLAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('P3', "NO SKHUN"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    if($pilih_j == 'akademik' and $pilih_s == 'lulus'){
       $siswa = $this->Madmin->lulus_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ppt();
    }else if($pilih_j == 'akademik' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ppt();
    }
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->alamat);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->provinsi);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->kota);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->kecamatan);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->kelurahan);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->kode_pos);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->jarak_rumah);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->transportasi);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->asal_sekolah);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->jenis_sekolah);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->status_sekolah);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->kota_sekolah);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->skhun);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom E
     $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("REKAP ALAMAT DAN ASAL SEKOLAH");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="REKAP ASAL SEKOLAH & ALAMAT PESERTA.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }else if($pilih_d == 'ortu'){

    $excel->setActiveSheetIndex(0)->setCellValue('A1', "INFORMASI ORANG TUA PESERTA"); 
  
    $excel->getActiveSheet()->mergeCells('A1:E1');// Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NISN"); 
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA PESERTA");
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "NO KK");
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "NO KTP AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "NAMA AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "TEMPAT LAHIR AYAH");
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "TANGGAL LAHIR AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "PENDIDIKAN AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "PEKERJAAN AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "NO HP AYAH"); 
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "NO KTP IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "NAMA IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('N3', "TEMPAT LAHIR IBU");
    $excel->setActiveSheetIndex(0)->setCellValue('O3', "TANGGAL LAHIR IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('P3', "PENDIDIKAN IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('Q3', "PEKERJAAN IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('R3', "NO HP IBU"); 
    $excel->setActiveSheetIndex(0)->setCellValue('S3', "PENGHASILAN ORANG TUA"); 
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);

    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    if($pilih_j == 'akademik' and $pilih_s == 'lulus'){
       $siswa = $this->Madmin->lulus_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'lulus'){
      $siswa = $this->Madmin->lulus_ppt();
    }else if($pilih_j == 'akademik' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_akademik();
    }else if($pilih_j == 'prestasi' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_prestasi();
    }else if($pilih_j == 'ketm' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ketm();
    }else if($pilih_j == 'ppt' and $pilih_s == 'belum'){
      $siswa = $this->Madmin->read_ppt();
    }
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($siswa as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->nisn);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->nama_siswa);
       $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->no_kk);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->no_ktp_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->nama_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->tempat_lahir_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->tgl_lahir_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->pendidikan_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->pekerjaan_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->no_hp_ayah);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->no_ktp_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->nama_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->tempat_lahir_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->tgl_lahir_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->pendidikan_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->pekerjaan_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data->no_hp_ibu);
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, $data->penghasilan_ortu);
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(20); // Set width kolom E
     $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(20); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(25); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('R')->setWidth(25); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("REKAP INFORMASI ORANG TUA");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="REKAP INFORMASI ORANG TUA.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
 }
}
?>