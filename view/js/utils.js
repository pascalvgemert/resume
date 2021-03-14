function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    var allText = ''
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                allText = rawFile.responseText;
                console.log(allText);
                
            }
        }
    }
    rawFile.send(null);
    // return rawFile
    return allText;
}