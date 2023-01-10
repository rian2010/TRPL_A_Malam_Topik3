<?php
include 'fpdf.php';
include 'config.php';

$pdf=new FPDF("L","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"DATA PEMINJAMAN BARANG",0,10,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1,0.8,'NO',1,0);
$pdf->Cell(3,0.8,'ID BARANG',1,0);
$pdf->Cell(6,0.8,'NAMA BARANG',1,0);
$pdf->Cell(4,0.8,'JUMLAH',1,0);
$pdf->Cell(5,0.8,'NAMA PEMINJAM',1,0);
$pdf->Cell(4.5,0.8,'TGL PINJAM',1,0);
$pdf->Cell(4.5,0.8,'TGL KEMBALI',1,1);
$pdf->SetFont('Arial','',10);
$no = 1;
$tampil = mysqli_query($db, "SELECT * FROM peminjaman");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(1,0.8,$no,1,0);
    $pdf->Cell(3,0.8,$hasil['id_barang'],1,0);
    $pdf->Cell(6,0.8,$hasil['nama_barang'],1,0);
    $pdf->Cell(4,0.8,$hasil['jumlah'],1,0);
    $pdf->Cell(5,0.8,$hasil['nama_peminjam'],1,0);
    $pdf->Cell(4.5,0.8,$hasil['tanggal_peminjaman'],1,0);
    $pdf->Cell(4.5,0.8,$hasil['tanggal_pengembalian'],1,1);
    $no++;

}

$pdf->Output("data_peminjaman.pdf","I");

?>
