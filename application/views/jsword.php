<html>

<head>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="cssadmin.css">

    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css ">


    <title>html</title>


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">




    <script>
    function exportHTML() {
        var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
            "xmlns:w='urn:schemas-microsoft-com:office:word' " +
            "xmlns='http://www.w3.org/TR/REC-html40'>" +
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
        var footer = "</body></html>";
        var sourceHTML = header + document.getElementById("source-html").innerHTML + footer;

        var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
        var fileDownload = document.createElement("a");
        document.body.appendChild(fileDownload);
        fileDownload.href = source;
        fileDownload.download = 'document.doc';
        fileDownload.click();
        document.body.removeChild(fileDownload);
    }
    </script>

</head>

<body>

    <div class="source-html-outer">
        <div id="source-html">
            <h1>
                <center>Hypertext Markup Language</center>
            </h1>
            <h2>Overview</h2>
            <p>
                HTML adalah singkatan dari Hypertext Markup Language, dan itu adalah bahasa yang paling banyak digunakan
                untuk menulis Halaman Web.

                <ul>
                    <li><b>Hypertext</b> mengacu pada cara di mana halaman Web <i>(dokumen HTML)</i> dihubungkan
                        bersama.
                        Dengan demikian, tautan yang tersedia di laman web disebut Hypertext.</li>

                    <li>Seperti namanya, HTML adalah Bahasa Markup yang berarti Anda menggunakan HTML untuk sekadar
                        "menandai" dokumen teks dengan tag yang memberi tahu peramban Web cara menyusunnya agar
                        ditampilkan.
                    </li>
                </ul>

                Awalnya, HTML dikembangkan dengan maksud mendefinisikan struktur dokumen seperti pos, paragraf, daftar,
                dan
                sebagainya untuk memfasilitasi pertukaran informasi ilmiah antar peneliti.

                Sekarang, HTML banyak digunakan untuk memformat halaman web dengan bantuan berbagai tag yang tersedia
                dalam
                bahasa HTML.

            </p>
        </div>
        <div class="content-footer">
            <button id="btn-export" onclick="exportHTML();">Ekspor Ke word</button>
        </div>
    </div>

    Awalnya, HTML dikembangkan dengan maksud mendefinisikan struktur dokumen seperti pos, paragraf, daftar, dan
    sebagainya
    untuk memfasilitasi pertukaran informasi ilmiah antar peneliti.

    Sekarang, HTML banyak digunakan untuk memformat halaman web dengan bantuan berbagai tag yang tersedia dalam bahasa
    HTML.

    </p>
    </div>
    <div class="content-footer">
        <button id="btn-export" onclick="exportHTML();">Ekspor Ke word</button>
    </div>
    </div>

</body>

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

</html>