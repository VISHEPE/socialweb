<?php
include("header.php")
?>



<body>
    <h1>KNOW YOUR CONSTITUTION</h1>

    
    <div id="search-bar">
        <span class="search-icon">🔍</span>
        <input type="text" id="search-input" class="search-input" placeholder="Search PDF..." />
        <button id="search-button">Search</button>
    </div>

    
    <div class="card">
        <canvas id="pdf-viewer"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <script>
        const url = 'consti.pdf';  // Replace with the actual path to your PDF file
        const pdfViewer = document.getElementById('pdf-viewer');
        let pdfDoc = null;
        let canvasContext = pdfViewer.getContext('2d');
        const scale = 1.5;  
        let currentSearchTerm = '';

       
        pdfjsLib.getDocument(url).promise.then(function(pdf) {
            pdfDoc = pdf;
            renderPage(1);  
        });

        // Render a specific page
        function renderPage(pageNumber) {
            pdfDoc.getPage(pageNumber).then(function(page) {
                const viewport = page.getViewport({ scale: scale });
                pdfViewer.width = viewport.width;
                pdfViewer.height = viewport.height;

                
                canvasContext.clearRect(0, 0, pdfViewer.width, pdfViewer.height);

                const renderContext = {
                    canvasContext: canvasContext,
                    viewport: viewport
                };

                
                page.render(renderContext).promise.then(function() {
                    
                    if (currentSearchTerm) {
                        highlightSearchTermOnPage(page, currentSearchTerm);
                    }
                });
            });
        }

        // Search functionality - iterate through all pages
        document.getElementById('search-button').addEventListener('click', function() {
            currentSearchTerm = document.getElementById('search-input').value.toLowerCase();
            if (currentSearchTerm) {
                searchAndHighlight(currentSearchTerm);
            }
        });

        
        function searchAndHighlight(searchTerm) {
            for (let pageNumber = 1; pageNumber <= pdfDoc.numPages; pageNumber++) {
                pdfDoc.getPage(pageNumber).then(function(page) {
                    page.getTextContent().then(function(textContent) {
                        const textItems = textContent.items;
                        const pageText = textItems.map(item => item.str).join(' ').toLowerCase();

                        
                        if (pageText.includes(searchTerm)) {
                            renderPage(pageNumber);
                        }
                    });
                });
            }
        }

        // Highlight the search term on the given page
        function highlightSearchTermOnPage(page, searchTerm) {
            page.getTextContent().then(function(textContent) {
                const textItems = textContent.items;

                
                textItems.forEach(function(item) {
                    const lowerCaseStr = item.str.toLowerCase();
                    const startIndex = lowerCaseStr.indexOf(searchTerm);

                    if (startIndex !== -1) {
                        const viewport = page.getViewport({ scale: scale });
                        const transform = pdfjsLib.Util.transform(
                            pdfjsLib.Util.transform(viewport.transform, item.transform),
                            [1, 0, 0, -1, 0, 0]
                        );

                        // Calculate text position
                        const x = transform[4];
                        const y = transform[5] - 10;  

                       
                        canvasContext.font = `${item.height}px sans-serif`;
                        const width = canvasContext.measureText(item.str).width;
                        const height = item.height;

                       
                        canvasContext.fillStyle = 'yellow';
                        canvasContext.fillRect(x, y, width, height);

                        
                        canvasContext.fillStyle = 'black';
                        canvasContext.fillText(item.str, x, y + height);
                    }
                });
            });
        }
    </script>
    <?php
include("footer.php")
?>
</body>
</html>
