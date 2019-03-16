/*function read(file)
{
	if (!/\.(jpe?g|png|gif)$/i.test(file.name)) 
    	return alert(file.name + " is not an image");

    var reader = new FileReader();
    reader.addEventListener("load", function() {
    var image = document.getElementById('img');
    image.height = 100;
    image.title  = file.name;
    image.src    = this.result;
    });
              
    reader.readAsDataURL(file);
  
}*/
function encodeImageFileAsURL() 
{
    var filesSelected = document.getElementById("file_input").files;
	if (filesSelected.length > 0) 
	{
		var fileToLoad = filesSelected[0];
		var fileReader = new FileReader();

		fileReader.onload = function(fileLoadedEvent) {
		var srcData = fileLoadedEvent.target.result; // <--- data: base64

		var newImage = document.getElementById('img');
		newImage.src = srcData;
		newImage.height = 400;

		base64 = newImage.outerHTML;
		console.log("Converted Base64 version is: "+base64);
		}
		fileReader.readAsDataURL(fileToLoad);
	}
}