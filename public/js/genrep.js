function genPDF(){
    html2canvas(document.getElementById("forpdf")).then(
            function (canvas){
            var img=canvas.toDataURL("image/png");
            var doc =new jsPDF('p', 'mm', 'a4');
            doc.text("Blood Link Report!", 90, 5);
            doc.addImage(img,'JPEG', 0, 15, 0, 0);
            doc.save('test.pdf');

});
}