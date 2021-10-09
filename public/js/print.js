function PrintElem(elem) {
    Popup($(elem).html());
}

function Popup(data) {
    var mywindow = window.open('', 'printDiv', 'height=500,width=700');
    // mywindow.document.write('<html><head><title>Print Receipt</title>');
    mywindow.document.write('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
    mywindow.document.write('<link href="' + configpath['globalPath'] + 'public/template_code/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>');
    mywindow.document.write('</head><body><table>');
    
    mywindow.document.write(data);
    mywindow.document.write('</table></body></html>');

    setTimeout(function () {
        mywindow.print();
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10
        mywindow.close();
    }, 1000);
    return true;
}

