<?php

/**
 * Class untuk mengelola akreditasi perguruan tinggi.
 */
class Akreditasi
{
    /**
     * Nomor perguruan tinggi.
     *
     * @var string
     */
    private $nomorPerguruanTinggi;

    /**
     * Nama perguruan tinggi.
     *
     * @var string
     */
    private $namaPerguruanTinggi;

    /**
     * Nilai akhir dalam bentuk angka.
     *
     * @var int
     */
    private $nilaiAkhirAngka;

    /**
     * Nilai akhir dalam bentuk huruf.
     *
     * @var string
     */
    private $nilaiAkhirHuruf;

    /**
     * Tanggal dan waktu penyimpanan.
     *
     * @var string
     */
    private $tanggalJamSimpan;

    /**
     * Constructor untuk kelas Akreditasi.
     *
     * @param string $nomorPerguruanTinggi
     * @param string $namaPerguruanTinggi
     * @param int $nilaiAkhirAngka
     * @param string $nilaiAkhirHuruf
     * @param string $tanggalJamSimpan
     */
    public function __construct($nomorPerguruanTinggi, $namaPerguruanTinggi, $nilaiAkhirAngka, $nilaiAkhirHuruf, $tanggalJamSimpan)
    {
        $this->nomorPerguruanTinggi = $nomorPerguruanTinggi;
        $this->namaPerguruanTinggi = $namaPerguruanTinggi;
        $this->nilaiAkhirAngka = $nilaiAkhirAngka;
        $this->nilaiAkhirHuruf = $nilaiAkhirHuruf;
        $this->tanggalJamSimpan = $tanggalJamSimpan;
    }

    /**
     * Mendapatkan nomor perguruan tinggi.
     *
     * @return string
     */
    public function getNomorPerguruanTinggi()
    {
        return $this->nomorPerguruanTinggi;
    }

    /**
     * Mendapatkan nama perguruan tinggi.
     *
     * @return string
     */
    public function getNamaPerguruanTinggi()
    {
        return $this->namaPerguruanTinggi;
    }

    /**
     * Mendapatkan nilai akhir dalam bentuk angka.
     *
     * @return int
     */
    public function getNilaiAkhirAngka()
    {
        return $this->nilaiAkhirAngka;
    }

    /**
     * Mendapatkan nilai akhir dalam bentuk huruf.
     *
     * @return string
     */
    public function getNilaiAkhirHuruf()
    {
        return $this->nilaiAkhirHuruf;
    }

    /**
     * Mendapatkan tanggal dan waktu penyimpanan.
     *
     * @return string
     */
    public function getTanggalJamSimpan()
    {
        return $this->tanggalJamSimpan;
    }
}
