<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.11.174/build/pdf.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/pdfjs-dist@3.11.174/web/pdf_viewer.min.css" rel="stylesheet">
</head>

<body>
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-end">
        <div>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="text-center" id="pdf-container"></div>
</body>
<script>
    const pdfUrl = '{{ asset('cv/' . $user->cv) }}';

    const renderPage = (pageNum, pdfDoc) => {
        pdfDoc.getPage(pageNum).then(page => {
            const pdfContainer = document.getElementById('pdf-container');
            const canvas = document.createElement('canvas');
            pdfContainer.appendChild(canvas);

            const context = canvas.getContext('2d');
            const viewport = page.getViewport({ scale: 1.8 });
            canvas.width = viewport.width;
            canvas.height = viewport.height;

            page.render({
                canvasContext: context,
                viewport: viewport
            });
        });
    };

    pdfjsLib.getDocument(pdfUrl).promise.then(pdfDoc => {
        console.log("Jumlah halaman: " + pdfDoc.numPages);

        for (let pageNum = 1; pageNum <= pdfDoc.numPages; pageNum++) {
            renderPage(pageNum, pdfDoc);
        }
    });
</script>
@endsection
</html>
