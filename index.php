<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css" integrity="sha512-Jk4AqjWsdSzSWCSuQTfYRIF84Rq/eV0G2+tu07byYwHcbTGfdmLrHjUSwvzp5HvbiqK4ibmNwdcG49Y5RGYPTg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Your Docs</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="display-5 text-center mb-5 title"><a class="text-reset text-decoration-none" href="index.php">Your Documentation</a></h1>
        <div class="row mb-3">
            <div class="col-md-8 m-auto d-flex justify-content-center">
                <!-- TODO: Buat Halaman Tiap Dokumentasi -->
                <a class="btn fw-bold mx-2 bg-html" href="#" role="button">HTML</a>
                <a class="btn fw-bold mx-2 bg-css" href="#" role="button">CSS</a>
                <a class="btn fw-bold mx-2 bg-javascript" href="#" role="button">Javascript</a>
                <a class="btn fw-bold mx-2 bg-php" href="#" role="button">PHP</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-lg-6 m-auto">
                <!-- TODO: Buat Live Search -->
                <form action="" method="get">
                    <input class="form-control" aria-label="Search" type="search" name="keyword" placeholder="Search Documentation" autocomplete="off" autofocus>
                </form>
            </div>
        </div>
    </div>

    <main class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-html text-center"><a data-bs-toggle="modal" data-bs-target="#HTML-Basic">HTML Basic</a></h4>
                        <p class="card-text">HTML adalah bahasa markup standar untuk membuat halaman Web.</p>
                        <div class="modal fade" id="HTML-Basic" tabindex="-1" aria-labelledby="HTML-BasicLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="HTML-BasicLabel">HTML Basic</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php require "assets/html-docs/html-basic.html"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-html text-center"><a data-bs-toggle="modal" data-bs-target="#HTML-Elements">HTML Elements</a></h4>
                        <p class="card-text">Elemen HTML didefinisikan dengan tag awal, beberapa konten, dan tag akhir.</p>
                        <div class="modal fade" id="HTML-Elements" tabindex="-1" aria-labelledby="HTML-ElementsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="HTML-ElementsLabel">HTML Elements</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php require "assets/html-docs/html-elements.html"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-html text-center"><a data-bs-toggle="modal" data-bs-target="#HTML-Headings">HTML Headings</a></h4>
                        <p class="card-text">Heading adalah judul atau subjudul yang ingin Anda tampilkan di halaman web.</p>
                        <div class="modal fade" id="HTML-Headings" tabindex="-1" aria-labelledby="HTML-HeadingsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="HTML-HeadingsLabel">HTML Headings</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php require "assets/html-docs/html-headings.html"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title text-html text-center"><a data-bs-toggle="modal" data-bs-target="#HTML-Paragraphs">HTML Paragraphs</a></h4>
                        <p class="card-text">Sebuah paragraf selalu dimulai pada baris baru, dan biasanya berupa blok teks.</p>
                        <div class="modal fade" id="HTML-Paragraphs" tabindex="-1" aria-labelledby="HTML-ParagraphsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="HTML-ParagraphsLabel">HTML Paragraphs</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php require "assets/html-docs/html-paragraphs.html"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>