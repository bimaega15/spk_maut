<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="cssadmin.css">

    <style>
    .line-title {
        border: 0;
        border-style: inset;
        border-top: 1px solid #000;
    }

    body {
        margin: 20px 150px;
    }

    table {
        border-collapse: collapse;
        font-family: 'Times New Roman', Times, serif;
    }

    td {
        padding: 2px;
        text-align: justify;
    }

    .identitas {
        font-size: medium;
    }
    </style>
</head>

<body onload="window.print()">
    <div id="mydiv">
        <!--      <img src="assets/image/riau.png" style="position: absolute" height="120" width="80" align="left">
-->
        <div class="col-md-12">
            <form action="<?php echo base_url('subkriteria'); ?>" method="post">

                <table style="width: 100%;">

                    <!-- <img src="images/ayo.png"  height="60" width="60" align="right"> -->
                    <center>
                        <h5 style="font-family: Times New Roman"><strong>INSTRUMEN PENILAIAN KEMAMPUAN GURU
                                (IPKG)</strong>
                        </h5>
                        <h5 style="font-family: Times New Roman"><strong>DALAM PELAKSANAAN PEMBELAJARAN</strong></h5>
                        <h5 style="font-family: Times New Roman"><strong>PESANTREN MUALLIMIN BANGKINANG PROVINSI
                                RIAU</strong></h5>

                        <hr>
                    </center>

                </table>

                <!-- isinya -->
                <table class="identitas">
                    <tr>
                        <td>Nama</td>
                        <td> : </td>
                        <td><?php echo $nilai->nama; ?>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td> : </td>
                        <td><?php echo $nilai->nip; ?>
                    </tr>
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td> : </td>
                        <td><?php echo $nilai->mapel; ?>
                    </tr>
                    <tr>
                        <td>Kelas/Semester</td>
                        <td> : </td>
                        <td><?php echo $nilai->kelas; ?>
                    </tr>
                    <tr>
                        <td>Kompetensi Inti</td>
                        <td> : </td>
                        <td><?php echo $nilai->ki; ?>
                    </tr>


                    <tr>
                        <td>Tanggal</td>
                        <td> : </td>
                        <td><?php echo date('d M Y'); ?></td>

                    </tr>
                </table>
                <br>

                <!-- TABEL PENILAIAN -->

                <div class="row mt-3 ">
                    <div class="col-md-12">



                        <div class="table-responsive ">
                            <table class="table" border="1">


                                <tr>

                                    <th><strong>KRITERIA PENILAIAN</strong></th>

                                    <th><strong>KUALIFIKASI</strong> </th>
                                    <th><strong>SKOR</strong> </th>
                                </tr>
                                <th colspan="3">KRITERIA PADAGOGIK</th>

                                <tr>
                                </tr>
                                <tbody>


                                    <tr>

                                        <td>Menyampaikan bahan</td>
                                        <td><?php
                                            $p1 = $nilai->p1;
                                            if ($p1 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p1 == 2) {
                                                echo "Buruk";
                                            } else if ($p1 == 3) {
                                                echo "Cukup";
                                            } else if ($p1 == 4) {
                                                echo "Baik";
                                            } else if ($p1 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p1 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Menggunakan alat bantu atau media pembelajaran </td>
                                        <td><?php
                                            $p2 = $nilai->p2;
                                            if ($p2 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p2 == 2) {
                                                echo "Buruk";
                                            } else if ($p2 == 3) {
                                                echo "Cukup";
                                            } else if ($p2 == 4) {
                                                echo "Baik";
                                            } else if ($p2 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p2 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Melakasanakan kegiatan pembeajaran dalam urutan yang logis</td>
                                        <td><?php
                                            $p3 = $nilai->p3;
                                            if ($p3 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p3 == 2) {
                                                echo "Buruk";
                                            } else if ($p3 == 3) {
                                                echo "Cukup";
                                            } else if ($p3 == 4) {
                                                echo "Baik";
                                            } else if ($p3 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p3 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Penguasaan materi pembelajaran</td>
                                        <td><?php
                                            $p4 = $nilai->p4;
                                            if ($p4 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p4 == 2) {
                                                echo "Buruk";
                                            } else if ($p4 == 3) {
                                                echo "Cukup";
                                            } else if ($p4 == 4) {
                                                echo "Baik";
                                            } else if ($p4 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p4 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Melakukan apersepsi (Kegiatan sebelum memulai pembelajaran)</td>
                                        <td><?php
                                            $p5 = $nilai->p5;
                                            if ($p5 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p5 == 2) {
                                                echo "Buruk";
                                            } else if ($p5 == 3) {
                                                echo "Cukup";
                                            } else if ($p5 == 4) {
                                                echo "Baik";
                                            } else if ($p5 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p5 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Mengerjakan tugas rutin kelas</td>
                                        <td><?php
                                            $p6 = $nilai->p6;
                                            if ($p6 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p6 == 2) {
                                                echo "Buruk";
                                            } else if ($p6 == 3) {
                                                echo "Cukup";
                                            } else if ($p6 == 4) {
                                                echo "Baik";
                                            } else if ($p6 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p6 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Memberikan kesempatan kepada siswa untuk terlibat aktif </td>
                                        <td><?php
                                            $p7 = $nilai->p7;
                                            if ($p7 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p7 == 2) {
                                                echo "Buruk";
                                            } else if ($p7 == 3) {
                                                echo "Cukup";
                                            } else if ($p7 == 4) {
                                                echo "Baik";
                                            } else if ($p7 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p7 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Melaksanakan penilaian selama proses berlangsung</td>
                                        <td><?php
                                            $p8 = $nilai->p8;
                                            if ($p8 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p8 == 2) {
                                                echo "Buruk";
                                            } else if ($p8 == 3) {
                                                echo "Cukup";
                                            } else if ($p8 == 4) {
                                                echo "Baik";
                                            } else if ($p8 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p8 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Melaksanakan penilaian pada akhir pembelajaran</td>
                                        <td><?php
                                            $p9 = $nilai->p9;
                                            if ($p9 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p9 == 2) {
                                                echo "Buruk";
                                            } else if ($p9 == 3) {
                                                echo "Cukup";
                                            } else if ($p9 == 4) {
                                                echo "Baik";
                                            } else if ($p9 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p9 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Menyimpulkan pelajaran atau rangkuman</td>
                                        <td><?php
                                            $p10 = $nilai->p10;
                                            if ($p10 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($p10 == 2) {
                                                echo "Buruk";
                                            } else if ($p10 == 3) {
                                                echo "Cukup";
                                            } else if ($p10 == 4) {
                                                echo "Baik";
                                            } else if ($p10 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->p10 ?></td>
                                    </tr>
                                    <th colspan="3"><strong>KRITERIA KEPRIBADIAN</strong></th>
                                    <tr>

                                        <td>Interaksi guru dengan siswa, siswa dengan siswa dan teman sejawat</td>
                                        <td><?php
                                            $k1 = $nilai->k1;
                                            if ($k1 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($k1 == 2) {
                                                echo "Buruk";
                                            } else if ($k1 == 3) {
                                                echo "Cukup";
                                            } else if ($k1 == 4) {
                                                echo "Baik";
                                            } else if ($k1 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->k1 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Menunjukkan sikap terbuka terhadap pendapat siswa</td>
                                        <td><?php
                                            $k2 = $nilai->k2;
                                            if ($k2 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($k2 == 2) {
                                                echo "Buruk";
                                            } else if ($k2 == 3) {
                                                echo "Cukup";
                                            } else if ($k2 == 4) {
                                                echo "Baik";
                                            } else if ($k2 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->k2 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Mengembangkan hubungan antarpribadi yang sehat dan serasi</td>
                                        <td><?php
                                            $k3 = $nilai->k3;
                                            if ($k3 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($k3 == 2) {
                                                echo "Buruk";
                                            } else if ($k3 == 3) {
                                                echo "Cukup";
                                            } else if ($k3 == 4) {
                                                echo "Baik";
                                            } else if ($k3 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->k3 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Memotivasi siswa untuk terlibat dalam kegiatan pembelajaran</td>
                                        <td><?php
                                            $k4 = $nilai->k4;
                                            if ($k4 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($k4 == 2) {
                                                echo "Buruk";
                                            } else if ($k4 == 3) {
                                                echo "Cukup";
                                            } else if ($k4 == 4) {
                                                echo "Baik";
                                            } else if ($k4 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->k4 ?></td>
                                    </tr>
                                    <th colspan="3"><strong>KRITERIA SOSIAL</strong></th>
                                    <tr>

                                        <td>Pengorganisasian siswa</td>
                                        <td><?php
                                            $s1 = $nilai->s1;
                                            if ($s1 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($s1 == 2) {
                                                echo "Buruk";
                                            } else if ($s1 == 3) {
                                                echo "Cukup";
                                            } else if ($s1 == 4) {
                                                echo "Baik";
                                            } else if ($s1 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->s1 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Menggunakan bahasa yang baik, benar, dan efektif</td>
                                        <td><?php
                                            $s2 = $nilai->s2;
                                            if ($s2 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($s2 == 2) {
                                                echo "Buruk";
                                            } else if ($s2 == 3) {
                                                echo "Cukup";
                                            } else if ($s2 == 4) {
                                                echo "Baik";
                                            } else if ($s2 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->s2 ?></td>
                                    </tr>

                                    <th colspan="3"><strong>KRITERIA PROFESIONAL</strong></th>
                                    <tr>

                                        <td>Menggunakan metode pembelajaran bervariasi </td>
                                        <td><?php
                                            $pr1 = $nilai->pr1;
                                            if ($pr1 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($pr1 == 2) {
                                                echo "Buruk";
                                            } else if ($pr1 == 3) {
                                                echo "Cukup";
                                            } else if ($pr1 == 4) {
                                                echo "Baik";
                                            } else if ($pr1 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->pr1 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Menggunakan waktu pembelajaran secara efisien dan efektif</td>
                                        <td><?php
                                            $pr2 = $nilai->pr2;
                                            if ($pr2 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($pr2 == 2) {
                                                echo "Buruk";
                                            } else if ($pr2 == 3) {
                                                echo "Cukup";
                                            } else if ($pr2 == 4) {
                                                echo "Baik";
                                            } else if ($pr2 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->pr2 ?></td>
                                    </tr>
                                    <tr>

                                        <td>Melaksanakan tindak lanjut</td>
                                        <td><?php
                                            $pr3 = $nilai->pr3;
                                            if ($pr3 == 1) {
                                                echo "Sangat Buruk";
                                            } else if ($pr3 == 2) {
                                                echo "Buruk";
                                            } else if ($pr3 == 3) {
                                                echo "Cukup";
                                            } else if ($pr3 == 4) {
                                                echo "Baik";
                                            } else if ($pr3 == 5) {
                                                echo "Sangat Baik";
                                            }
                                            ?></td>
                                        <td><?php echo $nilai->pr3 ?></td>
                                    </tr>

                                    <tr>
                                        <th colspan="3"><strong>HASIL PENILAIAN</strong></th>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Total Skor</th>
                                        <?php
                                        $jumlah = ($nilai->p1 + $nilai->p2 + $nilai->p3 + $nilai->p4 + $nilai->p5 +
                                            $nilai->p6 + $nilai->p7 + $nilai->p8 + $nilai->p9 + $nilai->p10 +
                                            $nilai->k1 + $nilai->k2 + $nilai->k3 + $nilai->k4 + $nilai->s1 + $nilai->s2
                                            + $nilai->pr1 + $nilai->pr2 + $nilai->pr3);
                                        ?>
                                        <?php
                                        $rata = ($jumlah / 19);
                                        if ($jumlah >= 91) {
                                            $n['nilai'] =  'A';
                                        } else if ($jumlah >= 76) {
                                            $n['nilai'] = 'B';
                                        } else if ($jumlah >= 61) {
                                            $n['nilai'] = 'C';
                                        } else if ($jumlah >= 51) {
                                            $n['nilai'] = 'D';
                                        } else {
                                            $n['nilai'] = 'E';
                                        }
                                        ?>
                                        <td><strong> <?php echo $jumlah; ?></strong></td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Nilai </th>

                                        <td><strong> <?php echo $n['nilai']; ?></strong></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <p style="font-family: Times New Roman">Kriteria Penilaian :</p>
                    <table style="font-family: Times New Roman">
                        <tr>
                            <td>A = 91-100</td>
                            <td>C = 61-75</td>
                            <td>E =
                                <?PHP echo " <50" ?>
                            </td>
                        </tr>
                        <tr>
                            <td>B = 76-90</td>
                            <td>D = 51-60</td>

                        </tr>
                    </table>
                    <br>

                    <div>
                        <table width="1000px">
                            <tr>
                                <th colspan="2">Mengetahui : </th>

                                <td style=" text-align: right;">Bangkinang Kota, <?php echo date('d M Y'); ?></td>
                            </tr>
                            <center>
                                <tr>
                                    <td>Kepala Madrasah</td>
                                    <td style="text-align: right;"> Guru Mata Pelajaran</td>
                                    <td style="text-align: end;"> Pengawas Madrasah</td>
                                </tr>
                            </center>
                        </table>
                        <br>
                        <br>
                        <br>
                        <table width="1000px">


                            <tr>
                                <td>Martinus, MA.</td>
                                <td style="text-align: center;"><?php echo $nilai->nama ?></td>
                                <td style="text-align: end;"> Nor Azmir,S.Ag., M.Pd.I</td>
                            </tr>

                            <tr>
                                <td>NIP. 197001012002121002</td>
                                <td style="text-align: center;">NIP. <?php echo $nilai->nip ?></td>
                                <td style="text-align: end;"> NIP. 197007162000031003</td>
                            </tr>

                        </table>

                    </div>

            </form>
        </div>
    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("assets/js/config.js"); ?>"></script> <!-- Load file process.js -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>




</body>



</html>