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
    </style>
</head>

<body onload="window.print()">
    <div id="mydiv">
        <!--      <img src="assets/image/riau.png" style="position: absolute" height="120" width="80" align="left">
-->
        <form action="<?php echo base_url('subkriteria'); ?>" method="post">

            <table style="width: 100%;">

                <!-- <img src="images/ayo.png"  height="60" width="60" align="right"> -->
                <center>
                    <h4 style="font-family: Times New Roman"><strong>INSTRUMEN PENILAIAN KEMAMPUAN GURU (IPKG)</strong>
                    </h4>
                    <h4 style="font-family: Times New Roman"><strong>DALAM PELAKSANAAN PEMBELAJARAN</strong></h4>
                    <h4 style="font-family: Times New Roman"><strong>PESANTREN MUALLIMIN BANGKINANG PROVINSI
                            RIAU</strong></h4>

                    <hr>
                </center>

            </table>

            <!-- isinya -->
            <table>
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
                    <td><?php echo date('d M Y'); ?>

                </tr>
            </table>
            <br>

            <!-- TABEL PENILAIAN -->


            <table border="1">


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

                        <td>Menggunakan metode pemebelajaran bervariasi sesuai dengan KD, materi, kemampuan siswa,
                            situasi, dan kondisi</td>
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

                        <td>Menggunakan alat bantu/media pembelajaran</td>
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

                        <td>Melaksanakan kegiatan pembelajaran dalam urutan yang logis</td>
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

                        <td>Penguasaan materi pembelajaran</td>
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
                    <th colspan="3"><strong>KRITERIA KEPRIBADIAN</strong></th>
                    <tr>

                        <td>Melakukan apersepsi</td>
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

                        <td>Interaksi guru dengan siswa, siswa dengan siswa</td>
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

                        <td>Menunjukan sikap terbuka terhadap pendapat siswa</td>
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

                        <td>Mengembangkan hubungan antar pribadi yang sehat dan serasi</td>
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

                        <td>Mengerjakan tugas rutin kelas</td>
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

                        <td>Memotivasi siswa untuk terlibat dalam kegiatan pembelajaran</td>
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
                    <tr>

                        <td>Pengorganisasian siswa</td>
                        <td><?php
                            $s3 = $nilai->s3;
                            if ($s3 == 1) {
                                echo "Sangat Buruk";
                            } else if ($s3 == 2) {
                                echo "Buruk";
                            } else if ($s3 == 3) {
                                echo "Cukup";
                            } else if ($s3 == 4) {
                                echo "Baik";
                            } else if ($s3 == 5) {
                                echo "Sangat Baik";
                            }
                            ?></td>
                        <td><?php echo $nilai->s3 ?></td>
                    </tr>
                    <tr>

                        <td>Memberikan kesempatan kepada siswa untuk terlibat secara aktif</td>
                        <td><?php
                            $s4 = $nilai->s4;
                            if ($s4 == 1) {
                                echo "Sangat Buruk";
                            } else if ($s4 == 2) {
                                echo "Buruk";
                            } else if ($s4 == 3) {
                                echo "Cukup";
                            } else if ($s4 == 4) {
                                echo "Baik";
                            } else if ($s4 == 5) {
                                echo "Sangat Baik";
                            }
                            ?></td>
                        <td><?php echo $nilai->s4 ?></td>
                    </tr>
                    <tr>

                        <td>Menggunakan bahasa yang baik, benar, dan efektif</td>
                        <td><?php
                            $s5 = $nilai->s5;
                            if ($s5 == 1) {
                                echo "Sangat Buruk";
                            } else if ($s5 == 2) {
                                echo "Buruk";
                            } else if ($s5 == 3) {
                                echo "Cukup";
                            } else if ($s5 == 4) {
                                echo "Baik";
                            } else if ($s5 == 5) {
                                echo "Sangat Baik";
                            }
                            ?></td>
                        <td><?php echo $nilai->s5 ?></td>

                    </tr>
                    <th colspan="3"><strong>KRITERIA PROFESIONAL</strong></th>
                    <tr>

                        <td>Menggunakan waktu pembelajaran secara efisien dan efektif </td>
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

                        <td>Melaksanakan penilaian selama proses berlangsung</td>
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

                        <td>Melaksanakan penilaian pada akhir pembelajaran</td>
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

                        <td>Menyimpulkan pelajaran/rangkuman</td>
                        <td><?php
                            $pr4 = $nilai->pr4;
                            if ($pr4 == 1) {
                                echo "Sangat Buruk";
                            } else if ($pr4 == 2) {
                                echo "Buruk";
                            } else if ($pr4 == 3) {
                                echo "Cukup";
                            } else if ($pr4 == 4) {
                                echo "Baik";
                            } else if ($pr4 == 5) {
                                echo "Sangat Baik";
                            }
                            ?></td>
                        <td><?php echo $nilai->pr4 ?></td>
                    </tr>
                    <tr>

                        <td>Melaksanakan tindak lanjut</td>
                        <td><?php
                            $pr5 = $nilai->pr5;
                            if ($pr5 == 1) {
                                echo "Sangat Buruk";
                            } else if ($pr5 == 2) {
                                echo "Buruk";
                            } else if ($pr5 == 3) {
                                echo "Cukup";
                            } else if ($pr5 == 4) {
                                echo "Baik";
                            } else if ($pr5 == 5) {
                                echo "Sangat Baik";
                            }
                            ?></td>
                        <td><?php echo $nilai->pr5 ?></td>
                    </tr>
                    <tr>
                        <th colspan="3"><strong>HASIL PENILAIAN</strong></th>
                    </tr>
                    <tr>
                        <th colspan="2">Total Skor</th>
                        <?php
                        $jumlah = ($nilai->p1 + $nilai->p2 + $nilai->p3 + $nilai->p4 + $nilai->p5 + $nilai->k1 + $nilai->k2 + $nilai->k3 + $nilai->k4 + $nilai->s1 + $nilai->s2 + $nilai->s3 + $nilai->s4 + $nilai->s5
                            + $nilai->pr1 + $nilai->pr2 + $nilai->pr3 + $nilai->pr4 + $nilai->pr5);
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







        </form>
    </div>

</body>



</html>