function save()
{
    var title= document.getElementById("title").value;
    var supplier= document.getElementById("supplier").value;
    var quantity= document.getElementById("quantity").value;
    var price= document.getElementById("price").value;
    var file = document.getElementById("picture");

    var p1=document.getElementById("fruits");
    var p2=document.getElementById("dairy");;
    var p3=document.getElementById("meats");;
    var p4=document.getElementById("bread");;
    var p5=document.getElementById("drinks");;
    var p6=document.getElementById("pasta");;

    if(title==""){
        window.alert("Please enter title!")
    } else if(supplier==""){
        window.alert("Please enter Supplier!")
    } else if(quantity==""){
        window.alert("Please enter Quantity!")
    } else if(price==""){
        window.alert("Please enter Price!")
    } else if(description==""){
        window.alert("Please enter Description!")
    } else if(file.files.length==0){
        window.alert("Please select image.")
    } else if(!(p1.checked) && !(p2.checked) && !(p3.checked) && !(p4.checked) && !(p5.checked) && !(p6.checked)){
        window.alert("Choose a category!")
    } else if(title.search(/[a-zA-z]+/)) {
        window.alert("Title mismatch!")
    }else if(supplier.search(/[a-zA-z]+/)) {
        window.alert("Supplier mismatch!")
    }else if(quantity.search(/\d+/)) {
        window.alert("Quantity mismatch!")
    }else if(price.search(/\d+\.\d\d/)) {
        window.alert("Price mismatch!")
    } else{
        window.alert("The item has been added to the Product List!");
        window.location.replace("BackstoreProductList.html");
    }
}

function resetForm()
{
    var answer= confirm("Are you sure? Your information will not be saved.");
    if(answer){
        document.getElementById("myform").reset();
    } 
}